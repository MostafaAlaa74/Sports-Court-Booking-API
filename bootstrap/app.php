<?php

use App\Exceptions\BookingConflictException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    //* Handle exceptions in a custom way
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function(BookingConflictException $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        });
    })->create();
