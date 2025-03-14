<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast2OTP - WhatsApp OTP Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Fast2OTP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs">API Docs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    @if(Auth::user())
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Welcome, {{ Auth::user()->name }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>

                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Fast & Secure WhatsApp OTP Verification</h1>
            <p class="lead">Easily integrate our API to verify users via WhatsApp</p>
            <a href="#docs" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </header>
    
    <section id="features" class="py-5 text-center">
        <div class="container">
            <h2>Why Choose Fast2OTP?</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h4>Reliable API</h4>
                    <p>Instant OTP delivery via WhatsApp.</p>
                </div>
                <div class="col-md-4">
                    <h4>Flexible Pricing</h4>
                    <p>Pay-per-OTP model with admin control.</p>
                </div>
                <div class="col-md-4">
                    <h4>Secure & Scalable</h4>
                    <p>End-to-end encryption for secure authentication.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="pricing" class="bg-light py-5 text-center">
        <div class="container">
            <h2>Pricing</h2>
            <p>Affordable & transparent pricing for OTP verification.</p>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Plan</th>
                        <th>Price per OTP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basic</td>
                        <td>₹0.20</td>
                    </tr>
                    <tr>
                        <td>Pro</td>
                        <td>₹0.15</td>
                    </tr>
                    <tr>
                        <td>Enterprise</td>
                        <td>Custom Pricing</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    
    <section id="docs" class="py-5 text-center">
        <div class="container">
            <h2>API Documentation</h2>
            <p>Integrate our API in minutes.</p>
            <pre class="bg-light p-3 text-start">POST /send-otp
{
    "phone": "+919876543210"
}</pre>
            <a href="#" class="btn btn-primary">View Full Docs</a>
        </div>
    </section>
    
    <section id="contact" class="bg-dark text-white py-5 text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Email: support@fast2otp.com</p>
        </div>
    </section>
    
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2024 Fast2OTP. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
