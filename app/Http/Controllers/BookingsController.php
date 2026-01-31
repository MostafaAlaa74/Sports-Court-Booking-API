<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookingResource;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Services\Bookings\CreateBookingService;
use App\Services\Bookings\UpdateBookingService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BookingsController extends Controller
{
    public function __construct(private CreateBookingService $createBookingService, private UpdateBookingService $updateBookingService) {}

    public function index()
    {
        $bookings = BookingResource::collection(Booking::with(['user', 'court'])->get());
        return response()->json($bookings, 200);
    }

    public function store(CreateBookingRequest $request)
    {
        Gate::authorize('create', Booking::class);
        $booking = $this->createBookingService->store(['validatedData' => $request->validated(), 'user_id' => Auth::id()]);
        return response()->json($booking, 201);
    }

    public function show(Booking $booking)
    {
        Gate::authorize('view', $booking);
        $bookingData = new BookingResource($booking->load(['user', 'court']));
        return response()->json($bookingData, 200);
    }

    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        Gate::authorize('update', $booking);
        $booking = $this->updateBookingService->update(['validatedData' => $request->validated(), 'booking' => $booking]);
        return response()->json($booking, 200);
    }

    public function destroy(Booking $booking)
    {
        Gate::authorize('delete', $booking);
        $booking->delete();
        return response()->json(null, 204);
    }
}
