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


    <!-- Prism CSS -->
    <link rel="stylesheet" href="build/assets/libs/prismjs/themes/prism-coy.min.css">


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

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">


                <!-- Start:: row-1 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box custom box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Rate Limits
                                </div>
                                {{-- <div class="box-action">
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">View All</a>
                                </div> --}}
                            </div>
                            <div class="box-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi dolor delectus libero saepe repudiandae numquam ea vel sunt iure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                            
               
                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Bordered Primary
                                </div>
                                
                            </div>
                            <div class="box-body">
                                <div class="table-responsive overflow-auto table-bordered-primary">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <thead>
                                            <tr class="border-b border-primary/30">
                                                <th scope="col" class="text-start">Order</th>
                                                <th scope="col" class="text-start">Date</th>
                                                <th scope="col" class="text-start">Customer</th>
                                                <th scope="col" class="text-start">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-primary/30">
                                                <th scope="row" class="text-start">
                                                    #0007
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">26-04-2022</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="build/assets/images/faces/3.jpg" alt="img">
                                                        </span>Mayor Kelly
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary/10 text-primary">Booked</span></td>
                                            </tr>
                                            <tr class="border-b border-primary/30">
                                                <th scope="row" class="text-start">
                                                    #0008
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">15-02-2022</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="build/assets/images/faces/6.jpg" alt="img">
                                                        </span>Wicky Kross
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary/10 text-primary">Booked</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">
                                                    #0009
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">23-05-2022</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="build/assets/images/faces/1.jpg" alt="img">
                                                        </span>Julia Cam
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary/10 text-primary">Booked</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Bordered Success
                                </div>
                               
                            </div>
                            <div class="box-body">
                                <div class="table-responsive overflow-auto table-bordered-success">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <thead>
                                            <tr class="border-b border-success/30">
                                                <th scope="col" class="text-start">Order</th>
                                                <th scope="col" class="text-start">Date</th>
                                                <th scope="col" class="text-start">Customer</th>
                                                <th scope="col" class="text-start">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-success/30">
                                                <th scope="row" class="text-start">
                                                    #0011
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">07-01-2022</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="build/assets/images/faces/10.jpg"
                                                                alt="img">
                                                        </span>Helsenky
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success/10 text-success">Delivered</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-success/30">
                                                <th scope="row" class="text-start">
                                                    #0012
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">18-05-2022</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="build/assets/images/faces/14.jpg"
                                                                alt="img">
                                                        </span>Brodus
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success/10 text-success">Delivered</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">
                                                    #0013
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">19-03-2022</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="build/assets/images/faces/12.jpg"
                                                                alt="img">
                                                        </span>Chikka Alen
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success/10 text-success">Delivered</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
                <!-- End:: row-2 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->

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


    <!-- Prism JS -->
    <script src="build/assets/libs/prismjs/prism.js"></script>
    <link rel="modulepreload" href="build/assets/prism-custom-BWgkCbWY.js">
    <script type="module" src="build/assets/prism-custom-BWgkCbWY.js"></script>


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
