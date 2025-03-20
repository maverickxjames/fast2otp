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

                    <!-- Page Header -->
                    {{-- <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                </ol>
                            </nav>
                            <h1 class="page-title font-medium text-lg mb-0">Pricing</h1>
                        </div>
                        <div class="btn-list">
                            <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                                <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                            </button>
                            <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                                <i class="ri-share-forward-line me-1"></i> Share
                            </button>
                        </div>
                    </div> --}}
                    <!-- Page Header Close -->

                        <!-- Start:: row-1 -->
                        <div class="flex justify-center">
                            <div class="max-w-[75%]" id="convertable-pricing">
                                <div class="p-4 pt-0">
                                    <div class="text-center">
                                        <h3 class="text-primarytint1color">Pricing</h3>
                                        <h5 class="block mb-3">Plans that flex with your needs.</h5>
                                        <p class="text-textmuted dark:text-textmuted/50 mb-4">Stay agile with plans that seamlessly adjust to your changing requirements, ensuring you always have the flexibility you need.</p>
                                    </div>
                                </div>
                                <div class="flex justify-center mb-4">
                                    <div class="switcher-box">
                                        <span class="pricing-time-span">Monthly</span>
                                        <div class="switcher-pricing text-center">
                                        <input type="checkbox" class="pricing-toggle">
                                        </div>
                                        <span class="pricing-time-span">Annually <span class="badge bg-primarytint2color ms-1 rounded-full leading-none">20% off</span></span>
                                    </div>
                                </div>
                                <div class="tab-content show" id="monthly1">
                                    <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card hover !bg-primary">
                                                <div class="pricing-table-item-icon">
                                                    <i class="fe fe-zap me-2"></i> Popular
                                                </div>
                                                <div class="box-body !p-4 border-b border-dashed border-white/10">
                                                    <h6 class="font-medium mb-1 text-white">Premium</h6>
                                                    <h2 class="mb-3 font-semibold block text-white">$22.89<span class="text-xs font-medium ms-1 opacity-80"> / Month</span></h2>
                                                    <span class="opacity-70 block text-white text-[11px]">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                                                </div>
                                                <div class="box-body !p-4 text-white">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Unlimited users
                                                                </span>
                                                                <span class="badge bg-success rounded-full">Unlimited</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Advanced analytics
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Customizable dashboards
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm " role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Phone support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Dedicated account manager
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    SLA guarantees
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">30 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    On-site training for teams
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">120 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer border-t border-dashed border-white/10 p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg bg-white !text-black grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Basic</h6>
                                                    <h2 class="mb-3 font-semibold block">$8.5<span class="text-xs font-medium ms-1"> / Month</span></h2>
                                                    <span class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                                                </div>
                                                <div class="box-body !p-4">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 10 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Basic reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm " role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Access to essential features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">12 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Mobile app access
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">45 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Standard</h6>
                                                    <h2 class="mb-3 font-semibold block">$29.99<span class="text-xs font-medium ms-1"> / Month</span></h2>
                                                    <span class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                                                </div>
                                                <div class="box-body !p-4">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 50 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Access to webinars
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Advanced reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm " role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Priority email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    24/7 chat support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    All Standard features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">52 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Team collaboration tools
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">60 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="yearly1">
                                    <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card hover !bg-primary">
                                                <div class="pricing-table-item-icon">
                                                    <i class="fe fe-zap me-2"></i> Popular
                                                </div>
                                                <div class="box-body !p-4 border-b border-dashed border-white/10">
                                                    <h6 class="font-medium mb-1 text-white">Premium</h6>
                                                    <h2 class="mb-3 font-semibold block text-white">$1,999.89<span class="text-xs font-medium ms-1 opacity-80"> / Annum</span></h2>
                                                    <span class="opacity-70 block text-white text-[11px]">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                                                </div>
                                                <div class="box-body !p-4 text-white">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Unlimited users
                                                                </span>
                                                                <span class="badge bg-success rounded-full">Unlimited</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Advanced analytics
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Customizable dashboards
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm " role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Phone support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Dedicated account manager
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    SLA guarantees
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">90 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    On-site training for teams
                                                                </span>
                                                                <span class="opacity-50 text-xs font-medium">300 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer border-t border-dashed border-white/10 p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg bg-white !text-black grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Basic</h6>
                                                    <h2 class="mb-3 font-semibold block">$899.96<span class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                    <span class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                                                </div>
                                                <div class="box-body !p-4">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 10 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Basic reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm " role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Community access
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Access to essential features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">40 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Mobile app access
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">180 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-12 xl:col-span-12 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                            <div class="box pricing-card">
                                                <div class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="font-medium mb-1">Standard</h6>
                                                    <h2 class="mb-3 font-semibold block">$589.99<span class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                    <span class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                                                </div>
                                                <div class="box-body !p-6">
                                                    <ul class="list-none pricing-body">
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Up to 50 users
                                                                </span>
                                                                <span class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Access to webinars
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Advanced reporting
                                                                </span>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <span class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                        <i class="ri-information-2-line"></i>
                                                                        <span class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm " role="tooltip">
                                                                            Provide essential insights and data analysis to help you track the performance.
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    Priority email support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto">
                                                                    24/7 chat support
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    All Standard features
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">250 Days</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                </span>
                                                                <span class="ms-2 my-auto flex-auto">
                                                                    Team collaboration tools
                                                                </span>
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs font-medium">320 Days</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer p-4">
                                                    <button type="button" class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                        <span class="ms-4 me-4">Get Started!</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->

                       

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
        
        
        <!-- Pricing JS -->
        <link rel="modulepreload" href="build/assets/pricing-Bh3PeRK4.js"><script type="module" src="build/assets/pricing-Bh3PeRK4.js"></script>        


        <!-- STICKY JS -->
        <script src="build/assets/sticky.js"></script>

        <!-- APP JS -->
        <link rel="modulepreload" href="build/assets/app-BWLTUmy_.js"><script type="module" src="build/assets/app-BWLTUmy_.js"></script>

        <!-- CUSTOM-SWITCHER JS -->
        <link rel="modulepreload" href="build/assets/custom-switcher-kd-POPJw.js"><script type="module" src="build/assets/custom-switcher-kd-POPJw.js"></script>        

        <!-- END SCRIPTS -->
    </body>

</html>