<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast2OTP - Login & Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Sign Up</h3>
                    <form id="registerForm">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" id="regName" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="regEmail" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" id="regPhone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="regPassword" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="regPasswordConfirm" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById("registerForm").addEventListener("submit", function(e) {
    e.preventDefault();
    let name = document.getElementById("regName").value;
    let email = document.getElementById("regEmail").value;
    let phone = document.getElementById("regPhone").value;
    let password = document.getElementById("regPassword").value;
    let password_confirmation = document.getElementById("regPasswordConfirm").value;

    axios.post("http://127.0.0.1:8000/api/register", {
        name, email, phone, password, password_confirmation
    }).then(response => {
        alert("Registration Successful! Please login.");
    }).catch(error => {
        alert("Registration Failed: " + error.response.data.message);
    });
});
</script>

</body>
</html>
