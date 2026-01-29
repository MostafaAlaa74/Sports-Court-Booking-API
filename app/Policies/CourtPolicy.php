<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Court;
use App\Models\User;

class CourtPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Court $court): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role === 'field_owner';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Court $court): bool
    {
        return $user->id === $court->venue->owner_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Court $court): bool
    {
        return $user->id === $court->venue->owner_id || $user->role === 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Court $court): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Court $court): bool
    {
        return false;
    }
}
