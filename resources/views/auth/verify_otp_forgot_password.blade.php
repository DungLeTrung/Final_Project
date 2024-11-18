@extends('layouts.auth_layout')

@section('title', 'Confirm OTP')

@section('auth-content')
<div class="auth-container col-12 min-vh-100">
    <div class="col-md-5">
        <div class="left-panel col-md-12 col-lg-10">
            <h2>Verify OTP</h2>
            <p>{{ __('client.welcome') }}</p>
            <form id="otpVerificationForgotPassForm" method="POST" action="{{ route('verify-otp-forgot-password.execute')}}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size: 1.5rem" hidden>Email:</label>
                    <input type="hidden" id="email" name="email" value="{{ $email }}" required>
                </div>
                <div class="mb-3">
                    <label for="otp_code" class="form-label" style="font-size: 1.5rem">OTP Code:</label>
                    <input type="text" class="form-control form-control-lg p-3" id="otp_code" name="otp_code"
                        required maxlength="4">
                </div>
                <button type="submit" class="btn btn-primary btn-lg ">Verify OTP</button>
                <button type="button" class="btn btn-primary btn-lg " id="resendOtpButton">Re-send OTP</button>
            </form>
        </div>
    </div>
    <div class="col-lg-7 col-md-8 d-none d-md-flex align-items-center justify-content-center right-panel col-7">
        <label class=""></label>
    </div>
</div>
    <script>
        $(document).ready(function() {
            $('#otpVerificationForgotPassForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        showVanillaToast(response.message, 'success');
                        setTimeout(function() {
                            if (response.redirect) {
                                window.location.href = response.redirect;
                            }
                        }, 3000);
                        $('#otpVerificationForm')[0].reset();
                    },
                    error: function(xhr) {
                        formValidAjax(xhr);
                    }
                });
            });
        });

        $('#resendOtpButton').on('click', function() {
            window.location.href = '/send-otp-forgot-password';
        });
    </script>
@endsection
