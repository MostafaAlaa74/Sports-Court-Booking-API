<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\VenueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AvailabilityController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('/venues', VenueController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/venues', VenueController::class)->only(['index', 'show']);

Route::apiResource('/courts', CourtController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/courts', CourtController::class)->only(['index', 'show']);
// Bookings, Reviews, Availabilities


Route::apiResource('/bookings', BookingController::class)->middleware('auth:sanctum');
Route::post('/bookings/{booking}/confirm', [BookingController::class, 'confirm']);

Route::apiResource('/reviews', ReviewController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/reviews', ReviewController::class)->only(['index', 'show']);

Route::apiResource('/availabilities', AvailabilityController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/availabilities', AvailabilityController::class)->only(['index', 'show']);
