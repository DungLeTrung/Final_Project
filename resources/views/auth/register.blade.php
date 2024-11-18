@extends('layouts.auth_layout')

@section('title', 'Register')

@section('auth-content')
    <div class="auth-container col-12 min-vh-100">
        <div class="col-md-5">

            <div class="left-panel col-md-12 col-lg-10">
                <h2>{{ __('client.signup') }}</h2>
                <p>{{ __('client.welcome') }}</p>
                <form id="registerForm" method="POST" action="{{ route('register.execute') }}">
                    @csrf
                    <div class="d-flex gap-3">
                        <div class="mb-3 w-50">
                            <label for="first_name" class="form-label"
                                style="font-size: 1.5rem">{{ __('client.first_name') }}</label>
                            <input type="text" name="first_name" class="form-control form-control-lg" id="first_name"
                                placeholder="First Name">
                        </div>
                        <div class="mb-3 w-50">
                            <label for="last_name" class="form-label"
                                style="font-size: 1.5rem">{{ __('client.last_name') }}</label>
                            <input type="text" name="last_name" class="form-control form-control-lg" id="last_name"
                                placeholder="Last Name">
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="mb-3 w-50">
                            <label for="user_name" class="form-label"
                                style="font-size: 1.5rem">{{ __('client.user_name') }}</label>
                            <input type="text" name="user_name" class="form-control form-control-lg" id="user_name"
                                placeholder="User Name">
                        </div>
                        <div class="mb-3 w-50">
                            <label for="phone" class="form-label"
                                style="font-size: 1.5rem">{{ __('client.phone') }}</label>
                            <input type="text" name="phone" class="form-control form-control-lg" id="phone"
                                placeholder="Phone">
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="mb-3 w-50">
                            <label for="address" class="form-label"
                                style="font-size: 1.5rem">{{ __('client.address') }}</label>
                            <input type="text" name="address" class="form-control form-control-lg" id="address"
                                placeholder="Address">
                        </div>
                        <div class="mb-3 w-50">
                            <label for="email" class="form-label"
                                style="font-size: 1.5rem">{{ __('client.email') }}</label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email"
                                placeholder="Enter your email address">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            style="font-size: 1.5rem">{{ __('client.password') }}</label>
                        <input type="password" name="password" class="form-control form-control-lg" id="password"
                            placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label"
                            style="font-size: 1.5rem">{{ __('client.confirm_password') }}</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg"
                            id="confirm_password" placeholder="Confirm your password">
                    </div>
                    <div class="d-flex justify-content-end pt-3">
                        <a href="{{ route('forgot-password') }}"
                            style="color: black; font-size: 1.25rem">{{ __('client.forgot_password') }} ?</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">{{ __('client.signup') }}</button>
                </form>

            </div>
        </div>
        <div class="col-lg-7 col-md-8 d-none d-md-flex align-items-center justify-content-center right-panel col-7">
            <label class=""></label>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault();
                $('.text-danger').text('');
                $('.form-control').removeClass('is-invalid');

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        console.log(response);

                        showVanillaToast(response.message, 'success');
                        setTimeout(() => {
                            if (response.redirect) {
                                window.location.href = response.redirect;
                            }
                            $('#registerForm')[0].reset();
                        }, 3000);
                    },
                    error: function(xhr) {
                        formValidAjax(xhr);
                    }
                });
            });
        });
    </script>
@endsection
