@extends('layouts.main')

@section('title', 'List Tours')

@section('content')
    <div class="banner">
        <div class="container">
            <div class="row">
                <!-- Feature Section -->
                <div class="col-6 text-overlay-home-page">
                    <h4>Search hundreds of tours and more</h4>
                    <h2>Attractive tour and interesting experiences</h2>
                </div>
            </div>
        </div>

        <!-- Feature Section in feature-bg-white -->
        <div class="feature-bg-white">
            <div class="container">
                <div class="row w-100 feature">
                    <div class="col-6 feature-content">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4 d-flex gap-2 align-items-center">
                                    <i class="bi bi-balloon-heart-fill" style="color: #ff6f3c"></i>
                                    <h4>Feature</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4 d-flex gap-2 align-items-center">
                                    <h3>200+</h3>
                                    <h6>Tours</h6>
                                </div>
                                <div class="col-4 d-flex gap-2 align-items-center">
                                    <h3>100+</h3>
                                    <h6>Destinations</h6>
                                </div>
                                <div class="col-4 d-flex gap-2 align-items-center">
                                    <h3>8+</h3>
                                    <h6>Types of tours</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="search-overlay">
                            <div class="search-section">
                                <h1 class="text-center my-3">Discover beautiful Vietnam</h1>
                                <form class="p-4">
                                    <div class="input-style mb-3">
                                        <label for="location" class="form-label">Location</label>
                                        <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                            <i class="bi bi-geo-alt-fill iconic"></i>
                                            <input type="text" class="form-control form-control-lg p-3 no-border"
                                                style="height: 6vh" id="location"
                                                placeholder="Enter your location address">
                                        </div>
                                    </div>
                                    <div class="input-style mb-3">
                                        <label for="date_time" class="form-label">Departure Time</label>
                                        <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                            <i class="bi bi-calendar-check-fill iconic"></i>
                                            <input type="date" class="form-control form-control-lg p-3 no-border"
                                                style="height: 6vh" id="date_time">
                                        </div>
                                    </div>
                                    <div class="input-style mb-3">
                                        <label for="type_of_tour" class="form-label">Type of Tour</label>
                                        <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                            <i class="bi bi-flag iconic"></i>
                                            <select class="form-control form-control-lg no-border" style="height: 6vh">
                                                <option class="p-3" selected>Type of tour</option>
                                                <option>Adventure</option>
                                                <option>Leisure</option>
                                                <option>Culture</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-style mb-3">
                                        <label for="number_of_guests" class="form-label">Number of Guests</label>
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
                                    <button type="submit" class="btn btn-primary w-100">Search</button>
                                </form>
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
                    <div class="row">
                        @include('partials.breadcrumb_tour')
                    </div>
                    <div class="row filter-tour-detail">
                        <div class="col-12 d-flex justify-content-between filter-tour-detail-more">
                            <h1>Attractive tour and interesting experiences</h1>
                            <button type="button" id="filterButton"
                                class="btn btn-dark btn-lg d-flex justify-content-center align-items-center ms-2 px-3 col-1"
                                data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false"
                                aria-controls="filterCollapse">
                                Filter
                            </button>

                                @include('filter-component.tour-filter')

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
                    <div class="row align-items-center">
                        <div class="section-text">
                            Showing 1 / 8
                        </div>
                        @include('partials.paginate')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var budgetSlider = document.getElementById('budgetRange');
            noUiSlider.create(budgetSlider, {
                start: [150, 1000],
                connect: true,
                range: {
                    'min': 0,
                    'max': 2000
                },
                step: 10
            });

            var budgetMin = document.getElementById('budgetMin');
            var budgetMax = document.getElementById('budgetMax');

            budgetSlider.noUiSlider.on('update', function(values, handle) {
                budgetMin.innerHTML = '$' + Math.round(values[0]);
                budgetMax.innerHTML = '$' + Math.round(values[1]);
            });
        });
    </script>

@endsection()
