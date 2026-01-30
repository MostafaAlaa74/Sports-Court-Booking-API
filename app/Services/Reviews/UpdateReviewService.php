<?php

namespace App\Services\Reviews;

class UpdateReviewService
{
    public function update(array $data)
    {
        $review = $data['review'];
        $review->update($data['validatedData']);

        return response()->json($review, 200);
    }
}
