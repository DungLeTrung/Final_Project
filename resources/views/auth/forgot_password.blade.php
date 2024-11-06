@extends('layouts.auth_layout')

@section('title', 'Forgot Password')

@section('auth-content')
<div class="container col-12 min-vh-100">
    <div class="col-md-5">
        <div class="left-panel col-md-12 col-lg-10">
            <h2>Forgot Password</h2>
            <p>Enter the e-mail address associated with the account. We'll e-mail a link to reset your password.</p>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control form-control-lg p-3" id="email" placeholder="Enter your email address">
                </div>
                <button type="submit" class="btn btn-primary btn-lg ">Send Request</button>
                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg">Back to Sign In</a>
            </form>
        </div>
    </div>
    <div class="col-lg-7 col-md-8 d-none d-md-flex align-items-center justify-content-center right-panel">
        <label class=""></label>
    </div>
</div>
@endsection
