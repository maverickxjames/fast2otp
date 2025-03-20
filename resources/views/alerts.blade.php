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
                  <div class="grid grid-cols-12 gap-x-6 items-center justify-center">
                      {{-- <div class="xl:col-span-6 col-span-12"> </div> --}}

                        <div class="max-w-[75%] xxl:col-span-8 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="avatar avatar-xl avatar-rounded online">
                                                <img src="build/assets/images/faces/9.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="main-profile-info">
                                            <h6 class="font-semibold mb-1">Daniel David
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <span class="text-primarytint2color text-[14px]">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        <span class="hs-tooltip-content  ti-main-tooltip-content !border-black py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm " role="tooltip">
                                                            Verified User
                                                        </span>
                                                    </span>
                                                </div>
                                            </h6>
                                                <p class="text-textmuted dark:text-textmuted/50 mb-2">Web Designer</p>
                                                <p class="mb-2">Sed ut perspiciatis unde omnis iste natus error sit
                                                    voluptatem accusantium doloremque laudan accusant. </p>
                                        </div>
                                        <div class="flex gap-1 justify-center mb-2 items-center">
                                            <i class="ri-facebook-line text-primary border rounded-full align-middle leading-none p-2 border-primary/25 me-1 inline-block text-[17px] bg-primary/10"></i>
                                            <i class="ri-twitter-x-line text-primarytint1color border rounded-full align-middle leading-none p-2 border-primarytint1color/25 me-1 inline-block text-[17px] bg-primarytint1color/10"></i>
                                            <i class="ri-linkedin-line text-primarytint2color border rounded-full align-middle leading-none p-2 border-primarytint2color/25 me-1 inline-block text-[17px] bg-primarytint2color/10"></i>
                                            <i class="ri-github-line text-primarytint3color border rounded-full align-middle leading-none p-2 border-primarytint3color/25 me-1 inline-block text-[17px] bg-primarytint3color/10"></i>
                                        </div>
                                        <div class="flex gap-2 mb-0 flex-wrap flex-xxl-nowrap">
                                            <div class="ti-btn ti-btn-primary ti-btn-sm mb-0 flex-auto">
                                                Message
                                            </div>
                                            <div class="ti-btn ti-btn-secondary ti-btn-sm mb-0 flex-auto">
                                                Follow
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                     
                      <div class="xl:col-span-1 col-span-12"></div>
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