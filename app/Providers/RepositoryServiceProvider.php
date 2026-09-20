<?php

namespace App\Providers;

use App\Repository\Eloquent\BookingRepo;
use App\Repository\Eloquent\CourtCacheRepo;
use App\Repository\Eloquent\CourtRepo;
use App\Repository\Interfaces\BookingInterface;
use App\Repository\Interfaces\CourtCacheInterface;
use App\Repository\Interfaces\CourtInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            BookingInterface::class ,
            BookingRepo::class
        );

        $this->app->bind(
            CourtInterface::class,
            CourtRepo::class
        );

        $this->app->bind(
            CourtCacheInterface::class,
            CourtCacheRepo::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
