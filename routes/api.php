<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourtsController;
use App\Http\Controllers\VenuesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\AvailabilitiessController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/venues/search', [VenuesController::class, 'search']);
Route::apiResource('/venues', VenuesController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/venues', VenuesController::class)->only(['index', 'show']);

Route::apiResource('/courts', CourtsController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/courts', CourtsController::class)->only(['index', 'show']);
// Bookings, Reviews, Availabilities


Route::apiResource('/bookings', BookingsController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/bookings', BookingsController::class)->only(['index', 'show']);
Route::post('/bookings/{booking}/confirm', [BookingsController::class, 'confirm']);

Route::apiResource('/reviews', ReviewsController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/reviews', ReviewsController::class)->only(['index', 'show']);

Route::apiResource('/availabilities', AvailabilitiessController::class)->middleware('auth:sanctum')->except(['index', 'show']);
Route::apiResource('/availabilities', AvailabilitiessController::class)->only(['index', 'show']);
