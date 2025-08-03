<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            width: 100%;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:disabled {
            background: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>OTP Verification</h2>
    
    <!-- Phone Input -->
    <input type="text" id="phone" placeholder="Enter phone number (+91XXXXXXXXXX)">
    <button onclick="sendOTP()">Send OTP</button>

    <!-- OTP Input -->
    <input type="text" id="otp" placeholder="Enter OTP" style="display: none;">
    <button onclick="verifyOTP()" id="verifyBtn" style="display: none;">Verify OTP</button>
</div>

<script>
    function sendOTP() {
        let phone = document.getElementById("phone").value;
        
        if (phone === "") {
            Swal.fire("Error", "Please enter a phone number!", "error");
            return;
        }

        fetch("{{ route('send.otp') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ phone: phone })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "pending") {
                Swal.fire("Success", "OTP sent successfully!", "success");
                document.getElementById("otp").style.display = "block";
                document.getElementById("verifyBtn").style.display = "block";
            } else {
                Swal.fire("Error", "Failed to send OTP!", "error");
            }
        })
        .catch(error => console.error("Error:", error));
    }

    function verifyOTP() {
        let phone = document.getElementById("phone").value;
        let otp = document.getElementById("otp").value;
        
        if (otp === "") {
            Swal.fire("Error", "Please enter OTP!", "error");
            return;
        }

        fetch("{{ route('verify-otp') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ phone: phone, code: otp })
        })
        .then(response => response.json())
        .then(data => {
            if (data.message === "Verification successful") {
                Swal.fire("Success", "OTP Verified!", "success");
            } else {
                Swal.fire("Error", "Invalid OTP!", "error");
            }
        })
        .catch(error => console.error("Error:", error));
    }
</script>

</body>
</html>
