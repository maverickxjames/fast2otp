<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\OTPRequest;
use App\Models\Setting;

class OTPController extends Controller
{
    public function sendOtp(Request $request)
    {



        $apikey = $request->apikey;
        $otp = $request->value;
        $phone = $request->numbers;
        $route = $request->route ?? 'otp';

        if (!$phone) {
            return response()->json(['error' => 'Phone number is required'], 400);
        }

        if (!$otp) {
            return response()->json(['error' => 'OTP value is required'], 400);
        }

        if (!$apikey) {
            return response()->json(['error' => 'API key is required'], 400);
        }

        if (!$route) {
            return response()->json(['error' => 'Route is required'], 400);
        }

        // otp must be numeric 

        if (!is_numeric($otp)) {
            return response()->json(['error' => 'OTP must be numeric'], 400);
        }

        // otp must between 4 and 6 digits

        if (strlen($otp) < 4 || strlen($otp) > 8) {
            return response()->json(['error' => 'OTP must be between 4 and 6 digits'], 400);
        }


        $gateway = Setting::where('setting_key', 'activeProvider')->value('setting_value');

        $user = User::where('api_key', $apikey)->first();

        if (!$user) {
            return response()->json(['error' => 'Invalid Api Key'], 404);
        }

        // check if user has sufficient balance and perSmsCost and isWalletActive

        if (!$user->isWalletActive) {
            return response()->json(['error' => 'Please make the deposit first'], 403);
        }

        if ($user->wallet_balance < $user->perSmsCost) {
            return response()->json(['error' => 'Insufficient balance'], 402);
        }

        if (getSetting('require_kyc_for_otp') == 'true') {


            if ($user->kyc_status != 'verified') {
                return response()->json(['error' => 'KYC verification required'], 403);
            }
        }





        sendOtp($phone, $otp, $route, $apikey, $gateway);
    }
}
