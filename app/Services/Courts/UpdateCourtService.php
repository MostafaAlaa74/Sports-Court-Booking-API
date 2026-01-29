<?php

namespace App\Services\Courts;

class UpdateCourtService
{

    public function update(array $data)
    {
        $court = $data['court'];
        $validatedData = $data['validatedData'];

        $court->update($validatedData);

        return response()->json($court, 200);
    }

}
