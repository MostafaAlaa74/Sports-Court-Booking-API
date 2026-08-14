<?php

namespace App\Policies;

use App\Enums\UserRoles;
use App\Models\Booking;
use App\Models\User;

class BookingPolicy
{

    public function view(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === UserRoles::ADMIN->value;
    }

    public function create(User $user): bool
    {
        return $user->role === 'player' || $user->role === UserRoles::ADMIN->value;
    }

    public function update(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === UserRoles::ADMIN->value;
    }

    public function delete(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === UserRoles::ADMIN->value;
    }

    public function confirm(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === UserRoles::ADMIN->value || $booking->court->venue->owner_id === $user->id;
    }

    public function cancel(User $user, Booking $booking): bool
    {
        return $user->id === $booking->user_id || $user->role === UserRoles::ADMIN->value || $booking->court->venue->owner_id === $user->id;
    }
}
