<?php

namespace App\Policies;

use App\Enums\UserRoles;
use App\Models\Review;
use App\Models\User;

class ReviewPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Review $review): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->id !== null;
    }

    public function update(User $user, Review $review): bool
    {
        return $user->id === $review->user_id || $user->role === UserRoles::ADMIN->value;
    }

    public function delete(User $user, Review $review): bool
    {
        return $user->id === $review->user_id || $user->role === UserRoles::ADMIN->value;
    }
}
