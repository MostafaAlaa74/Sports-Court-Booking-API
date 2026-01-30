<?php

namespace App\Services\Availabilities;

class UpdateAvailabilityService
{
    public function update(array $data)
    {
        $availability = $data['availability'];
        $availability->update($data['validatedData']);

        return response()->json($availability, 200);
    }
}
