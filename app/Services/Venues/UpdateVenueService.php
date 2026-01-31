<?php

namespace App\Services\Venues;

use App\Http\Resources\VenueResource;
use App\Models\Venue;
use Illuminate\Support\Facades\DB;

class UpdateVenueService{

    public function update(array $data){
        return DB::transaction(function () use ($data) {
            $venue = $data['venue']->update($data['validatedData']);

            return new VenueResource($venue);
        });

    }

}
