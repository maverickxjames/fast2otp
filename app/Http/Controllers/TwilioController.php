<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TwilioService;

class TwilioController extends Controller
{
    protected $twilioService;

    public function __construct(TwilioService $twilioService)
    {
        $this->twilioService = $twilioService;
    }

    public function sendOTP(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        $verification = $this->twilioService->sendVerificationCode($request->phone);

        return response()->json(['status' => $verification->status]);
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'code' => 'required|string',
        ]);

        $verificationCheck = $this->twilioService->checkVerificationCode($request->phone, $request->code);

        if ($verificationCheck->status === "approved") {
            return response()->json(['message' => 'Verification successful']);
        } else {
            return response()->json(['message' => 'Invalid OTP'], 400);
        }
    }
}
