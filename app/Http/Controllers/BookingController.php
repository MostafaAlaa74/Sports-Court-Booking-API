<?php

namespace App\Http\Controllers;

use App\Enums\BookingStatus;
use App\Events\bookingConfirmedEvent;
use App\Http\Resources\BookingResource;
use App\Jobs\BookConfirmedJob;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Services\Bookings\CreateBookingService;
use App\Services\Bookings\UpdateBookingService;
use App\Services\Payment\BookingPaymentService;
use App\Services\Payment\PaymentConfirmationService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Stripe\StripeClient;

class BookingController extends Controller
{
    public function __construct(
        private CreateBookingService $createBookingService,
        private UpdateBookingService $updateBookingService,
        private BookingPaymentService $bookingPaymentService
    ) {}

    public function index(Request $request)
    {

        if (Auth::user()) {
            $bookings = Booking::query()
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
            return response()->json($bookings, 200);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }

    public function store(CreateBookingRequest $request)
    {
        Gate::authorize('create', Booking::class);
        $booking = $this->createBookingService->store(['validatedData' => $request->validated(), 'user_id' => Auth::id()]);

        return response()->json(new BookingResource($booking), 201);
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
        $booking = $this->updateBookingService->update($booking, $request->validated());
        return response()->json(new BookingResource($booking->load('court', 'user')), 200);
    }

    public function destroy(Booking $booking)
    {
        Gate::authorize('delete', $booking);
        $booking->delete();
        return response()->json(null, 204);
    }

    public function confirm(Booking $booking)
    {
        if ($booking->status !== BookingStatus::PENDING->value) {
            return response()->json([
                'message' => 'Only pending bookings can be confirmed.'
            ], 422);
        }
        Gate::authorize('confirm', $booking);

        $checkout =  $this->bookingPaymentService->confirmBooking($booking);

        return response()->json(['checkout_url' => $checkout], 200);
    }

    public function cancel(Booking $booking)
    {
        if ($booking->status === BookingStatus::CANCELLED->value) {
            return response()->json(['message' => 'Booking is already cancelled'], 422);
        }
        $bookingStart = Carbon::parse($booking->date . ' ' . $booking->start_time);
        if ($bookingStart->isPast()) {
            return response()->json(['message' => 'Cannot cancel a booking that has already started or passed'], 403);
        }
        Gate::authorize('cancel', $booking);

        $booking->status = BookingStatus::CANCELLED->value;
        $booking->save();
        return response()->json(['message' => 'Booking cancelled successfully'], 200);
    }

    public function checkoutCompleted(Request $request)
    {
        $booking = Booking::findOrFail($request->booking);
        return view('payment.success', compact('booking'));
    }

    public function getUserBookings(Request $request)
    {
        if (Auth::user()) {
            $bookings = Booking::query()
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
            return response()->json($bookings, 200);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
}
