<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Http\Request;
use App\Models\Booking;

Route::get('/payment/success', [\App\Http\Controllers\BookingsController::class , 'checkoutCompleted'])->name('payment.success');

// 2. صفحة الفشل
Route::get('/payment/cancel', function () {
    return "<h1>تم إلغاء العملية ❌</h1>";
})->name('payment.cancel');
