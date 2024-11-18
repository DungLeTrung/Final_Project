@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="banner">
        <div class="container">
            <div class="row">
                <!-- Feature Section -->
                <div class="col-6 text-overlay-home-page">
                    <h4>Welcome to NgaoduVietnam</h4>
                    <h2>Perfect place for your stories</h2>
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
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link nav-link-homepage active" id="tours-tab" data-bs-toggle="tab"
                                            href="#tours" role="tab" aria-controls="tours"
                                            aria-selected="true">Tours</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link nav-link-homepage" id="hotels-tab" data-bs-toggle="tab"
                                            href="#hotels" role="tab" aria-controls="hotels"
                                            aria-selected="false">Hotels</a>
                                    </li>
                                </ul>
                                <h1 class="text-center mb-4">Discover beautiful Vietnam</h1>
                                <!-- Tab Content -->
                                <div class="tab-content" id="myTabContent">
                                    <!-- Tours Form -->
                                    <div class="tab-pane fade show active" id="tours" role="tabpanel"
                                        aria-labelledby="tours-tab">
                                        <form class="p-4">
                                            <div class="input-style mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                                    <i class="bi bi-geo-alt-fill iconic"></i>
                                                    <input type="text" class="form-control form-control-lg p-3 no-border" style="height: 6vh" id="location"
                                                        placeholder="Enter your location address">
                                                </div>
                                            </div>
                                            <div class="input-style mb-3">
                                                <label for="date_time" class="form-label">Departure Time</label>
                                                <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                                    <i class="bi bi-calendar-check-fill iconic"></i>
                                                    <input type="date" class="form-control form-control-lg p-3 no-border" style="height: 6vh" id="date_time">
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
                                    <!-- Hotels Form -->
                                    <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                                        <form class="p-4">
                                            <div class="input-style mb-3">
                                                <label for="hotel_location" class="form-label">Hotel Location</label>
                                                <div class="text-style d-flex justify-content-end align-items-center gap-3 col-12">
                                                    <i class="bi bi-geo-alt-fill iconic"></i>
                                                    <input type="text" class="form-control form-control-lg p-3 no-border" style="height: 6vh" id="hotel_location"
                                                        placeholder="Enter hotel location address">
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
                                            <button type="submit" class="btn btn-primary w-100">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12 component-home-page">
        <div class="travel-component container d-flex flex-column align-items-center col-md-10">
            <div class="row w-100 justify-content-center">
                <!-- Phần ảnh, chỉ hiển thị trên màn hình md trở lên -->
                <div class="images-section col-md-7 d-none d-md-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('images/home_page_1.jpg') }}" alt="Desert" class=" main-image-about-us">
                        <img src="{{ asset('images/home_page_2.png') }}" alt="Mountains" class=" sub-image-about-us">
                    </div>
                </div>


                <div class="text-section col-md-5 text-center">
                    <h2>With <span class="highlight">NgaoduVietnam</span>, immerses you in majestic space and unique
                        cultural features</h2>
                    <div class="quote-section mt-3 d-flex justify-content-center">
                        <div class="quote-icon me-3">
                            <span>❝</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                            Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque
                            phasellus
                            donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                    </div>
                    <div class="quote-section mt-3 d-flex justify-content-center">
                        <div class="quote-icon me-3">
                            <span>❝</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                            Vulputate risus faucibus sem non, feugiat nec consequat, montes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12  component-home-page">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between mb-5">
                        <h1>Discover fascinating destinations</h1>
                        <button type="button"
                            class="btn btn-dark btn-lg d-flex justify-content-center align-items-center ms-2 px-3 col-1">
                            View All
                        </button>
                    </div>
                        <div class="main-carousel">
                            <div class="destination-cards-container carousel"
                                data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": false }'>
                                <!-- Destination Card 1 -->
                                <div class="destination-card col-12 col-sm-6 col-md-3 me-3">
                                    <img src="{{ asset('images/sapa.jpg') }}" alt="Sapa"
                                        class="img-fluid main-image first-image">
                                    <div class="p-4">
                                        <h2 class="font-bold text-lg">Sapa, Laocai</h2>
                                        <p class="text-gray-600">24 experiences</p>
                                    </div>
                                </div>

                                <!-- Destination Card 2 -->
                                <div class="destination-card col-12 col-sm-6 col-md-3 me-3">
                                    <img src="{{ asset('images/hoian.jpg') }}" alt="Hoian"
                                        class="img-fluid main-image first-image">
                                    <div class="p-4">
                                        <h2 class="font-bold text-lg">Hoian, Quangnam</h2>
                                        <p class="text-gray-600">12 experiences</p>
                                    </div>
                                </div>

                                <!-- Destination Card 3 -->
                                <div class="destination-card col-12 col-sm-6 col-md-3 me-3">
                                    <img src="{{ asset('images/bana.jpg') }}" alt="Ba Na Hill"
                                        class="img-fluid main-image first-image">
                                    <div class="p-4">
                                        <h2 class="font-bold text-lg">Ba Na Hill, Danang</h2>
                                        <p class="text-gray-600">28 experiences</p>
                                    </div>
                                </div>

                                <!-- Destination Card 4 -->
                                <div class="destination-card col-12 col-sm-6 col-md-3 me-3">
                                    <img src="{{ asset('images/muine.png') }}" alt="Muine"
                                        class="img-fluid main-image first-image">
                                    <div class="p-4">
                                        <h2 class="font-bold text-lg">Muine, Binhthuan</h2>
                                        <p class="text-gray-600">11 experiences</p>
                                    </div>
                                </div>

                                <!-- Extra Destination Card 5 -->
                                <div class="destination-card col-12 col-sm-6 col-md-3 me-3">
                                    <img src="{{ asset('images/home_page_1.jpg') }}" alt="Phu Quoc"
                                        class="img-fluid main-image first-image">
                                    <div class="p-4">
                                        <h2 class="font-bold text-lg">Phu Quoc</h2>
                                        <p class="text-gray-600">15 experiences</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12  component-home-page">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between mb-5">
                        <h1>Attractive tour and interesting experiences</h1>
                        <button type="button"
                            class="btn btn-dark btn-lg d-flex justify-content-center align-items-center ms-2 px-3 col-1">
                            View All
                        </button>
                    </div>
                    <div class="position-relative w-100 overflow-hidden">
                        <div class="main-carousel">
                            <div class="destination-cards-container"
                                data-flickity='{ "cellAlign": "left", "contain": true  }'>
                                @include('component-tour.tour-info')

                                <!-- Destination Card 2 -->
                                @include('component-tour.tour-info')

                                <!-- Destination Card 3 -->
                                @include('component-tour.tour-info')

                                <!-- Destination Card 4 -->
                                @include('component-tour.tour-info')

                                <!-- Extra Destination Card 5 -->
                                @include('component-tour.tour-info')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12  component-home-page">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between mb-5">
                        <h1>Experience the traditional cultural beauties of Vietnam</h1>
                        <button type="button"
                            class="btn btn-dark btn-lg d-flex justify-content-center align-items-center ms-2 px-3 col-1">
                            View All
                        </button>
                    </div>
                    <div class="position-relative w-100 overflow-hidden">
                        <div class="main-carousel">
                            <div class="destination-cards-container"
                                data-flickity='{ "cellAlign": "left", "contain": true  }'>
                                @include('component-tour.tour-hour')

                                <!-- Destination Card 2 -->
                                @include('component-tour.tour-hour')

                                <!-- Destination Card 3 -->
                                @include('component-tour.tour-hour')

                                <!-- Destination Card 4 -->
                                @include('component-tour.tour-hour')

                                <!-- Extra Destination Card 5 -->
                                @include('component-tour.tour-hour')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12 component-home-page">
        <div class="travel-component row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="text-section col-6 d-flex justify-content-between ">
                        <h2>Give us an email to get <span class="highlight">the latest deals</span></h2>
                    </div>
                    <div class="col-6 container email">
                        <div class="row d-flex justify-content-end align-items-center email-text">
                            <div class="d-flex justify-content-end align-items-center gap-3 col-8 email-text-style">
                                <i class="bi bi-envelope-open-heart-fill" ></i>
                                <input type="email" class="form-control form-control-lg p-3 no-border" id="email"
                                    placeholder="Enter your email address">
                            </div>
                            <button type="button"
                                class="btn btn-dark btn-lg d-flex justify-content-center align-items-center ms-2 px-3 col-1">
                                Send
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection()
