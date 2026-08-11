<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Stripe\Webhook;
use Symfony\Component\HttpFoundation\Response;

class StripeWebhookIdempotencyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $payload = $request->getContent();

        $signature = $request->header('Stripe-Signature');

        $event = Webhook::constructEvent(
            $payload,
            $signature,
            config('stripe.webhook_secret')
        );

        $eventId = $event->id;

        $cacheKey = 'stripe:webhook:' . $eventId;

        if (Cache::has($cacheKey)) {
            return response()->json([
                'received' => true,
                'duplicate' => true,
            ], 200);
        }
        $request->attributes->set('stripe_event', $event);
        $response = $next($request);

        if ($response->isSuccessful()) {
            Cache::put($cacheKey, true, now()->addHours(24));
        }

        return $response;
    }
}
