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
                                    <div class="font-semibold block text-[18px] mb-4">Api Key</div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box ">
                                            <div class="box-body">
                                                <p class="mb-0 mt-3 text-xl font-medium leading-none">
                                                    Default Method
                                                </p>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex flex-col md:flex-row lg:flex-row gap-6">
                                                    <div class="w-full lg:w-1/2">
                                                        <div
                                                            class="text-[15px] font-semibold sm:flex block items-center justify-between mb-3">
                                                            <div>Saved Cards :</div>
                                                        </div>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <div
                                                                    class="sm:flex block items-center justify-between border border-info p-1 rounded-md">
                                                                    <div class="me-2 leading-none">
                                                                        <span class="avatar avatar-md">
                                                                            <img src="build/assets/images/ecommerce/png/26.png"
                                                                                alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="saved-card-details">
                                                                        <p class="mb-0 font-semibold">XXXX - XXXX -
                                                                            XXXX - 7646</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full lg:w-1/2">
                                                        <div
                                                            class="text-[15px] font-semibold sm:flex block items-center justify-between mb-3">
                                                            <div>UPI :</div>
                                                        </div>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3 ">
                                                            <div class="xl:col-span-6 col-span-12 ">
                                                                <div
                                                                    class="sm:flex block items-center justify-between">
                                                                    <div
                                                                        class="saved-card-details border border-info px-2 py-4 rounded-md">
                                                                        <p class="mb-0 font-semibold">test@upi</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- SUBSCRIPTION & PLAN MANAGEMENT -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="api-webhook-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Api Webhook
                                    </div>
                                    <div class="flex flex-col md:flex-row lg:flex-row gap-6">
                                        <!-- Current Plan -->
                                        <div class="w-full lg:w-1/2">
                                            <div class="box">
                                                <div class="box-header">
                                                    <div class="box-title">Current Plan</div>
                                                </div>
                                                <div class="box-body">
                                                    <ul class="ti-list-group list-group-flush mb-2">
                                                        <li class="ti-list-group-item">Standard (5,000 OTPs/month)</li>
                                                        <li class="ti-list-group-item">Price: ₹2,250/month</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Usage Details -->
                                        <div class="w-full lg:w-1/2">
                                            <div class="box">
                                                <div class="box-header">
                                                    <div class="box-title">Upgrade Options</div>
                                                </div>
                                                <div class="box-body">
                                                    <ul class="ti-list-group list-group-flush mb-2">
                                                        <li class="ti-list-group-item">Premium (10,000 OTPs/month)
                                                            –<span class="text-success"> ₹4,000 </span></li>
                                                        <li class="ti-list-group-item"><button
                                                                class="ti-btn ti-btn-primary">Upgrade Plan</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- BILLING HISTORY -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="security-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Billing History</div>
                                    <div class="table-responsive">
                                        <table class="ti-custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Invoice #</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>INV-001234</td>
                                                    <td>15-Mar-2025</td>
                                                    <td>₹2,250</td>
                                                    <td><span class="badge bg-success">Paid</span></td>
                                                    <td><button class="ti-btn ti-btn-primary">Download PDF</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>INV-001233</td>
                                                    <td>15-Feb-2025</td>
                                                    <td>₹2,250</td>
                                                    <td><span class="badge bg-success">Paid</span></td>
                                                    <td><button class="ti-btn ti-btn-primary">Download PDF</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>




                                <!-- SUPPORT & FAQ -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="support-faq-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Support & FAQ</div>
                                    <p>💬 Need help? Contact <a href="#">Billing Support</a></p>
                                    <p>❓ How to download invoices?</p>
                                    <p>❓ What happens if a payment fails?</p>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            generateRequest(); // Automatically generate GET request on load
        });

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

            const apiKey = "YOUR_API_KEY"; // Replace with your actual key

            let apiRequest = "";
            let overallUrl = "";

            if (method === "GET") {
                overallUrl = `https://api.fast2otp.com/send-otp?route=${route}&otp=${otpValue}&numbers=${phoneNumber}`;
                apiRequest = `
GET ${overallUrl}
Authorization: Bearer ${apiKey}
Query Parameters:
    route: ${route}
    otp: ${otpValue}
    numbers: ${phoneNumber}
        `;

                document.getElementById("requestType").innerText = "GET Request";
                // document.getElementById("apiRequest").classList.remove("text-danger");
                // document.getElementById("apiRequest").classList.add("text-success");

            } else {
                overallUrl = `https://api.fast2otp.com/send-otp`;
                apiRequest = `
POST ${overallUrl}
Authorization: Bearer ${apiKey}
Content-Type: application/json
Body:
{
    "route": "${route}",
    "otp": "${otpValue}",
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
