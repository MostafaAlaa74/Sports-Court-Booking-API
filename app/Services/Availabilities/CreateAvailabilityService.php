<?php

namespace App\Services\Availabilities;

use App\Models\Availability;

class CreateAvailabilityService
{
    public function store(array $data)
    {
        return Availability::create([
            'day' => $data['validatedData']['day'],
            'start_time' => $data['validatedData']['start_time'],
            'end_time' => $data['validatedData']['end_time'],
            'is_closed' => $data['validatedData']['is_closed'] ?? false,
            'available_id' => $data['validatedData']['available_id'],
            'available_type' => $data['validatedData']['available_type'],
        ]);
    }
}
