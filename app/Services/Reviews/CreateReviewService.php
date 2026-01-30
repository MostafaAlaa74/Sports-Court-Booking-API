<?php

namespace App\Services\Reviews;

use App\Models\Review;

class CreateReviewService
{
    public function store(array $data)
    {
        return Review::create([
            'comment' => $data['validatedData']['comment'],
            'rating' => $data['validatedData']['rating'],
            'user_id' => $data['user_id'],
            'reviewable_id' => $data['validatedData']['reviewable_id'],
            'reviewable_type' => $data['validatedData']['reviewable_type'],
        ]);
    }
}
