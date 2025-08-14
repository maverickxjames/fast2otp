<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark" data-width="fullwidth">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Laravel Tailwind Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">

    <!-- TITLE -->
    <title> Fast2OTP | Bulk OTP Provider </title>

    <!-- FAVICON -->
    <link rel="icon" href="build/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="build/assets/icon-fonts/icons.css" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="build/assets/app-C2-htF4y.css">
    <link rel="stylesheet" href="build/assets/app-C2-htF4y.css">

    <!-- APP CSS -->
    <link rel="preload" as="style" href="build/assets/app-C6ls_Bf6.css">
    <link rel="stylesheet" href="build/assets/app-C6ls_Bf6.css">

    <!-- NODE WAVES CSS -->
    <link href="build/assets/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="build/assets/libs/simplebar/simplebar.min.css">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="build/assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="build/assets/libs/%40simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="build/assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- Auto Complete CSS -->
    <link rel="stylesheet" href="build/assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css">

    <!-- Choices JS -->
    <script src="build/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- MAIN JS -->
    <script src="build/assets/main.js"></script>
    {{-- scrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* Toggle Switch Style */
        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 20px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 4px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #4caf50;
        }

        input:checked+.slider:before {
            transform: translateX(18px);
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .box-body {
                flex-direction: column;
            }

            .box-body input,
            .box-body button {
                width: 100%;
                margin-bottom: 10px;
            }

            .box-body .flex {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* @media (max-width: 768px) {
            .flex.items-center.gap-4 {
                flex-direction: column;
            }

            .flex.items-center.gap-4 input,
            .flex.items-center.gap-4 button {
                width: 100%;
            }
        } */
    </style>




</head>

<body>



    <!-- LOADER -->
    <div id="loader">
        <img src="build/assets/images/media/loader.svg" alt="">
    </div>
    <!-- LOADER -->

    <div class="page">

        <!-- HEADER -->
        <x-topbar />

        <!-- END HEADER -->

        <!-- SIDEBAR -->
        <x-sidebar />
        <!-- END SIDEBAR -->

        <!-- MAIN-CONTENT -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">


                <!-- Start::row-1 -->

                <div class="">
                    <div class="max-w-[100%] mx-auto">
                        <div class="box">
                            <ul class="nav nav-tabs tab-style-8 scaleX rounded m-4 profile-settings-tab gap-2 flex flex-wrap"
                                id="myTab4" role="tablist">
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10 active"
                                        data-hs-tab="#developer-api-tab" role="tab">Developer Api</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#api-key-tab" role="tab">Api Key</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#api-webhook-tab" role="tab">Api Webhook</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#security-tab" role="tab">Security</button>
                                </li>

                            </ul>
                            <div
                                class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">

                                <div class="tab-pane show active overflow-hidden p-0 border-0" id="developer-api-tab"
                                    role="tabpanel">
                                    <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                        <div class="font-semibold block text-[18px]">Developer Api</div>
                                    </div>
                                    <div class="flex flex-col md:flex-row lg:flex-row gap-6">
                                        <!-- Left Section (Form) -->
                                        <div class="w-full lg:w-1/2">
                                            <div class="box p-6 rounded-lg shadow-lg">
                                                <div class="box-header">
                                                    <div class="box-title text-xl font-semibold">API Integration</div>
                                                </div>

                                                <div class="box-body ">
                                                    <!-- Method Selection -->
                                                    <div class="mb-4">
                                                        <label class="block text-dark font-semibold">Method:</label>
                                                        <select id="method"
                                                            class="w-full p-2 border rounded bg-light text-dark">
                                                            <option value="GET">GET</option>
                                                            <option value="POST">POST</option>
                                                        </select>
                                                    </div>

                                                    <!-- Route Selection -->
                                                    <div class="mb-4">
                                                        <label class="block text-dark font-semibold">Route:</label>
                                                        <select id="route"
                                                            class="w-full p-2 border rounded bg-light text-dark">
                                                            <option value="otp">OTP Message</option>
                                                            <option value="transactional">Transactional Message
                                                            </option>
                                                            <option value="promotional">Promotional Message</option>
                                                        </select>
                                                    </div>

                                                    <!-- OTP Value -->
                                                    <div class="mb-4">
                                                        <label class="block text-dark font-semibold">OTP Value (numeric
                                                            only):</label>
                                                        <input id="otpValue" type="text"
                                                            placeholder="Enter OTP value"
                                                            class="w-full p-2 border rounded bg-light text-dark">
                                                    </div>

                                                    <!-- Phone Number -->
                                                    <div class="mb-4">
                                                        <label class="block text-dark font-semibold">Phone Number
                                                            (numeric
                                                            only):</label>
                                                        <input id="phoneNumber" type="text"
                                                            placeholder="Enter Phone Number"
                                                            class="w-full p-2 border rounded bg-light text-dark">
                                                    </div>

                                                    <!-- Buttons -->
                                                    <div class="flex justify-between items-center">
                                                        <button onclick="generateRequest()"
                                                            class="bg-blue-500 text-dark px-4 py-2 rounded-lg hover:bg-blue-800 transition">
                                                            Generate Request
                                                        </button>
                                                        <button
                                                            onclick="window.open('https://developers.fast2otp.com/')"
                                                            class="bg-gray-500 text-dark px-4 py-2 rounded-lg hover:text-white hover:bg-gray-900 transition">
                                                            Read API Docs
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Right Section (API Request Display) -->
                                        <div class="w-full lg:w-1/2">
                                            <div class="box p-6 rounded-lg shadow-lg">
                                                <div class="box-header">
                                                    <div class="box-title text-xl font-semibold">Generated API Request
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div id="requestType" class="text-lg font-bold mb-2">GET Request
                                                    </div>

                                                    <!-- Dynamic API Request -->
                                                    <pre id="apiRequest" class="p-4 bg-dark rounded-lg text-light overflow-auto">
                                                        Generating API request...
                                                    </pre>

                                                    <div class="mt-4">
                                                        <div class="text-lg font-bold mb-2">Overall URL:</div>
                                                        <!-- URL container with copy button placed outside the pre tag -->
                                                        <div class="flex items-center gap-2">
                                                            <pre id="overallUrl" class="p-4 bg-dark rounded-lg text-light overflow-auto flex-1">
                                                                https://api.fast2otp.com/send-otp
                                                            </pre>

                                                            <!-- Copy button placed outside for visibility -->
                                                            <button onclick="copyToClipboard()"
                                                                class="bg-dark text-light px-4 py-4 rounded-lg shadow-md transition">
                                                                {{-- copy icon --}}

                                                                <i class="bi bi-clipboard"></i>
                                                                Copy URL
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <!-- PAYMENT METHODS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="api-key-tab"
                                    role="tabpanel">
                                    <div class="block text-2xl font-semibold mb-4">API Key</div>

                                    <div class="flex flex-col md:flex-row lg:flex-row gap-6">

                                        <!-- API Key Box -->
                                        <div class="w-full">
                                            <div class="box">
                                                <div class="box-header flex justify-between items-center">
                                                    <div class="box-title text-xl font-semibold">Your API Key</div>
                                                    <form>
                                                        @csrf

                                                 
                                                    <div class="flex items-center gap-2">
                                                        <span id="apiStatusText" class="text-dark font-semibold">Status: <span
                                                                class="font-bold {{ $user->api_status=='on'?'text-success':'text-danger' }}">{{ $user->api_status }}</span></span>
                                                        <label class="switch">
                                                            <input type="checkbox" id="apiStatusToggle"
                                                                onclick="toggleApiStatus()" {{ $user->api_status=='on'?'checked':'' }}>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </form>
                                                </div>

                                                <div class="box-body">

                                                    <div class="flex items-center gap-4">

                                                        <!-- API Key Input Field -->
                                                        <div class="w-full lg:w-[70%]">
                                                            <input id="apiKey" type="password"
                                                                value={{ $user->api_key }}
                                                                class="w-full p-2 border rounded" readonly>
                                                        </div>

                                                        <div
                                                            class="flex items-center gap-2 justify-center w-full lg:w-[30%] ">
                                                            <!-- Show/Hide Button -->
                                                            <button onclick="toggleKeyVisibility()"
                                                                class="w-full bg-gray-500 text-dark px-4 py-2 hover:bg-gray-800 rounded-lg shadow-md transition">
                                                                👁️ Show
                                                            </button>

                                                            <!-- Copy Button -->
                                                            <button onclick="copyApiKey()"
                                                                class="w-full bg-dark text-light px-4 py-2 rounded-lg shadow-md transition">
                                                                <i class="bi bi-clipboard"></i>
                                                                Copy Key
                                                            </button>
                                                        </div>


                                                    </div>

                                                    <!-- Generate New Key -->
                                                    <div class="mt-4">
                                                        <button onclick="generateNewApiKey()"
                                                            class="bg-green-500 hover:bg-green-600 text-dark px-4 py-2 rounded-lg shadow-md transition">
                                                            🔑 Generate New Key
                                                        </button>

                                                    </div>



                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- SUBSCRIPTION & PLAN MANAGEMENT -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="api-webhook-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">API Webhook
                                    </div>
                                    <div class="flex flex-col md:flex-row lg:flex-row gap-6">

                                        <!-- Webhook Management -->
                                        <div class="w-full lg:w-1/2">
                                            <div class="box">
                                                <div class="box-header flex justify-between items-center">
                                                    <div class="box-title text-xl font-semibold">Webhook Management</div>
                                                    <form>
                                                        @csrf
                                                        <div class="flex items-center gap-2">
                                                            <span id="webhookStatusText" class="text-dark font-semibold">Status: 
                                                                <span class="font-bold {{ $user->webhook_status == 'on' ? 'text-success' : 'text-danger' }}">
                                                                    {{ $user->webhook_status }}
                                                                </span>
                                                            </span>
                                                            <label class="switch">
                                                                <input type="checkbox" id="webhookStatusToggle" 
                                                                    onclick="toggleWebhookStatus()" 
                                                                    {{ $user->webhook_status == 'on' ? 'checked' : '' }}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                
                                                <div class="box-body">
                                                    <!-- Webhook URL -->
                                                    <div class="mb-4">
                                                        <label class="block text-gray-600">Webhook URL:</label>
                                                        <div class="flex items-center gap-2">
                                                            
                                                            <input id="webhookUrl" type="text" value="{{ $user->webhook_url ?? '' }}" 
                                                                placeholder="Enter your webhook URL"
                                                                class="w-full p-2 border rounded">
                                                            
                                                            <!-- Copy Button -->
                                                            <button onclick="copyWebhookUrl()" 
                                                                class="bg-blue-500 hover:bg-blue-600 flex gap-2 text-light px-4 py-2 rounded-lg shadow-md transition">
                                                                {{-- copy icon --}}

                                                                <i class="bi bi-clipboard"></i>
                                                                Copy
                                                            </button>
                                                        </div>
                                                    </div>
                                
                                                    <!-- Actions -->
                                                    <div class="flex justify-between items-center mt-4">
                                                        <button onclick="updateWebhookUrl()"
                                                            class="bg-green-500 hover:bg-green-600 flex gap-2 text-light px-4 py-2 rounded-lg shadow-md transition">
                                                            {{-- save icon --}}

                                                            <i class="bi bi-save"></i>
                                                             Save
                                                        </button>
                                
                                                        <button onclick="testWebhook()"
                                                            class="bg-yellow-500 hover:bg-yellow-600 flex gap-2 text-light px-4 py-2 rounded-lg shadow-md transition">
                                                            {{-- test icon --}}
                                                            <i class="bi bi-emoji-smile"></i>
                                                             Test Webhook
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <!-- Webhook Logs -->
                                        <div class="w-full lg:w-1/2">
                                            <div class="box">
                                                <div class="box-header flex justify-between items-center">
                                                    <div class="box-title text-xl font-semibold">Webhook Logs</div>
                                                    <button onclick="clearWebhookLogs()"
                                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">
                                                        🗑️ Clear Logs
                                                    </button>
                                                </div>
                                
                                                <div class="box-body max-h-[400px] overflow-y-auto">
                                                    <div id="webhookLogs">
                                                        <p class="text-gray-500">No logs available...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                
                                    </div>

                                </div>

                                <!-- BILLING HISTORY -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="security-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">IP Listing</div>
                                    <div class="flex flex-col md:flex-row lg:flex-row gap-6">
                                        <!-- Left Section (Form) -->
                                        <div class="w-full lg:w-1/2">
                                            <div class="box p-6 rounded-lg shadow-lg">
                                                <div class="box-header">
                                                    <div class="box-title text-xl font-semibold">IP Listing </div>
                                                </div>

                                                <div class="box-body ">
                                                   ...
                                                </div>
                                            </div>
                                        </div>

                                     
                                    </div>
                                    
                                </div>





                            </div>

                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        <!-- MAIN-CONTENT -->

        <!-- FOOTER -->
        <footer
            class="mt-auto py-4 bg-white dark:bg-bodybg text-center border-t border-defaultborder dark:border-defaultborder/10">
            <div class="container">
                <span class="text-textmuted dark:text-textmuted/50">
                    Copyright © <span id="year"></span>
                    <a href="javascript:void(0);" class="text-dark font-medium">Xintra</a>.
                    Designed with <span class="text-danger">&#10084;</span> by
                    <a href="javascript:void(0);">
                        <span class="font-medium text-primary">Spruko</span>
                    </a>
                    All rights reserved
                </span>
            </div>
        </footer>

        <!-- header-search-modal -->
        <div class="hs-overlay ti-modal hidden" id="header-responsive-search" tabindex="-1"
            aria-labelledby="header-responsive-search" aria-hidden="true">
            <div class="ti-modal-box">
                <div class="ti-modal-dialog">
                    <div class="ti-modal-content">
                        <div class="ti-modal-body">
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0 !border-s"
                                    placeholder="Search Anything ..." aria-label="Search Anything ..."
                                    aria-describedby="button-addon2">
                                <button class="ti-btn ti-btn-primary !m-0" type="button" id="button-addon2"><i
                                        class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-search-modal -->
        <!-- END FOOTER -->

    </div>

    <!-- SCRIPTS -->
    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ti ti-arrow-narrow-up text-xl"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- POPPER JS -->
    <script src="build/assets/libs/%40popperjs/core/umd/popper.min.js"></script>

    <!-- NODE WAVES JS -->
    <script src="build/assets/libs/node-waves/waves.min.js"></script>

    <!-- COLOR PICKER JS -->
    <script src="build/assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>
    <script src="build/assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- SWITCH JS -->
    <script src="build/assets/switch.js"></script>

    <!-- PRELINE JS -->
    <script src="build/assets/libs/preline/preline.js"></script>

    <!-- SIMPLEBAR JS -->
    <script src="build/assets/libs/simplebar/simplebar.min.js"></script>
    <link rel="modulepreload" href="build/assets/simplebar-B35Aj-bA.js">
    <script type="module" src="build/assets/simplebar-B35Aj-bA.js"></script>

    <!-- Auto Complete JS -->
    <script src="build/assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    <!-- STICKY JS -->
    <script src="build/assets/sticky.js"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="build/assets/app-BWLTUmy_.js">
    <script type="module" src="build/assets/app-BWLTUmy_.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="build/assets/custom-switcher-kd-POPJw.js">
    <script type="module" src="build/assets/custom-switcher-kd-POPJw.js"></script>
      <!-- Add jQuery CDN -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            generateRequest(); // Automatically generate GET request on load
        });


        /*
        // api webhook
        */

        // 🟢 Toggle Webhook Status
function toggleWebhookStatus() {
    const toggle = document.getElementById("webhookStatusToggle");
    const statusText = document.getElementById("webhookStatusText");

    $.ajax({
        url: '{{ route("webhook-status") }}',
        method: 'POST',
        data: {
            status: toggle.checked ? 'on' : 'off',
            _token: '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                const webhookStatus = response.webhook_status;
                statusText.innerHTML = `Status: <span class="font-bold ${webhookStatus === 'on' ? 'text-success' : 'text-danger'}">${webhookStatus}</span>`;
                Toastify({
                    text: `Webhook Status turned ${webhookStatus.toUpperCase()}!`,
                    duration: 3000,
                    backgroundColor: webhookStatus === 'on' ? "#4CAF50" : "#F44336"
                }).showToast();
            }
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
            toggle.checked = !toggle.checked;  // Revert on error
            Toastify({
                text: "Failed to update webhook status!",
                duration: 3000,
                backgroundColor: "#F44336"
            }).showToast();
        }
    });
}

