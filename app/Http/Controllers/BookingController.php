<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Stripe\StripeClient;

class BookingController extends Controller
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
        if(Auth::user()){
        $bookings = Booking::query()
            ->forUser(Auth::user())
            ->with(['user', 'court'])
            ->when($request->filter_upcoming, fn($q) => $q->upcoming())
            ->when($request->filter_past, fn($q) => $q->past())
            ->when($request->filter_confirmed, fn($q) => $q->confirmed())
            ->latest()
            ->paginate(10);
        return response()->json($bookings, 200);
        }
        else{
            return response()->json(['message' => 'Unauthorized'], 401);
        }
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
        Gate::authorize('confirm', $booking);
        $checkout =  $this->bookingPaymentService->confirmBooking($booking);

        return response()->json(['checkout_url' => $checkout], 200);
    }

    public function checkoutCompleted(Request $request , PaymentConfirmationService $paymentConfirmationService){
        try {

            $booking = $paymentConfirmationService->verifyAndConfirm(
                $request->session_id,
                $request->booking
            );
            $data = $booking->load(['user', 'court']);
            BookConfirmedJob::dispatch($data);
            return view('payment.success', compact('booking'));

        } catch (\Exception $e) {
            return view('payment.failed', ['error' => $e->getMessage() , 'booking' => $data]);
        }
    }
}

