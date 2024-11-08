@extends('layouts.auth_layout')

@section('title', 'Login')

@section('auth-content')
<div class="auth-container col-12 min-vh-100">
    <div class="col-md-5">
        <div class="left-panel col-md-12 col-lg-10">
            <h2>Sign in</h2>
            <p>Welcome to NgaoduVietnam.</p>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control form-control-lg p-3" id="email" placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg p-3" id="password" placeholder="Enter your password address">
                </div>
                <div class="d-flex justify-content-end pt-3">
                    <a href="{{ route('forgotPassword') }}" style="color: black; font-size: 1rem">Forgot Password ?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ">Sign In</button>

                <button type="button" class="btn btn-primary btn-lg w-100" style="background-color: #3b5998; border-color: #3b5998;">
                    <i class="bi bi-facebook"></i> Sign In with Facebook
                </button>

                <div class="d-flex pt-4 gap-2">
                    <label style="color: #black; font-size: 1rem">Don't have an account?</label>
                    <a href="{{ route('register') }}" style="color: #ff6f3c; font-size: 1rem; font-weight: 500"> Sign Up</a>
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
@endsection()