// 🟢 Copy Webhook URL
function copyWebhookUrl() {
    const urlInput = document.getElementById("webhookUrl");
    urlInput.select();
    document.execCommand("copy");
    Toastify({
        text: "Webhook URL copied!",
        duration: 2000,
        backgroundColor: "#4CAF50"
    }).showToast();
}

// 🟢 Update Webhook URL
function updateWebhookUrl() {
    const url = document.getElementById("webhookUrl").value;

    $.ajax({
        url: '{{ route("update-webhook") }}',
        method: 'POST',
        data: {
            webhook_url: url,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            if (response.status === 'success') {
                Toastify({
                    text: "Webhook URL updated!",
                    duration: 3000,
                    backgroundColor: "#4CAF50"
                }).showToast();
            }
        },
        error: function(xhr) {
            console.error("Error:", xhr);
            Toastify({
                text: "Failed to update webhook URL!",
                duration: 3000,
                backgroundColor: "#F44336"
            }).showToast();
        }
    });
}

// 🟢 Test Webhook
function testWebhook() {
    $.ajax({
        url: '{{ route("test-webhook") }}',
        method: 'GET',
        success: function(response) {
            Toastify({
                text: "Webhook test sent!",
                duration: 3000,
                backgroundColor: "#4CAF50"
            }).showToast();
        },
        error: function(xhr) {
            console.error("Error:", xhr);
            Toastify({
                text: "Failed to send test webhook!",
                duration: 3000,
                backgroundColor: "#F44336"
            }).showToast();
        }
    });
}

