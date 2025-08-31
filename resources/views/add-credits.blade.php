@php
    $user=Auth::user();
@endphp

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
        @media (min-width: 768px) {

            /* md breakpoint */
            .left-section {
                width: 50%;
            }

            .right-section {
                width: 50%;
            }


        }

        .active-plan {
            border: 2px solid #3B82F6;
            background-color: #EFF6FF;
            border-radius: 0.5rem;
        }

        .heading {
            /* background-color: rgb(54, 54, 219); */
            padding: 20px 10px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            margin-bottom: 40px;
        }
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

                            <div
                                class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">

                                <div class="font-semibold bg-gray-600 heading block text-[18px] text-center">Select Plan</div>
                                <div class="flex flex-col md:flex-row lg:flex-row gap-6">
                                    <!-- Left Section (Form) -->
                                    <div class="w-full left-section">
                                        <div class="box py-6 rounded-lg shadow-lg">


                                            <div class="box-body ">

                                                <!-- Amount -->
                                                <div class="mb-4">
                                                    <label for="amount"
                                                        class="ti-form-label text-[.875rem] text-black text-xl font-semibold">Amount
                                                        <span class="text-red-500">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text bg:gray-900">₹
                                                        </div>
                                                        <input type="text"
                                                            class="form-control w-full p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="amount" placeholder="Enter amount" value="100"
                                                            onchange="updateSelectedPlan(this.value)">
                                                    </div>
                                                </div>


                                                <div
                                                    class="space-y-4 mt-2 w-full md:w-1/2 lg:w-1/2 mx-auto px-2 md:px-10">
                                                    <!-- DLS SMS Volume -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>DLS SMS Volume</p>
                                                        <p id="dlsSmsVolume">100</p>
                                                    </div>

                                                    <!-- DLS SMS Cost -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>DLS SMS Cost</p>
                                                        <p id="dlsSmsCost">100</p>
                                                    </div>

                                                    <!-- Validity -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>Validity</p>
                                                        <p id="validity">100</p>
                                                    </div>

                                                    <!-- GST -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>GST (18%)</p>
                                                        <p id="gst">100</p>
                                                    </div>

                                                    <!-- Total Payable -->
                                                    <div
                                                        class="flex justify-between items-center text-lg font-semibold border-t pt-4">
                                                        <p>Total Payable</p>
                                                        <p id="totalPayable">100</p>
                                                    </div>
                                                </div>



                                                <!-- Buttons -->
                                                <div class="flex justify-center items-center w-full">
                                                    <button type="button"
                                                        class="bg-blue-500 text-dark px-8 text-xl py-2 rounded-lg hover:bg-blue-800 transition">
                                                        Next
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Section (API Request Display) -->
                                    <div class="w-full right-section">
                                        <div class="box rounded-lg shadow-lg">
                                                <table style="border-radius: 20px" class="table min-w-full border rounded-lg border-gray-300 dark:border-gray-700">
                                                    <thead class="bg-gray-600 rounded-lg dark:bg-gray-800 text-white">
                                                        <tr>
                                                            <th scope="col" style="padding: 1rem 1.5rem;font-size:1.2rem;font-weight:600;text-align:center;"
                                                                class="text-start px-4 py-2 border text-lg font-semibold border-gray-300 dark:border-gray-700">
                                                                Amount</th>
                                                            <th scope="col" style="padding: 1rem 1.5rem;font-size:1.2rem;font-weight:600;text-align:center;"
                                                                class="text-start px-4 py-2 border text-lg font-semibold border-gray-300 dark:border-gray-700">
                                                                SMS Cost</th>
                                                            <th scope="col" style="padding: 1rem 1.5rem;font-size:1.2rem;font-weight:600;text-align:center;"
                                                                class="text-start px-4 py-2 border text-lg font-semibold border-gray-300 dark:border-gray-700">
                                                                SMS Cost Validity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class=" dark:bg-gray-900 text-gray-900 dark:text-gray-100">
                                                        @foreach ($message_plans as $plan)
                                                            <tr class="" id="plan-{{ $plan->plan_uuid }}"
                                                                data-min="{{ $plan->min_amount }}"
                                                                data-max="{{ $plan->max_amount }}"
                                                                data-cost="{{ $plan->sms_cost }}"
                                                                data-validity="{{ $plan->validity_months == 0 ? 'Unlimited' : $plan->validity_months . ' Months' }}">
                                                                >
                                                                <td style="padding: 1rem 1.25rem"
                                                                    class="text-start px-4 py-5 border border-gray-300 dark:border-gray-700">
                                                                    ₹ {{ $plan->min_amount }} -
                                                                    {{ $plan->max_amount }}
                                                                </td>
                                                                <td style="padding: 1rem 1.25rem"
                                                                    class="text-start px-4 py-5 border border-gray-300 dark:border-gray-700">
                                                                    ₹ {{ $plan->sms_cost }} SMS
                                                                </td>
                                                                <td style="padding: 1rem 1.25rem"
                                                                    class="text-start px-4 py-5 border border-gray-300 dark:border-gray-700">
                                                                    {{ $plan->validity_months == 0 ? 'Unlimited' : $plan->validity_months . ' Months' }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                <!-- Start::row-1 -->

                <div class="">
                    <div class="max-w-[100%] mx-auto">
                        <div class="box">

                            <div
                                class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">
                                <div class="font-semibold bg-gray-600 heading block text-[18px] text-center">Complete Your Billing
                                </div>
                                <div class="flex flex-col md:flex-row lg:flex-row gap-6">
                                    <!-- Left Section (Form) -->
                                    <div class="w-full left-section">
                                        <div class="box py-6 rounded-lg shadow-lg">


                                            <div class="box-body ">

                                                <div class="mb-6">
                                                    <label
                                                        class="ti-form-label text-[.875rem] text-black text-xl font-semibold">
                                                        Select Service <span class="text-red-500">*</span>
                                                    </label>

                                                    <div class="flex flex-col md:flex-row gap-4 mt-4">

                                                        <!-- SMS OTP Option -->
                                                        <label
                                                            class="flex items-start w-full md:w-1/2 cursor-pointer active-plan">

                                                            <div
                                                                class="w-full p-5 border rounded-xl transition
                                                                        border-gray-300  
                                                                        peer-checked:border-blue-600 peer-checked:bg-blue-50 peer-checked:shadow-lg">
                                                                <div class="flex items-center mb-2 gap-2">
                                                                    <input
                                                                        class="w-5 h-5 rounded-full border-2 border-gray-400 
                                                                          peer-checked:border-blue-600 peer-checked:bg-blue-600 mr-2"
                                                                        type="radio" name="creditType"
                                                                        value="sms" class="peer" checked>
                                                                    <span
                                                                        class="font-semibold text-lg text-gray-900">SMS
                                                                        OTP Credits</span>
                                                                </div>
                                                                <p class="text-gray-600 text-sm">One-time passwords via
                                                                    SMS for secure authentication</p>
                                                            </div>
                                                        </label>

                                                        <!-- Voice OTP Option -->
                                                        <label
                                                            class="flex items-start w-full md:w-1/2 cursor-pointer  ">

                                                            <div
                                                                class="w-full p-5 border rounded-xl transition
                                                                        border-gray-300
                                                                        peer-checked:border-blue-600 peer-checked:bg-blue-50 peer-checked:shadow-lg">
                                                                <div class="flex items-center mb-2 gap-2">
                                                                    <input
                                                                        class="w-5 h-5 rounded-full border-2 border-gray-400 
                                                                                peer-checked:border-blue-600 peer-checked:bg-blue-600 mr-2"
                                                                        type="radio" name="creditType"
                                                                        value="voice" class="hidden peer">
                                                                    <span
                                                                        class="font-semibold text-lg text-gray-900">Whatsapp
                                                                        OTP Credits</span>
                                                                </div>
                                                                <p class="text-gray-600 text-sm">One-time passwords via
                                                                    Whatsapp for enhanced security</p>
                                                            </div>
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="mb-6">
                                                    <label
                                                        class="ti-form-label text-[.875rem] text-black text-xl font-semibold">
                                                        Billing Information <span class="text-red-500">*</span>
                                                    </label>

                                                </div>



                                                <div class="mb-4">
                                                    <label for="billing_number"
                                                        class="ti-form-label text-[.875rem] text-black text-lg font-semibold">Billing Number
                                                        <span class="text-red-500">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class=" w-full bg-gray-100 text-gray-600 p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="billing_number" placeholder="Enter billing number" value="{{ $user->phone }}" readonly
                                                           >
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="billing_email"
                                                        class="ti-form-label text-[.875rem] text-black text-lg font-semibold">Billing Email
                                                        <span class="text-red-500">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class=" w-full bg-gray-100 text-gray-600 p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="billing_email" placeholder="Enter billing email" value="{{ $user->email }}" readonly
                                                           >
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="full_name"
                                                        class="ti-form-label text-[.875rem] text-black text-lg font-semibold">Your Full Name
                                                        <span class="text-red-500">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class=" w-full bg-gray-100 text-gray-600 p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="full_name" placeholder="Enter your full name" value="{{ $user->name }}">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="billing_name"
                                                        class="ti-form-label text-[.875rem] text-black text-lg font-semibold">Billing Name/Company Name
                                                        <span class="text-red-500">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class=" w-full bg-gray-100 text-gray-600 p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="billing_name" placeholder="Enter billing name/company name" value="{{ $user->company_name }}">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="billing_address"
                                                        class="ti-form-label text-[.875rem] text-black text-lg font-semibold">Billing Address
                                                        <span class="text-red-500">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class=" w-full bg-gray-100 text-gray-600 p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="billing_address" placeholder="Enter billing address" value="{{ $user->address1 }}">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="gst_number"
                                                        class="ti-form-label text-[.875rem] text-black text-lg font-semibold">GST Number (if Available)
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class=" w-full bg-gray-100 text-gray-600 p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="gst_number" placeholder="Enter GST number" value="{{ $user->gst_number }}">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="pan_number"
                                                        class="ti-form-label text-[.875rem] text-black text-lg font-semibold">PAN Number
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class=" w-full bg-gray-100 text-gray-600 p-2 border rounded bg-light text-dark text-xl font-bold focus:ring-0 focus:outline-none border-gray-900"
                                                            id="pan_number" placeholder="Enter PAN number" value="{{ $user->pan_number }}">
                                                    </div>
                                                </div>
                                                        
                                                       

                                              


                                                <!-- Buttons -->
                                                <div class="flex justify-center items-center w-full">
                                                    <button type="button"
                                                        class="bg-blue-500 text-dark px-8 text-xl py-2 rounded-lg hover:bg-blue-800 transition">
                                                        Next
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Section (API Request Display) -->
                                    <div class="w-full right-section">
                                        <div class="box rounded-lg shadow-lg">
                                            <div class="box-title text-xl font-semibold">Order Summary</div>
                                            <div class="box-content">
                                                <div
                                                    class="space-y-4 mt-2 w-full md:w-1/2 lg:w-1/2 mx-auto px-2 md:px-10">
                                                    <!-- DLS SMS Volume -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>DLS SMS Volume</p>
                                                        <p id="dlsSmsVolume">100</p>
                                                    </div>
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>DLS SMS Volume</p>
                                                        <p id="dlsSmsVolume">100</p>
                                                    </div>

                                                    <!-- DLS SMS Cost -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>DLS SMS Cost</p>
                                                        <p id="dlsSmsCost">100</p>
                                                    </div>

                                                    <!-- Validity -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>Validity</p>
                                                        <p id="validity">100</p>
                                                    </div>

                                                    <!-- GST -->
                                                    <div class="flex justify-between items-center text-lg">
                                                        <p>GST (18%)</p>
                                                        <p id="gst">100</p>
                                                    </div>

                                                    <!-- Total Payable -->
                                                    <div
                                                        class="flex justify-between items-center text-lg font-semibold border-t pt-4">
                                                        <p>Total Payable</p>
                                                        <p id="totalPayable">100</p>
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
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        <!-- MAIN-CONTENT -->

        <!-- FOOTER -->
        <x-footer />

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
        let messagePlans = @json($message_plans);
        document.addEventListener('DOMContentLoaded', () => {
            const amountInput = document.getElementById("amount");
            const amount = parseInt(amountInput.value) || 0;
            updateSelectedPlan(amount);

            // Update plan while typing
            amountInput.addEventListener("input", function() {
                const amount = parseInt(this.value) || 0;
                updateSelectedPlan(amount);
            });
        });

        function updateSelectedPlan(amount) {
            let matchedPlan = null;
            const dlsSmsVolume = document.getElementById("dlsSmsVolume");
            const dlsSmsCost = document.getElementById("dlsSmsCost");
            const validity = document.getElementById("validity");
            const gst = document.getElementById("gst");
            const totalPayable = document.getElementById("totalPayable");

            messagePlans.forEach(row => {
                const min = row.min_amount;
                const max = row.max_amount;

                if (amount >= min && (max === 0 || amount <= max)) {
                    matchedPlan = row;
                }


            });

            messagePlans.forEach(row => {
                const rowEl = document.getElementById("plan-" + row.plan_uuid);
                rowEl.classList.remove("bg-green-600", "dark:bg-green-800");
            });

            if (matchedPlan) {

                dlsSmsVolume.textContent = `${(amount / matchedPlan.sms_cost).toFixed(2)} SMS`;
                dlsSmsCost.textContent = `₹ ${(matchedPlan.sms_cost)}`;
                validity.textContent =
                    `${matchedPlan.validity_months === 0 ? "Unlimited" : matchedPlan.validity_months + " Months"}`;
                gst.textContent = `₹ ${(amount * 0.18).toFixed(2)}`;
                totalPayable.textContent = (amount + parseFloat(amount * 0.18)).toFixed(2);

                const selectPlanTable = document.getElementById("plan-" + matchedPlan.plan_uuid);
                selectPlanTable.classList.add("bg-green-600", "dark:bg-green-800");
            }
        }

        document.querySelectorAll('input[name="creditType"]').forEach(radio => {
  radio.addEventListener('change', () => {
    document.querySelectorAll('.active-plan').forEach(card => card.classList.remove('active-plan'));
    radio.closest('label').classList.add('active-plan');
  });
});

    </script>


    <!-- END SCRIPTS -->
</body>

</html>
