<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\APIKeyController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login'])->name('api.login');
Route::post('/send-otp', [OTPController::class, 'sendOtp'])->name('sendotp');
Route::get('apikey', [APIKeyController::class, 'generateApiKey'])->name('apikey');
Route::post('/api-status', [APIKeyController::class, 'apiStatus'])->name('api-status');
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/settings', [AdminController::class, 'getSettings']);
    Route::post('/settings', [AdminController::class, 'updateSettings']);
    Route::get('/logout', [UserController::class, 'logout']);
});
