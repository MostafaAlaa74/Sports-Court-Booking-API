<?php

namespace App\Services\Bookings;

use App\Http\Resources\BookingResource;
use App\Models\Booking;

class CreateBookingService
{
    public function store(array $data)
    {
        return DB::transaction(function () use ($data) {
            $booking =  Booking::create([
                'user_id' => $data['user_id'],
                'court_id' => $data['validatedData']['court_id'],
                'date' => $data['validatedData']['date'],
                'start_time' => $data['validatedData']['start_time'],
                'end_time' => $data['validatedData']['end_time'],
                'status' => $data['validatedData']['status'] ?? 'pending'
            ]);

            return new BookingResource($booking);
        });

    }
}
