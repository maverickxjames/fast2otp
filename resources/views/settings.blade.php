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
                                    <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                        <div class="font-semibold block text-[15px]">Account Settings :</div>
                                        <div class="ti-btn ti-btn-primary ti-btn-sm"><i class="ri-loop-left-line leading-none me-2"></i>Restore Changes</div>
                                    </div>
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="flex items-start flex-wrap gap-4">
                                                <div>
                                                    <span class="avatar avatar-xxl">
                                                        <img src="build/assets/images/faces/9.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="font-medium block mb-2">Profile Picture</span>
                                                    <div class="btn-list mb-1">
                                                        <button class="ti-btn ti-btn-sm ti-btn-primary btn-wave"><i class="ri-upload-2-line me-1"></i>Change Image</button>
                                                        <button class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave"><i class="ri-delete-bin-line me-1"></i>Remove</button>
                                                    </div>
                                                    <span class="block text-xs text-textmuted dark:text-textmuted/50">Use JPEG, PNG, or GIF. Best size: 200x200 pixels. Keep it under 5MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="first-name" class="form-label">First Name:</label>
                                            <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="last-name" class="form-label">Last Name:</label>
                                            <input type="text" class="form-control" id="last-name" placeholder="Enter Last Name">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="email" class="form-label">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="mobile" class="form-label">Mobile:</label>
                                            <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="dob" class="form-label">Date of Birth:</label>
                                            <input type="date" class="form-control" id="dob">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="gender" class="form-label">Gender:</label>
                                            <select class="form-control" id="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- BILLING ADDRESS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="billing-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Billing Address</div>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="form-label">Company Name:</label>
                                            <input type="text" class="form-control" placeholder="Optional">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="form-label">Address Line 1:</label>
                                            <input type="text" class="form-control" placeholder="Enter Address">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label class="form-label">Address Line 2:</label>
                                            <input type="text" class="form-control" placeholder="Optional">
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label class="form-label">City:</label>
                                            <input type="text" class="form-control" placeholder="Enter City">
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label class="form-label">State:</label>
                                            <input type="text" class="form-control" placeholder="Enter State">
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <label class="form-label">ZIP Code:</label>
                                            <input type="text" class="form-control" placeholder="Enter ZIP">
                                        </div>
                                    </div>
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

                                <!-- PASSWORD -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="password-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Change Password</div>
                                    <input type="password" class="form-control" placeholder="Current Password">
                                    <input type="password" class="form-control mt-3" placeholder="New Password">
                                    <input type="password" class="form-control mt-3" placeholder="Confirm Password">
                                </div>

                                <!-- ACCOUNT MANAGEMENT -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="account-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Account Management</div>
                                    <button class="ti-btn ti-btn-danger">Disable Account</button>
                                    <button class="ti-btn ti-btn-danger">Delete Account</button>
                                </div>

                            </div>
                            <div class="box-footer border-t-0">
                                <div class="btn-list float-end">
                                    <button class="ti-btn bg-primarytint2color text-white btn-wave">Deactivate
                                        Account</button>
                                    <button class="ti-btn ti-btn-primary btn-wave">Save Changes</button>
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




    <!-- STICKY JS -->
    <script src="build/assets/sticky.js"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="build/assets/app-BWLTUmy_.js">
    <script type="module" src="build/assets/app-BWLTUmy_.js"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="build/assets/custom-switcher-kd-POPJw.js">
    <script type="module" src="build/assets/custom-switcher-kd-POPJw.js"></script>

    <!-- END SCRIPTS -->
</body>

</html>
