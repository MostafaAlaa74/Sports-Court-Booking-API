<?php

namespace App\Listeners;

use App\Events\BookingConfirmedEvent;
use App\Mail\bookingConfirmedEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendConfirmationMailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BookingConfirmedEvent $event): void
    {
        $data = $event->data;
        // Send confirmation email to the user
        \Mail::to($data->user->email)->send(new BookingConfirmedEmail($data));
    }
}
