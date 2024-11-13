@extends('layouts.auth_layout')

@section('title', 'Booking Tour')

@section('auth-content')
    <div class="banner-detail-tour">
        <div class="row">
            <div class="col-12 text-overlay-home-page">
                <h2>Booking Tour</h2>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12 component-booking-tour mt-5">
        <div class="row justify-content-center booking-tour-component">
            <div class="col-10 d-flex booking-tour">
                <div class="row col-12 p-0 mb-3" style="font-size: 1.25rem">

                    <!-- Booking Form - Shown above on small screens -->
                    <div class="col-12 col-md-4 order-2 order-md-2 mt-4 mt-md-0">
                        <div class="search-overlay col-12 d-flex">
                            <div class="col-12">
                                <div class="p-4 search-section">
                                    <strong style="font-size: 1.75rem">Discover interesting things in the romantic coastal city of Vungtau</strong>
                                    <hr />
                                    <div class="d-flex gap-2 location mb-3">
                                        <i class="bi bi-geo-alt-fill icon" style="color: #ff6f3c"></i>
                                        <h5 class="font-bold text-lg" style="font-size: 1.5rem; font-weight: 600; color: #636567">Vungtau City, Baria-Vungtau</h5>
                                    </div>

                                    <div class="input-style mb-3">
                                        <label for="check_in" class="form-label">Check-In</label>
                                        <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                            <i class="bi bi-calendar-check-fill iconic"></i>
                                            <input type="date" class="form-control form-control-lg p-3 no-border" style="height: 6vh" id="check_in">
                                        </div>
                                    </div>

                                    <div class="input-style mb-3">
                                        <label for="check_out" class="form-label">Check-Out</label>
                                        <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                            <i class="bi bi-calendar-check-fill iconic"></i>
                                            <input type="date" class="form-control form-control-lg p-3 no-border" style="height: 6vh" id="check_out">
                                        </div>
                                    </div>

                                    <div class="input-style mb-3">
                                        <label for="number_of_guests_hotel" class="form-label">Number of Guests</label>
                                        <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                            <i class="bi bi-people-fill iconic"></i>
                                            <select class="form-control form-control-lg no-border" style="height: 6vh">
                                                <option class="p-3" selected>Number of Guests</option>
                                                <option>0-5</option>
                                                <option>5-10</option>
                                                <option>10-20</option>
                                                <option>20+</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-style mb-3">
                                        <label for="promo_code" class="form-label">Promo Code</label>
                                        <div class="d-flex justify-content-between align-items-center gap-3 col-12 p-0">
                                            <div class="flex-grow-1">
                                                <input type="text" class="form-control form-control-lg promo-input p-3" id="promo_code" placeholder="Enter promo code">
                                            </div>
                                            <div>
                                                <button class="btn apply-btn">Apply</button>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                </div>
                                <div class="input-style mb-3 d-flex gap-3 justify-content-between" style="background-color: black; color: white; height: 10vh">
                                    <div class="d-flex w-100 justify-content-between align-items-center p-3">
                                        <label for="number_of_guests_hotel" class="form-label" style="font-size: 2rem">Total: </label>
                                        <p class="form-label" style="font-size: 2rem">$450</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 order-1 order-md-1">
                        <p style="font-size: 4rem; font-weight: bold">Booking Submission</p>
                        <hr/>
                    </div>

                    <!-- Main Content - Adjusted to appear below the form on smaller screens -->
                    <div class="col-12 col-md-8 order-3 order-md-1">

                        <div class="col-12 mt-5 p-0">
                            <div class="mt-5">
                                @include('component-tour.booking-tour')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
