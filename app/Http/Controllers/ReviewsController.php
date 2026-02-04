<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Models\Review;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Services\Reviews\CreateReviewService;
use App\Services\Reviews\UpdateReviewService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ReviewsController extends Controller
{
    public function __construct(private CreateReviewService $createReviewService, private UpdateReviewService $updateReviewService) {}

    public function index()
    {
        $reviews = Review::query()
            ->with('user')
            ->when(request('rating'), function ($query, $rating) {
                $query->rated($rating);
            })
            ->get();
//        dd($reviews);
        return response()->json(ReviewResource::collection($reviews), 200);
    }

    public function store(CreateReviewRequest $request)
    {
        Gate::authorize('create', Review::class);
        $review = $this->createReviewService->store(['validatedData' => $request->validated(), 'user_id' => Auth::id()]);
        return response()->json($review, 201);
    }

    public function show(Review $review)
    {
        Gate::authorize('view', $review);
        return response()->json($review->load('user'), 200);
    }

    public function update(UpdateReviewRequest $request, Review $review)
    {
        Gate::authorize('update', $review);
        return $this->updateReviewService->update(['validatedData' => $request->validated(), 'review' => $review]);
    }

    public function destroy(Review $review)
    {
        Gate::authorize('delete', $review);
        $review->delete();
        return response()->json(null, 204);
    }
}
