@php
    $auth=Auth::user();
@endphp

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
           
            {{-- <x-topbar/> --}}
            <!-- END HEADER -->

            <!-- SIDEBAR -->
            {{-- <x-sidebar/> --}}
            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->
            
            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                  
                    <!-- Start::row-1 -->
                    <div class="">
                        <div class="max-w-[75%] mx-auto">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-6">
                                    <div class="mb-3 text-center">
                                        <h3 class="mb-1 text-primary dark:!text-primary">Terms and Conditions</h3>
                                        <div><span class="font-semibold">Last Updated: </span>5 days ago</div> 
                                        <div><span class="font-semibold">Effective Date:</span> 5 weeks from the present date</div>
                                    </div>
                                    <h6 class="font-medium mb-3 text-primary dark:!text-primary">Agreement</h6>
                                    <ul class="terms-list list-none">
                                        <li>
                                            <div class="text-[14px] font-medium">1. Agreement :</div>
                                            <p class="mb-0">
                                                By accessing and using this admin template, you agree to be bound by these Terms and Conditions ("Terms"). These Terms govern your use of the Template provided by our company, including any updates, enhancements, or modifications thereof.
                                                
                                                If you do not agree with any part of these Terms, you may not access or use the Template.
                                            </p>
                                        </li>
                                        <li>
                                            <div class="text-[14px] font-medium">2. License :</div>
                                            <p class="mb-0">
                                                Our company grants you a limited, non-exclusive, non-transferable license to use the Template solely for your internal business purposes. This license is revocable at any time without notice and is subject to the restrictions set forth in these Terms.
                                            </p>
                                        </li>
                                        <li>
                                            <div class="text-[14px] font-medium">3. Ownership :</div>
                                            <p class="mb-0">
                                                All rights, title, and interest in and to the Template, including any intellectual property rights, are owned by our company and its licensors. You acknowledge that you are obtaining only a limited license to use the Template and that our company retains all other rights.
                                            </p>
                                        </li>
                                    </ul>
                                    <h6 class="font-medium mb-3 text-primary dark:!text-primary">Privacy Policy</h6>
                                    <ul class="terms-list list-none mb-3">
                                        <li>
                                            <div class="text-[14px] font-medium">1. Information Collection :</div>
                                            <ul class="mb-1">
                                                <li> We collect personal information such as name, email address, mailing address, phone number, and IP address when users voluntarily submit this information through our website or platform. We may also collect non-personal information such as browser type, operating system, and pages visited for analytical purposes.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="text-[14px] font-medium">2.Information Usage :</div>
                                            <ul class="mb-1">
                                                <li> Personal information is used to provide and improve our services, respond to inquiries, and communicate with users.We do not sell, rent, or lease personal information to third parties unless required by law or with explicit consent from the user.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="text-[14px] font-medium">3. Data Security :</div>
                                            <ul class="mb-1">
                                                <li> We take reasonable measures to protect personal information from unauthorized access, disclosure, alteration, or destruction.These measures include encryption, firewalls, and regular security assessments.</li>
                                                <li> However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="text-[14px] font-medium">4. Third-party Links:</div>
                                            <ul class="mb-1">
                                                <li> Our website may contain links to third-party sites, plugins, or services for additional functionality or resources.These third-party sites have their own privacy policies, and we are not responsible for the privacy practices or content of these sites.</li>
                                                <li> Users should review the privacy policies of these third-party sites before providing any personal information.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="text-[14px] font-medium">5. Policy Updates:</div>
                                            <ul class="mb-1">
                                                <li> We reserve the right to update or change our Privacy Policy at any time. Users will be notified of any material changes to the Privacy Policy via email or by posting the updated policy on our website.Continued use of our website or services after such changes constitutes acceptance of the revised Privacy Policy.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h6 class="font-medium mb-3 text-primary dark:!text-primary">Termination</h6>
                                    <ul class="terms-list list-none mb-3">
                                        <li>
                                            <div class="text-[14px] font-medium">1. Termination by User :</div>
                                            <ul class="mb-1">
                                                <li> Users may terminate their use of the admin template at any time by discontinuing access to the template and deleting any downloaded materials.
                                                    Termination of use does not relieve users of any obligations or liabilities incurred prior to termination.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="text-[14px] font-medium">2.Termination by Provider :</div>
                                            <ul class="mb-1">
                                                <li> The template provider reserves the right to terminate or suspend access to the admin template at any time, with or without cause, and without prior notice.
                                                    In the event of termination by the provider, users agree to cease all use of the template and delete any downloaded materials.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input !border-inputborder" type="checkbox" value="" id="acceptance1">
                                        <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal" for="acceptance1">
                                            I agree with the <span class="text-defaulttextcolor font-medium">Terms and Conditions</span>
                                        </label>
                                    </div>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input !border-inputborder" type="checkbox" value="" id="acceptance2">
                                        <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal" for="acceptance2">
                                            I agree with the<span class="text-defaulttextcolor font-medium"> Privacy Policy</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="text-end">
                                        <div class="ti-btn ti-btn-lg ti-btn-soft-primary1 me-2">
                                            Decline
                                        </div>
                                        <div class="ti-btn ti-btn-lg ti-btn-primary">
                                            Accept
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