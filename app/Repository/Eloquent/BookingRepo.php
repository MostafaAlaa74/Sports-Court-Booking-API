<?php

namespace App\Repository\Eloquent;

use App\Models\Booking;
use App\Repository\Interfaces\BookingInterface;
use Illuminate\Support\Facades\Auth;

class BookingRepo implements BookingInterface
{
    public function getBookings($request)
    {
        return Booking::query()
                ->select([
                    'id',
                    'user_id',
                    'court_id',
                    'date',
                    'start_time',
                    'end_time',
                    'status'
                ])
                ->forUser(Auth::user())
                ->with([
                    'user:id,name,email',
                    'court:id,name,type,venue_id,hourly_rate',
                    'court.venue:id,name'
                ])
                ->when($request->filter_upcoming, fn($q) => $q->upcoming())
                ->when($request->filter_past, fn($q) => $q->past())
                ->when($request->filter_confirmed, fn($q) => $q->confirmed())
                ->latest()
                ->paginate(10);



    }
}
