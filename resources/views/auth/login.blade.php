@extends('layouts.auth_layout')

@section('title', 'Login')

@section('auth-content')
    <div class="auth-container col-12 min-vh-100">
        <div class="col-md-5">
            <div class="left-panel col-md-12 col-lg-10">
                <h2>{{ __('client.login') }}</h2>
                <p>{{ __('client.welcome') }}</p>
                <form id="loginForm" method="POST" action="{{ route('login.execute') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-size: 1.5rem">{{ __('client.email') }}</label>
                        <input type="email" class="form-control form-control-lg p-3" style="height: 6vh" id="email"
                            name="email" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            style="font-size: 1.5rem">{{ __('client.password') }}</label>
                        <input type="password" class="form-control form-control-lg p-3" style="height: 6vh" id="password"
                            name="password" placeholder="Enter your password address">
                    </div>
                    <div class="d-flex justify-content-end pt-3">
                        <a href="{{ route('forgot-password') }}"
                            style="color: black; font-size: 1.25rem">{{ __('client.forgot_password') }} ?</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg ">{{ __('client.login') }}</button>

                    <a href="{{ route('auth.google') }}" class="btn btn-primary btn-lg w-100"
                        style="background-color: #ae2b0b; border-color: #eb1a07;"> <i class="bi bi-google"></i>
                        {{ __('client.login_google') }}</a>

                    <div class="d-flex pt-4 gap-2">
                        <label style="color: #black; font-size: 1.25rem">{{ __('client.not_account') }}</label>
                        <a href="{{ route('register') }}"
                            style="color: #ff6f3c; font-size: 1.25rem; font-weight: 500">{{ __('client.signup') }}</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-7 col-md-8 d-none d-md-flex align-items-center justify-content-center right-panel col-7">
            <label class=""></label>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        showVanillaToast(response.message, 'success');

                        setTimeout(() => {
                            window.location.href = response.redirect;
                        }, 2000);
                    },
                    error: function(xhr) {
                        formValidAjax(xhr);
                    }
                });
            });
        });
    </script>
@endsection()
