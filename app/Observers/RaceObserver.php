<?php

namespace App\Observers;

use App\Models\MiscModel;
use App\Models\Race;

class RaceObserver extends MiscObserver
{
    /**
     * @param Race $race
     */
    public function deleting(MiscModel $race)
    {
        /**
         * We need to do this ourselves and not let mysql to it (set null), because the plugin wants to delete
         * all descendants when deleting the parent, which is stupid.
         * @var Race $sub
         */
        foreach ($race->races as $sub) {
            $sub->race_id = null;
            $sub->save();
        }

        $this->cleanupTree($race, 'race_id');
    }
}