// 🟢 Clear Webhook Logs
function clearWebhookLogs() {
    $('#webhookLogs').html('<p class="text-gray-500">No logs available...</p>');
    Toastify({
        text: "Webhook logs cleared!",
        duration: 3000,
        backgroundColor: "#4CAF50"
    }).showToast();
}


        function toggleApiStatus() {
            const toggle = document.getElementById("apiStatusToggle");
            const statusText = document.getElementById("apiStatusText");

            const previousState = toggle.checked; // Store previous state

            $.ajax({
                url:'{{ route("api-status") }}',
                method:'POST',
                data:{
                    status:toggle.checked ? 'on' : 'off',
                    _token:'{{ csrf_token() }}'
                },
                dataType:'json',
                success:function(response){
                    if(response.status == 'success'){

                        const apiStatus = response.api_status;  // Use returned status
                        const isOn = apiStatus === 'on';
                         // Update the UI with the returned status
                        toggle.checked = isOn;
                        statusText.innerHTML = `Status: <span class="font-bold ${isOn ? 'text-success' : 'text-danger'}">${apiStatus}</span>`;

                        Toastify({
                            text: `API Status turned ${apiStatus.toUpperCase()}!`,
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: isOn ? "#4CAF50" : "#F44336",  // Green for ON, Red for OFF
                            stopOnFocus: true,
                        }).showToast();


                    } else{
                        console.error("Failed to update status:", response.message);

                        // Restore previous state on failure
                        toggle.checked = previousState;

                        // Error toast
                        Toastify({
                            text: "Failed to update status!",
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#F44336",
                            stopOnFocus: true,
                        }).showToast();
                    }
                },
                error:function(xhr,status,error){
                    console.error("Error:", error);

                    // Restore the previous state on error
                    toggle.checked = previousState;

                    // Display error toast
                    Toastify({
                        text: "Error updating API status!",
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#F44336",
                        stopOnFocus: true,
                    }).showToast();
                }


            })

          
        }

        // Toggle API Key Visibility
        function toggleKeyVisibility() {
            const apiKeyInput = document.getElementById("apiKey");
            const button = event.target;

            if (apiKeyInput.type === "password") {
                apiKeyInput.type = "text";
                button.textContent = "🙈 Hide";
            } else {
                apiKeyInput.type = "password";
                button.textContent = "👁️ Show";
            }
        }

        // Copy API Key to Clipboard
        function copyApiKey() {
            const apiKeyInput = document.getElementById("apiKey");

            // Create a temporary textarea element to copy content
            const textarea = document.createElement("textarea");
            textarea.value = apiKeyInput.value;
            document.body.appendChild(textarea);

            // Select and copy the content
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);

            Toastify({
                text: "API Key copied to clipboard!",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "info",
                stopOnFocus: true,
            }).showToast();
        }

        // Generate New API Key (AJAX)
        function generateNewApiKey() {

            // AJAX request to the backend to generate new API key
            $.ajax({
                url: '{{ route("apikey") }}',    // Replace with your actual API route
                method: 'GET',
                dataType: 'json',
                success: function(response) {

                    // Assuming the new API key is returned in the response
                    
                    const newKey = response.api_key;

                    // Update the displayed API key
                    document.getElementById("apiKey").value = newKey;

                    // Show success toast
                    Toastify({
                        text: "New API Key generated!",
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#4CAF50", // Green success color
                        stopOnFocus: true,
                    }).showToast();
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);

                    // Show error toast
                    Toastify({
                        text: "Failed to generate API Key!",
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#F44336", // Red error color
                        stopOnFocus: true,
                    }).showToast();
                }
            });
        }


        function copyToClipboard() {
            const urlElement = document.getElementById("overallUrl");
            const textToCopy = urlElement.innerText.trim();

            // Create a temporary textarea to copy text
            const textarea = document.createElement("textarea");
            textarea.value = textToCopy;
            document.body.appendChild(textarea);

            // Select and copy the text
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);

            // Show success message
            Toastify({
                text: "URL copied to clipboard!",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "info",
                stopOnFocus: true,
            }).showToast();
        }


        function generateRequest() {
            const method = document.getElementById("method").value;
            const route = document.getElementById("route").value;
            const otpValue = document.getElementById("otpValue").value || "123456"; // Default value
            const phoneNumber = document.getElementById("phoneNumber").value || "9876543210"; // Default value

            const apiKey = "{{ Auth::user()->api_key }}"; // Replace with your actual key

            let apiRequest = "";
            let overallUrl = "";

            if (method === "GET") {
                overallUrl = `https://api.fast2otp.com/api/v1/sendOtp?route=${route}&otp=${otpValue}&apikey=${apiKey}&numbers=${phoneNumber}`;
                apiRequest = `
GET ${overallUrl}
Query Parameters:
    route: ${route}
    apikey: ${apiKey}
    otp: ${otpValue}
    numbers: ${phoneNumber}
        `;

                document.getElementById("requestType").innerText = "GET Request";
                // document.getElementById("apiRequest").classList.remove("text-danger");
                // document.getElementById("apiRequest").classList.add("text-success");

            } else {
                overallUrl = `https://api.fast2otp.com/api/v1/sendOtp`;
                apiRequest = `
POST ${overallUrl}
Content-Type: application/json
Body:
{
    "route": "${route}",
    "apikey": "${apiKey}",
    "value": "${otpValue}",
    "numbers": "${phoneNumber}"
}
        `;

                document.getElementById("requestType").innerText = "POST Request";
                // document.getElementById("apiRequest").classList.remove("text-success");
                // document.getElementById("apiRequest").classList.add("text-danger");
            }

            // Update the UI in real time
            document.getElementById("apiRequest").innerText = apiRequest;
            document.getElementById("overallUrl").innerText = overallUrl;
        }
    </script>

    <!-- END SCRIPTS -->
</body>

</html>
