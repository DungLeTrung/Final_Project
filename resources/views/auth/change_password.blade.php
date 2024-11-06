@extends('layouts.auth_layout')

@section('title', 'New Password')

@section('auth-content')
<div class="container col-12 min-vh-100">
    <div class="col-md-5">
        <div class="left-panel col-md-12 col-lg-10">
            <h2>New Password</h2>
            <p>Create your new password.</p>
            <form>
                <div class="mb-3">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="new_password" class="form-control form-control-lg p-3" id="new_password" placeholder="Enter your new password">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="confirm_password" class="form-control form-control-lg p-3" id="confirm_password" placeholder="Confirm your new password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg ">Change Password</button>

                <div class="d-flex pt-4 gap-2">
                    <label style="color: #black; font-size: 1rem">You remember that? </label>
                    <a href="#" style="color: #ff6f3c; font-size: 1rem; font-weight: 500"> Log in</a>
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
