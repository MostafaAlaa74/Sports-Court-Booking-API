<?php

namespace App\Services\Availabilities;

use App\Http\Resources\AvailabilitiesResource;
use Illuminate\Support\Facades\DB;

class UpdateAvailabilityService
{
    public function update(array $data)
    {
        return DB::transaction(function () use ($data) {
            $availability = $data['availability'];
            $availability->update($data['validatedData']);

            return new AvailabilitiesResource($availability);
        });

    }
}
