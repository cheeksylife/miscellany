<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait Filterable
{
    /**
     * Get all available filterable columns of the entity. Merge the custom
     * with the default ones (if not overwritten)
     * @return array
     */
    public function getFilterableColumns(): array
    {
        $custom = [];
        if (isset($this->filterableColumns)) {
            $custom = $this->filterableColumns;
        }

        $default = [
            'name',
            'type',
            'is_private',
            'tag_id',
            'tags',
            'has_image',
            'has_entity_notes',
            'has_entity_files',
            'created_by',
            'updated_by',
        ];
        if (isset($this->defaultFilterableColumns)) {
            $default = $this->defaultFilterableColumns;
        }
        return array_unique(array_merge($custom, $default));
    }

    /**
     * Explicit fields for filtering.
     * Ex. ['sex']
     * @var array
     */
    protected $explicitFilters = [];

    /**
     * @var bool If the entity table was already joined or not
     */
    protected $joinedEntity = false;

    /**
     * @param $query
     * @param $params
     * @return mixed
     */
    public function scopeFilter(Builder $query, $params)
    {
        $fields = $this->getFilterableColumns();
        if (!is_array($params) or empty($params) or empty($fields)) {
            return $query;
        }

        foreach ($params as $key => $value) {
            if (isset($value) && in_array($key, $fields)) {
                $filterOption = !empty($params[$key . '_option']) ? $params[$key . '_option'] : null;
                list ($operator, $filterValue) = $this->extractSearchOperator($value, $key);

                // Foreign key search
                $segments = explode('-', $key);
                if (count($segments) > 1) {
                    $relationName = $segments[0];

                    $relation = $this->{$relationName}();
                    $foreignName = $relation->getQuery()->getQuery()->from;

                    return $query
                        ->select($this->getTable() . '.*')
                        ->with($relationName)
                        ->leftJoin($foreignName . ' as f', 'f.id', $this->getTable() . '.' . $relation->getForeignKeyName())
                        ->where(
                            str_replace($relationName, 'f', str_replace('-', '.', $key)),
                            $operator,
                            ($operator == '=' ? $filterValue : "%$filterValue%")
                        );
                } else {
                    // Explicit filters (numbers typically, foreign ids)
                    if (in_array($key, $this->explicitFilters)) {
                        $query->where($this->getTable() . '.' . $key, $operator, "$filterValue");
                    } elseif ($key == 'tags') {
                        // "none" filter tags is handled later
                        if (!empty($filterOption) && $filterOption === 'none') {
                            continue;
                        }
                        $query = $this->joinEntity($query);

                        // Make sure we always have an array
                        if (!is_array($value)) {
                            $value = [$value];
                        }

                        if (!empty($filterOption) && $filterOption == 'exclude') {
                            $tagIds = [];
                            foreach ($value as $v) {
                                $tagIds[] = (int) $v;
                            }
                            //$query->leftJoin('entity_tags as et_tags', "et_tags.entity_id", 'e.id')
                             $query->whereRaw('(select count(*) from entity_tags as et where et.entity_id = e.id and et.tag_id in (' . implode(', ', $tagIds) . ')) = 0');

                            continue;
                        }

                        foreach ($value as $v) {
                            $v = (int) $v;
                            $query
                                ->leftJoin('entity_tags as et' . $v, "et$v.entity_id", 'e.id')
                                ->where("et$v.tag_id", $v)
                            ;
                        }
                    } elseif ($key == 'tag_id') {
                        $query = $this->joinEntity($query);
                        $query
                            ->leftJoin('entity_tags as et', 'et.entity_id', 'e.id')
                            ->where('et.tag_id', $value);
                    } elseif ($key == 'organisation_member') {
                        if (!empty($filterOption) && $filterOption == 'none')  {$query
                            ->select($this->getTable() . '.*')
                            ->leftJoin('organisation_member as om', function ($join) {
                                $join->on('om.character_id', '=', $this->getTable() . '.id');
                            })
                            ->where('om.organisation_id', null);
                            continue;
                        }
                        $query
                            ->select($this->getTable() . '.*')
                            ->leftJoin('organisation_member as om', function ($join) {
                                $join->on('om.character_id', '=', $this->getTable() . '.id');
                            })
                            ->where('om.organisation_id', $value);
                    } elseif ($key == 'has_image') {
                        if ($value) {
                            $query->whereNotNull($this->getTable() . '.image');
                        } else {
                            $query->whereNull($this->getTable() . '.image');
                        }
                    } elseif ($key == 'has_entity_notes') {

                        $query = $this->joinEntity($query);
                        $query->leftJoin('entity_notes', 'entity_notes.entity_id', 'e.id');

                        if ($value) {
                            $query->whereNotNull('entity_notes.id');
                        } else {
                            $query->whereNull('entity_notes.id');
                        }
                    } elseif ($key == 'has_entity_files') {

                        $query = $this->joinEntity($query);
                        $query->leftJoin('entity_files', 'entity_files.entity_id', 'e.id');

                        if ($value) {
                            $query->whereNotNull('entity_files.id');
                        } else {
                            $query->whereNull('entity_files.id');
                        }
                    } elseif (in_array($key, ['created_by', 'updated_by'])) {
                        $query = $this->joinEntity($query);
                        $query->where('e.' . $key, (int) $value);
                    } elseif ($operator == 'IS NULL') {
                        $query->where(function ($sub) use ($key) {
                            $sub->whereNull($this->getTable() . '.' . $key)
                                ->orWhere($this->getTable() . '.' . $key, '=', '');
                        });
                    } else {
                        // If we have an exclude option filter, change the operator
                        if (!empty($filterOption) && $filterOption == 'exclude') {
                            $query->where(function ($subquery) use ($key, $filterValue) {
                                return $subquery->where($this->getTable() . '.' . $key,
                                    '!=',
                                    $filterValue
                                )->orWhereNull($this->getTable() . '.' . $key);
                            });

                            continue;
                        }
                        $searchTerms = explode(';', $filterValue);
                        $firstTerm = true;
                        foreach ($searchTerms as $searchTerm) {
                            if (empty($searchTerm) && $searchTerm != '0') {
                                continue;
                            }
                            // If it isn't the first term, we need to re-extract the search operators
                            if (!$firstTerm) {
                                list ($operator, $searchTerm) = $this->extractSearchOperator($searchTerm, $key);
                            }
                            $query->where(
                                $this->getTable() . '.' . $key,
                                $operator,
                                ($operator == '=' ? $filterValue : "%$searchTerm%")
                            );
                            $firstTerm = false;
                        }
                    }
                }
            } elseif ($key == 'tags_option' && $value == 'none') {
                $query = $this->joinEntity($query);
                $query
                    ->leftJoin('entity_tags as no_tags', 'no_tags.entity_id', 'e.id')
                    ->whereNull('no_tags.tag_id');
            } elseif (Str::endsWith($key, '_option') && $value == 'none') {
                $key = Str::beforeLast($key, '_option');
                // Validate the key is a filter
                if (in_array($key, $fields)) {
                    // Left join shenanigans
                    if ($key == 'organisation_member') {
                        continue;
                    }
                    $query->whereNull($this->getTable() . '.' . $key);
                }
            }
        }
        return $query;
    }

    /**
     * @param string|array $value (array for tags)
     * @param string $key
     * @return array
     */
    protected function extractSearchOperator($value, string $key): array
    {
        $operator = 'like';
        $filterValue = $value;
        if ($key !== 'tags') {
            if ($value == '!!') {
                $operator = 'IS NULL';
                $filterValue = null;
            } elseif (Str::startsWith($value, '!')) {
                $operator = 'not like';
                $filterValue = ltrim($value, '!');
            } elseif (Str::endsWith($value, '!')) {
                $operator = '=';
                $filterValue = rtrim($value, '!');
            } elseif(Str::endsWith($key, '_id')) {
                $operator = '=';
            }
        }

        return [$operator, $filterValue];
    }

    /**
     * @param $query
     * @return mixed
     */
    protected function joinEntity($query)
    {
        if ($this->joinedEntity) {
            return $query;
        }

        $this->joinedEntity = true;

        return $query
            ->distinct()
            ->select($this->getTable() . '.*')
            ->leftJoin('entities as e', function ($join) {
                $join->on('e.entity_id', '=', $this->getTable() . '.id');
                $join->where('e.type', '=', $this->getEntityType())
                    ->whereRaw('e.campaign_id = ' . $this->getTable() . '.campaign_id');
            })
        ;
    }
}
