<?php

use App\Http\Controllers\PaymentProvider;
use Faker\Provider\ar_SA\Payment;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/get-checkout-id',[App\Http\Controllers\PaymentProvider::class,'getCheckoutId'])->name('get-checkout-id');

Route::get('/ini',[App\Http\Controllers\PaymentProvider::class,'ini'])->name('ini');

