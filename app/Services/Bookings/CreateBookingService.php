<?php

namespace App\Services\Bookings;

use App\Http\Resources\BookingResource;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class CreateBookingService
{
    public function store(array $data)
    {
        return DB::transaction(function () use ($data) {
            if (Booking::query()->overlapping(
                $data['validatedData']['start_time'],
                $data['validatedData']['end_time']
            )->where('court_id', $data['validatedData']['court_id'])->exists()) {
                throw new \Exception('The selected time slot is already booked.');
            };
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
