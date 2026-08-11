<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Payment\PaymentConfirmationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class stripeWebhookController extends Controller
{
    public function __construct(private PaymentConfirmationService $paymentConfirmationService) {}
    public function handleWebhook(Request $request)
    {
        $event = $request->attributes->get('stripe_event');

        if ($event->type !== 'checkout.session.completed') {
            return response()->json([
                'received' => true,
            ], 200);
        }

        $session = $event->data->object;

        $this->paymentConfirmationService->verifyAndConfirm($session);

        return response()->json([
            'received' => true,
        ], 200);
    }
}
