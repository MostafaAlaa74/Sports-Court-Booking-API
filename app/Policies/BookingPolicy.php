<?php

namespace App\Policies;

use App\Models\Booking;
use App\Models\User;

class BookingPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin' || $user->role === 'field_owner' || $user->role === 'player';
    }

    public function view(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === 'admin';
    }

    public function create(User $user): bool
    {
        return $user->role === 'player' || $user->role === 'admin';
    }

    public function update(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === 'admin';
    }

    public function delete(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === 'admin';
    }

    public function confirm(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === 'admin' || $user->role === 'field_owner';
    }
}
