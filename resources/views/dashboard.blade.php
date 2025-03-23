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
            <x-topbar />

            <!-- END HEADER -->

            <!-- SIDEBAR -->
            <x-sidebar />
            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    {{-- <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">
                                        Dashboards
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Sales</li>
                            </ol>
                            <h1 class="page-title font-medium text-lg mb-0">Sales Dashboard</h1>
                        </div>
                        <div class="flex gap-2 flex-wrap">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text bg-white dark:bg-bodybg border"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control breadcrumb-input" id="daterange" placeholder="Search By Date Range">
                                </div>
                            </div>
                            <div class="ti-btn-list">
                                <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0 !m-0 !me-[0.35rem]">
                                    <i class="ri-filter-3-line align-middle leading-none"></i> Filter
                                </button>
                                <button class="ti-btn ti-btn-primary btn-wave !border-0 me-0 !m-0">
                                    <i class="ri-share-forward-line"></i> Share
                                </button>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End::page-header -->

                    <!-- Start::Row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-8 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex items-start justify-between mb-2">
                                                <div>
                                                    <span class="text-textmuted dark:text-textmuted/50 block mb-1">Total Products</span>
                                                    <h4 class="font-medium mb-0">854</h4>
                                                </div>
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded bg-success">
                                                        <i class="ti ti-brand-whatsapp text-[1.25rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">2.56%<i class="ti ti-arrow-narrow-up text-[16px]"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex items-start justify-between mb-2">
                                                <div>
                                                    <span class="block text-textmuted dark:text-textmuted/50 mb-1">Total Users</span>
                                                    <h4 class="font-medium mb-0">31,876</h4>
                                                </div>
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded bg-primarytint1color">
                                                        <i class="ti ti-users text-[1.25rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">0.34%<i class="ti ti-arrow-narrow-up text-[16px]"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex items-start justify-between mb-2">
                                                <div>
                                                    <span class="text-textmuted dark:text-textmuted/50 block mb-1">Total Revenue</span>
                                                    <h4 class="font-medium mb-0">$34,241</h4>
                                                </div>
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded bg-primarytint2color">
                                                        <i class="ti ti-currency-dollar text-[1.25rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased By <span class="text-success">7.66%<i class="ti ti-arrow-narrow-up text-[16px]"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex items-start justify-between mb-2">
                                                <div>
                                                    <span class="text-textmuted dark:text-textmuted/50 block mb-1">Total Sales</span>
                                                    <h4 class="font-medium mb-0">1,76,586</h4>
                                                </div>
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded bg-primarytint3color">
                                                        <i class="ti ti-chart-bar text-[1.25rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased By <span class="text-danger">0.74%<i class="ti ti-arrow-narrow-down text-[16px]"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex items-start justify-between mb-2">
                                                <div>
                                                    <span class="text-textmuted dark:text-textmuted/50 block mb-1">Total Sales</span>
                                                    <h4 class="font-medium mb-0">1,76,586</h4>
                                                </div>
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded bg-primarytint3color">
                                                        <i class="ti ti-chart-bar text-[1.25rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased By <span class="text-danger">0.74%<i class="ti ti-arrow-narrow-down text-[16px]"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden main-content-card">
                                        <div class="box-body">
                                            <div class="flex items-start justify-between mb-2">
                                                <div>
                                                    <span class="text-textmuted dark:text-textmuted/50 block mb-1">Total Sales</span>
                                                    <h4 class="font-medium mb-0">1,76,586</h4>
                                                </div>
                                                <div class="leading-none">
                                                    <span class="avatar avatar-md avatar-rounded bg-primarytint3color">
                                                        <i class="ti ti-chart-bar text-[1.25rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased By <span class="text-danger">0.74%<i class="ti ti-arrow-narrow-down text-[16px]"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-8 xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Sales Overview
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-sm text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i class="ri-arrow-down-s-line align-middle fs-13 d-inline-block"></i></a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu" data-popper-placement="bottom-end">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div id="sales-overview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header pb-0 justify-between">
                                            <div class="box-title">
                                                Order Statistics
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light ti-btn-sm ti-btn-icon text-textmuted dark:text-textmuted/50 hs-dropdown-toggle ti-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                                    <li class="ti-dropdown-item"><a href="javascript:void(0);">Today</a></li>
                                                    <li class="ti-dropdown-item"><a href="javascript:void(0);">This Week</a></li>
                                                    <li class="ti-dropdown-item"><a href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body py-4 px-3">
                                            <div class="flex gap-4 mb-3">
                                                <div class="avatar avatar-md bg-primary/10 !w-[3rem]">
                                                    <i class="ti ti-trending-up text-[1.25rem] text-primary"></i>
                                                </div>
                                                <div class="flex-auto flex items-start justify-between w-full flex-wrap">
                                                    <div>
                                                        <span class="text-[11px] mb-1 block font-medium">TOTAL ORDERS</span>
                                                        <div class="flex items-center justify-between">
                                                            <h4 class="mb-0 flex items-center">3,736<span class="text-success text-xs ms-2 inline-flex items-center"><i class="ti ti-trending-up align-middle me-1"></i>0.57%</span></h4>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-success text-xs decoration-solid">Earnings ?</a>
                                                </div>
                                            </div>
                                            <div id="orders" class="my-2"></div>
                                        </div>
                                        <div class="box-footer border-t border-dashed">
                                            <div class="grid">
                                                <button class="ti-btn ti-btn-outline-primary ti-btn-wave btn-wave font-medium waves-effect waves-light table-icon">Complete Statistics<i class="ti ti-arrow-narrow-right ms-2 text-[16px] inline-block"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span12 col-span-12">
                                    <div class="box main-dashboard-banner overflow-hidden">
                                        <div class="box-body p-6">
                                            <div class="grid grid-cols-12 justify-between">
                                                <div class="xxl:col-span-7 xl:col-span-5 lg:col-span-5 md:col-span-5 sm:col-span-5 col-span-12">
                                                    <h4 class="mb-4 font-medium text-white">Need Payment Gateway ??</h4>
                                                    <p class="mb-6 text-white">Maximize sales insights. Optimize performance. Achieve success with our Payment Gateway Service.</p>
                                                    <a href="javascript:void(0);" class="font-medium text-white decoration-solid underline">Try Now<i class="ti ti-arrow-narrow-right"></i></a>
                                                </div>
                                                <div class="xxl:col-span-4 xl:col-span-7 lg:col-span-7 md:col-span-7 sm:col-span-7 sm:block hidden text-end my-auto col-span-12">
                                                    <img src="build/assets/images/media/media-86.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span12 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-header justify-between pb-1">
                                            <div class="box-title">
                                                Top Selling Categories
                                            </div>
                                            <div class="ti-dropdown hs-dropdown">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-light text-textmuted dark:text-textmuted/50 ti-dropdown-toggle hs-dropdown-toggle ti-btn-sm gap-0" data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i></a>
                                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu" data-popper-placement="bottom-end">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="p-4 pb-0">
                                                <div class="progress-stacked progress-sm mb-3 flex gap-1">
                                                    <div class="progress-bar w-[25%]" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primarytint1color w-[15%] !rounded-none" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primarytint2color !rounded-none w-[15%]" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primarytint3color !rounded-none w-[20%]" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar !rounded-none !rounded-tr-md !rounded-br-md bg-secondary w-[25%]" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="flex items-center justify-between mb-2">
                                                    <div>Overall Sales</div>
                                                    <div class="h6 mb-0"><span class="text-success me-2 text-[11px]">2.74%<i class="ti ti-arrow-narrow-up"></i></span>1,25,875</div>
                                                </div>
                                            </div>
                                            <div class="table-responsive top-categories">
                                                <table class="table text-nowrap">
                                                    <tbody>
                                                        <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <span class="font-medium top-category-name one">Clothing</span>
                                                            </td>
                                                            <td>
                                                                <span class="font-medium">31,245</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">25% Gross</span>
                                                            </td>
                                                            <td class="!text-end">
                                                                <span class="badge bg-success">0.45% <i class="ti ti-trending-up"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <span class="font-medium top-category-name two">Electronics</span>
                                                            </td>
                                                            <td>
                                                                <span class="font-medium">29,553</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">16% Gross</span>
                                                            </td>
                                                            <td class="!text-end">
                                                                <span class="badge bg-warning">0.27% <i class="ti ti-trending-up"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <span class="font-medium top-category-name three">Grocery</span>
                                                            </td>
                                                            <td>
                                                                <span class="font-medium">24,577</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">22% Gross</span>
                                                            </td>
                                                            <td class="!text-end">
                                                                <span class="badge bg-secondary">0.63% <i class="ti ti-trending-up"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <span class="font-medium top-category-name four">Automobiles</span>
                                                            </td>
                                                            <td>
                                                                <span class="font-medium">19,278</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">18% Gross</span>
                                                            </td>
                                                            <td class="!text-end">
                                                                <span class="badge bg-primarytint1color">1.14% <i class="ti ti-trending-down"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-b-0">
                                                                <span class="font-medium top-category-name five">others</span>
                                                            </td>
                                                            <td class="border-b-0">
                                                                <span class="font-medium">15,934</span>
                                                            </td>
                                                            <td class="text-center border-b-0">
                                                                <span class="text-textmuted dark:text-textmuted/50 text-xs">15% Gross</span>
                                                            </td>
                                                            <td class="!text-end border-b-0">
                                                                <span class="badge bg-primary">3.87% <i class="ti ti-trending-up"></i></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::Row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Latest Transactions
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-light btn-wave text-textmuted dark:text-textmuted/50 ti-btn-sm">View All<i class="ti ti-arrow-narrow-right"></i></a>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/ecommerce/jpg/4.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium">SwiftBuds</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$39.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">Success</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/ecommerce/jpg/6.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium">CozyCloud Pillow</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$19.95</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primarytint1color">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/ecommerce/jpg/3.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium">AquaGrip Bottle</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$9.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primarytint2color">Failed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/ecommerce/jpg/1.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium">GlowLite Lamp</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$24.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primarytint3color">Success</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/ecommerce/jpg/2.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium">Bitvitamin</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-medium">$26.45</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary">Success</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-b-0">
                                                        <div class="flex items-center gap-2">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/ecommerce/jpg/5.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-medium">FitTrack</div>
                                                        </div>
                                                    </td>
                                                    <td class="border-b-0">
                                                        <span class="font-medium">$49.95</span>
                                                    </td>
                                                    <td class="border-b-0">
                                                        <span class="badge bg-warning ">Success</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Recent Activity
                                    </div>
                                    <a href="javascript:void(0);" class="ti-ti-btn ti-btn-light btn-wave   text-textmuted dark:text-textmuted/50 waves-effect waves-light px-2 py-[0.26rem]">View All</a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none recent-activity-list">
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="font-medium text-[14px]">John Doe</div>
                                                    <span class="text-xs activity-time">
                                                        12 Hrs
                                                    </span>
                                                </div>
                                                <span class="block text-textmuted dark:text-textmuted/50">
                                                    Updated the product description for <span class="text-primary font-medium">Widget X</span>.
                                            </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="font-medium text-[14px]">Jane Smith</div>
                                                    <span class="text-xs activity-time">
                                                        4:32pm
                                                    </span>
                                                </div>
                                                <span class="block text-textmuted dark:text-textmuted/50">
                                                    added a <span class="font-medium text-dark">new user</span> with username <span class="font-medium text-primarytint1color">janesmith89.</span>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="font-medium text-[14px]">Michael Brown</div>
                                                    <span class="text-xs activity-time">
                                                        11:45am
                                                    </span>
                                                </div>
                                                <span class="block text-textmuted dark:text-textmuted/50">
                                                    Changed the status of order <a href="javascript:void(0);" class="font-medium text-dark decoration-solid">#12345</a> to <span class="font-medium text-primarytint2color">Shipped.</span>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="font-medium text-[14px]">David Wilson</div>
                                                    <span class="text-xs activity-time">
                                                        9:27am
                                                    </span>
                                                </div>
                                                <span class="block text-textmuted dark:text-textmuted/50">
                                                    added <span class="font-medium text-primarytint3color">John Smith</span> to academy group this day.
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="font-medium text-[14px]">Robert Jackson</div>
                                                    <span class="text-xs activity-time">
                                                        8:56pm
                                                    </span>
                                                </div>
                                                <span class="block text-textmuted dark:text-textmuted/50">
                                                    added a comment to the task <span class="font-medium text-secondary">Update website layout.</span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Sales Statistics
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a href="javascript:void(0);" class="ti-ti-btn ti-btn-light text-textmuted dark:text-textmuted/50 ti-dropdown-toggle gap-0 hs-dropdown-toggle px-2 py-[0.26rem]" data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i></a>
                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu" data-popper-placement="bottom-end">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap gap-2 justify-between flex-auto pb-3">
                                        <div class="py-4 px-6 rounded-sm border border-defaultborder dark:border-defaultborder/10 border-dashed bg-light">
                                            <span>Total Sales</span>
                                            <p class="font-medium text-[14px] mb-0">$3.478B</p>
                                        </div>
                                        <div class="py-4 px-6 rounded-sm border border-defaultborder dark:border-defaultborder/10 border-dashed bg-light">
                                            <span>This Year</span>
                                            <p class="text-success font-medium text-[14px] mb-0">4,25,349</p>
                                        </div>
                                        <div class="py-4 px-6 rounded-sm border border-defaultborder dark:border-defaultborder/10 border-dashed bg-light">
                                            <span>Last Year</span>
                                            <p class="text-danger font-medium text-[14px] mb-0">3,41,622</p>
                                        </div>
                                    </div>
                                    <div id="sales-statistics"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header pb-0 justify-between">
                                    <div class="box-title">
                                        Overall Statistics
                                    </div>
                                    <a href="javascript:void(0);" class="ti-ti-btn ti-btn-light btn-wave text-textmuted dark:text-textmuted/50 waves-effect waves-light gap-0 px-2 py-[0.26rem]">View All</a>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group activity-feed">
                                        <li class="ti-list-group-item !m-0">
                                            <div class="flex items-center justify-between">
                                                <div class="leading-none">
                                                    <p class="mb-2 text-[13px] text-textmuted dark:text-textmuted/50">Total Expenses</p>
                                                    <h6 class="font-medium mb-0">$134,032<span class="text-xs text-success ms-2 font-normal inline-block">0.45%<i class="ti ti-trending-up mx-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph1"></div>
                                                    <a href="javascript:void(0);" class="text-xs">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !m-0">
                                            <div class="flex items-center justify-between">
                                                <div class="leading-none">
                                                    <p class="mb-2 text-[13px] text-textmuted dark:text-textmuted/50">General Leads</p>
                                                    <h6 class="font-medium mb-0">74,354<span class="text-xs text-danger ms-2 font-normal inline-block">3.84%<i class="ti ti-trending-down mx-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph2"></div>
                                                    <a href="javascript:void(0);" class="text-xs">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !m-0">
                                            <div class="flex items-center justify-between">
                                                <div class="leading-none">
                                                    <p class="mb-2 text-[13px] text-textmuted dark:text-textmuted/50">Churn Rate</p>
                                                    <h6 class="font-medium mb-0">6.02%<span class="text-xs text-success ms-2 font-normal inline-block">0.72%<i class="ti ti-trending-up mx-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph3"></div>
                                                    <a href="javascript:void(0);" class="text-xs">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !m-0">
                                            <div class="flex items-center justify-between">
                                                <div class="leading-none">
                                                    <p class="mb-2 text-[13px] text-textmuted dark:text-textmuted/50">New Users</p>
                                                    <h6 class="font-medium mb-0">7,893<span class="text-xs text-success ms-2 font-normal inline-block">11.05%<i class="ti ti-trending-up mx-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph4"></div>
                                                    <a href="javascript:void(0);" class="text-xs">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item !m-0">
                                            <div class="flex items-center justify-between">
                                                <div class="leading-none">
                                                    <p class="mb-2 text-[13px] text-textmuted dark:text-textmuted/50">Returning Users</p>
                                                    <h6 class="font-medium mb-0">3,258<span class="text-xs text-success ms-2 font-normal inline-block">1.69%<i class="ti ti-trending-up mx-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph5"></div>
                                                    <a href="javascript:void(0);" class="text-xs">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Recent Orders
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-light btn-wave px-2 py-[0.26rem] text-textmuted dark:text-textmuted/50 waves-effect waves-light">View All</a>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="ti-custom-table text-nowrap">
                                            <thead>
                                                <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                    <th class="!text-center flex items-center justify-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                    </th>
                                                    <th>Customer</th>
                                                    <th>Product</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Amount</th>
                                                    <th>Status</th>
                                                    <th>Date Ordered</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel02" value="" aria-label="..." checked="">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-4">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/faces/1.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Elena smith</span>
                                                                <span class="block text-[11px] text-textmuted dark:text-textmuted/50">elenasmith387@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        All-Purpose Cleaner
                                                    </td>
                                                    <td class="text-center">
                                                        3
                                                    </td>
                                                    <td class="text-center">
                                                        $9.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        03,Sep 2024
                                                    </td>
                                                    <td>
                                                        <div class="ti-btn-list">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-4">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/faces/12.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Nelson Gold</span>
                                                                <span class="block text-[11px] text-textmuted dark:text-textmuted/50">noahrussell556@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Kitchen Knife Set
                                                    </td>
                                                    <td class="text-center">
                                                        4
                                                    </td>
                                                    <td class="text-center">
                                                        $49.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primarytint1color/10 text-primarytint1color">Pending</span>
                                                    </td>
                                                    <td>
                                                        26,Jul 2024
                                                    </td>
                                                    <td>
                                                        <div class="ti-btn-list">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel42" value="" aria-label="..." checked="">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-4">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/faces/6.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Grace Mitchell</span>
                                                                <span class="block text-[11px] text-textmuted dark:text-textmuted/50">gracemitchell79@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Velvet Throw Blanket
                                                    </td>
                                                    <td class="text-center">
                                                        2
                                                    </td>
                                                    <td class="text-center">
                                                        $29.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primarytint2color/10 text-primarytint2color">Success</span>
                                                    </td>
                                                    <td>
                                                        12,May 2024
                                                    </td>
                                                    <td>
                                                        <div class="ti-btn-list">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel32" value="" aria-label="..." checked="">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-4">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/faces/14.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Spencer Robin</span>
                                                                <span class="block text-[11px] text-textmuted dark:text-textmuted/50">leophillips124@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Aromatherapy Diffuser
                                                    </td>
                                                    <td class="text-center">
                                                        4
                                                    </td>
                                                    <td class="text-center">
                                                        $19.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primarytint2color/10 text-primarytint2color">Success</span>
                                                    </td>
                                                    <td>
                                                        15,Aug 2024
                                                    </td>
                                                    <td>
                                                        <div class="ti-btn-list">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-defaultborder dark:!border-defaultborder/10">
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-4">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="build/assets/images/faces/3.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-medium">Chloe Lewis</span>
                                                                <span class="block text-[11px] text-textmuted dark:text-textmuted/50">chloelewis67@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Insulated Water Bottle
                                                    </td>
                                                    <td class="text-center">
                                                        2
                                                    </td>
                                                    <td class="text-center">
                                                        $14.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primarytint3color/10 text-primarytint3color">Pending</span>
                                                    </td>
                                                    <td>
                                                        11,Oct 2024
                                                    </td>
                                                    <td>
                                                        <div class="ti-btn-list">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success"><i class="ri-pencil-line"></i></button>
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Sales By Country
                                    </div>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-light btn-wave px-2 py-[0.26rem] text-textmuted dark:text-textmuted/50 waves-effect waves-light">View All</a>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none sales-country-list">
                                        <li>
                                            <div class="flex items-start gap-4">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-sm p-1 bg-light border dark:border-defaultborder/10">
                                                        <img src="build/assets/images/flags/us_flag.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="block font-medium mb-2 leading-none">United States</span>
                                                        <span class="text-[14px] font-medium block leading-none">31,672</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-primary !rounded-s-full w-[90%]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-start gap-4">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-sm p-1 bg-light border dark:border-defaultborder/10">
                                                        <img src="build/assets/images/flags/italy_flag.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="block font-medium mb-2 leading-none">Italy</span>
                                                        <span class="text-[14px] font-medium block leading-none">29,557</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-primarytint1color !rounded-s-full w-[85%]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-start gap-4">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-sm p-1 bg-light border dark:border-defaultborder/10">
                                                        <img src="build/assets/images/flags/spain_flag.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="block font-medium mb-2 leading-none">Spain</span>
                                                        <span class="text-[14px] font-medium block leading-none">24,562</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-primarytint2color !rounded-s-full w-[80%]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-start gap-4">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-sm p-1 bg-light border dark:border-defaultborder/10">
                                                        <img src="build/assets/images/flags/uae_flag.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="block font-medium mb-2 leading-none">Uae</span>
                                                        <span class="text-[14px] font-medium block leading-none">21,532</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-primarytint3color !rounded-s-full w-[75%]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-start gap-4">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-sm p-1 bg-light border dark:border-defaultborder/10">
                                                        <img src="build/assets/images/flags/argentina_flag.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="block font-medium mb-2 leading-none">Argentina</span>
                                                        <span class="text-[14px] font-medium block leading-none">18,753</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-secondary !rounded-s-full w-[70%]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-start gap-4">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-sm p-1 bg-light border dark:border-defaultborder/10">
                                                        <img src="build/assets/images/flags/china_flag.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="block font-medium mb-2 leading-none">China</span>
                                                        <span class="text-[14px] font-medium block leading-none">12,342</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-info !rounded-s-full w-[65%]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-start gap-4">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-sm p-1 bg-light border dark:border-defaultborder/10">
                                                        <img src="build/assets/images/flags/french_flag.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-auto w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="block font-medium mb-2 leading-none">French</span>
                                                        <span class="text-[14px] font-medium block leading-none">15,533</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-warning !rounded-s-full w-[60%]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

            <!-- MAIN-CONTENT -->

            <!-- FOOTER -->
            <footer class="mt-auto py-4 bg-white dark:bg-bodybg text-center border-t border-defaultborder dark:border-defaultborder/10">
                <div class="container">
                    <span class="text-textmuted dark:text-textmuted/50">
                        Copyright © <span id="year"></span>
                        <a href="javascript:void(0);" class="text-dark font-medium">Fast2OTP</a>.
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


        <!-- Apex Charts JS -->
        <script src="build/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Sales Dashboard -->
        <link rel="modulepreload" href="build/assets/sales-dashboard-BSZ-w0-2.js"><script type="module" src="build/assets/sales-dashboard-BSZ-w0-2.js"></script>


        <!-- STICKY JS -->
        <script src="build/assets/sticky.js"></script>

        <!-- APP JS -->
        <link rel="modulepreload" href="build/assets/app-BWLTUmy_.js"><script type="module" src="build/assets/app-BWLTUmy_.js"></script>

        <!-- CUSTOM-SWITCHER JS -->
        <link rel="modulepreload" href="build/assets/custom-switcher-kd-POPJw.js"><script type="module" src="build/assets/custom-switcher-kd-POPJw.js"></script>

        <!-- END SCRIPTS -->
    </body>

</html>