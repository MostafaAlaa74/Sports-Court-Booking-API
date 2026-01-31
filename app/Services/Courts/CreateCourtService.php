<?php

namespace App\Services\Courts;

use App\Http\Resources\CourtResource;
use Illuminate\Support\Facades\DB;

class CreateCourtService
{
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {

            $venue = $data['user']->venues()->find($data['ValidatedData']['venue_id']);
            if (!$venue) {
                throw new \Exception("Venue not found or you don't have permission to add court to this venue.", 403);
            } else {
                $court = $venue->courts()->create([
                    'name' => $data['ValidatedData']['name'],
                    'type' => $data['ValidatedData']['type'],
                    'hourly_rate' => $data['ValidatedData']['hourly_rate'],
                    'venue_id' => $data['ValidatedData']['venue_id']
                ]);
                return new CourtResource($court->load('venue'));
            }
        });
    }
}
