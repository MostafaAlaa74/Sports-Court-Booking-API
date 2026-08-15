<?php

namespace App\Services\Bookings;

use App\Enums\BookingStatus;
use App\Exceptions\BookingConflictException;
use App\Http\Resources\BookingResource;
use App\Models\Booking;
use App\Models\Court;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UpdateBookingService
{
    public function update(Booking $booking, array $validatedData)
    {
        return DB::transaction(function () use ($booking, $validatedData) {
            $bookingStart = Carbon::parse($booking->date . ' ' . $booking->start_time);
            $courtId = $validatedData['court_id'] ?? $booking->court_id;

            if ($booking->status === BookingStatus::CANCELLED->value) {
                return response()->json(['message' => 'Booking is already cancelled'], 422);
            }

            if ($bookingStart->isPast()) {
                return response()->json(['message' => 'Cannot cancel a booking that has already started or passed'], 403);
            }

            Court::query()
                ->where('id', $courtId)
                ->lockForUpdate()
                ->firstOrFail();
            if (Booking::query()->overlapping(
                $validatedData['start_time'] ?? $booking->start_time,
                $validatedData['end_time'] ?? $booking->end_time,
                $validatedData['date'] ?? $booking->date
            )->where('court_id', $courtId)->exists()) {
                throw new BookingConflictException('The selected time slot is already booked.');
            };
            $booking->update($validatedData);

            return $booking;
        });
    }
}
