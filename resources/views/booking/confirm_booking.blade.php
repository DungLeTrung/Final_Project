@extends('layouts.auth_layout')

@section('title', 'Confirm Booking')

@section('auth-content')
<div class="banner-confirm position-relative">
    <div class="thank-you-overlay col-10 col-md-8 col-lg-6 position-absolute top-50 start-50 translate-middle text-center d-flex flex-column justify-content-between align-items-center p-5 shadow-lg">
        <h1 class="fw-bold display-4 display-md-3" style="color: #ff6f3c; font-size: 5rem">Thank You!</h1>
        <p class="mt-3 fs-4 fs-md-5">
            Your order has been successfully ordered.<br>
            Order information has been emailed to you. Thank you!
        </p>
        <a href={{ route('home-page') }} class="btn btn-primary mt-4 px-4">Back to our home</a>
    </div>
</div>
@endsection()
