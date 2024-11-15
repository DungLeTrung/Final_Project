@extends('layouts.auth_layout')

@section('title', 'Register')

@section('auth-content')
<div class="auth-container col-12 min-vh-100">
    <div class="col-md-5">
        <div class="left-panel col-md-12 col-lg-10">
            <h2>{{ __('client.signup') }}</h2>
            <p>{{ __('client.welcome') }}</p>
            <form>
                <div class="d-flex gap-3">
                    <div class="mb-3 w-50">
                        <label for="first_name" class="form-label" style="font-size: 1.5rem">{{ __('client.first_name') }}</label>
                        <input type="first_name" class="form-control form-control-lg " id="first_name" placeholder="First Name">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="last_name" class="form-label" style="font-size: 1.5rem">{{ __('client.last_name') }}</label>
                        <input type="last_name" class="form-control form-control-lg " id="last_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size: 1.5rem">{{ __('client.email') }}</label>
                    <input type="email" class="form-control form-control-lg p-3" id="email" placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="font-size: 1.5rem">{{ __('client.password') }}</label>
                    <input type="password" class="form-control form-control-lg p-3" id="password" placeholder="Enter your password address">
                </div>
                <div class="d-flex justify-content-end pt-3">
                    <a href="{{ route('forgotPassword') }}" style="color: black; font-size: 1.25rem">{{ __('client.forgot_password') }} ?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ">{{ __('client.signup') }}</button>

                <button type="button" class="btn btn-primary btn-lg w-100" style="background-color: #3b5998; border-color: #3b5998;">
                    <i class="bi bi-facebook"></i> {{ __('client.login_facebook') }}
                </button>

                <div class="d-flex pt-4 gap-2">
                    <label style="color: #black; font-size: 1.25rem">{{ __('client.account') }}</label>
                    <a href="{{ route('login') }}" style="color: #ff6f3c; font-size: 1.25rem; font-weight: 500">{{ __('client.login') }}</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-7 col-md-8 d-none d-md-flex align-items-center justify-content-center right-panel col-7">
        <label class=""></label>
    </div>
</div>

{{-- <script>
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
                        window.location.href = '/';
                    }, 3000);
                },
                error: function(xhr) {
                    formValidAjax(xhr);
                }
            });
        });
    });
</script> --}}
@endsection
