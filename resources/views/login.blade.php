<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Laravel Tailwind Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Fast2OTP Private Limited">
    <meta name="keywords"
        content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">

    <!-- TITLE -->
    <title>Login | Fast2OTP - Bulk OTP Provider</title>

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

    <!-- MAIN JS -->
    <script src="build/assets/authentication-main.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">



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
                                <p class="h5 mb-2 text-center">Sign In to Fast2OTP</p>
                                <p
                                    class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">
                                    Welcome back! Please log in to access your dashboard and manage OTP delivery.
                                </p>
                                <!-- Optional: Google Sign-In -->
                                <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                    <button
                                        class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto bg-light">
                                        <span class="avatar avatar-xs flex-shrink-0">
                                            <img src="build/assets/images/media/apps/google.png" alt="Google">
                                        </span>
                                        <span class="leading-[1.2rem] ms-2 text-[13px] text-defaulttextcolor">
                                            Sign in with Google
                                        </span>
                                    </button>
                                </div>

                                <div class="text-center my-3 authentication-barrier">
                                    <span>OR</span>
                                </div>

                                <div class="grid grid-cols-12 gap-y-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="loginEmail" class="form-label text-defaulttextcolor">Email Address</label>
                                        <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mb-2">
                                        <label for="loginPassword" class="form-label text-defaulttextcolor block">
                                            Password
                                            <a href="javascript:void(0);" onclick="sendPasswordResetOTP()" class="float-end font-normal text-primary hover:underline">
                                                Forgot password?
                                            </a>
                                        </label>
                                        <div class="relative">
                                            <input type="password" id="loginPassword" class="form-control create-password-input" placeholder="Enter your password" required>
                                            <span class="show-password-button cursor-pointer text-textmuted dark:text-textmuted/50"
                                            onclick="showPassword('loginPassword', this)">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </span>
                                        </div>
                                        <!-- Remember Me -->
                                        <div class="mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                                <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal" for="rememberMe">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div id="error-message" class="hidden bg-red-500 text-white p-3 rounded-md mb-4"></div> --}}

                                <div class="grid mt-4">
                                    <button class="ti-btn ti-btn-primary">Sign In</button>
                                </div>

                                 <!-- Sign Up Prompt -->
                                <div class="text-center mt-3">
                                    <p class="text-textmuted dark:text-textmuted/50">Don't have an account?
                                        <a href="/register" class="text-primary hover:underline">Register Now</a>
                                    </p>
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
                        <img src="build/assets/images/brand-logos/desktop-white.png" alt=""
                            class="authentication-brand desktop-white">
                    </a>
                </div>
                <div class="aunthentication-cover-content flex items-center justify-center">
                    <div>
                        <h3 class="text-white mb-1 font-medium">Welcome Back to Fast2OTP ! </h3>
                        <h6 class="text-white mb-3 font-medium">Secure Login to Access Your Dashboard</h6>
                        <p class="text-white mb-2 op-6">
                            Manage your OTP services and WhatsApp API integration with ease.
                            Fast, reliable, and secure — login to streamline your user authentication process.
                        </p>
                        <p class="text-white text-sm opacity-80">
                            Need help? <a href="/contact" class="underline text-white hover:text-gray-200">Contact
                                support</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- Add jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function(e) {
                e.preventDefault();

                let email = $("#loginEmail").val();
                let password = $("#loginPassword").val();
                let csrfToken = $('meta[name="csrf-token"]').attr("content"); // Get CSRF token

                if(!email){
                    Toastify({
                        text: "Please enter your email address!",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#FF0000"
                    }).showToast();
                    return; // Stop execution if no email is provided
                }

                if(!password){
                    Toastify({
                        text: "Please enter your password!",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#FF0000"
                    }).showToast();
                    return; // Stop execution if no password is provided
                }

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
                            Toastify({
                                text: "Login successful! Redirecting...",
                                duration: 3000,
                                gravity: "top",
                                position: "right",
                                style: {
                                    background: "#28a745"
                                }
                            }).showToast();
                        localStorage.setItem("authToken", response.token);
                        setTimeout(() => {
                            window.location.href = "/dashboard";
                        }, 1500);
                    },
                    error: function(xhr) {
                        console.error(xhr);
                        let errorMessage = xhr.responseJSON?.message || "Invalid email or password.";
                
                        // Error Toast
                        Toastify({
                            text: errorMessage,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            style: {
                                background: "#FF0000"
                            }
                        }).showToast();
                    }
                });
            });

        });


        function sendPasswordResetOTP() {
            let email = document.getElementById('loginEmail').value; // Get email from input field

            if (!email) {
                Toastify({
                    text: "Please enter your email address!",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return; // Stop execution if no email is provided
            }

            $.ajax({
                url: "{{ route('send-reset-otp') }}", // Laravel route to send OTP
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email // Pass the email to the server
                },
                success: function(response) {
                    if (response.success) {
                        Toastify({
                            text: "OTP sent to your email!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#4CAF50"
                        }).showToast();

                        // Redirect to the OTP verification page
                        setTimeout(() => {
                            window.location.href = "{{ route('verify-otp-page') }}";
                        }, 1500);
                    } else {
                        Toastify({
                            text: response.message || "Failed to send OTP. Try again.",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#FF0000"
                        }).showToast();
                    }
                },
                error: function(xhr) {
                    console.error(xhr);
                    Toastify({
                        text: "Something went wrong! Please try again.",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#FF0000"
                    }).showToast();
                }
            });
        }

        function showPassword(inputId, iconElement) {
            const inputField = document.getElementById(inputId);
            if (inputField.type === "password") {
                inputField.type = "text";
                iconElement.innerHTML = '<i class="ri-eye-line align-middle"></i>';
            } else {
                inputField.type = "password";
                iconElement.innerHTML = '<i class="ri-eye-off-line align-middle"></i>';
            }
        }
    </script>

    <!-- Show Password JS -->
    <script src="build/assets/show-password.js"></script>


    <!-- END SCRIPTS -->

</body>

</html>
