<?php

namespace App\Services\Bookings;

use App\Http\Resources\BookingResource;
use Illuminate\Support\Facades\DB;

class UpdateBookingService
{
    public function update(array $data)
    {
        return DB::transaction(function () use ($data) {
            $booking = $data['booking'];
            $booking->update($data['validatedData']);

            return new BookingResource($booking->load('court', 'user'));
        });

    }
}
