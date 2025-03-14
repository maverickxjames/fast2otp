<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- otp send form using bootstrap  --}}

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Send OTP</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sendotp') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                                <label for="phone">OTP</label>
                                <input type="text" name="otp" class="form-control" placeholder="Enter otp">
                            </div>
                            <button type="submit" class="btn btn-primary">Send OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>