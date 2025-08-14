<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


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

function whatsappSendOtp($phone,$otp) {


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

function sendOtp($number, $otp, $route = 'otp', $apikey = null, $gateway = null) {

    if($gateway == 'fast2sms'){

        if($route == 'khelobuddy'){
            $template = DB::table('dlt_details')
                ->where('id', '4')
                ->first();
        }else{
            $template = DB::table('dlt_details')
            ->where('id', '1')
            ->first();
        }
            

    if (!$template) {
        return ['error' => 'Template not found'];
    }

    // Replace {#VAR#} in the message with actual OTP
    $message = str_replace('{#VAR#}', $otp, $template->content);

    $response = Http::withHeaders([
        'authorization' => 'ZakGjMyszUGNOucV4rmzOJtR7AdkVTXiBwFQTR2HZtPtSAroZ6MQiqKBCgmx',
        'Content-Type' => 'application/json',
    ])->post('https://www.fast2sms.com/dev/bulkV2', [
        'route'       => 'dlt_manual',
        'sender_id'   => $template->header,
        'entity_id'   => $template->entity_id,
        'template_id' => $template->content_id,
        'message'     => $message,
        'flash'       => 0,
        'numbers'     => $number,
    ]);

    return $response->json();
    }elseif($gateway == '2factor'){

    }elseif($gateway == 'whatsappAuth'){
        whatsappSendOtp($number, $otp);
    }


    // Fetch your template details from DB

}
