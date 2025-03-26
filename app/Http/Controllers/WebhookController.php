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

    /**
     * Send a test webhook.
     */
    public function sendTest()
    {
        $user = auth()->user();
        $webhookUrl = $user->webhook_url;

        if (!$webhookUrl) {
            return response()->json([
                'status' => 'error',
                'message' => 'Webhook URL not set!'
            ], 400);
        }

        // Sample test payload
        $payload = [
            'event' => 'test_event',
            'timestamp' => now(),
            'message' => 'This is a test webhook payload.'
        ];

        // Send the test webhook
        try {
            $response = Http::post($webhookUrl, $payload);

            return response()->json([
                'status' => 'success',
                'response_code' => $response->status(),
                'response_body' => $response->body()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to send test webhook: ' . $e->getMessage()
            ], 500);
        }
    }
}
