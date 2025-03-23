<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark" data-width="fullwidth">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Laravel Tailwind Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">
        
       <!-- TITLE -->
       <title> Fast2OTP | Bulk OTP Provider </title>

        <!-- FAVICON -->
        <link rel="icon" href="build/assets/images/brand-logos/favicon.ico" type="image/x-icon">

        <!-- ICONS CSS -->
        <link href="build/assets/icon-fonts/icons.css" rel="stylesheet">
        
        <!-- APP SCSS -->
        <link rel="preload" as="style" href="build/assets/app-C2-htF4y.css"><link rel="stylesheet" href="build/assets/app-C2-htF4y.css">

        <!-- APP CSS -->
        <link rel="preload" as="style" href="build/assets/app-C6ls_Bf6.css"><link rel="stylesheet" href="build/assets/app-C6ls_Bf6.css">

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
            <x-topbar/>
            <!-- END HEADER -->

            <!-- SIDEBAR -->
            <x-sidebar/>
            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->
            
          <!-- Start::app-content -->
          <div class="main-content app-content">
              <div class="container-fluid">

                 

                  <!-- Start:: row-2 -->
                  <div class="">
                    <div class="max-w-[100%] mx-auto">
                        <div class="box">
                            <ul class="nav nav-tabs tab-style-8 scaleX rounded m-4 profile-settings-tab gap-2 flex flex-wrap" id="myTab5" role="tablist">
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10 active" data-hs-tab="#balance-alert-tab" role="tab">Balance Alerts</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10" data-hs-tab="#usage-alert-tab" role="tab">Usage & Consumption</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10" data-hs-tab="#billing-alert-tab" role="tab">Billing Alerts</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10" data-hs-tab="#system-status-tab" role="tab">System & Status</button>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <button class="nav-link !px-6 text-primary rounded-md bg-primary/10" data-hs-tab="#security-alert-tab" role="tab">Security</button>
                                </li>
                            </ul>
                            <div class="p-4 border-b border-t border-dashed border-defaultborder dark:border-defaultborder/10 tab-content">

                                <!-- BALANCE ALERTS -->
                                <div class="tab-pane show active overflow-hidden p-0 border-0" id="balance-alert-tab" role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Balance Alerts</div>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Low Balance Warning</h4>
                                                <p>Get notified when your balance drops below a specific threshold.</p>
                                                <p>Threshold: <span class="text-danger">₹500</span></p>
                                                <button class="ti-btn ti-btn-primary">Update Threshold</button>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Insufficient Balance Alert</h4>
                                                <p>Receive alerts if you don’t have enough balance to send OTPs.</p>
                                                <p>Status: <span class="text-success">Enabled</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- USAGE & CONSUMPTION ALERTS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="usage-alert-tab" role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Usage & Consumption Alerts</div>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">OTP Usage Limit</h4>
                                                <p>Get notified when you reach 80%, 90%, or 100% of your monthly OTP limit.</p>
                                                <p>Current Usage: <span class="text-warning">85%</span></p>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Daily Usage Report</h4>
                                                <p>Receive a daily report of OTPs sent and remaining balance.</p>
                                                <p>Status: <span class="text-success">Enabled</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- BILLING ALERTS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="billing-alert-tab" role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Payment & Billing Alerts</div>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Payment Reminders</h4>
                                                <p>Get notified for upcoming payments or overdue bills.</p>
                                                <p>Next Payment: <span class="text-primary">April 25, 2025</span></p>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="box custom-box p-4">
                                                <h4 class="font-medium mb-2">Successful Transactions</h4>
                                                <p>Receive confirmations for successful payments.</p>
                                                <p>Status: <span class="text-success">Enabled</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- SYSTEM & SERVICE STATUS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="system-status-tab" role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">System & Service Status</div>
                                    <p>💡 Get real-time notifications for service interruptions, maintenance, or downtime.</p>
                                    <p>Status: <span class="text-success">All Systems Operational</span></p>
                                </div>
                            
                                <!-- SECURITY ALERTS -->
                                <div class="tab-pane overflow-hidden p-0 border-0 hidden" id="security-alert-tab" role="tabpanel">
                                    <div class="font-semibold block text-[18px] mb-4">Security Alerts</div>
                                    <p>🔐 Get notified for suspicious logins, 2FA prompts, and unauthorized access attempts.</p>
                                    <p>Recent Activity: <span class="text-warning">New login from unknown device</span></p>
                                </div>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                  <!-- End:: row-2 -->

              </div>
          </div>
          <!-- End::app-content -->

            <!-- MAIN-CONTENT -->

            <!-- FOOTER -->
            <footer class="mt-auto py-4 bg-white dark:bg-bodybg text-center border-t border-defaultborder dark:border-defaultborder/10">
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
            <div class="hs-overlay ti-modal hidden" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
                <div class="ti-modal-box">
                    <div class="ti-modal-dialog">
                        <div class="ti-modal-content">
                            <div class="ti-modal-body">
                                <div class="input-group">
                                    <input type="text" class="form-control border-end-0 !border-s" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2">
                                    <button class="ti-btn ti-btn-primary !m-0" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
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
        <link rel="modulepreload" href="build/assets/simplebar-B35Aj-bA.js"><script type="module" src="build/assets/simplebar-B35Aj-bA.js"></script>

        <!-- Auto Complete JS -->
        <script src="build/assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js"></script>
        
                    


        <!-- STICKY JS -->
        <script src="build/assets/sticky.js"></script>

        <!-- APP JS -->
        <link rel="modulepreload" href="build/assets/app-BWLTUmy_.js"><script type="module" src="build/assets/app-BWLTUmy_.js"></script>

        <!-- CUSTOM-SWITCHER JS -->
        <link rel="modulepreload" href="build/assets/custom-switcher-kd-POPJw.js"><script type="module" src="build/assets/custom-switcher-kd-POPJw.js"></script>        

        <!-- END SCRIPTS -->
    </body>

</html>