<?php

namespace App\Services\Payment;

use Stripe\StripeClient;

class BookingPaymentService
{
    public $stripe;
    public function __construct()
    {
        $this->stripe = new StripeClient(config('stripe.api_key.secret'));
    }

    public function confirmBooking($booking){
        $Checkout_session = $this->stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                  'name' => 'Court Booking #' . $booking->id,
                ],
                'unit_amount' => $booking->court->hourly_rate * (strtotime($booking->end_time) - strtotime($booking->start_time)) / 3600 * 100,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', ['booking' => $booking->id]) . '&session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment.cancel'),
          ]);

          return $Checkout_session->url;
}
}
