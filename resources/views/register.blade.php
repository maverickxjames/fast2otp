<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast2OTP - Login & Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- FAVICON -->
    <link rel="icon" href="build/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="build/assets/icon-fonts/icons.css" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="build/assets/app-C2-htF4y.css">
    <link rel="stylesheet" href="build/assets/app-C2-htF4y.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- APP CSS -->
    <link rel="preload" as="style" href="build/assets/app-C6ls_Bf6.css">
    <link rel="stylesheet" href="build/assets/app-C6ls_Bf6.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- MAIN JS -->
    <script src="build/assets/authentication-main.js"></script>
</head>

<body class="bg-light">


    <div class="grid grid-cols-12 authentication authentication-cover-main mx-0">
        <div class="xxl:col-span-6 xl:col-span-7 col-span-12">
            <div class="grid grid-cols-12 justify-center items-center h-full">
                <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-8 xl:col-span-8 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                    <div class="box my-5 border border-defaultborder dark:border-defaultborder/10">
                        <div class="box-body p-[3rem]">
                            <p class="h5 mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">
                                Welcome! Begin by creating your account.</p>
                            <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                <button
                                    class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto ti-btn-light">
                                    <span class="avatar avatar-xs">
                                        <img src="build/assets/images/media/apps/google.png" alt="">
                                    </span>
                                    <span class="leading-[1.2rem] ms-2 text-[13px] text-defaulttextcolor">Signup with
                                        Google</span>
                                </button>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <form id="registerForm">
                                <div class="grid grid-cols-12 gap-y-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="register-firstname" class="form-label text-defaulttextcolor">Full
                                            Name<sup class="text-xs text-danger">*</sup></label>
                                        <input type="text" class="form-control" id="register-firstname"
                                            placeholder="full name">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="register-email" class="form-label text-defaulttextcolor">Email<sup
                                                class="text-xs text-danger">*</sup></label>
                                        <input type="text" class="form-control" id="register-email"
                                            placeholder="email">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="register-phone" class="form-label text-defaulttextcolor">phone<sup
                                                class="text-xs text-danger">*</sup></label>
                                        <input type="text" class="form-control" id="register-phone"
                                            placeholder="phone">
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="register-password"
                                            class="form-label text-defaulttextcolor">Password<sup
                                                class="text-xs text-danger">*</sup></label>
                                        <div class="relative">
                                            <input type="password" class="form-control create-password-input"
                                                id="register-password" placeholder="password">
                                            <span
                                                class="show-password-button cursor-pointer text-textmuted dark:text-textmuted/50"
                                                onclick="showPassword('register-password',this)" id="button-addon2"><i
                                                    class="ri-eye-off-line align-middle"></i></span>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="register-confirmpassword"
                                            class="form-label text-defaulttextcolor">Confirm Password<sup
                                                class="text-xs text-danger">*</sup></label>
                                        <div class="relative">
                                            <input type="password" class="form-control create-password-input"
                                                id="register-confirmpassword" placeholder="confirm password">
                                            <span
                                                class="show-password-button cursor-pointer text-textmuted dark:text-textmuted/50"
                                                onclick="showPassword('register-confirmpassword',this)"
                                                id="button-addon21"><i class="ri-eye-off-line align-middle"></i></span>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label
                                                class="form-check-label text-textmuted dark:text-textmuted/50 font-normal text-[14px]"
                                                for="defaultCheck1">
                                            </label>
                                            By creating a account you agree to our
                                            <a href="terms-conditions.html" class="text-success"><u>Terms &
                                                    Conditions</u></a> and <a class="text-success"><u>Privacy
                                                    Policy</u></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid mt-4">
                                    <button type="submit" class="ti-btn ti-btn-primary">Create Account</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Already have an account? <a
                                        href="/login" class="text-primary">Sign In</a></p>
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
                        <h3 class="text-white mb-1 font-medium">Welcome Back!</h3>
                        <h6 class="text-white mb-3 font-medium">Access Your Fast2OTP Account</h6>
                        <p class="text-white mb-1 op-6">
                            Sign in to manage your bulk OTP services, view analytics, and configure your communication
                            settings.
                            Ensure secure access with your credentials and experience seamless control over your
                            account.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Add this Toastify library if not already present -->
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>





    <!-- SCRIPTS -->


    <!-- Show Password JS -->
    <script src="build/assets/show-password.js"></script>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const fullName = document.getElementById('register-firstname').value;
            const email = document.getElementById('register-email').value;
            const phone = document.getElementById('register-phone').value;
            const password = document.getElementById('register-password').value;
            const confirmPassword = document.getElementById('register-confirmpassword').value;
            let csrfToken = $('meta[name="csrf-token"]').attr("content"); // Get CSRF token

            if (!fullName) {
                Toastify({
                    text: "Please enter your full name",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }
            if (!email) {
                Toastify({
                    text: "Please enter your email",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }
            if (!phone) {
                Toastify({
                    text: "Please enter your phone number",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }
            if (!/^\S+@\S+\.\S+$/.test(email)) {
                Toastify({
                    text: "Please enter a valid email address",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }
            if (!/^\d{10,15}$/.test(phone)) {
                Toastify({
                    text: "Please enter a valid phone number (10-15 digits)",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }

            if (!password) {
                Toastify({
                    text: "Please enter your password",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }

            if (!password || password.length < 6) {
                Toastify({
                    text: "Password must be at least 6 characters long",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }

            if (password !== confirmPassword) {
                Toastify({
                    text: "Passwords do not match",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
                return;
            }

            $.ajax({
                url: '{{ route('api.register') }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request headers
                },
                contentType: 'application/json',

                data: JSON.stringify({
                    name: fullName,
                    email: email,
                    phone: phone,
                    password: password,
                    password_confirmation: confirmPassword
                }),

                success: function(response) {
                    if (response.status === 'success') {
                        Toastify({
                            text: "Registration successful! Redirecting to login page...",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#28a745"                           
                        }).showToast();
                        setTimeout(function() {
                            window.location.href = '/login';
                        }, 3000);
                    } else {
                        Toastify({
                            text: response.message || "Registration failed. Please try again.",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#FF0000"
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    Toastify({
                        text: "An error occurred: " + (xhr.responseJSON.message ||
                            "Please try again."),
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                    }).showToast();
                }


            })
        })

        function showPassword(inputId, iconElement) {
            console.log("Toggling password visibility for:", inputId);
            const input = document.getElementById(inputId);
            console.log("Current input type:", input);
            if (input.type === "password") {
                input.type = "text";
                iconElement.innerHTML = '<i class="ri-eye-line align-middle"></i>';
            } else {
                input.type = "password";
                iconElement.innerHTML = '<i class="ri-eye-off-line align-middle"></i>';
            }
        }
    </script>
</body>

</html>
