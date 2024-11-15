@extends('layouts.auth_layout')

@section('title', 'Forgot Password')

@section('auth-content')
<div class="auth-container col-12 min-vh-100">
    <div class="col-md-5">
        <div class="left-panel col-md-12 col-lg-10">
            <h2>{{ __('client.forgot_password') }}</h2>
            <p>{{ __('client.intro') }}</p>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size: 1.5rem">{{ __('client.email') }}</label>
                    <input type="email" class="form-control form-control-lg p-3" id="email" placeholder="Enter your email address">
                </div>
                <button type="submit" class="btn btn-primary btn-lg ">{{ __('client.remember_password') }}</button>
                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg">{{ __('client.back_to_sign_in') }}</a>
            </form>
        </div>
    </div>
    <div class="col-lg-7 col-md-8 d-none d-md-flex align-items-center justify-content-center right-panel">
        <label class=""></label>
    </div>
</div>
@endsection
