<?php

namespace App\Services\Venues;

use App\Http\Resources\VenueResource;
use App\Models\Venue;
use Illuminate\Support\Facades\DB;

class CreateVenueService
{

    public function store(array $data)
    {
        return DB::transaction(function () use ($data) {
            $venue =  Venue::create([
                'name' => $data['validatedData']['name'],
                'governorate' => $data['validatedData']['governorate'],
                'owner_id' => $data['owner_id'],
            ]);

            return new VenueResource($venue);
        });

    }

}
