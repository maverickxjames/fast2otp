<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;



class UserController extends Controller
{
    function generateUniqueApiKey()
{
    do {
        $apiKey = hash('sha256', Str::random(60));
    } while (User::where('api_key', $apiKey)->exists());

    return $apiKey;
}
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|unique:users|min:10|max:15',
            'password' => 'required|string|min:6|confirmed',
        ]);
      
        $randomNumber = rand(1, 100);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'plain_password' => $request->password,
            'profile_pic' => 2,
            'api_key' => $this->generateUniqueApiKey(),
            'api_status' => 'off',
             'webhook_url' => '',
            'webhook_status' => 'off',
            'kyc_status' => 'pending',
            'role' => 'user',
            'status' => 'active',

        ]);
    
        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully!',
            'user' => $user,
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
                'user' => $user
            ], 200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout successful'
        ], 200);
    }

     // Send OTP to the user's email
     public function sendResetOTP(Request $request)
     {
        // return $request;
         $email = $request->email;
         $user = User::where('email', $email)->first();
 
         if (!$user) {
             return response()->json(['success' => false, 'message' => 'User not authenticated']);
         }
 
         // Generate OTP
         $otp = rand(100000, 999999);

           // Store OTP in the users table
    $user->email_otp = $otp;  
    $user->save();
         
         
         // Store OTP in session
         Session::put('password_reset_otp', $otp);
         Session::put('password_reset_email', $user->email);
         
         
         // Send OTP to email
         Mail::raw("Your OTP for password reset is: $otp", function ($message) use ($user) {
             $message->to($user->email)
                 ->subject('Password Reset OTP');
         });
 
         return response()->json(['success' => true, 'message' => 'OTP sent to your email']);
     }
 
     // Show OTP verification page
     public function showOtpVerificationPage()
     {
        $email = Session::get('password_reset_email');

    if (!$email) {
        // Redirect back or show an error if no email is found
        return redirect()->route('login')->with('error', 'No email found for verification.');
    }

    return view('verify-otp', compact('email'));
     }
 
     // Verify OTP
     public function verifyOtp(Request $request)
     {
         $email = $request->email;

         
         // Get the OTP from the form (combine digits into one string)
         $otp = $request->otp;
     
         $user = User::where('email', $email)->first();
     
         if (!$user) {
             return back()->with('error', 'Invalid user.');
         }
     
         // Validate OTP
         if ($user->email_otp == $otp) {
             // Clear OTP session
             Session::forget('password_reset_otp');
             
             // Redirect to password reset page with email
             return  response()->json(['success' => true, 'message' => 'OTP verified successfully']);
         }
     
         return response()->json(['success' => false, 'message' => 'Invalid OTP']);
     }

     public function resetPassword(Request $request)
    {
        // Get the email from the URL parameter

        
        $email = $request->query('email');

        // Check if email is provided
        if (!$email) {
            return redirect('/')->with('error', 'No email provided.');
        }

        $user=User::where('email',$email)->first();
        if (!$user) {
            return redirect('/')->with('error', 'User not found.');
        }

        // Here, you can verify the email, generate a reset token, or show the reset form
        return view('reset-password', compact('user'));
    }

 


    public function resetUpdatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',  // Confirmed field for matching
            'confirm_password' => 'required|same:password',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }

        $user->password = Hash::make($password);
    $user->plain_password = $password;  // Store plain password for reference
    $user->email_otp = null;  // Clear the OTP
    $user->save();

    return response()->json(['success' => true, 'message' => 'Password updated successfully']);
    }
    
    
}
