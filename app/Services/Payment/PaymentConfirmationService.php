<?php

namespace App\Services\Payment;

use _PHPStan_781aefaf6\Nette\Neon\Exception;
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

    public function verifyAndConfirm($sessionId, $bookingId)
    {
        // 1. Check Stripe
        $session = $this->stripe->checkout->sessions->retrieve($sessionId);

        if ($session->payment_status !== 'paid') {
            throw new Exception('Payment not completed.');
        }

        $booking = Booking::findOrFail($bookingId);

        if ($booking->status === 'confirmed') {
            return $booking;
        }

        $booking->update(['status' => 'confirmed']);

        return $booking;
    }
}
