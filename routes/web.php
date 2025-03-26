<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebhookController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

// User Controller
    
Route::post('/send-reset-otp', [UserController::class, 'sendResetOTP'])->name('send-reset-otp');
Route::get('/verify-otp', [UserController::class, 'showOtpVerificationPage'])->name('verify-otp-page');
Route::post('/verify-otp', [UserController::class, 'verifyOtp'])->name('verify-otp');
Route::post('/reset-update-password', [UserController::class, 'resetUpdatePassword'])->name('reset-update-password'); 

Route::get('/reset-password', [UserController::class, 'resetPassword'])->name('reset-password');

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

    Route::get('support-feedback', function () {
        return view('support');
    })->name('support-feedback');

    Route::get('/alerts', function () {
        return view('alerts');
    })->name('alerts');

    Route::get('/terms-conditions', function () {
        return view('terms-conditions');
    })->name('terms-conditions');

    Route::get('/developer', function () {
        $user=Auth::user();
        return view('developer',compact('user'));
    })->name('developer');

    Route::get('/test',function(){
        // insert 1 to 16 num on name field on profile_pic table

        for($i=1;$i<=16;$i++){
            DB::table('profile_pic')->insert([
                'name' => $i,
            ]);
        }
        return response()->json(['message'=>'Data inserted successfully']);
    })->name('test');


    // Routes
Route::post('webhook-status', [WebhookController::class, 'updateStatus'])->name('webhook-status');
Route::post('update-webhook', [WebhookController::class, 'updateUrl'])->name('update-webhook');
Route::get('test-webhook', [WebhookController::class, 'sendTest'])->name('test-webhook');



    // Setting Controller
    Route::get('/settings',[SettingController::class,'Setting'])->name('settings');
    Route::post('/update-profile-pic', [SettingController::class, 'updatePic'])->name('update-profile-pic');
    Route::post('/remove-profile-pic', [SettingController::class, 'removeProfilePic'])->name('remove-profile-pic');
    Route::post('/update-user-profile', [SettingController::class, 'updateProfile'])->name('update-user-profile');
    Route::post('/billing/save', [SettingController::class, 'saveBillingAddress'])->name('billing.save');
    Route::get('change-password', [SettingController::class, 'changePassword'])->name('change-password');
    // Handle password update
Route::post('/update-password', [SettingController::class, 'updatePassword'])->name('update-password');







});

require __DIR__.'/auth.php';

