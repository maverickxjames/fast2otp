<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light" data-header-styles="light" data-menu-styles="light">

    <head>

        <!-- META DATA -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Tailwind Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">

        <!-- TITLE -->
		<title> Xintra - Laravel Tailwind CSS Premium Admin & Dashboard Template </title>

        <!-- FAVICON -->
        <link rel="icon" href="build/assets/images/brand-logos/favicon.ico" type="image/x-icon">

        <!-- ICONS CSS -->
        <link href="build/assets/icon-fonts/icons.css" rel="stylesheet">

        <!-- APP SCSS -->
        <link rel="preload" as="style" href="build/assets/app-C2-htF4y.css"><link rel="stylesheet" href="build/assets/app-C2-htF4y.css">

        <!-- APP CSS -->
        <link rel="preload" as="style" href="build/assets/app-C6ls_Bf6.css"><link rel="stylesheet" href="build/assets/app-C6ls_Bf6.css">

        <!-- MAIN JS -->
        <script src="build/assets/authentication-main.js"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">



	</head>

    <body class="bg-white">



        <div class="grid grid-cols-12 authentication authentication-cover-main mx-0">
            <div class="xxl:col-span-6 xl:col-span-7 col-span-12">
                <div class="grid grid-cols-12 justify-center items-center h-full">
                    <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                    <div class="xxl:col-span-6 xl:col-span-8 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                        <div class="box my-auto border border-defaultborder dark:border-defaultborder/10">

                            <form id="loginForm">
                                @csrf
                                <div class="box-body p-[3rem]">
                                    <p class="h5 mb-2 text-center">Sign In</p>
                                    <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">Welcome back Henry !</p>
                                    <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                        <button class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto bg-light">
                                            <span class="avatar avatar-xs flex-shrink-0">
                                                <img src="build/assets/images/media/apps/google.png" alt="">
                                            </span>
                                            <span class="leading-[1.2rem] ms-2 text-[13px] text-defaulttextcolor">Signup with Google</span>
                                        </button>
                                    </div>
                                    <div class="text-center my-3 authentication-barrier">
                                        <span>OR</span>
                                    </div>
                                    <div class="grid grid-cols-12 gap-y-4">
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="signin-username" class="form-label text-defaulttextcolor">Email Account</label>
                                            <input type="text" class="form-control" id="loginEmail" placeholder="Email Address">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12 mb-2">
                                            <label for="signin-password" class="form-label text-defaulttextcolor block">Password<a href="reset-password-cover.html" class="float-end font-normal text-textmuted dark:text-textmuted/50">Forget password ?</a></label>
                                            <div class="relative">
                                                <input type="password" id="loginPassword" class="form-control create-password-input" placeholder="password">
                                                <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                            </div>
                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal" for="defaultCheck1">
                                                        Remember password ?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="error-message" class="hidden bg-red-500 text-white p-3 rounded-md mb-4"></div>

                                    <div class="grid mt-4">
                                        <button class="ti-btn ti-btn-primary">Sign In</button>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Dont have an account? <a href="signup-basic.html" class="text-primary">Sign Up</a></p>
                                    </div>
                                    <div class="btn-list text-center mt-3">
                                        <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary">
                                            <i class="ri-facebook-line leading-none align-center text-[17px]"></i>
                                        </button>
                                        <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary1">
                                            <i class="ri-twitter-x-line leading-none align-center text-[17px]"></i>
                                        </button>
                                        <button class="ti-btn ti-btn-icon btn-wave ti-btn-soft-primary2">
                                            <i class="ri-instagram-line leading-none align-center text-[17px]"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                </div>
            </div>
            <div class="xxl:col-span-6 xl:col-span-5 lg:col-span-12 xl:block hidden px-0">
                <div class="authentication-cover overflow-hidden">
                    <div class="authentication-cover-logo">
                        <a href="index.html">
                            <img src="build/assets/images/brand-logos/desktop-white.png" alt="" class="authentication-brand desktop-white">
                        </a>
                    </div>
                    <div class="aunthentication-cover-content flex items-center justify-center">
                        <div>
                            <h3 class="text-white mb-1 font-medium">Welcome Henry!</h3>
                            <h6 class="text-white mb-3 font-medium">Login to Your Account</h6>
                            <p class="text-white mb-1 op-6">Welcome to the Admin Dashboard. Please log in to securely manage your administrative tools and oversee platform activities. Your credentials ensure system integrity and functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
         $(document).ready(function() {
            $("#loginForm").submit(function(e) {
                e.preventDefault();

                let email = $("#loginEmail").val();
                let password = $("#loginPassword").val();
                let csrfToken = $('meta[name="csrf-token"]').attr("content"); // Get CSRF token

                $.ajax({
                    url: "{{ route('api.login') }}", // Change to web.php route if needed
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": csrfToken // Include CSRF token in headers
                    },
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(response) {
                        localStorage.setItem("authToken", response.token);
                        window.location.href = "/dashboard"; // Redirect after login
                    },
                    error: function(xhr) {
                        let errorMessage = xhr.responseJSON?.message || "Invalid email or password.";
                        $("#error-message").html(errorMessage).removeClass("hidden");
                    }
                });
            });
        });

        </script>

        <!-- Show Password JS -->
        <script src="build/assets/show-password.js"></script>


        <!-- END SCRIPTS -->

	</body>
</html>
