<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('getSetting')) {
    function getSetting($key) {
        return DB::table('settings')->where('setting_key', $key)->value('setting_value');
    }
}

function show() {
    echo "Jaykishan";
}

function generateApiKey(){
    return bin2hex(random_bytes(32));
}

function sendOtp($phone,$otp) {


    $data = [
        "apiKey" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjY3MmIzZDA5NThmYjUxMGJmYzIxZjgwNiIsIm5hbWUiOiJLaGVsbyBCdWRkeSIsImFwcE5hbWUiOiJBaVNlbnN5IiwiY2xpZW50SWQiOiI2MWMyMjMwNGI5NDY2MzExNzllYzJlM2QiLCJhY3RpdmVQbGFuIjoiTk9ORSIsImlhdCI6MTczMDg4NjkyMX0.Si7iobbX6sGC2A8ydbMYEj0hCrqxg3WiU9pwFu6Eho0",
        "campaignName" => "app_auth",
        "destination" => $phone,
        "userName" => "Khelo Buddy",
        "templateParams" => [$otp],
        "source" => "new-landing-page form",
        "buttons" => [
            [
                "type" => "button",
                "sub_type" => "url",
                "index" => 0,
                "parameters" => [
                    ["type" => "text", "text" => $otp]
                ]
            ]
        ],
        "paramsFallbackValue" => ["FirstName" => "user"]
    ];

    $ch = curl_init("https://backend.aisensy.com/campaign/t1/api/v2");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    curl_close($ch);

    // {
    //     "success": "true",
    //     "submitted_message_id": "53b8129f-943a-47a1-88ab-5bb530e267a2"
    // }

    return $response;
}
