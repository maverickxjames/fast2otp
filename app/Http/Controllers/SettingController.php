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
        $userData = User::find(Auth()->id()) ?? abort(404, 'User not found');
        $profile = DB::table('profile_pic')->get();
        $billing= DB::table('billing_addresses')->where('user_id', Auth::id())->first();

        return view('settings', compact('userData', 'profile', 'billing'));
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

    // Check if the user already has a billing address
    $existing = DB::table('billing_addresses')
        ->where('user_id', $user->id)
        ->first();

    if ($existing) {
        // Update existing record
        DB::table('billing_addresses')
            ->where('user_id', $user->id)
            ->update([
                'company_name' => $validated['company'],
                'address1' => $validated['address1'],
                'address2' => $validated['address2'],
                'city' => $validated['city'],
                'state' => $validated['state'],
                'zip' => $validated['zip'],
                'updated_at' => now()
            ]);
    } else {
        // Insert new record
        DB::table('billing_addresses')->insert([
            'user_id' => $user->id,
            'company_name' => $validated['company'],
            'address1' => $validated['address1'],
            'address2' => $validated['address2'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['zip'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    return response()->json(['success' => true, 'message' => 'Billing address saved successfully']);
}

public function changePassword()
{
    $user=Auth::user();
    return view('change_password',compact('user'));
}

public function updatePassword(Request $request)
{
    $user = Auth::user();

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

    if($request->new_password != $request->confirm_password){
        return response()->json(['success' => false, 'message' => 'Password does not match'], 400);
    }

    

    // Update password
    $user->password = Hash::make($request->new_password);
    $user->save();

    return response()->json(['success' => true, 'message' => 'Password updated successfully']);
}





}
