<?php


namespace App\Services;


use App\Models\Entity;
use App\Models\Location;
use App\Models\MiscModel;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class RecoveryService
{
    /** @var array Entity IDs to be deleted */
    protected $entityIds = [];

    /** @var array Child IDs to be deleted */
    protected $childIds = [];

    /** @var int Number of total deleted entities */
    protected $count = 0;

    /**
     * @param array $params
     * @return $count
     */
    public function recover(array $params): int
    {
        $count = 0;
        $ids = Arr::get($params, 'ids', []);
        foreach ($ids as $id) {
            if ($this->entity($id)) {
                $count++;
            }
        }

        return $count;
    }

    /**
     * Permanently delete old data
     * @return int deleted entities count
     * @throws \Exception
     */
    public function cleanup(): int
    {
        Entity::onlyTrashed()
            ->where('type', 'race')
            ->where('deleted_at', '<=', Carbon::now()->subDays(config('entities.hard_delete'))->toDateString())
            ->chunk(500, function ($entities) {
                DB::beginTransaction();
                try {
                    foreach ($entities as $entity) {
                        $this->trash($entity);
                    }
                    DB::commit();

                    dump('Trashed ' . count($entities) . ' entities.');
                } catch (\Exception $e) {
                    DB::rollBack();
                }
            });

        return $this->count;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return $this->count;
    }

    /**
     * Restore an entity and it's child
     * @param int $id
     * @return bool if the restore worked
     */
    protected function entity(int $id): bool
    {
        $entity = Entity::onlyTrashed()->find($id);
        if (!$entity) {
            return false;
        }

        $child = $entity->child()->onlyTrashed()->first();
        if (!$child) {
            return false;
        }

        $entity->restore();

        // Refresh the child first to not re-trigger the entity creation on save
        $child->savingObserver = false;
        $child->refresh();
        $child->restore();
        return true;
    }

    /**
     * @param Entity $entity
     * @throws \Exception
     */
    public function trash(Entity $entity)
    {
        //dump('Entity #' . $entity->id);

        /** @var MiscModel $child */
        $child = $entity->child()->onlyTrashed()->first();
        $this->trashChild($entity, $child);

        $this->entityIds[] = $entity->id;
        $entity->forceDelete();


        $this->count++;
    }

    /**
     * @param MiscModel|null $child
     * @throws \Exception
     */
    protected function trashChild(Entity $entity, MiscModel $child = null)
    {
        if (empty($child)) {
            return false;
        }

        // Set the campaign scope to avoid hitting entities of other campaigns (this can happen with
        // nested trees)
        \App\Facades\CampaignLocalization::setConsoleCampaign($entity->campaign_id);

        // Update the parent_id / tree before
        if (method_exists($child, 'getParentIdName')) {
            $parentField = $child->getParentIdName();

            // Detach children of this entity. Usually this is already done in the model observer, because
            // if the parent is deleted in a node, the children aren't available.
            /** @var MiscModel $subChild */
            foreach ($child->children as $subChild) {
                // In console mode, we don't have the campaign_id restriction. We've had cases where this script
                // found entities form other campaigns.
                if ($subChild->campaign_id != $child->campaign_id) {
                    throw new \Exception(
                        'Found a subchild that doesn\'t share the campaign id. '
                        . $subChild->id . ' and ' . $child->id
                    );
                }
                $subChild->$parentField = null;
                $subChild->timestamps = false;
                $child->savingObserver = false;
                $subChild->save();
                dump('#' . $entity->id . ' child ' . $child->getEntityType() . ' #' . $child->id . ' untreed');
            }

            // Clean up the parent and tree to avoid the nested plugin to delete every child
            $child->$parentField = null;
            $child->_lft = null;
            $child->_rgt = null;

            $child->timestamps = false;
            $child->savingObserver = false;
            $child->save();
            $child->refresh();
        }


        $this->childIds[$child->getEntityType()][] = $child->id;

        // Cleanup any images attached to the child.
        ImageService::cleanup($child);

        if ($child instanceof Location and !empty($child->map)) {
            ImageService::cleanup($child, 'map');
        }

        $child->forceDelete();


        // Unset the campaign id limitation again
        \App\Facades\CampaignLocalization::setConsoleCampaign(0);

        return true;
    }
}
