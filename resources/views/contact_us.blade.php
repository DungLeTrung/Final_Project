@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')

    <div class="banner-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-12 text-overlay-home-page">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-10 my-5">
        <div class="row w-100">
            <!-- Text Section -->
            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <p style="font-size: 3rem; font-weight: bold">
                    We'd love to hear from you
                </p>
                <p style="font-size: 1.5rem;" class="mb-5">
                    Send us a message and we'll respond as soon as possible
                </p>
                <div class="input-style-booking mb-3 col-11 p-0">
                    <div class="text-style-booking d-flex justify-content-end align-items-center gap-3 col-12 p-0" >
                        <input  type="text" class="form-control form-control-lg p-3 no-border" style="height: 8vh; background-color: #F5F5F5" id="user_name" placeholder="Your Name">
                    </div>
                </div>
                <div class="input-style-booking mb-3 col-11 p-0">
                    <div class="text-style-booking d-flex justify-content-end align-items-center gap-3 col-12 p-0" >
                        <input  type="text" class="form-control form-control-lg p-3 no-border" style="height: 8vh; background-color: #F5F5F5" id="email" placeholder="Your Email">
                    </div>
                </div>
                <div class="input-style-booking mb-3 col-11 p-0">
                    <div class="text-style-booking d-flex justify-content-end align-items-center gap-3 col-12 p-0" >
                        <input  type="text" class="form-control form-control-lg p-3 no-border" style="height: 8vh; background-color: #F5F5F5" id="phone" placeholder="Your Phone">
                    </div>
                </div>
                <div class="input-style-booking mb-3 col-11 p-0">
                    <div class="text-style-booking d-flex justify-content-end align-items-center gap-3 col-12 p-0" >
                        <input  type="textarea" class="form-control form-control-lg p-3 no-border" style="height: 15vh; background-color: #F5F5F5" id="message" placeholder="Message">
                    </div>
                </div>
                <div class="col-12 row p-0">
                    <div class="col-8">

                    </div>
                    <div class="col-3 order-md-1 p-0">
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            @include('component-tour.contact_right')

        </div>
    </div>


    <div class="banner-map">
    </div>


@endsection
