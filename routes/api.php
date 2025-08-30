<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\APIKeyController;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [UserController::class, 'register'])->name('api.register');
Route::post('/login', [UserController::class, 'login'])->name('api.login');
Route::post('/v1/sendOtp', [OTPController::class, 'sendOtp'])->name('sendotp');
Route::get('/v1/sendOtp', [OTPController::class, 'sendOtp'])->name('getSendotp');
Route::get('apikey', [APIKeyController::class, 'generateApiKey'])->name('apikey');
Route::post('/api-status', [APIKeyController::class, 'apiStatus'])->name('api-status');
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/settings', [AdminController::class, 'getSettings']);
    Route::post('/settings', [AdminController::class, 'updateSettings']);
    Route::get('/logout', [UserController::class, 'logout']);
});
