<?php

namespace App\Observers;

use App\Models\Court;
use Illuminate\Support\Facades\Cache;

class CourtObserver
{
    /**
     * Handle the Court "created" and "Updated" event.
     */
    public function created(Court $court) : void
    {
        $this->clearCache();
    }

    public function updated(Court $court) : void
    {
        $this->clearCache();
    }

    /**
     * Handle the Court "deleted" event.
     */
    public function deleted(Court $court): void
    {
        $this->clearCache();
    }



    private function clearCache() : void
    {
        Cache::tags(['courts'])->flush();
    }
}
