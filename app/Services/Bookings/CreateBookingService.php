<?php

namespace App\Services\Bookings;

use App\Http\Resources\BookingResource;
use App\Models\Booking;
use App\Models\Court;
use Illuminate\Support\Facades\DB;

class CreateBookingService
{
    public function store(array $data)
    {
        return DB::transaction(function () use ($data) {
            //? How could we prevent Race Conditions here?
            //* We can use database locks or unique constraints to prevent race conditions.
            $court = Court::query()->lockForUpdate()->findOrFail($data['validatedData']['court_id']);
            
            if (Booking::query()->overlapping(
                $data['validatedData']['start_time'],
                $data['validatedData']['end_time'],
                $data['validatedData']['date']
            )->where('court_id', $court->id)->exists()) {
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

            return $booking;
        });
    }
}
