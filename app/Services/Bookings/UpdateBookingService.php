<?php

namespace App\Services\Bookings;

class UpdateBookingService
{
    public function update(array $data)
    {
        $booking = $data['booking'];
        $booking->update($data['validatedData']);

        return response()->json($booking, 200);
    }
}
