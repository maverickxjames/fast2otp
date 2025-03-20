<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function () {


    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/register', function () {
        return view('register');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pricing', function () {
        return view('pricing');
    })->name('pricing');

    Route::get('/transactions', function () {
        return view('transactions');
    })->name('transactions');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    Route::get('/rate-limits', function () {
        return view('ratelimits');
    })->name('ratelimits');
    
    Route::get('/payment-billings', function () {
        return view('payment');
    })->name('payment-billings');
});

require __DIR__.'/auth.php';

