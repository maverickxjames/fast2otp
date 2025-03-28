<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed"
    class="light">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Tailwind Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">

    <!-- TITLE -->
    <title>Fast2OTP - WhatsApp OTP Service</title>

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

    <!-- Node-Wave CSS -->
    <link href="build/assets/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="build/assets/libs/simplebar/simplebar.min.css">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="build/assets/libs/swiper/swiper-bundle.min.css">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="build/assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="build/assets/libs/%40simonwep/pickr/themes/nano.min.css">





</head>

<body class="landing-body">



    <!-- PAGE -->
    <div class="landing-page-wrapper relative">

        <!-- HEADER -->
        <header class="app-header" id="header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                {{-- <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo"> --}}
                                <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo"
                                    class="toggle-dark">
                                {{-- <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> --}}
                                {{-- <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo"> --}}
                                <img src="build/assets/images/brand-logos/toggle-white.png" alt="logo"
                                    class="toggle-white">
                                {{-- <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white"> --}}
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="javascript:void(0);" class="sidemenu-toggle header-link">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line text-xl"></i>
                            </span>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element items-center">
                        <!-- Start::header-link|switcher-icon -->
                        <div class="ti-btn-list lg:hidden flex">
                            <a href="/register" class="ti-btn ti-btn-soft-primary1">
                                Register
                            </a>
                            <a href="/login" class="ti-btn ti-btn-soft-primary1">
                                Login

                            </a>
                            {{-- <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-primary ti-btn-icon  btn-wave" data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-3-line animate-spin-slow"></i></a> --}}
                        </div>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- END HEADER -->

        <!-- SIDEBAR -->

        <aside class="app-sidebar sticky" id="sidebar">

            <div class="container-xl px-2">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar shadow-none">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills sub-open">
                        <div class="landing-logo-container">
                            <div class="horizontal-logo">
                                <a href="index.html" class="header-logo">
                                    <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    {{-- <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                            <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                            <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                            <img src="build/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white"> --}}

                                </a>
                            </div>
                        </div>
                        <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewbox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">About</span>
                                </a>
                            </li>

                            <!-- End::slide -->
                            <li class="slide">
                                <a href="#services" class="side-menu__item">
                                    <span class="side-menu__label">Services</span>
                                </a>
                            </li>
                            {{-- <li class="slide">
                                <a href="#features" class="side-menu__item">
                                    <span class="side-menu__label">Features</span>
                                </a>
                            </li> --}}
                            <!-- Start::slide -->
                            {{-- <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <span class="side-menu__label me-2">More</span>
                                        <i class="fe fe-chevron-right side-menu__angle opacity-80"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide">
                                            <a href="#services" class="side-menu__item">Services</a>
                                        </li>
                                        <li class="slide">
                                            <a href="#expectations" class="side-menu__item">Expectations</a>
                                        </li>
                                        <li class="slide">
                                            <a href="#features" class="side-menu__item">Features</a>
                                        </li>
                                      
                                    </ul>
                                </li> --}}
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            {{-- <li class="slide">
                                    <a href="#team" class="side-menu__item">
                                        <span class="side-menu__label">Team</span>
                                    </a>
                                </li> --}}
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#pricing" class="side-menu__item">
                                    <span class="side-menu__label">Pricing</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#faqs" class="side-menu__item">
                                    <span class="side-menu__label">FAQ's</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            {{-- <li class="slide">
                                    <a href="#testimonials" class="side-menu__item">
                                        <span class="side-menu__label">Testimonials</span>
                                    </a>
                                </li> --}}
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact Us</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewbox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg></div>
                        <div class="lg:flex hidden">
                            <div class="ti-btn-list ti-btn-sm lg:flex hidden mt-lg-2 mt-xl-0 mt-0">
                                <a href="/register" class="ti-btn btn-wave bg-primarytint1color text-white">
                                    Register
                                </a>
                                <a href="/login" class="ti-btn btn-wave bg-primarytint1color text-white">
                                    Login
                                </a>
                                {{-- <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-primary ti-btn-icon btn-wave !font-medium" data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-3-line animate-spin-slow"></i></a> --}}
                            </div>
                        </div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->
            </div>

        </aside>
        <!-- END SIDEBAR -->

        <!-- MAIN-CONTENT -->

        <!-- Start::main-content -->
        <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

            <!-- Start::Home Content -->
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container">
                        <div class="grid grid-cols-12 gap-x-6 pt-3">
                            <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-8 col-span-12">
                                <div class="pt-lg-5 pb-4">
                                    <div class="mb-3">
                                        <h6 class="font-medium text-white opacity-90">Fast2OTP — Simple, Reliable,
                                            Scalable</h6>
                                    </div>
                                    {{-- <p class="landing-banner-heading mb-3 !text-white">Fast & Secure WhatsApp OTP Verification
                                        Explore <span class="font-semibold text-warning">fast2otp</span> 
                                    </p> --}}
                                    <p class="landing-banner-heading mb-3 !text-white">
                                        <span class="font-semibold text-warning">Fast2OTP</span> – OTP Delivery on
                                        WhatsApp<br>
                                        <strong>Instant, Secure & Trusted</strong> OTP Verification
                                    </p>
                                    <div class="text-base mb-[3rem] text-white opacity-70">
                                        Experience <strong>lightning-fast OTP verification</strong> through WhatsApp.
                                        No SMS delays, no complexities—just <strong>real-time, encrypted
                                            delivery</strong> that boosts user trust.
                                        <strong>Seamless API integration</strong> designed for scale.
                                    </div>
                                    <div class="flex items-center flex-wrap gap-2">
                                        <a href="#service" class="m-1 ti-btn ti-btn-lg bg-white/10 text-white">
                                            Explore Service
                                            <i class="ri-eye-line ms-2 align-middle"></i>
                                        </a>
                                        <a href="#pricing"
                                            class="m-1 ti-btn ti-btn-lg bg-primarytint1color text-white btn-wave waves-effect waves-light">
                                            Get Started Now
                                            <i class="ri-arrow-right-line ms-2 align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-4 col-span-12 my-auto">
                                <div
                                    class="text-end landing-main-image landing-heading-img flex justify-end mb-[2.5rem]">
                                    <img src="build/assets/images/media/landing/1.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End::Home Content -->

            <!-- Start:: Section-2 -->
            {{-- <section class="section" id="about">
                <div class="container relative">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span class="landing-section-heading text-primary">GLANCE</span>
                        </p>
                        <h4 class="!font-semibold mb-1 mt-4">Why you choose us ?</h4>
                        <div class="">
                            <div class="xl:col-span-7 col-span-12">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-[3rem] font-normal">Our
                                    mission is to support you in achieving
                                    your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg bg-primary/10 svg-primary avatar-rounded border-4 border-primary/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                <path d="M208,40H48A24,24,0,0,0,24,64V176a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V64A24,24,0,0,0,208,40Zm8,136a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V64a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8Zm-48,48a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,224Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Reliable API</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Instant OTP delivery via WhatsApp.</p>
                                    <a href="javascript:void(0);" class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i class="ti ti-arrow-narrow-right text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg bg-primarytint1color/10 svg-primarytint1color avatar-rounded border-4 border-primarytint1color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                <path d="M224,48V96a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h28.69L182.06,73.37a79.56,79.56,0,0,0-56.13-23.43h-.45A79.52,79.52,0,0,0,69.59,72.71,8,8,0,0,1,58.41,61.27a96,96,0,0,1,135,.79L208,76.69V48a8,8,0,0,1,16,0ZM186.41,183.29a80,80,0,0,1-112.47-.66L59.31,168H88a8,8,0,0,0,0-16H40a8,8,0,0,0-8,8v48a8,8,0,0,0,16,0V179.31l14.63,14.63A95.43,95.43,0,0,0,130,222.06h.53a95.36,95.36,0,0,0,67.07-27.33,8,8,0,0,0-11.18-11.44Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Flexible Pricing</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Pay-per-OTP model with admin control.</p>
                                    <a href="#pricing" class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i class="ti ti-arrow-narrow-right  text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg bg-primarytint2color/10 svg-primarytint2color avatar-rounded border-4 border-primarytint2color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                <path d="M64,105V40a8,8,0,0,0-16,0v65a32,32,0,0,0,0,62v49a8,8,0,0,0,16,0V167a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,56,152Zm80-95V40a8,8,0,0,0-16,0V57a32,32,0,0,0,0,62v97a8,8,0,0,0,16,0V119a32,32,0,0,0,0-62Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,128,104Zm104,64a32.06,32.06,0,0,0-24-31V40a8,8,0,0,0-16,0v97a32,32,0,0,0,0,62v17a8,8,0,0,0,16,0V199A32.06,32.06,0,0,0,232,168Zm-32,16a16,16,0,1,1,16-16A16,16,0,0,1,200,184Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Secure & Scalable</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">End-to-end encryption for secure authentication.</p>
                                    <a href="javascript:void(0);" class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i class="ti ti-arrow-narrow-right  text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <!-- Start:: Section-2 -->
            {{-- <section class="section" id="about">
                <div class="container relative">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span
                                class="landing-section-heading text-primary">GLANCE</span></p>
                        <h4 class="!font-semibold mb-1 mt-4">Why choose us?</h4>
                        <div class="">
                            <div class="xl:col-span-7 col-span-12">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-[3rem] font-normal">
                                    Our mission is to empower your business with secure, affordable, and reliable
                                    solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <!-- Reliable API -->
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primary/10 svg-primary avatar-rounded border-4 border-primary/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 24 24">
                                                <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v6H4v-6zm2 2v2h2v-2H6z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Reliable API</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Fast and dependable OTP
                                        delivery via WhatsApp.</p>
                                    <a href="javascript:void(0);"
                                        class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i
                                            class="ti ti-arrow-narrow-right text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Flexible Pricing -->
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primarytint1color/10 svg-primarytint1color avatar-rounded border-4 border-primarytint1color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 1L3 5v6c0 5.25 3.75 10.44 9 12 5.25-1.56 9-6.75 9-12V5l-9-4zm0 2.18L18.09 6 12 9.82 5.91 6 12 3.18zM5 8.64l6.27 3.64v7.45C7.84 17.88 5 13.72 5 11V8.64zm8.73 11.09v-7.45L20 8.64V11c0 2.72-2.84 6.88-6.27 8.73z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Flexible Pricing</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">Only pay for what you use,
                                        with full control via admin.</p>
                                    <a href="#pricing" class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i
                                            class="ti ti-arrow-narrow-right text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Secure & Scalable -->
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primarytint2color/10 svg-primarytint2color avatar-rounded border-4 border-primarytint2color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 1C9.24 1 7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v9c0 2.21 1.79 4 4 4h8c2.21 0 4-1.79 4-4v-9c0-1.1-.9-2-2-2h-1V6c0-2.76-2.24-5-5-5zm0 2c1.66 0 3 1.34 3 3v2H9V6c0-1.66 1.34-3 3-3zm-6 7h12v9c0 1.1-.9 2-2 2H8c-1.1 0-2-.9-2-2v-9z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Secure & Scalable</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">End-to-end encryption with
                                        flexible scalability for your growth.</p>
                                    <a href="javascript:void(0);"
                                        class="font-medium ti-btn ti-btn-sm ti-btn-primary">Read More<i
                                            class="ti ti-arrow-narrow-right text-base align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Start:: Section-2 -->
            <!-- Start:: Section-2 -->
            <section class="section" id="about">
                <div class="container relative">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1">
                            <span class="landing-section-heading text-primary">WHY FAST2OTP?</span>
                        </p>
                        <h4 class="!font-semibold mb-1 mt-4">Why Choose Us?</h4>
                        <div class="xl:col-span-7 col-span-12">
                            <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-[3rem] font-normal">
                                At <strong>Fast2OTP</strong>, we empower businesses with
                                <strong>secure, scalable, and reliable</strong> OTP solutions
                                designed for <strong>flawless user authentication</strong>.
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-x-6">

                        <!-- Reliable API -->
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primary/10 svg-primary avatar-rounded border-4 border-primary/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 24 24">
                                                <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v6H4v-6zm2 2v2h2v-2H6z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Reliable API</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">
                                        <strong>Lightning-fast, real-time OTP delivery</strong> via WhatsApp
                                        with guaranteed reliability.
                                    </p>
                                    <a href="#service" class="font-medium ti-btn ti-btn-sm ti-btn-primary">
                                        Explore More
                                        <i class="ti ti-arrow-narrow-right text-base align-bottom"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Flexible Pricing -->
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primarytint1color/10 svg-primarytint1color avatar-rounded border-4 border-primarytint1color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 1L3 5v6c0 5.25 3.75 10.44 9 12 5.25-1.56 9-6.75 9-12V5l-9-4z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Flexible Pricing</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">
                                        <strong>Pay-as-you-go pricing</strong> with full control over your usage.
                                        No hidden fees, just transparent billing.
                                    </p>
                                    <a href="#pricing" class="font-medium ti-btn ti-btn-sm ti-btn-primary">
                                        Explore Pricing
                                        <i class="ti ti-arrow-narrow-right text-base align-bottom"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Secure & Scalable -->
                        <div class="xl:col-span-4 col-span-12">
                            <div
                                class="box landing-card border shadow-none text-center border-defaultborder dark:border-defaultborder/10">
                                <div class="box-body !p-[2rem]">
                                    <div class="mb-4">
                                        <span
                                            class="avatar avatar-lg bg-primarytint2color/10 svg-primarytint2color avatar-rounded border-4 border-primarytint2color/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 1C9.24 1 7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v9c0 2.21 1.79 4 4 4h8c2.21 0 4-1.79 4-4v-9c0-1.1-.9-2-2-2h-1V6c0-2.76-2.24-5-5-5z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="font-semibold">Secure & Scalable</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-4">
                                        <strong>End-to-end encryption</strong> with enterprise-grade
                                        scalability for your growing business.
                                    </p>
                                    <a href="#service" class="font-medium ti-btn ti-btn-sm ti-btn-primary">
                                        Explore More
                                        <i class="ti ti-arrow-narrow-right text-base align-bottom"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- End:: Section-2 -->

            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            {{-- <section class="section section-bg" id="expectations">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 mx-0">
                        <div class="xl:col-span-5 col-span-12">
                            <div class="home-proving-image">
                                <img src="build/assets/images/media/landing/2.png" alt="" class="img-fluid] about-image hidden xl:block">
                            </div>
                            <div class="proving-pattern-1"></div>
                        </div>
                        <div class="xl:col-span-7 col-span-12 my-auto">
                            <div class="heading-section text-start mb-4">
                                <p class="text-xs font-medium text-start text-success mb-1"><span class="landing-section-heading text-primary">ABOUT US</span>
                                </p>
                                <h4 class="mt-3 !font-semibold mb-2">Our Commitment!</h4>
                                <div class="heading-description text-[14px]">Welcome to Xintra, our commitment is more
                                    than a statement; it's the cornerstone of everything we do.We are dedicated to
                                    design, ensuring that every interaction, project, and outcome reflects.</div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6 gap-y-3 mb-0">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-focus-2-fill align-middle text-primary inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Years of Experience and Reputation:</strong> We bring 4+ years
                                                of experience, backed by a solid reputation for excellence.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-focus-2-fill align-middle text-primarytint1color inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Professional Team:</strong> Our team consists of experienced and
                                                professional individuals dedicated to delivering top-notch service.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-focus-2-fill align-middle text-primarytint2color inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Client-Centric Approach:</strong> We understand that every
                                                client is unique, so we tailor our services to meet your specific needs
                                                and preferences.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-focus-2-fill align-middle text-primarytint3color inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>24/7 Support:</strong> We provide round-the-clock support, 365
                                                days a year, ensuring that assistance is always available when you need
                                                it most.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <section class="section section-bg" id="expectations">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 mx-0">
                        <div class="xl:col-span-5 col-span-12">
                            <div class="home-proving-image">
                                <img src="build/assets/images/media/landing/2.png"
                                    alt="Fast2OTP WhatsApp OTP Delivery"
                                    class="img-fluid about-image hidden xl:block">
                            </div>
                            <div class="proving-pattern-1"></div>
                        </div>
                        <div class="xl:col-span-7 col-span-12 my-auto">
                            <div class="heading-section text-start mb-4">
                                <p class="text-xs font-medium text-start text-success mb-1">
                                    <span class="landing-section-heading text-primary">ABOUT US</span>
                                </p>
                                <h4 class="mt-3 !font-semibold text-3xl leading-tight mb-4">
                                    Fast2OTP — The Future of User Verification
                                </h4>
                                <!-- Description -->
                                <p class="heading-description text-[15px] text-textmuted leading-relaxed mb-6">
                                    Fast2OTP simplifies and secures user verification with
                                    <strong>real-time OTP delivery on WhatsApp</strong>. No more SMS delays or
                                    reliability issues —
                                    just <strong>instant, encrypted, and seamless communication</strong> that scales
                                    with your business.
                                </p>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6 gap-y-3 mb-0">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-flashlight-fill text-primary text-2xl"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Instant Delivery : </strong> Our system ensures <strong>OTPs
                                                    reach users in real-time</strong> via WhatsApp,
                                                eliminating delays and boosting trust.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-stack-line text-green-500 text-2xl"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Reliable & Scalable Infrastructure:</strong> Whether you're a
                                                startup or enterprise, <strong>Fast2OTP scales with your needs</strong>
                                                —
                                                handling large volumes without a hitch.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-lock-2-line text-blue-500 text-2xl"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>Secure & Encrypted:</strong> We prioritize security. All OTP
                                                communications are
                                                <strong>end-to-end encrypted</strong> to protect your users and
                                                platform.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="flex items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-customer-service-2-fill text-purple-500 text-2xl"></i>
                                        </div>
                                        <div>
                                            <span class="text-[14px]">
                                                <strong>24/7 Support:</strong> Our <strong>dedicated support
                                                    team</strong> is always here — ensuring smooth operations
                                                around the clock, every day of the year.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="#pricing"
                                    class="px-6 py-2 bg-primary text-white rounded-full hover:bg-primary/90 transition">View
                                    Pricing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            {{-- <section class="section" id="services">
                <div class="container">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span class="landing-section-heading text-primary">SERVICES</span>
                        </p>
                        <h4 class="!font-semibold mt-3 mb-2">What You Get</h4>
                        <div class="">
                            <div class="">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">Nemo enim
                                    ipsam voluptatem quia voluptas sit
                                    aspernatur</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="p-2 border inline-block border-primary/20 bg-primary/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Responsive Design</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Ensures the template is
                                        optimized for various screen sizes and devices, enhancing usability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <div class="p-2 border inline-block border-primarytint1color/10 bg-primarytint1color/10 rounded-full">
                                                <span class="avatar avatar-lg avatar-rounded bg-primarytint1color svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                        <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Pre-built Components</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Ready-made UI components such
                                        as buttons, forms, tables, charts, and modals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <div class="p-2 border inline-block border-primarytint2color/10 bg-primarytint2color/10 rounded-full">
                                                <span class="avatar avatar-lg avatar-rounded bg-primarytint2color svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                        <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Customization Options</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Ability to customize colors,
                                        fonts, layouts, and other visual elements to match your brand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="p-2 border inline-block border-primarytint3color/10 bg-primarytint3color/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-primarytint3color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Documentation</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Comprehensive documentation
                                        that guides you through installation, customization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="p-2 border inline-block border-secondary/10 bg-secondary/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-secondary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Support</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Access to support forums,
                                        ticket systems, or direct support from the template provider.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="p-2 border inline-block border-info/10 bg-info/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-info svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Updates and Maintenance</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Regular updates to ensure
                                        compatibility with the latest web technologies and bug fixes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="p-2 border inline-block border-warning/10 bg-warning/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-warning svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Multiple Layout</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Different layout styles
                                        (sidebar navigation, top navigation) to suit different types of applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-4">
                                        <div class="p-2 border inline-block border-success/10 bg-success/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-success svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewbox="0 0 256 256">
                                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold mb-2">Performance Optimization</h6>
                                    <p class="text-textmuted dark:text-textmuted/50 mb-0">Code optimized for
                                        performance, including lazy loading of assets, CSS and JS files.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Start:: Services Section -->
            <!-- Start:: Services Section -->
            <section class="section" id="services">
                <div class="container">

                    <!-- Section Header -->
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1">
                            <span class="landing-section-heading text-primary">SERVICES</span>
                        </p>
                        <h4 class="!font-semibold mt-3 mb-4 text-3xl">What You Get with Fast2OTP</h4>
                        <p class=" dark:text-textmuted/70 text-[15px] leading-relaxed mb-8">
                            Experience <strong>seamless, reliable, and secure OTP solutions</strong> tailored for both
                            businesses and individual users.
                            Ensure <strong>faster authentication</strong>, improved security, and a frictionless user
                            experience.
                        </p>
                    </div>

                    <!-- Services Grid -->
                    <div class="grid grid-cols-12 gap-8">

                        <!-- Real-Time OTP Delivery -->
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card hover:shadow-lg transition-all duration-300">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-5">
                                        <div
                                            class="p-3 border inline-block border-primary/20 bg-primary/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary text-white">
                                                <i class="ri-flashlight-line text-4xl"></i>
                                                <!-- Real-time delivery icon -->
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold text-lg mb-3">Real-Time OTP Delivery</h6>
                                    <p class="text-textmuted dark:text-textmuted/70 text-[14px] leading-relaxed">
                                        Deliver <strong>instant, reliable OTPs</strong> through WhatsApp —
                                        ensuring faster authentication with no SMS delays.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- End-to-End Security -->
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card hover:shadow-lg transition-all duration-300">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-5">
                                        <div
                                            class="p-3 border inline-block border-success/20 bg-success/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-success text-white">
                                                <i class="ri-lock-2-line text-4xl"></i> <!-- Security icon -->
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold text-lg mb-3">End-to-End Security</h6>
                                    <p class="text-textmuted dark:text-textmuted/70 text-[14px] leading-relaxed">
                                        All OTPs are <strong>end-to-end encrypted</strong> with robust security
                                        protocols,
                                        ensuring data privacy and integrity.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Seamless API Integration -->
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card hover:shadow-lg transition-all duration-300">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-5">
                                        <div class="p-3 border inline-block border-info/20 bg-info/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-info text-white">
                                                <i class="ri-code-s-slash-line text-4xl"></i>
                                                <!-- API integration icon -->
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold text-lg mb-3">Seamless API Integration</h6>
                                    <p class="text-textmuted dark:text-textmuted/70 text-[14px] leading-relaxed">
                                        Effortlessly integrate Fast2OTP into your platform with our
                                        <strong>developer-friendly API</strong> for quick and easy setup.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 24/7 Dedicated Support -->
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box landing-card hover:shadow-lg transition-all duration-300">
                                <div class="box-body text-center !p-[2rem]">
                                    <div class="mb-5">
                                        <div
                                            class="p-3 border inline-block border-warning/20 bg-warning/10 rounded-full">
                                            <span class="avatar avatar-lg avatar-rounded bg-warning text-white">
                                                <i class="ri-customer-service-2-line text-4xl"></i>
                                                <!-- Support icon -->
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="!font-semibold text-lg mb-3">24/7 Dedicated Support</h6>
                                    <p class="text-textmuted dark:text-textmuted/70 text-[14px] leading-relaxed">
                                        Our <strong>expert support team</strong> is available around the clock to assist
                                        with any issues or technical queries.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>




            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            {{-- <section class="section landing-Features" id="features">
                <div class="container text-center">
                    <div class=" justify-center">
                        <div class="">
                            <div class="heading-section text-center mb-0">
                                <p class="text-xs font-medium text-success mb-1"><span
                                        class="landing-section-heading landing-section-heading-dark text-white">FEATURES</span>
                                </p>
                                <h4 class="text-white text-center mt-3 font-medium">Our Features</h4>
                                <div class="text-[14px] text-white text-center opacity-80 mb-4">Ullamco ea commodo.Sed
                                    ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
                                    laudantium, totam rem aperiam.perspiciatis unde omnis.</div>
                            </div>
                        </div>
                        <div class="my-auto">
                            <div
                                class="flex items-center justify-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-4">
                                <div class="trust-img"><img src="build/assets/images/media/landing/web/1.png"
                                        alt="img" class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="build/assets/images/media/landing/web/2.png"
                                        alt="img" class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="build/assets/images/media/landing/web/4.png"
                                        alt="img" class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="build/assets/images/media/landing/web/5.png"
                                        alt="img" class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="build/assets/images/media/landing/web/6.png"
                                        alt="img" class="border-0 shadow-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}



            <!-- End:: Section-5 -->

            <!-- Start:: Section-6 -->
            {{-- <section class="section" id="team">
                <div class="container">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span class="landing-section-heading text-primary">OUR TEAM</span>
                        </p>
                        <h4 class="!font-semibold mt-3 mb-2">The people who make our organization Successful</h4>
                        <div class="">
                            <div class="">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">Our team
                                    is made up of real people who are
                                    passionate about what they do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape primary"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-primary">
                                            <img src="build/assets/images/faces/1.jpg" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primary font-medium">Director
                                        </p>
                                        <h6 class="mb-3 font-semibold">Hadley Kylin</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape teal"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-teal">
                                            <img src="build/assets/images/faces/8.jpg" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint1color font-medium">
                                            Board Director</p>
                                        <h6 class="mb-3 font-semibold">Owen Foster</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape success"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-success">
                                            <img src="build/assets/images/faces/11.jpg" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint2color font-medium">
                                            Creative Director</p>
                                        <h6 class="mb-3 font-semibold">Stephen Roy</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box team-member text-center">
                                <div class="team-bg-shape orange"></div>
                                <div class="box-body !p-6">
                                    <div class="mb-4 leading-none flex gap-2 justify-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-orange">
                                            <img src="build/assets/images/faces/4.jpg" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 text-[11px] badge leading-none bg-primarytint3color font-medium">
                                            Board Director</p>
                                        <h6 class="mb-3 font-semibold">Jasmine Della</h6>
                                        <p class="text-textmuted dark:text-textmuted/50 text-xs">Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since</p>
                                        <div class="flex justify-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary  btn-wave ti-btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary1 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary2 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-soft-primary3 btn-wave ti-btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- End:: Section-6 -->

            <!-- Start:: Section-7 -->
            <section class="section section-bg" id="pricing">
                <div class="container">
                    <div class="text-center">
                        <p class="text-xs font-medium text-success mb-1"><span
                                class="landing-section-heading text-primary">PRICING</span>
                        </p>
                        <h4 class="!font-semibold mt-3 mb-2">Plans that flex with your needs.</h4>
                        <div class="">
                            <div class="">
                                <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">Stay agile with plans that seamlessly adjust to your changing requirements, 
                                    ensuring you always have the flexibility you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12" id="convertable-pricing">
                            <div class="flex justify-center mb-4">
                                <div class="switcher-box">
                                    <span class="pricing-time-span">Monthly</span>
                                    <div class="switcher-pricing text-center">
                                        <input type="checkbox" class="pricing-toggle">
                                    </div>
                                    <span class="pricing-time-span">Annually <span
                                            class="badge leading-none bg-primarytint2color">20% off</span></span>
                                </div>
                            </div>
                            <div class="tab-content show" id="monthly1">
                                <div class="grid grid-cols-12">
                                    <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                    <div class="xl:col-span-12 lg:col-span-8 col-span-12">
                                        <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                            <div
                                                class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                                <div class="box pricing-card hover !bg-primary">
                                                    <div class="pricing-table-item-icon">
                                                        <i class="fe fe-zap me-2"></i> Popular
                                                    </div>
                                                    <div class="box-body !p-6 border-b border-dashed border-white/10">
                                                        <h6 class="!font-medium mb-1 text-white">Premium</h6>
                                                        <h2 class="mb-1 !font-semibold block text-white">$22.89<span
                                                                class="text-xs font-medium ms-1 opacity-80"> /
                                                                Month</span></h2>
                                                        <span class="opacity-70 block text-white text-[11px]">Unlock
                                                            powerful
                                                            tools tailored for seasoned users, designed to take your
                                                            skills to
                                                            the next level.</span>
                                                    </div>
                                                    <div class="box-body !p-6 text-white">
                                                        <ul class="list-none pricing-body">
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Unlimited users
                                                                    </span>
                                                                    <span
                                                                        class="badge bg-success rounded-full">Unlimited</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Advanced analytics
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Customizable dashboards
                                                                    </span>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <span
                                                                            class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                            <i class="ri-information-2-line"></i>
                                                                            <span
                                                                                class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                                Provide essential insights and data
                                                                                analysis to help you track the
                                                                                performance.
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Phone support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Dedicated account manager
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        SLA guarantees
                                                                    </span>
                                                                    <span class="op-5 text-xs font-medium">30
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        On-site training for teams
                                                                    </span>
                                                                    <span class="op-5 text-xs font-medium">120
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="box-footer border-t border-dashed border-white/10 p-4">
                                                        <button type="button"
                                                            class="ti-btn ti-btn-lg bg-white grid w-full btn-wave text-black">
                                                            <span class="ms-4 me-4">Get Started!</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="lg:col-span-12 xl:col-span-4 col-xxl-4 md:col-span-12 sm:col-span-12 col-span-12">
                                                <div class="box pricing-card">
                                                    <div
                                                        class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                        <h6 class="!font-medium mb-1">Basic</h6>
                                                        <h2 class="mb-1 !font-semibold block">$8.5<span
                                                                class="text-xs font-medium ms-1"> / Month</span></h2>
                                                        <span
                                                            class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover
                                                            the vital features that create an enchanting foundation for
                                                            a
                                                            magical beginning.</span>
                                                    </div>
                                                    <div class="box-body !p-6">
                                                        <ul class="list-none pricing-body">
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Up to 10 users
                                                                    </span>
                                                                    <span
                                                                        class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Community access
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Basic reporting
                                                                    </span>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <span
                                                                            class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                            <i class="ri-information-2-line"></i>
                                                                            <span
                                                                                class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                                Provide essential insights and data
                                                                                analysis to help you track the
                                                                                performance.
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Email support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Community access
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Access to essential features
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">12
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Mobile app access
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">45
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="box-footer p-4">
                                                        <button type="button"
                                                            class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                            <span class="ms-4 me-4">Get Started!</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-12 sm:col-span-12 col-span-12">
                                                <div class="box pricing-card">
                                                    <div
                                                        class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                        <h6 class="!font-medium mb-1">Standard</h6>
                                                        <h2 class="mb-1 !font-semibold block">$29.99<span
                                                                class="text-xs font-medium ms-1"> / Month</span></h2>
                                                        <span
                                                            class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate
                                                            to the highest standards with unparalleled excellence and
                                                            exclusive
                                                            top-tier support.</span>
                                                    </div>
                                                    <div class="box-body !p-6">
                                                        <ul class="list-none pricing-body">
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Up to 50 users
                                                                    </span>
                                                                    <span
                                                                        class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Access to webinars
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Advanced reporting
                                                                    </span>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <span
                                                                            class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                            <i class="ri-information-2-line"></i>
                                                                            <span
                                                                                class="hs-tooltip-content max-w-[200px] ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                                Provide essential insights and data
                                                                                analysis to help you track the
                                                                                performance.
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Priority email support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        24/7 chat support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        All Standard features
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">52
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Team collaboration tools
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">60
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="box-footer p-4">
                                                        <button type="button"
                                                            class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                            <span class="ms-4 me-4">Get Started!</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                </div>
                            </div>
                            <div class="tab-content" id="yearly1">
                                <div class="grid grid-cols-12">
                                    <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                    <div class="xl:col-span-12 lg:col-span-8 col-span-12">
                                        <div class="grid grid-cols-12 gap-x-6 items-center justify-center mb-5">
                                            <div
                                                class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-8 sm:col-span-12 col-span-12">
                                                <div class="box pricing-card hover !bg-primary">
                                                    <div class="pricing-table-item-icon">
                                                        <i class="fe fe-zap me-2"></i> Popular
                                                    </div>
                                                    <div class="box-body !p-6 border-b border-dashed border-white/10">
                                                        <h6 class="!font-medium mb-1 text-white">Premium</h6>
                                                        <h2 class="mb-1 !font-semibold block text-white">$1,999.89<span
                                                                class="text-xs font-medium ms-1 opacity-80"> /
                                                                Annum</span></h2>
                                                        <span class="opacity-70 block text-white text-[11px]">Unlock
                                                            powerful
                                                            tools tailored for seasoned users, designed to take your
                                                            skills to
                                                            the next level.</span>
                                                    </div>
                                                    <div class="box-body !p-6 text-white">
                                                        <ul class="list-none pricing-body">
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Unlimited users
                                                                    </span>
                                                                    <span
                                                                        class="badge bg-success rounded-full">Unlimited</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Advanced analytics
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Customizable dashboards
                                                                    </span>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <span
                                                                            class="bg-white/10 !text-white px-1 py-[0.1rem] leading-none rounded-full">
                                                                            <i class="ri-information-2-line"></i>
                                                                            <span
                                                                                class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                                Provide essential insights and data
                                                                                analysis to help you track the
                                                                                performance.
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Phone support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Dedicated account manager
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        SLA guarantees
                                                                    </span>
                                                                    <span class="op-5 text-xs font-medium">90
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled opacity-80 text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        On-site training for teams
                                                                    </span>
                                                                    <span class="op-5 text-xs font-medium">300
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="box-footer border-t border-dashed border-white/10 p-4">
                                                        <button type="button"
                                                            class="ti-btn ti-btn-lg bg-white grid w-full btn-wave text-black">
                                                            <span class="ms-4 me-4">Get Started!</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-8 sm:col-span-12 col-span-12">
                                                <div class="box pricing-card">
                                                    <div
                                                        class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                        <h6 class="!font-medium mb-1">Basic</h6>
                                                        <h2 class="mb-1 !font-semibold block">$899.96<span
                                                                class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                        <span
                                                            class="mb-1 text-textmuted dark:text-textmuted/50 block text-[11px]">Discover
                                                            the vital features that create an enchanting foundation for
                                                            a
                                                            magical beginning.</span>
                                                    </div>
                                                    <div class="box-body !p-6">
                                                        <ul class="list-none pricing-body">
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Up to 10 users
                                                                    </span>
                                                                    <span
                                                                        class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Community access
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Basic reporting
                                                                    </span>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <span
                                                                            class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                            <i class="ri-information-2-line"></i>
                                                                            <span
                                                                                class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                                Provide essential insights and data
                                                                                analysis to help you track the
                                                                                performance.
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Email support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Community access
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Access to essential features
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">40
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Mobile app access
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">180
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="box-footer p-4">
                                                        <button type="button"
                                                            class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                            <span class="ms-4 me-4">Get Started!</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="lg:col-span-12 xl:col-span-4 xxl:col-span-4 md:col-span-8 sm:col-span-12 col-span-12">
                                                <div class="box pricing-card">
                                                    <div
                                                        class="box-body !p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                                                        <h6 class="!font-medium mb-1">Standard</h6>
                                                        <h2 class="mb-1 !font-semibold block">$589.99<span
                                                                class="text-xs font-medium ms-1"> / Annum</span></h2>
                                                        <span
                                                            class="text-[11px] text-textmuted dark:text-textmuted/50 block">Elevate
                                                            to the highest standards with unparalleled excellence and
                                                            exclusive
                                                            top-tier support.</span>
                                                    </div>
                                                    <div class="box-body !p-6">
                                                        <ul class="list-none pricing-body">
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Up to 50 users
                                                                    </span>
                                                                    <span
                                                                        class="badge bg-primarytint2color/10 text-primarytint2color rounded-full">New</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Access to webinars
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Advanced reporting
                                                                    </span>
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <span
                                                                            class="bg-info/10 !text-info px-1 py-[0.1rem] leading-none rounded-full">
                                                                            <i class="ri-information-2-line"></i>
                                                                            <span
                                                                                class="hs-tooltip-content max-w-[200px]  ti-main-tooltip-content !border-black py-3 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                                role="tooltip">
                                                                                Provide essential insights and data
                                                                                analysis to help you track the
                                                                                performance.
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        Priority email support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto">
                                                                        24/7 chat support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        All Standard features
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">250
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="flex items-center">
                                                                    <span class="avatar avatar-xs svg-success">
                                                                        <i
                                                                            class="ti ti-circle-arrow-right-filled text-primary text-lg"></i>
                                                                    </span>
                                                                    <span class="ms-2 my-auto flex-auto">
                                                                        Team collaboration tools
                                                                    </span>
                                                                    <span
                                                                        class="text-textmuted dark:text-textmuted/50 text-xs font-medium">320
                                                                        Days</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="box-footer p-4">
                                                        <button type="button"
                                                            class="ti-btn ti-btn-lg ti-btn-primary grid w-full btn-wave">
                                                            <span class="ms-4 me-4">Get Started!</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 lg:col-span-2 col-span-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class="section" id="faqs">
                <div class="container text-center">
                    <p class="text-xs font-medium text-success mb-1"><span
                            class="landing-section-heading text-primary">F.A.Q 's</span>
                    </p>
                    <h4 class="!font-semibold mt-3 mb-2">Frequently asked questions ?</h4>
                    <div class="grid grid-cols-12 gap-x-6 justify-center">
                        <div class="xl:col-span-7 col-span-12">
                            <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal">We have
                                shared
                                some of the most frequently asked
                                questions to help you out.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 text-start">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                        id="accordionFAQ1">
                                        <div class="hs-accordion-group">
                                            <div class="hs-accordion active bg-white dark:bg-bodybg  border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm  dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-one">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-one">
                                                    💡 How quickly are OTPs delivered?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-one"
                                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-one">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>OTPs are delivered in real time—within seconds—via WhatsApp, ensuring instant user authentication.</strong> 
                                                           
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-two">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-two">
                                                    💡 How secure is Fast2OTP?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-two"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-two">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>We use end-to-end encryption with advanced security protocols, ensuring all OTP data is protected.</strong>
                                                           
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-twenty">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-three">
                                                    💡 Can I customize delivery preferences?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-three"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-twenty">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Yes! Our platform allows you to configure retry rules, delivery channels, and failover mechanisms.</strong>
                                                          
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-thirty">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-four">
                                                    💡 Is there support for large-scale delivery?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-four"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Absolutely. Fast2OTP is designed to scale effortlessly, handling high-volume OTP transmissions without latency..</strong> 
                                                          
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-three">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-five">
                                                    💡 What support options are available?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-five"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-three">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>We offer 24/7 customer support via email, chat, and phone, ensuring prompt issue resolution.  </strong> 
                                                           
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border-defaultborder/10-white/10"
                                                id="faq-four">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-six">
                                                    💡 What types of businesses can benefit from Fast2OTP?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-six"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-four">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Fast2OTP is ideal for e-commerce platforms, financial services, healthcare, and SaaS businesses, ensuring secure user authentication.</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                        id="accordionFAQ2">
                                        <div class="hs-accordion-group">
                                            <div class="hs-accordion active bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-five">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-seven">
                                                    💡 Can I integrate Fast2OTP with my existing application?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-seven"
                                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-five">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Yes, Fast2OTP offers comprehensive API documentation and SDKs, making it easy to integrate with your existing web or mobile applications.</strong> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-six">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-eight">
                                                    💡 Do you support multi-language OTP messages?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-eight"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-six">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Yes, you can send OTPs in multiple languages, ensuring better accessibility for diverse user bases.</strong> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-seven">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-nine">
                                                    💡 Is there a limit on the number of OTPs I can send?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-nine"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-seven">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>No, Fast2OTP supports unlimited OTP transmissions, scaling with your business needs.</strong> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-eight">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-ten">
                                                    💡 Do you offer analytics or delivery reports?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-ten"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-eight">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Yes, our platform provides detailed delivery reports and real-time analytics, helping you track and optimize OTP performance.</strong> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-nine">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-eleven">
                                                    💡 Can I automate OTP retries?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-eleven"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-nine">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Absolutely. You can configure automated retries and define fallback channels for failed OTP deliveries.</strong> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] border-defaultborder rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                                id="faq-ten">
                                                <button type="button"
                                                    class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10 hs-accordion-active:bg-primary/10    dark:hs-accordion-active:border hs-accordion-active:border-transparent dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                    aria-controls="faq-collapse-twelve">
                                                    💡 Is Fast2OTP compliant with data privacy regulations?
                                                    <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M8 15.36L8 2.35999" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                    <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                        width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </button>
                                                <div id="faq-collapse-twelve"
                                                    class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                    aria-labelledby="faq-ten">
                                                    <div class="p-5">
                                                        <p
                                                            class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                            <strong>Yes, Fast2OTP adheres to GDPR, HIPAA, and other industry-standard data privacy regulations, ensuring your users' information is secure and protected.</strong> 
                                                        </p>
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
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            {{-- <section class="section landing-Features py-4" id="testimonials">
                <div class="container reviews-container">
                    <div class="grid grid-cols-12 gap-x-6 justify-center pb-3">
                        <div class="xl:col-span-1 col-span-12"></div>
                        <div class="xl:col-span-10 col-span-12">
                            <div class="text-center mb-0 mt-4 heading-section">
                                <p class="text-xs font-medium text-success mb-1"><span class="landing-section-heading landing-section-heading-dark text-white">TESTIMONALS</span>
                                </p>
                                <h4 class="mt-3 text-white mb-1">Discover What People Are Saying About Us</h4>
                                <div class="text-[14px] text-white mb-4 opacity-80"> Customer reviews, social media and
                                    testimonials to discover how is our products or services.</div>
                            </div>
                            <div class="swiper pagination-dynamic testimonialSwiperService">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);" class="font-semibold text-[11px] text-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>


                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="build/assets/images/faces/8.jpg" alt="" class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Elsa Teresa</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            elsateresa@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);" class="font-semibold text-[11px] text-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="build/assets/images/faces/9.jpg" alt="" class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Henry Milo</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            henrymilo@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);" class="font-semibold text-[11px] text-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="build/assets/images/faces/6.jpg" alt="" class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Katherin Oslo</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            katherinoslo212@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);" class="font-semibold text-[11px] text-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="build/assets/images/faces/14.jpg" alt="" class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Jestin Calm</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            jestincalm1999@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);" class="font-semibold text-[11px] text-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="build/assets/images/faces/13.jpg" alt="" class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Harin ford</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            harinford345@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box overflow-hidden">
                                            <div class="box-body">
                                                <div class="">
                                                    <span class="text-white"><sup><i class="bi bi-quote text-[2.5rem] me-1 text-white"></i></sup>
                                                        Customer service at this company is
                                                        outstanding. They were quick to respond to my inquiry and
                                                        resolved my issue within hours. --
                                                        <a href="javascript:void(0);" class="font-semibold text-[11px] text-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                            More
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="flex items-center text-end  justify-end">
                                                    <div class="text-warning block me-1 text-[10px]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </div>
                                                    <span class="text-white">4.3</span>
                                                </div>
                                            </div>
                                            <div class="p-4 bg-white/10">
                                                <div class="flex items-center">
                                                    <span class="avatar !rounded-full me-2">
                                                        <img src="build/assets/images/faces/11.jpg" alt="" class="img-fluid !rounded-full border-primarytint1color shadow-sm border-2">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-white">Phillip John</p>
                                                        <p class="mb-0 text-[11px] font-normal opacity-80 text-white">
                                                            phillipjohn21@gmail.com</p>
                                                    </div>
                                                    <div class="ms-auto text-xs font-semibold opacity-80 text-end">
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-light border dark:border-defaultborder/10 text-dark ">
                                                            <i class="ri-twitter-x-line"></i>
                                                        </div>
                                                        <div class="ti-btn ti-btn-sm ti-btn-icon !rounded-full bg-primarytint1color text-white">
                                                            <i class="ri-share-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-1 col-span-12"></div>
                    </div>
                </div>
            </section> --}}
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class="section" id="contact">
                <div class="container text-center">
                    <p class="text-xs font-medium text-success mb-1"><span
                            class="landing-section-heading text-primary">CONTACT US</span>
                    </p>
                    <h4 class="!font-semibold mt-3 mb-2">Need Help? Find Your Answers Here!</h4>
                    <div class="grid grid-cols-12 gap-x-6 justify-center">
                        <div class="xl:col-span-9 col-span-12">
                            <p class="text-textmuted dark:text-textmuted/50 text-[14px] mb-5 font-normal"> Explore Our
                                Comprehensive Support Resources! Get answers to your queries and find solutions.</p>
                        </div>
                    </div>
                    <div class="box-body p-0">
                        <div class="box contactus-form contactus-form-left overflow-hidden">
                            <div class="box-body text-start px-xl-5 px-4 py-5">
                                <div class="grid grid-cols-12 gap-x-6 gap-y-3 pt-0">
                                    <div
                                        class="xxl:col-span-4 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                        <div class="mb-3">
                                            <i class="ri-map-pin-fill me-2 text-primary"></i> D.No: 1352/A-12, Street,
                                            Hyderabad.
                                        </div>
                                        <div class="mb-3">
                                            <i class="ri-phone-fill text-primary"></i> +122 1234 32422
                                        </div>
                                        <div class="mb-4">
                                            <i class="ri-mail-fill text-primary"></i> carolinahanna424@example.com
                                        </div><iframe allowfullscreen="" height="190" class="w-full"
                                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30444.274596168965!2d78.54114692513858!3d17.48198883339408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d17.4886524!2d78.5495041!4m5!1s0x3bcb9c7ec139a15d%3A0x326d1c90786b2ab6!2sspruko%20technologies!3m2!1d17.474805099999998!2d78.570258!5e0!3m2!1sen!2sin!4v1670225507254!5m2!1sen!2sin"
                                            style="border:0;"></iframe>
                                    </div>
                                    <div
                                        class="xxl:col-span-8 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                        <div class="grid grid-cols-12 gap-x-6 gap-y-3 text-start">
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label" for="contact-address-firstname">First Name
                                                    :</label> <input class="form-control !bg-light dark:!bg-light"
                                                    id="contact-address-firstname" placeholder="Enter Name"
                                                    type="text">
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label" for="contact-address-email">Email Id
                                                    :</label>
                                                <input class="form-control !bg-light dark:!bg-light"
                                                    id="contact-address-email" placeholder="Enter Email Id"
                                                    type="email">
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label" for="contact-mail-message">Message
                                                    :</label>
                                                <textarea class="form-control !bg-light dark:!bg-light" id="contact-mail-message" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class=" mt-4">
                                            <button
                                                class="ti-btn ti-btn-primary btn-wave btn-w-lg waves-effect waves-light">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class="section landing-footer text-white">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6">
                        
                        <!-- Company Info -->
                        <div class="md:col-span-4 sm:col-span-6 col-span-12 md:mb-0 mb-3">
                            <div class="px-4">
                                <p class="font-medium mb-3">
                                    <a href="index.html">
                                        <img src="build/assets/images/brand-logos/desktop-dark.png" alt="Fast2OTP Logo" class="landing-footer-logo">
                                    </a>
                                </p>
                                <p class="mb-2 opacity-60 font-normal">
                                    Fast2OTP is your trusted partner for sending OTPs via WhatsApp. Our platform ensures fast, secure, and reliable delivery for businesses and individuals alike.
                                </p>
                                <p class="mb-0 opacity-60 font-normal">
                                    Experience seamless OTP verification with our easy-to-integrate API and flexible pricing plans.
                                </p>
                            </div>
                        </div>
            
                        <!-- Navigation Links -->
                        <div class="md:col-span-2 sm:col-span-6 col-span-12">
                            <div class="px-4">
                                <h6 class="font-medium mb-3 text-white">PAGES</h6>
                                <ul class="list-none opacity-60 font-normal landing-footer-list">
                                    <li><a href="index.html" class="text-white">Home</a></li>
                                    <li><a href="about.html" class="text-white">About Us</a></li>
                                    <li><a href="services.html" class="text-white">Services</a></li>
                                    <li><a href="pricing.html" class="text-white">Pricing</a></li>
                                    <li><a href="faqs.html" class="text-white">FAQs</a></li>
                                    <li><a href="contact.html" class="text-white">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
            
                        <!-- Additional Info -->
                        <div class="md:col-span-2 sm:col-span-6 col-span-12">
                            <div class="px-4">
                                <h6 class="font-medium text-white">INFO</h6>
                                <ul class="list-none opacity-60 font-normal landing-footer-list">
                                    <li><a href="team.html" class="text-white">Our Team</a></li>
                                    <li><a href="blog.html" class="text-white">Blog</a></li>
                                    <li><a href="terms.html" class="text-white">Terms & Conditions</a></li>
                                    <li><a href="privacy.html" class="text-white">Privacy Policy</a></li>
                                    <li><a href="support.html" class="text-white">Support</a></li>
                                </ul>
                            </div>
                        </div>
            
                        <!-- Contact Info -->
                        <div class="md:col-span-4 sm:col-span-6 col-span-12">
                            <div class="px-4">
                                <h6 class="font-medium text-white">CONTACT</h6>
                                <ul class="list-none font-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-60">
                                            <i class="ri-map-pin-line me-1 align-middle"></i> 
                                            Mumbai, Maharashtra, India
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:support@fast2otp.com" class="text-white opacity-60">
                                            <i class="ri-mail-line me-1 align-middle"></i> 
                                            support@fast2otp.com
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+919876543210" class="text-white opacity-60">
                                            <i class="ri-phone-line me-1 align-middle"></i> 
                                            +91 98765 43210
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-60">
                                            <i class="ri-printer-line me-1 align-middle"></i> 
                                            +91 12345 67890
                                        </a>
                                    </li>
                                    <li class="mt-3">
                                        <p class="mb-2 font-medium opacity-80">FOLLOW US ON:</p>
                                        <div class="mb-0">
                                            <div class="ti-btn-list">
                                                <a href="https://www.facebook.com/Fast2OTP" target="_blank" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line font-bold"></i>
                                                </a>
                                                <a href="https://twitter.com/Fast2OTP" target="_blank" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary1 text-primarytint1color btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-x-line font-bold"></i>
                                                </a>
                                                <a href="https://www.instagram.com/Fast2OTP" target="_blank" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary2 text-primarytint2color btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line font-bold"></i>
                                                </a>
                                                <a href="https://github.com/Fast2OTP" target="_blank" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary3 text-primarytint3color btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line font-bold"></i>
                                                </a>
                                                <a href="https://www.youtube.com/Fast2OTP" target="_blank" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-info btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line font-bold"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>
            
            <!-- End:: Section-11 -->
        </div>
        <!-- End::main-content -->


        <!-- FOOTER -->
        {{-- <div class="text-center landing-main-footer py-3">
            <span class="text-textmuted dark:text-textmuted/50 text-[15px]"> Copyright © <span
                    id="year"></span> <a href="javascript:void(0);"
                    class="text-primary font-medium"><u>fats2otp</u></a>.
                Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);" class="text-primary font-medium"><u>
                            Spruko</u>
                </a> All
                rights
                reserved
            </span>
        </div> --}}
        <!-- FOOTER -->
<div class="text-center landing-main-footer py-3">
    <span class="text-textmuted dark:text-textmuted/50 text-[15px]">
        Copyright © <span id="year"></span> 
        <a href="index.html" class="text-primary font-medium"><u>Fast2OTP</u></a>.
        All rights reserved.  
        <br>Powered by <a href="https://fast2otp.com" target="_blank" class="text-primary font-medium"><u>Fast2OTP Technologies</u></a>
    </span>
</div>
<!-- FOOTER -->

        <!-- FOOTER -->
        <!-- END MAIN-CONTENT -->

    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->

    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-[1.25rem]"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- POPPER JS -->
    <script src="build/assets/libs/%40popperjs/core/umd/popper.min.js"></script>

    <!-- COLOR PICKER JS -->
    <script src="build/assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

    <!-- SWIPER JS -->
    <script src="build/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- DEFAULTMENU JS -->
    <link rel="modulepreload" href="build/assets/defaultmenu-4eemjw94.js">
    <script type="module" src="build/assets/defaultmenu-4eemjw94.js"></script>

    <!-- PRELINE JS -->
    <script src="build/assets/libs/preline/preline.js"></script>

    <!-- SIMPLEBAR JS -->
    <script src="build/assets/libs/simplebar/simplebar.min.js"></script>


    <!-- Internal Landing JS -->
    <link rel="modulepreload" href="build/assets/landing-DQUNeEC3.js">
    <script type="module" src="build/assets/landing-DQUNeEC3.js"></script>


    <!-- STICKY JS -->
    <script src="build/assets/sticky.js"></script>

    <!-- END SCRIPTS -->

</body>

</html>
