<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'showForm']);
Route::post('/payment/confirm', [PaymentController::class, 'confirm']);
/* Route::match(['get', 'post'], '/payment/receipt', [PaymentController::class, 'receipt']); */
