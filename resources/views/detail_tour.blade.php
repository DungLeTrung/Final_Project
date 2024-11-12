@extends('layouts.main')

@section('title', 'Detail Tour')

@section('content')
    <div class="banner-detail-tour">
    </div>

    <div class="container flex flex-col col-12 component-detail-tour mt-5">
        <div class="row justify-content-center detail-tour-component">
            <div class="col-10">
                <div class="row">
                    @include('partials.breadcrumb_tour')
                </div>
            </div>
            <div class="col-10 d-flex detail-tour">
                <div class="row col-12 p-0 mb-3" style="font-size: 1.25rem">

                    <!-- Booking Form - Shown above on small screens -->
                    <div class="col-12 col-md-4 order-2 order-md-2 mt-4 mt-md-0">
                        <div class="search-overlay col-12 d-flex">
                            <div class="col-12">
                                <form class="p-4 search-section">
                                    <p>From <strong style="font-size: 1.5rem">$234.5</strong></p>
                                    <hr />
                                    <div class="mb-3 d-flex flex-wrap gap-5">
                                        <div>
                                            <p style="font-size: 1rem;">Duration: </p>
                                            <p style="font-size: 1.5rem; font-weight: bold">3 days - 2 nights</p>
                                        </div>
                                        <div>
                                            <p style="font-size: 1rem;">Tour type: </p>
                                            <p style="font-size: 1.5rem; font-weight: bold">Sun-beach</p>
                                        </div>
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

                                    <hr />
                                    <div class="input-style mb-3 d-flex gap-3 justify-content-between">
                                        <label for="number_of_guests_hotel" class="form-label">Total: </label>
                                        <p class="form-label" style="font-size: 2rem">$450</p>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Book now</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 order-1 order-md-1">
                        <h1>Discover interesting things in the romantic coastal city of Vungtau</h1>
                        <div class="row mt-3">
                            <div class="col-12 d-flex gap-2 location">
                                <i class="bi bi-geo-alt-fill icon" style="color: #ff6f3c"></i>
                                <h5 class="font-bold text-lg" style="font-size: 1.25rem; font-weight: 600; color: rgb(181, 181, 181)">Vungtau City, Baria-Vungtau</h5>
                            </div>

                            <div class="d-flex gap-3 mt-3 flex-wrap">
                                <div class="rating-icon my-3 d-flex align-items-center px-3 py-2 rounded" style="background-color: #ff6f3c; color: white;">
                                    <i class="bi bi-star-fill"></i>
                                    <span style="font-size: 1.25rem; color: white">4.5</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span style="font-size: 1.25rem; font-weight: bold; color: rgb(181, 181, 181)">150 review</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Main Content - Adjusted to appear below the form on smaller screens -->
                    <div class="col-12 col-md-8 order-3 order-md-1">

                        <div class="col-12 mt-5 p-0">
                            <div>
                                @include('component-tour.detail-tour')
                            </div>
                            <div class="mt-5">
                                @include('component-tour.detail-tour-tabs')
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div>
        <div class="container flex flex-col col-12 component-list-tour">
            <div class="row justify-content-center filter-tour-component">
                <div class="col-10 filter-tour">
                    <div class="row filter-tour-detail">
                        <div class="col-12 d-flex justify-content-between filter-tour-detail-more">
                            <h1>Related Tour</h1>
                        </div>
                        <div class="position-relative w-100 overflow-hidden">
                            <div class="destination-cards-container-list-tour">
                                <div class="row list-tour-parent-component">
                                    <div class="list-tour-children-component col-4">
                                        @include('component-tour.list-tour-info')
                                    </div>
                                    <div class="list-tour-children-component col-4">
                                        @include('component-tour.list-tour-info')
                                    </div>
                                    <div class="list-tour-children-component col-4">
                                        @include('component-tour.list-tour-info')
                                    </div>
                                </div>
                                <div class="row list-tour-parent-component">
                                    <div class="list-tour-children-component col-4">
                                        @include('component-tour.list-tour-info')
                                    </div>
                                    <div class="list-tour-children-component col-4">
                                        @include('component-tour.list-tour-info')
                                    </div>
                                    <div class="list-tour-children-component col-4">
                                        @include('component-tour.list-tour-info')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateMainImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
@endsection()
