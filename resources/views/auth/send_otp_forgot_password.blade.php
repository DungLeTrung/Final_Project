@extends('layouts.auth_layout')

@section('title', 'Send OTP')

@section('auth-content')
    <div class="auth-container col-12 min-vh-100">
        <div class="col-md-5">
            <div class="left-panel col-md-12 col-lg-10">
                <h2>Send OTP</h2>
                <p>{{ __('client.welcome') }}</p>
                <form id="sendOTPForm" method="POST" action="{{ route('send-otp-forgot-password.execute')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-size: 1.5rem">{{ __('client.email') }} </label>
                        <input type="email" class="form-control form-control-lg p-3" id="email" name="email"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg ">{{ __('client.send_otp') }}</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7 col-md-8 d-none d-md-flex align-items-center justify-content-center right-panel col-7">
            <label class=""></label>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            console.log(123);
            $('#sendOTPForm').on('submit', function(e) {

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
                    },
                    error: function(xhr) {
                        formValidAjax(xhr);
                    }
                });
            });
        });
    </script>
@endsection()
