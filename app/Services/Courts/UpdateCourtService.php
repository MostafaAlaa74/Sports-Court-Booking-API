<?php

namespace App\Services\Courts;

use App\Http\Resources\CourtResource;
use Illuminate\Support\Facades\DB;

class UpdateCourtService
{

    public function update(array $data)
    {
        return DB::transaction(function () use ($data) {
            $court = $data['court'];
            $validatedData = $data['validatedData'];

            $court->update($validatedData);

            return  new CourtResource($court->load('venue'));
        });

    }

}
