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
                {{-- <div class="">
                    <div class="max-w-[100%] mx-auto">
                        <div class="box">
                            <ul class="nav nav-tabs tab-style-8 scaleX rounded m-4 profile-settings-tab gap-2 flex flex-wrap"
                                id="myTab4" role="tablist">
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link  !px-6 text-primary rounded-md bg-primary/10 active"
                                        data-hs-tab="#account-pane" role="tab">Account</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link  !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#notification-tab-pane" role="tab">Notification</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#security-tab-pane" role="tab">Security</button>
                                </li>
                            </ul>
                            <div
                                class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">
                                <div class="tab-pane show active overflow-hidden p-0 border-0" id="account-pane"
                                    role="tabpanel">
                                    <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                        <div class="font-semibold block text-[15px]">Account Settings :</div>
                                        <div class="ti-btn ti-btn-primary ti-btn-sm"><i
                                                class="ri-loop-left-line leading-none me-2"></i>Restore Changes</div>
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
                                                        <button class="ti-btn ti-btn-sm ti-btn-primary btn-wave"><i
                                                                class="ri-upload-2-line me-1"></i>Change Image</button>
                                                        <button
                                                            class="ti-btn ti-btn-sm ti-btn-soft-primary1 btn-wave"><i
                                                                class="ri-delete-bin-line me-1"></i>Remove</button>
                                                    </div>
                                                    <span
                                                        class="block text-xs text-textmuted dark:text-textmuted/50">Use
                                                        JPEG, PNG, or GIF. Best size: 200x200 pixels. Keep it under
                                                        5MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="profile-user-name" class="form-label">User Name :</label>
                                            <input type="text" class="form-control" id="profile-user-name"
                                                value="" placeholder="Enter Name">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="profile-email" class="form-label">Email :</label>
                                            <input type="email" class="form-control" id="profile-email"
                                                value="" placeholder="Enter Email">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="profile-designation" class="form-label">Designation :</label>
                                            <input type="text" class="form-control" id="profile-designation"
                                                value="" placeholder="Enter Designation">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="profile-language" class="form-label">Language :</label>
                                            <select class="form-control" data-trigger="" id="profile-language">
                                                <option>Us English</option>
                                                <option>Arabic</option>
                                                <option>Korean</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="profile-phn-no" class="form-label">Phone No :</label>
                                            <input type="text" class="form-control" id="profile-phn-no"
                                                value="" placeholder="Enter Number">
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <label for="website" class="form-label">Website :</label>
                                            <input type="text" class="form-control !bg-light dark:!bg-light"
                                                id="website" placeholder="https://"
                                                value="https://www.website.com">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="profile-address" class="form-label">Address :</label>
                                            <textarea class="form-control" id="profile-address" rows="3" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="notification-tab-pane"
                                    role="tabpanel">
                                    <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                        <div class="font-semibold block text-[15px]">Notifications Settings:</div>
                                        <div class="ti-btn ti-btn-primary ti-btn-sm"><i
                                                class="ri-loop-left-line leading-none me-2"></i>Restore Changes</div>
                                    </div>
                                    <div class="grid grid-cols-12 sm:gap-x-6 gx-5 gap-y-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <p class="text-[14px] mb-1 font-medium">Configure Notifications</p>
                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Users can
                                                tailor their experience to receive alerts for the types of events that
                                                matter to them.</p>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="flex items-top justify-between mt-3">
                                                <div class="mail-notification-settings">
                                                    <p class="text-[14px] mb-1 font-medium">Push Notifications</p>
                                                    <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                        Alerts sent to the user's mobile device or desktop.</p>
                                                </div>
                                                <div class="toggle on toggle-success mb-0 float-sm-end"
                                                    id="push-notifications">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="flex items-top justify-between mt-3">
                                                <div class="mail-notification-settings">
                                                    <p class="text-[14px] mb-1 font-medium">Email Notifications</p>
                                                    <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                        Messages sent to the user's email address.</p>
                                                </div>
                                                <div class="toggle toggle-success mb-0 float-sm-end"
                                                    id="email-notifications">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="flex items-top justify-between mt-3">
                                                <div class="mail-notification-settings">
                                                    <p class="text-[14px] mb-1 font-medium">In-App Notifications</p>
                                                    <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">
                                                        Alerts that appear within the application interface.</p>
                                                </div>
                                                <div class="toggle toggle-success mb-0 float-sm-end"
                                                    id="in-app-notifications">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="flex items-top justify-between mt-3">
                                                <div class="mail-notification-settings">
                                                    <p class="text-[14px] mb-1 font-medium">SMS Notifications</p>
                                                    <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Text
                                                        messages sent to the user's mobile phone.</p>
                                                </div>
                                                <div class="toggle toggle-success on mb-0 float-sm-end"
                                                    id="sms-notifications">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="security-tab-pane"
                                    role="tabpanel">
                                    <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                        <div class="font-semibold block text-[15px]">Security Settings :</div>
                                        <div class="ti-btn ti-btn-primary ti-btn-sm"><i
                                                class="ri-loop-left-line leading-none me-2"></i>Restore Changes</div>
                                    </div>
                                    <div class="sm:flex block items-top justify-between">
                                        <div class="w-50">
                                            <p class="text-[14px] mb-1 font-medium">Verification</p>
                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">Control how
                                                your profile information is verified for security purposes.</p>
                                        </div>
                                        <div class="flex gap-4">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="email-notifications01" checked="">
                                                <label class="form-check-label" for="email-notifications01">
                                                    Email
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="sms-notifications01">
                                                <label class="form-check-label" for="sms-notifications01">
                                                    SMS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="phone-notifications">
                                                <label class="form-check-label" for="phone-notifications">
                                                    Phone
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:flex block items-top justify-between mt-3">
                                        <div class="w-50">
                                            <p class="text-[14px] mb-1 font-medium">Login Verification</p>
                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">This helps
                                                protect accounts from unauthorized access, even if a password is
                                                compromised.</p>
                                        </div>
                                        <a href="javascript:void(0);" class="link-primary underline">Set Up
                                            Verification</a>
                                    </div>
                                    <div class="sm:flex block items-top justify-between mt-3">
                                        <div class="w-50">
                                            <p class="text-[14px] mb-1 font-medium">Password Verification</p>
                                            <p class="text-xs mb-0 text-textmuted dark:text-textmuted/50">This
                                                additional step helps ensure that the person attempting to modify
                                                account details is the legitimate account owner.</p>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="personal-details">
                                            <label class="form-check-label" for="personal-details">
                                                Require Personal Details
                                            </label>
                                        </div>
                                    </div>
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
                </div> --}}
                <div class="">
                    <div class="max-w-[100%] mx-auto">
                        <div class="box">
                            <ul class="nav nav-tabs tab-style-8 scaleX rounded m-4 profile-settings-tab gap-2 flex flex-wrap"
                                id="myTab4" role="tablist">
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10 active"
                                        data-hs-tab="#billing-summary-tab" role="tab">Billing Summary</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#payment-methods-tab" role="tab">Payment Methods</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#billing-history-tab" role="tab">Billing History</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#subscription-plan-tab" role="tab">Subscription &
                                        Plan</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#tax-gst-tab" role="tab">Tax & GST</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10"
                                        data-hs-tab="#support-faq-tab" role="tab">Support & FAQ</button>
                                </li>
                            </ul>
                            <div
                                class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">

                                <!-- BILLING SUMMARY -->
                                <div class="tab-pane show active overflow-hidden p-0 border-0"
                                    id="billing-summary-tab" role="tabpanel">
                                    <div class="flex justify-between items-center mb-4 flex-wrap gap-1">
                                        <div class="font-semibold block text-[18px]">Billing Summary</div>
                                    </div>
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Current Plan</h4>
                                                <p>Standard (5,000 OTPs/month)</p>
                                                <p>Price: ₹2,250/month</p>
                                                <p>Next Billing Date: <span class="text-primary">April 25, 2025</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Usage Details</h4>
                                                <p>Total Sent: <span class="text-success">3,100 OTPs</span></p>
                                                <p>Remaining: <span class="text-warning">1,900 OTPs</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PAYMENT METHODS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="payment-methods-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Payment Methods</div>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Default Method</h4>
                                                <p>💳 Visa **** 4321</p>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">UPI</h4>
                                                <p>fast2otp@upi</p>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Add Payment Method</h4>
                                                <button class="ti-btn ti-btn-primary">+ Add New Method</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- BILLING HISTORY -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="billing-history-tab"
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

                                <!-- SUBSCRIPTION & PLAN MANAGEMENT -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="subscription-plan-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Subscription & Plan Management
                                    </div>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Current Plan</h4>
                                                <p>Standard (5,000 OTPs/month)</p>
                                                <p>Price: ₹2,250/month</p>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Upgrade Options</h4>
                                                <p>Premium (10,000 OTPs/month) – ₹4,000</p>
                                                <button class="ti-btn ti-btn-primary">Upgrade Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- TAX & GST -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="tax-gst-tab"
                                    role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Tax & GST Information</div>
                                    <p>GSTIN: <span class="text-primary">27AACCF1234F1Z5</span></p>
                                    <p>Tax Rate: 18%</p>
                                    <p>Total (incl. GST): ₹2,655</p>
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
