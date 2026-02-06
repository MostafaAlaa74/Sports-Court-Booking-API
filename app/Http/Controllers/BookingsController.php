<?php

namespace App\Http\Controllers;

use App\Events\bookingConfirmedEvent;
use App\Http\Resources\BookingResource;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Services\Bookings\CreateBookingService;
use App\Services\Bookings\UpdateBookingService;
use App\Services\Payment\BookingPaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Stripe\StripeClient;

class BookingsController extends Controller
{
    public $createBookingService;
    public $updateBookingService;
    public $bookingPaymentService;
    public function __construct() {
        $this->createBookingService = new CreateBookingService();
        $this->updateBookingService = new UpdateBookingService();
        $this->bookingPaymentService = new BookingPaymentService();
    }

    public function index(Request $request)
    {
//        Gate::authorize('viewAny', Booking::class);
        $bookings = BookingResource::collection(
            Booking::query()->
                with(['user', 'court'])
                ->when($request->filter_upcoming, function ($query) use ($request) {
                    $query->upcoming();
                })->when($request->filter_past, function ($query) use ($request) {
                    $query->past();
                })->when($request->filter_confirmed, function ($query) use ($request) {
                    $query->confirmed();
                })
                ->get()
        );
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

    public function confirm(Booking $booking){
        $checkout =  $this->bookingPaymentService->confirmBooking($booking);

        return response()->json(['checkout_url' => $checkout], 200);
    }

    public function checkoutCompleted(Request $request){
        $session_id = $request->query('session_id');
        $stripe = new StripeClient(config('stripe.api_key.secret'));
        $session = $stripe->checkout->sessions->retrieve($session_id);
        if($session->payment_status == 'paid'){
            $booking = Booking::findOrFail($request->booking);
            $booking->update(['status' => 'confirmed']);
            $data = $booking->load(['user', 'court']);
            bookingConfirmedEvent::dispatch($data);
            return view('payment.success', ['booking' => $data]);
        } else {
            return response()->json(['message' => 'Payment failed or not completed.'], 400);
        }
    }
}
