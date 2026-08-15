<?php

namespace App\Services\Payment;

use _PHPStan_781aefaf6\Nette\Neon\Exception;
use App\Enums\BookingStatus;
use App\Jobs\BookConfirmedJob;
use App\Models\Booking;
use Stripe\StripeClient;

class PaymentConfirmationService
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(config('stripe.api_key.secret'));
    }

    public function verifyAndConfirm($session)
    {
        $bookingId = $session->metadata->booking_id ?? null;

        if ($session->payment_status !== 'paid') {
            throw new \Exception('Payment not completed.');
        }

        if (!$bookingId) {
            throw new \Exception('Booking ID is missing.');
        }

        $booking = Booking::find($bookingId);

        if (!$booking) {
            throw new \Exception('Booking not found.');
        }

        if ($booking->status === BookingStatus::CONFIRMED->value) {
            return $booking;
        }

        $booking->update([
            'status' => BookingStatus::CONFIRMED->value,
        ]);
        BookConfirmedJob::dispatch($booking);
        return $booking;
    }
}
