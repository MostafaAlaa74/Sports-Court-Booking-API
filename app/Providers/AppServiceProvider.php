<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\CourtPolicy;
use App\Policies\VenuePolicy;
use App\Policies\BookingPolicy;
use App\Policies\ReviewPolicy;
use App\Policies\AvailabilityPolicy;
use App\Models\Court;
use App\Models\Venue;
use App\Models\Booking;
use App\Models\Review;
use App\Models\Availability;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Court::class, CourtPolicy::class);
        Gate::policy(Venue::class, VenuePolicy::class);
        Gate::policy(Booking::class, BookingPolicy::class);
        Gate::policy(Review::class, ReviewPolicy::class);
        Gate::policy(Availability::class, AvailabilityPolicy::class);
    }
}
