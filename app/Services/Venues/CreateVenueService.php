<?php

namespace App\Services\Venues;

use App\Models\Venue;

class CreateVenueService
{

    public function store(array $data)
    {
        return Venue::create([
            'name' => $data['validatedData']['name'],
            'governorate' => $data['validatedData']['governorate'],
            'owner_id' => $data['owner_id'],
        ]);
    }

}
