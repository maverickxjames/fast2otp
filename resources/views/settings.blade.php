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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    {{-- csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <style>
        input:disabled {

            cursor: not-allowed;
            /* Shows 'not-allowed' cursor */
            border: 1px solid #d1d5db;
            /* Subtle border */
            opacity: 0.7;
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
                    {{-- <div class="max-w-[75%] mx-auto"> --}}
                    <div class="max-w-[100%] mx-auto">
                        <div class="box">
                            <ul class="nav nav-tabs tab-style-8 scaleX rounded m-4 profile-settings-tab gap-2 flex flex-wrap"
                                id="settingsTab" role="tablist">
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10 active"
                                        data-hs-tab="#personal-tab" role="tab">Personal Details</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#billing-tab" role="tab">Billing Address</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#security-tab" role="tab">Security</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#password-tab" role="tab">Change Password</button>
                                </li>
                                {{-- <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#mobile-tab" role="tab">Mobile Management</button>
                                </li> --}}
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-danger/10"
                                        data-hs-tab="#account-tab" role="tab">Account Management</button>
                                </li>
                            </ul>
                            <!-- TABS CONTENT -->
                            <div
                                class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">

                                <!-- PERSONAL DETAILS -->
                                <div class="tab-pane show active overflow-hidden p-0 border-0" id="personal-tab"
                                    role="tabpanel">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h5 class="box-title">Account Settings :</h5>
                                                </div>
                                                <div class="box-body">
                                                    <form id="profile-form">
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                            value="{{ $userData->id }}">
                                                        <input type="hidden" name="profile_pic" id="selected-pic"
                                                            value="{{ $userData->profile_pic }}">

                                                        <div class="xl:col-span-12 col-span-12 mb-5">
                                                            <div class="flex items-start flex-wrap gap-4">
                                                                <div>
                                                                    <span class="avatar avatar-xxl">
                                                                        <img id="current-pic"
                                                                            src="build/assets/images/profile/{{ $userData->profile_pic }}.jpg"
                                                                            alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="font-medium block mb-2">Profile
                                                                        Picture</span>
                                                                    <div class="btn-list mb-1">
                                                                        <button type="button"
                                                                            class="ti-btn ti-btn-sm ti-btn-primary btn-wave"
                                                                            data-hs-overlay="#hs-vertically-centered-modal">
                                                                            <i class="ri-upload-2-line me-1"></i>Change
                                                                            Image
                                                                        </button>
                                                                        <button type="button"
                                                                            class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave"
                                                                            onclick="removeProfilePic()">
                                                                            <i
                                                                                class="ri-delete-bin-line me-1"></i>Remove
                                                                        </button>
                                                                    </div>
                                                                    <span
                                                                        class="block text-xs text-textmuted dark:text-textmuted/50">
                                                                        Use JPEG, PNG, or GIF. Best size: 200x200
                                                                        pixels. Keep it under 5MB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <!-- Modal -->
                                                    <div id="hs-vertically-centered-modal"
                                                        class="hs-overlay hidden ti-modal">
                                                        <div
                                                            class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                                            <div class="ti-modal-content w-full max-w-[600px] mx-auto">
                                                                <div class="ti-modal-header">
                                                                    <h6 class="modal-title text-[1rem] font-semibold">
                                                                        Select Profile Picture</h6>
                                                                    <button type="button"
                                                                        class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#hs-vertically-centered-modal">
                                                                        <span class="sr-only">Close</span>
                                                                        <i class="ri-close-line"></i>
                                                                    </button>
                                                                </div>

                                                                <div class="ti-modal-body grid grid-cols-4 gap-4">
                                                                    @foreach ($profile as $pic)
                                                                        @if ($pic->name != 17)
                                                                            <div class="border-0 rounded-md p-2 cursor-pointer"
                                                                                onclick="selectPic('{{ $pic->name }}')"
                                                                                id="pic-{{ $pic->name }}">
                                                                                <img src="build/assets/images/profile/{{ $pic->name }}.jpg"
                                                                                    alt="Profile"
                                                                                    class="w-full h-auto">
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>

                                                                <div class="ti-modal-footer flex justify-end">
                                                                    <button type="button"
                                                                        class="ti-btn ti-btn-secondary btn-wave"
                                                                        data-hs-overlay="#hs-vertically-centered-modal">
                                                                        Close
                                                                    </button>
                                                                    <button type="button"
                                                                        class="ti-btn ti-btn-primary btn-wave"
                                                                        onclick="saveProfilePic()">
                                                                        Save changes
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <form id="user-profile-form" class="ti-validation">
                                                        @csrf
                                                        <div class="grid lg:grid-cols-2 gap-6">
                                                            <div class="space-y-2">
                                                                <label
                                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Full
                                                                    Name</label>
                                                                <input type="text"
                                                                    class="my-auto ti-form-input  rounded-sm "
                                                                    value="{{ $userData->name ? $userData->name : '' }}"
                                                                    name="name" placeholder="Fullname"
                                                                    required="">
                                                            </div>
                                                            <div class="space-y-2">
                                                                <label
                                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Phone
                                                                    Number</label>
                                                                <input type="tel"
                                                                    class="my-auto ti-form-input rounded-sm"
                                                                    value="{{ $userData->phone ? '+91 ' . $userData->phone : '' }}"
                                                                    placeholder="+91 123-456-789"
                                                                    pattern="^\[0-9]{10}$" required disabled>


                                                            </div>

                                                            <div class="space-y-2">
                                                                <label
                                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Email
                                                                    Address</label>
                                                                <input type="email"
                                                                    class="my-auto ti-form-input  rounded-sm"
                                                                    value="{{ $userData->email ? $userData->email : '' }}"
                                                                    placeholder="your@site.com" required=""
                                                                    disabled>
                                                            </div>
                                                            <div class="space-y-2">
                                                                <label
                                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Date
                                                                    Of Birth</label>
                                                                <input type="text" id="dob" name="dob"
                                                                    class="ti-form-input rounded-sm flatpickr-input"
                                                                    placeholder="Select your date of birth"
                                                                    value="{{ $userData->dob ?? '' }}" required>
                                                            </div>
                                                            <!-- Gender -->
                                                            <div class="space-y-2">
                                                                <label
                                                                    class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Gender</label>
                                                                <ul class="flex flex-col sm:flex-row">

                                                                    <!-- Female -->
                                                                    <li
                                                                        class="ti-list-group w-full gap-x-2.5 flex py-2 px-4">
                                                                        <div class="relative flex items-start w-full">
                                                                            <div class="flex items-center h-5">
                                                                                <input id="gender-female"
                                                                                    name="gender" type="radio"
                                                                                    class="ti-form-radio"
                                                                                    value="Female"
                                                                                    {{ $userData->gender == 'Female' ? 'checked' : '' }}>
                                                                            </div>
                                                                            <label for="gender-female"
                                                                                class="ms-3 block w-full text-sm">Female</label>
                                                                        </div>
                                                                    </li>

                                                                    <!-- Male -->
                                                                    <li
                                                                        class="ti-list-group w-full gap-x-2.5 flex py-2 px-4">
                                                                        <div class="relative flex items-start w-full">
                                                                            <div class="flex items-center h-5">
                                                                                <input id="gender-male" name="gender"
                                                                                    type="radio"
                                                                                    class="ti-form-radio"
                                                                                    value="Male"
                                                                                    {{ $userData->gender == 'Male' ? 'checked' : '' }}>
                                                                            </div>
                                                                            <label for="gender-male"
                                                                                class="ms-3 block w-full text-sm">Male</label>
                                                                        </div>
                                                                    </li>

                                                                    <!-- Others -->
                                                                    <li
                                                                        class="ti-list-group w-full gap-x-2.5 flex py-2 px-4">
                                                                        <div class="relative flex items-start w-full">
                                                                            <div class="flex items-center h-5">
                                                                                <input id="gender-others"
                                                                                    name="gender" type="radio"
                                                                                    class="ti-form-radio"
                                                                                    value="Others"
                                                                                    {{ $userData->gender == 'Others' ? 'checked' : '' }}>
                                                                            </div>
                                                                            <label for="gender-others"
                                                                                class="ms-3 block w-full text-sm">Others</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>


                                                        </div>
                                                        <div class="box-footer border-t-1 mt-10">
                                                            <div class="btn-list float-end">
                                                                <button type="submit"
                                                                    onclick="updateUserProfile(event)"
                                                                    class="ti-btn ti-btn-primary btn-wave">Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                        {{-- <button type="submit" class="ti-btn ti-btn-primary">Submit</button> --}}
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <!-- BILLING ADDRESS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="billing-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Billing Address</div>

                                    <form id="billing-form" class="airstrike-form">
                                        @csrf
                                        <div class="grid grid-cols-12 gap-4">

                                            <!-- Company Name (Optional) -->
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Company Name: <span
                                                        class="text-gray-500">(Optional)</span></label>
                                                <input type="text" class="form-control" name="company"
                                                    placeholder="Enter Company Name"
                                                    value="{{ $billing->company_name ? $billing->company_name : '' }}">
                                            </div>

                                            <!-- Address Line 1 (Required) -->
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Address Line 1<span class="text-red-500">
                                                        *</span></label>
                                                <input type="text" class="form-control" name="address1"
                                                    placeholder="Enter Address 2"
                                                    value="{{ $billing->address1 ? $billing->address1 : '' }}"
                                                    required>
                                            </div>

                                            <!-- Address Line 2 (Optional) -->
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Address Line 2 <span
                                                        class="text-gray-500">(Optional)</span></label>
                                                <input type="text" class="form-control" name="address2"
                                                    value="{{ $billing->address2 ? $billing->address2 : '' }}"
                                                    placeholder="Enter Address 2">
                                            </div>

                                            <!-- City (Required) -->
                                            <div class="xl:col-span-4 col-span-12">
                                                <label class="form-label">City <span class="text-red-500">
                                                        *</span></label>
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="Enter City"
                                                    value="{{ $billing->city ? $billing->city : '' }}" required>
                                            </div>

                                            <!-- State (Required) -->
                                            <div class="xl:col-span-4 col-span-12">
                                                <label class="form-label">State <span class="text-red-500">
                                                        *</span></label>
                                                <input type="text" class="form-control" name="state"
                                                    placeholder="Enter State"
                                                    value="{{ $billing->state ? $billing->state : '' }}" required>
                                            </div>

                                            <!-- ZIP Code (Required) -->
                                            <div class="xl:col-span-4 col-span-12">
                                                <label class="form-label">ZIP Code <span class="text-red-500">
                                                        *</span></label>
                                                <input type="text" class="form-control" name="zip"
                                                    placeholder="Enter ZIP"
                                                    value="{{ $billing->zip ? $billing->zip : '' }}" required
                                                    pattern="^[0-9]{5,6}$">
                                            </div>
                                        </div>

                                        <div class="box-footer border-t-1 mt-10">
                                            <div class="btn-list float-end">
                                                <button type="submit" onclick="saveBillingAddress(event)"
                                                    class="ti-btn ti-btn-primary btn-wave">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <!-- SECURITY -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="security-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Security Settings</div>
                                    <p>Enable Two-Factor Authentication (2FA)</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="2fa">
                                        <label class="form-check-label" for="2fa">Enable 2FA</label>
                                    </div>
                                </div>

                                <!-- PASSWORD SECTION -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="password-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Change Password</div>
                                    <form id="password-form" class="ti-validation">
                                          @csrf
                                        <div class="grid grid-cols-12 gap-6">
                                            <div class="col-span-12">
                                                <label for="current_password" class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Current
                                                    Password</label>
                                                <input type="password" name="current_password" id="current_password"
                                                    class="my-auto ti-form-input rounded-sm" placeholder="**********"
                                                    required>
                                            </div>
                                            <div class="col-span-12">
                                                <label for="new_password" class="ti-form-label dark:text-defaulttextcolor/80 mb-0">New
                                                    Password</label>
                                                <input type="password" name="new_password" id="new_password"
                                                    class="my-auto ti-form-input rounded-sm" placeholder="**********"
                                                    required>
                                            </div>
                                            <div class="col-span-12">
                                                <label for="confirm_password" class="ti-form-label dark:text-defaulttextcolor/80 mb-0">Confirm
                                                    New Password</label>
                                                <input type="password" name="confirm_password" id="confirm_password"
                                                    class="my-auto ti-form-input rounded-sm"
                                                    placeholder="**********" required>
                                            </div>
                                        </div>

                                    <div class="box-footer border-t-1 mt-10">
                                        <div class="btn-list float-end">
                                            <!-- Button to Open Password Change Page -->
                                            <button type="submit"  class="ti-btn ti-btn-primary btn-wave">
                                                Change Password
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <!-- ACCOUNT MANAGEMENT -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="account-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Account Management</div>
                                    <button onclick="accountAction('{{ $userData->status=='active' ? 'disable' : 'enable' }}')" class="ti-btn ti-btn-danger">{{ $userData->status=='active' ? 'Disable' : 'Enable' }} Account</button>
                                    <button onclick="accountAction('delete')" class="ti-btn ti-btn-danger">Delete Account</button>
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



    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- toastify --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- STICKY JS -->
    <script src="build/assets/sticky.js"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="build/assets/app-BWLTUmy_.js">
    <script type="module" src="build/assets/app-BWLTUmy_.js"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="build/assets/custom-switcher-kd-POPJw.js">
    <script type="module" src="build/assets/custom-switcher-kd-POPJw.js"></script>
    <link rel="modulepreload" href="build/assets/form-validation-DFOXao1S.js">
    <script type="module" src="build/assets/form-validation-DFOXao1S.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- Add jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <script>

        document.getElementById('password-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const currentPassword = document.getElementById('current_password').value;
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if(currentPassword === ''){
                Toastify({
                    text: "Current password is required.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#ff5f6d"
                }).showToast();
                return;
            }

            if(newPassword === '') {
                Toastify({
                    text: "New password is required.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#ff5f6d"
                }).showToast();
                return;
            }

            if(confirmPassword === '') {
                Toastify({
                    text: "Confirm password is required.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#ff5f6d"
                }).showToast();
                return;
            }



            if (newPassword !== confirmPassword) {
                Toastify({
                    text: "New password and confirmation do not match.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#ff5f6d"
                }).showToast();
                return;
            }

            // AJAX call to update password
            $.ajax({
                url: "{{ route('update-password') }}", // Your backend route
                type: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                    current_password: currentPassword,
                    new_password: newPassword,
                    confirm_password: confirmPassword
                },
                success: function(response) {
                    if (response?.success) {
                        Toastify({
                            text: "Password updated successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#00b09b"
                        }).showToast();
                        $('#password-form')[0].reset(); // Reset the form
                        // Optionally, you can redirect or perform other actions

                    } else {
                        Toastify({
                            text: response?.message || "Failed to update password",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#ff5f6d"
                        }).showToast();
                    }
                },
                error: function(response) {
                    Toastify({
                        text: response.responseJSON?.message || "Something went wrong. Please try again.",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#ff5f6d"
                    }).showToast();
                }
            });
        });
        // Select profile picture
        function selectPic(fileName) {
            document.getElementById('selected-pic').value = fileName;

            // Highlight selected image
            // document.querySelectorAll('.ti-modal-body div').forEach(el => {
            //     el.classList.remove('border-blue-500');
            // });

            document.getElementById(`pic-${fileName}`).classList.add('border-4', 'border-dark');
        }



        // AJAX call to save the selected profile picture
        function saveProfilePic() {
            const formData = new FormData(document.getElementById('profile-form'));

            $.ajax({
                url: "{{ route('update-profile-pic') }}", // Laravel route
                method: "POST",
                data: formData,
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting contentType
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val() // CSRF token for security
                },
                success: function(response) {
                    if (response.success) {
                        // Update current profile image
                        $('#current-pic').attr('src', `build/assets/images/profile/${response.name}.jpg`);
                        document.getElementById(`pic-${response.name}`).classList.remove('border-4',
                            'border-dark');

                        $('#hs-vertically-centered-modal').addClass('hidden');

                        // ✅ Remove the backdrop manually
                        $('#hs-vertically-centered-modal-backdrop').remove();

                        // Show success Toastify notification
                        Toastify({
                            text: "Profile picture updated successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#00b09b"
                        }).showToast();
                    } else {
                        // Show error Toastify notification
                        $('#hs-vertically-centered-modal').addClass('hidden');

                        // ✅ Remove the backdrop manually
                        $('#hs-vertically-centered-modal-backdrop').remove();
                        Toastify({
                            text: "Failed to update profile picture",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#ff5f6d"
                        }).showToast();
                    }

                    // Close the modal
                    // $('[data-hs-overlay="#hs-vertically-centered-modal"]').click();
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    Toastify({
                        text: "Something went wrong. Please try again.",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)"
                    }).showToast();
                }
            });
        }


        function removeProfilePic() {
            $.ajax({
                url: "{{ route('remove-profile-pic') }}", // Your backend route
                type: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                    profile_pic: '17' // Set the default profile picture to 17
                },
                success: function(response) {
                    if (response.success) {
                        // ✅ Update the current image to 17.jpg
                        document.getElementById('current-pic').src = 'build/assets/images/profile/17.jpg';

                        // ✅ Show Toastify notification
                        Toastify({
                            text: "Profile picture removed successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)"
                        }).showToast();
                    } else {
                        // ❌ Handle error
                        Toastify({
                            text: "Failed to remove profile picture",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)"
                        }).showToast();
                    }
                },
                error: function() {
                    // ❌ Handle AJAX error
                    Toastify({
                        text: "Something went wrong!",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)"
                    }).showToast();
                }
            });
        }
    </script>
    <!-- END SCRIPTS -->

    

    <script>
        function accountAction(action) {
            if (action === 'disable') {
                // Disable account logic
                $.ajax({
                    url: "{{ route('disable-account') }}", // Your route
                    type: "POST",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Toastify({
                            text: response.message || "Account disabled successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#00b09b"
                        }).showToast();

                        // refresh page
                        location.reload();

                        
                    },
                    error: function(xhr, status, error) {
                        Toastify({
                            text: "Error disabling account",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#ff5f6d"
                        }).showToast();
                    }
                });
            } else if(action == 'enable') {
                // Enable account logic
                $.ajax({
                    url: "{{ route('enable-account') }}", // Your route
                    type: "POST",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Toastify({
                            text: response.message || "Account enabled successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#00b09b"
                        }).showToast();
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        Toastify({
                            text: "Error enabling account",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#ff5f6d"
                        }).showToast();
                    }
                });

            }else if (action === 'delete') {
                // Delete account logic
                $.ajax({
                    url: "{{ route('delete-account') }}", // Your route
                    type: "POST",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Toastify({
                            text: response.message || "Account deleted successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#00b09b"
                        }).showToast();
                    },
                    error: function(xhr, status, error) {
                        Toastify({
                            text: "Error deleting account",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#ff5f6d"
                        }).showToast();
                    }
                });
            }
        }
        function updateUserProfile(event) {
            event.preventDefault();

            const formData = new FormData(document.getElementById('user-profile-form'));

            $.ajax({
                url: "{{ route('update-user-profile') }}", // Your route
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        Toastify({
                            text: "Profile updated successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#00b09b"
                        }).showToast();
                    } else {
                        // Show error message
                        Toastify({
                            text: "Failed to update profile",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#ff5f6d"
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Toastify({
                        text: "Error updating profile",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#ff5f6d"
                    }).showToast();
                }
            });
        }

        function saveBillingAddress() {
            event.preventDefault();
            const formData = new FormData(document.getElementById('billing-form'));
            console.log(formData);


            $.ajax({
                url: "{{ route('billing.save') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    if (response.success) {
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    console.error("Error:", xhr);
                }
            });
        }

    </script>

</body>

</html>
