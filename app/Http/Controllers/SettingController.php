<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function Setting()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to access settings.');
        }
        $userData = User::find($user->id);
        if (!$userData) {
            return redirect()->route('login')->with('error', 'User not found.');
        }
        $profile = DB::table('profile_pic')->get();
        // $billing = DB::table('billing_addresses')->where('user_id', $user->id)->first();

        return view('settings', compact('userData', 'profile'));
    }

    public function updatePic(Request $request)
    {
        $user = User::find(Auth::id());
        $fileName = $request->input('profile_pic');

        if ($fileName) {
            $user->profile_pic = $fileName;
            $user->save();

            return response()->json(['success' => true, 'name' => $fileName]);
        }

        return response()->json(['success' => false]);
    }

    public function removeProfilePic(Request $request)
    {
        $user = User::find(Auth::id());

        // ✅ Update profile_pic to '17' in the database
        $user->profile_pic = '17';
        $user->save();

        return response()->json(['success' => true]);
    }


    public function updateProfile(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'nullable|date',              // Allow nullable dob
            'gender' => 'nullable|in:Male,Female,Others'  // Allow nullable gender
        ]);

        // Update only if fields are provided
        $user->name = $validated['name'];

        if ($request->filled('dob')) {
            $user->dob = $validated['dob'];
        }

        if ($request->filled('gender')) {
            $user->gender = $validated['gender'];
        }

        // Save the user
        $user->save();

        return response()->json(['success' => true]);
    }



    public function saveBillingAddress(Request $request)
    {
        // return $request;
        $user = Auth::user();

        // Validate input
        $validated = $request->validate([
            'company' => 'nullable|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip' => 'required|string|max:10',
        ]);

        // Update user billing address
        $user->company_name = $validated['company'];
        $user->address1 = $validated['address1'];
        $user->address2 = $validated['address2'];
        $user->city = $validated['city'];
        $user->state = $validated['state'];
        $user->zip = $validated['zip'];
        $user->save();

        return response()->json(['success' => true, 'message' => 'Billing address saved successfully']);
    }

    public function changePassword()
    {
        $user = Auth::user();
        return view('change_password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Validate input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ]);
        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['success' => false, 'message' => 'Current password is incorrect'], 400);
        }

        if ($request->new_password != $request->confirm_password) {
            return response()->json(['success' => false, 'message' => 'Password does not match'], 400);
        }



        try {
            $user->password = Hash::make($request->new_password);
            $user->plain_password = $request->new_password; // Store plain password if needed, but be cautious with security
            $user->save();

            return response()->json(['success' => true, 'message' => 'Password updated successfully']);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update password',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function disableAccount(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Update user status to 'disabled'
        $user->status = 'inactive'; // or 'disabled', depending on your application logic
        $user->webhook_status = 'off'; // Optionally disable webhook status
        $user->api_status = 'off'; // Optionally disable API status
        $user->save();

        return response()->json(['success' => true, 'message' => 'Account disabled successfully']);
    }

    public function enableAccount(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Update user status to 'active'
        $user->status = 'active';
        $user->webhook_status = 'on'; // Optionally enable webhook status
        $user->api_status = 'on'; // Optionally enable API status
        $user->save();

        return response()->json(['success' => true, 'message' => 'Account enabled successfully']);
    }

    public function deleteAccount(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Delete the user account
        $user->delete();

        return response()->json(['success' => true, 'message' => 'Account deleted successfully']);
    }
}
