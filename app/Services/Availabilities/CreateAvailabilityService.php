<?php

namespace App\Services\Availabilities;

use App\Http\Resources\AvailabilitiesResource;
use App\Models\Availability;
use Illuminate\Support\Facades\DB;

class CreateAvailabilityService
{
    public function store(array $data)
    {
        return DB::transaction(function () use ($data) {
            $availability = Availability::create([
                'day' => $data['validatedData']['day'],
                'start_time' => $data['validatedData']['start_time'],
                'end_time' => $data['validatedData']['end_time'],
                'is_closed' => $data['validatedData']['is_closed'] ?? false,
                'availableable_id' => $data['validatedData']['availableable_id'],
                'availableable_type' => $data['validatedData']['availableable_type'],
            ]);
            return new AvailabilitiesResource($availability);
        });

    }
}
