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
       <title> Fast2OTP | Bulk OTP Provider </title>
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

        

        <div class="container">
            <div class="grid grid-cols-12 justify-center items-center authentication authentication-basic h-full">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                    <div class="box my-4">
                        <div class="box-body p-[3rem]">
                            <div class="mb-3 flex justify-center">
                                <a href="index.html">
                                    <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                    <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-white">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Change Password</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center text-[14px]">Hi {{ $user->name }}!</p>
                            
                            <div class="grid grid-cols-12 gap-y-4">
                                <!-- Current Password -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="current-password" class="form-label text-defaulttextcolor">Current Password <sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input type="password" class="form-control create-password-input" id="current-password" placeholder="Current password" required>
                                        <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" 
                                           onclick="createpassword('current-password', this)">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            
                                <!-- New Password -->
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="new-password" class="form-label text-defaulttextcolor">New Password <sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input type="password" class="form-control create-password-input" id="new-password" placeholder="New password" required>
                                        <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" 
                                           onclick="createpassword('new-password', this)">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            
                                <!-- Confirm Password -->
                                <div class="xl:col-span-12 col-span-12 mb-2">
                                    <label for="confirm-password" class="form-label text-defaulttextcolor">Confirm Password <sup class="text-xs text-danger">*</sup></label>
                                    <div class="relative">
                                        <input type="password" class="form-control create-password-input" id="confirm-password" placeholder="Confirm password" required>
                                        <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50" 
                                           onclick="createpassword('confirm-password', this)">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid mt-4">
                                <button class="ti-btn ti-btn-primary" onclick="changePassword()">Change Password</button>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            </div>
        </div>


        <!-- SCRIPTS -->

        
        <!-- Show Password JS -->
        <script src="build/assets/show-password.js"></script>
        
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- Add jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            // AJAX Password Change Function
    function changePassword() {
        const currentPassword = document.getElementById('current-password').value;
        const newPassword = document.getElementById('new-password').value;
        const confirmPassword = document.getElementById('confirm-password').value;

        if (newPassword !== confirmPassword) {
            Toastify({
                text: "New passwords do not match!",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#FF0000"
            }).showToast();
            return;
        }

        $.ajax({
            url: "{{ route('update-password') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                current_password: currentPassword,
                new_password: newPassword,
                confirm_password: confirmPassword
            },
            success: function (response) {
                if (response.success) {
                    Toastify({
                        text: response.message,
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#4CAF50"
                    }).showToast();
                    
                     // Redirect to the settings page after success
                    setTimeout(() => {
                        window.location.href = "{{ route('settings') }}";
                    }, 1500); 
                } else {
                    console.log(response);
                    
                    Toastify({
                        text: response.message,
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#FF0000"
                    }).showToast();
                }
            },
            error: function (xhr) {

                let errors = xhr.responseJSON;
                console.log(xhr);
                
                let message = errors ? Object.values(errors).join("\n") : "Failed to update password";
                Toastify({
                    text: message,
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
