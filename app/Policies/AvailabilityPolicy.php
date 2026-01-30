<?php

namespace App\Policies;

use App\Models\Availability;
use App\Models\User;

class AvailabilityPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Availability $availability): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role === 'field_owner' || $user->role === 'admin';
    }

    public function update(User $user, Availability $availability): bool
    {
        // ownership determined by the morph relation; compare owner where appropriate
        return $user->role === 'admin' || $user->id === ($availability->availableable->owner_id ?? null);
    }

    public function delete(User $user, Availability $availability): bool
    {
        return $user->role === 'admin' || $user->id === ($availability->availableable->owner_id ?? null);
    }
}
