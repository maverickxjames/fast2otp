<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast2OTP - Login & Signup</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">


    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Login</h3>
                    <form id="loginForm">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
                alert("Login Successful!");
                window.location.href = "/dashboard"; // Redirect after login
            },
            error: function(xhr) {
                alert("Login Failed: " + (xhr.responseJSON?.message || "Unknown error"));
            }
        });
    });
});

</script>

</body>
</html>
