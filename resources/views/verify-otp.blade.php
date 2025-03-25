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

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

          


	</head>

    <body class="authentication-background">

        

        <div class="container-lg">
            <div class="grid grid-cols-12 justify-center items-center authentication two-step-verification authentication-basic h-full">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                    <div class="box my-4">
                        <div class="box-body p-[3rem]">
                            <div class="mb-3 flex justify-center">
                                <a href="index.html">
                                    <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                    <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                </a>
                            </div>
        
                            <p class="h5 mb-2 text-center">Verification Code</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center text-xs">
                                Enter the 6-digit code sent to the email{{ $email }}.
                            </p>
        
                            <div class="grid grid-cols-12 gy-3">
                                <div class="xl:col-span-12 col-span-12 mb-2">
                                    <div class="grid grid-cols-12 gap-x-2">
                                        <div class="col-span-2">
                                            <input type="text" class="form-control text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                        </div>
                                        <div class="col-span-2">
                                            <input type="text" class="form-control text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                        </div>
                                        <div class="col-span-2">
                                            <input type="text" class="form-control text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                        </div>
                                        <div class="col-span-2">
                                            <input type="text" class="form-control text-center" id="four" maxlength="1" onkeyup="clickEvent(this,'five')">
                                        </div>
                                        <div class="col-span-2">
                                            <input type="text" class="form-control text-center" id="five" maxlength="1" onkeyup="clickEvent(this,'six')">
                                        </div>
                                        <div class="col-span-2">
                                            <input type="text" class="form-control text-center" id="six" maxlength="1">
                                        </div>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label text-[14px]" for="defaultCheck1">
                                            Didn't receive a code?
                                            <a href="javascript:void(0);" onclick="resendOtp()" class="text-primary ms-2 inline-block">Resend</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 grid mt-2">
                                    <button onclick="verifyOtp()" class="ti-btn ti-btn-primary">Verify</button>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            </div>
        </div>
        
        


        <!-- SCRIPTS -->

        
        <!-- Internal Two Step Verification JS -->
        <script src="build/assets/two-step-verification.js"></script>
         <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


        <script>
            const email = "{{ $email }}";
     // 🚀 Function to verify OTP
function verifyOtp() {
    const otp = [
        document.getElementById('one').value,
        document.getElementById('two').value,
        document.getElementById('three').value,
        document.getElementById('four').value,
        document.getElementById('five').value,
        document.getElementById('six').value
    ].join('');

    if (otp.length !== 6) {
        Toastify({
            text: "Please enter a 6-digit OTP.",
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "#FF0000"
        }).showToast();
        return;
    }

    $.ajax({
        url: "{{ route('verify-otp') }}",  // Laravel route for OTP verification
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            email:email,
            otp: otp
        },
        success: function(response) {
            if (response.success) {
                Toastify({
                    text: "OTP verified successfully!",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4CAF50"
                }).showToast();

                // Redirect to password reset page
                setTimeout(() => {
                    window.location.href = "/reset-password?email=" + encodeURIComponent(email);
                }, 1500);
            } else {
                Toastify({
                    text: "Invalid OTP. Try again.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
            }
        },
        error: function(xhr) {
            Toastify({
                text: "Something went wrong!",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#FF0000"
            }).showToast();
        }
    });
}

// 🔥 Function to resend OTP
function resendOtp() {
    $.ajax({
        url: "{{ route('send-reset-otp') }}",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}"
        },
        success: function(response) {
            if (response.success) {
                Toastify({
                    text: "OTP resent successfully!",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4CAF50"
                }).showToast();
            } else {
                Toastify({
                    text: "Failed to resend OTP. Try again.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#FF0000"
                }).showToast();
            }
        },
        error: function() {
            Toastify({
                text: "Something went wrong!",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#FF0000"
            }).showToast();
        }
    });
}

        </script>


        <!-- END SCRIPTS -->

	</body>
</html>
