<!DOCTYPE html>
<html>
<head>
    <title>OTP CODE</title>
</head>
<body>
    <h1>Your OTP Code</h1>
    <p>Your OTP code is: <strong>{{ $otpCode }}</strong></p>
    <p>This code is valid until: <strong>{{ $expirationTime }}</strong></p>
    <p>Please use this code to complete your registration.</p>
    <p>Verify Account: http://localhost:8000/verify-otp?email={{ urlencode($email) }}</p>
</body>
</html>
