<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExpirePendingBookings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'booking:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cancel pending bookings older than 1 Hour';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $timeLimit = now()->subHour();

        $bookings = \App\Models\Booking::where('status', 'pending')
            ->where('created_at', '<', $timeLimit)
            ->update(['status' => 'cancelled']);

        if($bookings > 0){
            $this->info("Expired {$bookings} pending bookings.");
        } else {
            $this->info("No pending bookings to expire.");
        }
    }
}
