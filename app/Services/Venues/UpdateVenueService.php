<?php

namespace App\Services\Venues;

use App\Models\Venue;

class UpdateVenueService{

    public function update(array $data){
        $data['venue']->update($data['validatedData']);

        return response()->json( $data['venue'] , 200);
    }

}