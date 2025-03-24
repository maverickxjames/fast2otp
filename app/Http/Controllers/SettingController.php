<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function Setting()
    {
        $userData = User::find(Auth()->id()) ?? abort(404, 'User not found');
        $profile = DB::table('profile_pic')->get();

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




}
