<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    
    public function updateStatus(Request $request)
    {
        // Get the current authenticated user
        $user = auth()->user();

        // Validate the status value
        $status = $request->status === 'on' ? 'on' : 'off';

        // Update webhook status in the database
        $user->webhook_status = $status;
        $user->save();

        return response()->json([
            'status' => 'success',
            'webhook_status' => $user->webhook_status
        ]);
    }

    /**
     * Update the webhook URL.
     */
    public function updateUrl(Request $request)
    {
        $request->validate([
            'webhook_url' => 'required|url'
        ]);

        $user = auth()->user();
        $user->webhook_url = $request->webhook_url;
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Webhook URL updated successfully!'
        ]);
    }

   
}
