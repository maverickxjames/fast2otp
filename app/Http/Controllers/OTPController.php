<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\OTPRequest;




class OTPController extends Controller
{
    public function sendOtp(Request $request) {
        $request->validate(['phone' => 'required']);
    
        if (getSetting('require_kyc_for_otp') == 'true') {
            $user = User::where('phone', $request->phone)->first();
            if (!$user || $user->kyc_status != 'verified') {
                return response()->json(['error' => 'KYC verification required'], 403);
            }
        }
    
        $otp = $request->otp;
        $phone = $request->phone;

     
        sendOtp($phone, $otp);
    }

    
}
