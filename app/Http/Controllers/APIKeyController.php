<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class APIKeyController extends Controller
{
    public function generateApiKey(){
        $apiKey=generateApiKey();
        $user=Auth::user();
        $user->api_key=$apiKey;
        $user->save();
        return response()->json([
            'status' => 'success',
            'message' => 'API Key generated successfully!',
            'api_key' => $apiKey,
        ], 201);
    }

    public function apiStatus(Request $request){
        $user=Auth::user();
        $user->api_status=$request->status;
        $user->save();
        return response()->json([
            'status' => 'success',
            'message' => 'API Status updated successfully!',
            'api_status' => $request->status,
        ], 201);
    }
}
