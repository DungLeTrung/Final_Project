<div class="col-12 p-0">
    <ul class="nav nav-tabs justify-content-between pb-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button style="border-color: white; font-size: 2rem; font-weight: bold" class="nav-link active" id="home-tab"
                data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home"
                aria-selected="true">Select Room</button>
        </li>
        <li class="nav-item" role="presentation">
            <button style="border-color: white; font-size: 2rem; font-weight: bold" class="nav-link" id="profile-tab"
                data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                aria-selected="false" style="font-size: 2rem; font-weight: bold">Description</button>
        </li>
        <li class="nav-item" role="presentation">
            <button style="border-color: white; font-size: 2rem; font-weight: bold" class="nav-link" id="contact-tab"
                data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                aria-selected="false" style="font-size: 2rem; font-weight: bold">Reviews</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active pt-3 gap-3" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p style="font-size: 2rem; font-weight: bold">Rooms</p>
            <div class="mt-2 d-flex flex-column justify-content-center align-items-center">
                <div class="row col-12 mb-3 room-card" style="font-size: 1.25rem">
                    <div class="col-3 text-center d-md-flex d-none flex-column justify-content-center align-items-center gap-3 p-0 position-relative">
                        <!-- Main Image -->
                        <img src="{{ asset('images/hadong.jpg') }}" alt="Family Suite Image" class="img-fluid rounded room-image" style="width: 100%; height: 100%; object-fit: cover;">

                        <!-- Detail Icon -->
                        <span class="detail-icon" data-bs-toggle="modal" data-bs-target="#roomModal">
                            <i class="bi bi-info-circle-fill"></i>
                        </span>
                    </div>

                    <div class="col-12 col-md-9 room-details gap-3 p-3"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="room-title">Family Suite</div>

                        <div class="room-info" style="font-size: 1.5rem">
                            <div class="d-flex flex-wrap justify-content-between">
                                <span><i class="bi bi-bounding-box-circles"></i> 90 m²</span>
                                <span><i class="bi bi-balloon-heart-fill"></i> 2 Queen Bed</span>
                                <span><i class="bi bi-people-fill"></i> 4 Guest</span>
                            </div>
                            <br>
                            <span>Air Conditioning &bull; Airport Transport &bull; Restaurant &bull; <a
                                    href="#">15 more</a></span>
                        </div>

                        <div class="col-12 d-flex align-items-center p-0 justify-content-between"
                            style="font-size: 1.5rem">
                            <button class="btn btn-select px-4 py-2" style="border: 1px solid #ff6f3c"
                                onclick="selectRoom(this)">Select Room</button>
                            <div class="room-price" style="font-weight: bold; color: #ff6f3c;">$240.00 <span
                                    class="price-details">/night</span></div>
                        </div>
                    </div>
                </div>

                <div class="row col-12 mb-3 room-card" style="font-size: 1.25rem">
                    <div class="col-3 text-center d-md-flex d-none flex-column justify-content-center align-items-center gap-3 p-0 position-relative">
                        <!-- Main Image -->
                        <img src="{{ asset('images/hadong.jpg') }}" alt="Family Suite Image" class="img-fluid rounded room-image" style="width: 100%; height: 100%; object-fit: cover;">

                        <!-- Detail Icon -->
                        <span class="detail-icon" data-bs-toggle="modal" data-bs-target="#roomModal">
                            <i class="bi bi-info-circle-fill"></i>
                        </span>
                    </div>

                    <div class="col-12 col-md-9 room-details gap-3 p-3"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="room-title">Family Suite</div>

                        <div class="room-info" style="font-size: 1.5rem">
                            <div class="d-flex flex-wrap justify-content-between">
                                <span><i class="bi bi-bounding-box-circles"></i> 90 m²</span>
                                <span><i class="bi bi-balloon-heart-fill"></i> 2 Queen Bed</span>
                                <span><i class="bi bi-people-fill"></i> 4 Guest</span>
                            </div>
                            <br>
                            <span>Air Conditioning &bull; Airport Transport &bull; Restaurant &bull; <a
                                    href="#">15 more</a></span>
                        </div>

                        <div class="col-12 d-flex align-items-center p-0 justify-content-between"
                            style="font-size: 1.5rem">
                            <button class="btn btn-select px-4 py-2" style="border: 1px solid #ff6f3c"
                                onclick="selectRoom(this)">Select Room</button>
                            <div class="room-price" style="font-weight: bold; color: #ff6f3c;">$240.00 <span
                                    class="price-details">/night</span></div>
                        </div>
                    </div>
                </div>
                <div class="row col-12 mb-3 room-card" style="font-size: 1.25rem">
                    <div class="col-3 text-center d-md-flex d-none flex-column justify-content-center align-items-center gap-3 p-0 position-relative">
                        <!-- Main Image -->
                        <img src="{{ asset('images/hadong.jpg') }}" alt="Family Suite Image" class="img-fluid rounded room-image" style="width: 100%; height: 100%; object-fit: cover;">

                        <!-- Detail Icon -->
                        <span class="detail-icon" data-bs-toggle="modal" data-bs-target="#roomModal">
                            <i class="bi bi-info-circle-fill"></i>
                        </span>
                    </div>

                    <div class="col-12 col-md-9 room-details gap-3 p-3"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="room-title">Family Suite</div>

                        <div class="room-info" style="font-size: 1.5rem">
                            <div class="d-flex flex-wrap justify-content-between">
                                <span><i class="bi bi-bounding-box-circles"></i> 90 m²</span>
                                <span><i class="bi bi-balloon-heart-fill"></i> 2 Queen Bed</span>
                                <span><i class="bi bi-people-fill"></i> 4 Guest</span>
                            </div>
                            <br>
                            <span>Air Conditioning &bull; Airport Transport &bull; Restaurant &bull; <a
                                    href="#">15 more</a></span>
                        </div>

                        <div class="col-12 d-flex align-items-center p-0 justify-content-between"
                            style="font-size: 1.5rem">
                            <button class="btn btn-select px-4 py-2" style="border: 1px solid #ff6f3c"
                                onclick="selectRoom(this)">Select Room</button>
                            <div class="room-price" style="font-weight: bold; color: #ff6f3c;">$240.00 <span
                                    class="price-details">/night</span></div>
                        </div>
                    </div>
                </div>
                <div class="row col-12 mb-3 room-card" style="font-size: 1.25rem">
                    <div class="col-3 text-center d-md-flex d-none flex-column justify-content-center align-items-center gap-3 p-0 position-relative">
                        <!-- Main Image -->
                        <img src="{{ asset('images/hadong.jpg') }}" alt="Family Suite Image" class="img-fluid rounded room-image" style="width: 100%; height: 100%; object-fit: cover;">

                        <!-- Detail Icon -->
                        <span class="detail-icon" data-bs-toggle="modal" data-bs-target="#roomModal">
                            <i class="bi bi-info-circle-fill"></i>
                        </span>
                    </div>

                    <div class="col-12 col-md-9 room-details gap-3 p-3"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="room-title">Family Suite</div>

                        <div class="room-info" style="font-size: 1.5rem">
                            <div class="d-flex flex-wrap justify-content-between">
                                <span><i class="bi bi-bounding-box-circles"></i> 90 m²</span>
                                <span><i class="bi bi-balloon-heart-fill"></i> 2 Queen Bed</span>
                                <span><i class="bi bi-people-fill"></i> 4 Guest</span>
                            </div>
                            <br>
                            <span>Air Conditioning &bull; Airport Transport &bull; Restaurant &bull; <a
                                    href="#">15 more</a></span>
                        </div>

                        <div class="col-12 d-flex align-items-center p-0 justify-content-between"
                            style="font-size: 1.5rem">
                            <button class="btn btn-out px-4 py-2" disabled>Out of Room</button>
                            <div class="room-price" style="font-weight: bold; color: #ff6f3c;">$240.00 <span
                                    class="price-details">/night</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="my-5">
                <p style="font-size: 1.5rem; font-weight: bold">Overview</p>
                <p style="font-size: 1.25rem">Opposite Durban’s famous beachfront, Blue Waters Hotel is within walking
                    distance of the Suncoast Casino and the iconic Moses Mabhida Stadium. Both uShaka Marine World and
                    Greyville Racecourse are within 2.5 mi from the property.</p>
                <p style="font-size: 1.25rem">The spacious rooms and suites feature LCD TVs along with
                    coffee-and-tea-making facilities. Each is equipped with air conditioning and a work desk. There is
                    also plenty of luggage storage space. Most rooms come with furnished balconies and offer a view of
                    the Indian Ocean.</p>
                <p style="font-size: 1.25rem">Guests at Blue Waters can enjoy afternoon tea and cake in the Florida
                    Lounge overlooking the ocean. The Versailles Restaurant provides buffet and á la carte service for
                    lunch and dinner.</p>
                <p style="font-size: 1.25rem">Leisure facilities at the Hotel Blue Waters include an indoor swimming
                    pool, sauna and a squash court. There is also an outdoor rooftop swimming pool and guests can enjoy
                    drinks with sunset views at the rooftop bar.</p>
                <p style="font-size: 1.25rem">The Durban North Beach area is a good location for walking, running and
                    cycling. Hotel Blue Waters is 5 minutes’ drive from the Durban ICC and 10 minutes’ drive from
                    Durban’s city center. Durban Station is 1.2 mi away, while King Shaka International Airport is 19 mi
                    from the property.</p>
                <p style="font-size: 1.25rem">Couples in particular like the location – they rated it 9.1 for a
                    two-person trip.</p>
            </div>
            <hr />
            <div class="my-5">
                <p style="font-size: 1.5rem; font-weight: bold">Hotel Amenities</p>
                <ul class="custom-list-f00c">
                    <li style="font-size: 1.25rem" class="my-2">Air conditioning</li>
                    <li style="font-size: 1.25rem" class="my-2">Private Bathroom</li>
                    <li style="font-size: 1.25rem" class="my-2">Flat-screen TV</li>
                    <li style="font-size: 1.25rem" class="my-2">Free WiFi</li>
                    <li style="font-size: 1.25rem" class="my-2">Free toiletries</li>
                    <li style="font-size: 1.25rem" class="my-2">Shower</li>
                    <li style="font-size: 1.25rem" class="my-2">Safe</li>
                    <li style="font-size: 1.25rem" class="my-2">Toilet</li>
                    <li style="font-size: 1.25rem" class="my-2">Towels</li>
                    <li style="font-size: 1.25rem" class="my-2">Tile/Marble floor</li>
                    <li style="font-size: 1.25rem" class="my-2">Desk</li>
                    <li style="font-size: 1.25rem" class="my-2">Refrigerator</li>
                    <li style="font-size: 1.25rem" class="my-2">Telephone</li>
                    <li style="font-size: 1.25rem" class="my-2">Ironing facilities</li>
                    <li style="font-size: 1.25rem" class="my-2">Satellite channels</li>
                    <li style="font-size: 1.25rem" class="my-2">Tea/Coffee maker</li>
                    <li style="font-size: 1.25rem" class="my-2">Hairdryer</li>
                    <li style="font-size: 1.25rem" class="my-2">Electric kettle</li>
                    <li style="font-size: 1.25rem" class="my-2">Wake-up service</li>
                    <li style="font-size: 1.25rem" class="my-2">Wardrobe or closet</li>
                </ul>
            </div>
            <hr />
            <div class="my-5">
                <p style="font-size: 1.5rem; font-weight: bold">Rules</p>
                <div class="col-8 d-flex gap-10 justify-content-between"
                    style="font-size: 1.25rem; font-weight: bold;">
                    <div class="col-6 ">
                        <p style="color: #ff6f3c;">Checkin</p>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <p style="background-color: #F5F5F5; width: 100%; font-size: 1.5rem"
                                class="px-4 py-3 text-center">12:00</p>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <p style="color: #ff6f3c;">Checkout</p>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <p style="background-color: #F5F5F5; width: 100%; font-size: 1.5rem"
                                class="px-4 py-3 text-center">15:00</p>
                        </div>
                    </div>
                </div>
                <div>
                    <ul>
                        <li style="font-size: 1.25rem" class="my-2">Smoking is not allowed</li>
                        <li style="font-size: 1.25rem" class="my-2">Security deposit will not be collected at this
                            hotel
                        </li>
                        <li style="font-size: 1.25rem" class="my-2">Check-out time is 12:00 AM</li>
                        <li style="font-size: 1.25rem" class="my-2">Pets are not allowed</li>
                        <li style="font-size: 1.25rem" class="my-2">Credit cards are not accepted at this hotel</li>
                        <li style="font-size: 1.25rem" class="my-2">No additional tax has to be paid at the hotel
                        </li>
                        <li style="font-size: 1.25rem" class="my-2">On-site parking is available</li>
                        <li style="font-size: 1.25rem" class="my-2">Check-in time is 2:00 PM</li>
                        <li style="font-size: 1.25rem" class="my-2">Unmarried couples are allowed</li>
                        <li style="font-size: 1.25rem" class="my-2">Couples are welcome</li>
                        <li style="font-size: 1.25rem" class="my-2">Guests can check in using any Domestic or
                            International ID proof with photograph</li>
                        <li style="font-size: 1.25rem" class="my-2">Confirmation will be received at time of booking
                        </li>
                        <li style="font-size: 1.25rem" class="my-2">Not recommended for travelers with back problems
                        </li>

                    </ul>
                </div>

            </div>
            <hr />
            <div class="my-5">
                <p style="font-size: 1.5rem; font-weight: bold">Maps</p>
                <div class="">
                    <img id="mainImage" src="{{ asset('images/map_ha_dong.png') }}" alt="Main Display"
                        class="img-fluid rounded w-100" style="height: 70vh; object-fit: cover; padding: 0">
                </div>
            </div>
        </div>
        <div class="tab-pane fade mt-5" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="p-4 d-flex mb-5">
                <div class="row col-12" style="font-size: 1.25rem">
                    <div
                        class="rating-hotel col-3 text-center d-flex flex-column justify-content-center align-items-center gap-3">
                        <h1 class="mb-0" style="font-size: 4rem; color: white">9.5</h1>
                    </div>
                    <div class="col-8 gap-3 ml-3"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="d-flex gap-3 align-items-center">
                            <p style="font-size: 2.75rem; font-weight-bold">Wonderful</p>
                        </div>
                        <div class="d-flex gap-1">
                            <p>Base on <strong>150</strong> reviews
                            </p>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <p style="font-size: 2.25rem; font-weight-bold">Updated At</p>
                            <i class="bi bi-dot"></i>
                            <p style="font-size: 2.25rem; font-weight-bold">Nov 2024</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="comment">
                <div class="comment-content mt-5 mb-3">
                    <i class="fa-solid fa-circle-user"></i>
                    <textarea class="content-font" name="comment" id="comment" placeholder="Write your review"></textarea>
                </div>
                <div class="button-container d-flex justify-content-end">
                    <button class="btn-comment">Review</button>
                </div>
            </div>
            <hr />
            <div class="comment mb-5" style="font-size: 1.25rem">
                <div class="comment-user mt-5 mb-3 d-flex">
                    <div class="col-12">
                        <div class="row col-6">
                            <div class="col-3 ">
                                <img src="{{ asset('images/home_page_1.jpg') }}" alt="User Profile"
                                    class="profile-image justify-content-center align-items-center">
                            </div>
                            <div class="col-9 gap-2">
                                <div class="d-flex gap-3 align-items-center">
                                    <p style="font-size: 1.5rem; font-weight: bold; color: #ff6f3c">Rating 9.5</p>
                                    <i class="bi bi-dot"></i>
                                    <p style="font-size: 1.5rem; font-weight-bold">Wonderful</p>
                                </div>
                                <div class="d-flex gap-1">
                                    <p style="font-weight: bold">The best experience ever!
                                    </p>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <p>Nevermind</p>
                                    <i class="bi bi-dot"></i>
                                    <p>Sep 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                        </div>
                    </div>
                    <div class="col-12">
                        <p>
                            It was excellent! The trip is long but the vans are comfortable and have wi-fi. The driver
                            very friendly as well as Ahmed our guide to the dromedaries. The camp was beautiful,
                            comfortable beds, clean bathroom and delicious food!
                        </p>
                    </div>
                </div>
                <hr />
                <div class="comment-user mt-5 mb-3 d-flex">
                    <div class="col-12">
                        <div class="row col-6">
                            <div class="col-3 ">
                                <img src="{{ asset('images/home_page_1.jpg') }}" alt="User Profile"
                                    class="profile-image justify-content-center align-items-center">
                            </div>
                            <div class="col-9 gap-2">
                                <div class="d-flex gap-3 align-items-center">
                                    <p style="font-size: 1.5rem; font-weight: bold; color: #ff6f3c">Rating 9.5</p>
                                    <i class="bi bi-dot"></i>
                                    <p style="font-size: 1.5rem; font-weight-bold">Wonderful</p>
                                </div>
                                <div class="d-flex gap-1">
                                    <p style="font-weight: bold">The best experience ever!
                                    </p>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <p>Nevermind</p>
                                    <i class="bi bi-dot"></i>
                                    <p>Sep 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                        </div>
                    </div>
                    <div class="col-12">
                        <p>
                            It was excellent! The trip is long but the vans are comfortable and have wi-fi. The driver
                            very friendly as well as Ahmed our guide to the dromedaries. The camp was beautiful,
                            comfortable beds, clean bathroom and delicious food!
                        </p>
                    </div>
                </div>
                <hr />
                <div class="comment-user mt-5 mb-3 d-flex">
                    <div class="col-12">
                        <div class="row col-6">
                            <div class="col-3 ">
                                <img src="{{ asset('images/home_page_1.jpg') }}" alt="User Profile"
                                    class="profile-image justify-content-center align-items-center">
                            </div>
                            <div class="col-9 gap-2">
                                <div class="d-flex gap-3 align-items-center">
                                    <p style="font-size: 1.5rem; font-weight: bold; color: #ff6f3c">Rating 9.5</p>
                                    <i class="bi bi-dot"></i>
                                    <p style="font-size: 1.5rem; font-weight-bold">Wonderful</p>
                                </div>
                                <div class="d-flex gap-1">
                                    <p style="font-weight: bold">The best experience ever!
                                    </p>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <p>Nevermind</p>
                                    <i class="bi bi-dot"></i>
                                    <p>Sep 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                        </div>
                    </div>
                    <div class="col-12">
                        <p>
                            It was excellent! The trip is long but the vans are comfortable and have wi-fi. The driver
                            very friendly as well as Ahmed our guide to the dromedaries. The camp was beautiful,
                            comfortable beds, clean bathroom and delicious food!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                @include('partials.paginate')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="roomModal" tabindex="-1" aria-labelledby="roomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content row" style="width: 100vw">
            <div class="modal-header col-12">
                <p class="modal-title" style="font-size: 2rem; font-weight: bold" id="roomModalLabel">Family Suite
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="col-12 mt-3 row d-flex justify-content-between align-items-center">
                <!-- Price and Button Section -->
                <div class="col-7 d-flex align-items-center justify-content-between" style="font-size: 1.5rem">
                    <div class="room-price" style="font-weight: bold; color: #ff6f3c;">$40.00 <span
                            class="price-details">/night</span></div>
                    <button class="btn btn-select px-4 py-2" style="border: 1px solid #ff6f3c"
                        onclick="selectRoom(this)">Select Room</button>
                </div>
                <!-- Room Info Section -->
                <div class="room-info col-5 d-flex flex-column align-items-center justify-content-center"
                    style="font-size: 1.25rem; color: #0069E4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center text-center gap-5">
                        <span><i class="bi bi-bounding-box-circles"></i> 90 m²</span>
                        <span><i class="bi bi-balloon-heart-fill"></i> 2 Queen Beds</span>
                        <span><i class="bi bi-people-fill"></i> 4 Guests</span>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="md:flex-row row d-flex p-3">
                    <!-- Main Image and Thumbnails -->
                    <div class="col-7">
                        <div class="row my-3">
                            <img id="subImage" src="{{ asset('images/muine.png') }}" alt="Main Display"
                                class="img-fluid rounded w-100"
                                style="height: 40vh; object-fit: cover; padding: 0; box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1);">
                        </div>

                        <div class="row my-3">
                            <div class="col-12 p-0 d-flex gap-2 destination-cards-container carousel"
                                style="overflow-x: auto;">
                                <div class="col-3 p-0">
                                    <img onclick="updateSubImage('{{ asset('images/muine.png') }}')"
                                        src="{{ asset('images/muine.png') }}" class="img-fluid thumbnail rounded room-image"
                                        alt="Thumbnail 1"
                                        style="width: 100%; height: 10vh; object-fit: cover; cursor: pointer;">
                                </div>
                                <div class="col-3 p-0">
                                    <img onclick="updateSubImage('{{ asset('images/detail_tour.jpg') }}')"
                                        src="{{ asset('images/detail_tour.jpg') }}"
                                        class="img-fluid thumbnail rounded room-image" alt="Thumbnail 2"
                                        style="width: 100%; height: 10vh; object-fit: cover; cursor: pointer;">
                                </div>
                                <div class="col-3 p-0">
                                    <img onclick="updateSubImage('{{ asset('images/hadong.jpg') }}')"
                                        src="{{ asset('images/hadong.jpg') }}" class="img-fluid thumbnail rounded room-image"
                                        alt="Thumbnail 3"
                                        style="width: 100%; height: 10vh; object-fit: cover; cursor: pointer;">
                                </div>
                                <div class="col-3 p-0">
                                    <img onclick="updateSubImage('{{ asset('images/hoian.jpg') }}')"
                                        src="{{ asset('images/hoian.jpg') }}" class="img-fluid thumbnail rounded room-image"
                                        alt="Thumbnail 4"
                                        style="width: 100%; height: 10vh; object-fit: cover; cursor: pointer;">
                                </div>
                                <!-- Additional thumbnails -->
                                <div class="col-3 p-0">
                                    <img onclick="updateMainImage('{{ asset('images/sapa.jpg') }}')"
                                        src="{{ asset('images/sapa.jpg') }}" class="img-fluid thumbnail rounded room-image"
                                        alt="Thumbnail 5"
                                        style="width: 100%; height: 10vh; object-fit: cover; cursor: pointer;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Room Details and Facilities -->
                    <div class="w-full md:w-1/2 mt-4 md:mt-0 md:ml-4 col-5">
                        <p class="text-sm text-gray-700 mb-4">
                            This air-conditioned room features large windows and a balcony with views of the city and
                            sea.
                            It contains a sitting area, flat-screen TV, fridge, and tea-and-coffee-making facilities.
                        </p>
                        <p class="text-sm text-gray-700 mb-4">
                            The
                            bathroom has a shower and toilet.
                            Maximum occupancy is 2 adults and 1 child under 2 years old in a crib. No extra beds
                            available.
                        </p>
                        <hr/>
                        <div style="max-height: 300px; overflow-y: auto;">
                            <p style="font-size: 1.5rem; font-weight: bold">Hotel Amenities</p>
                            <ul class="custom-list-f00c">
                                <li style="font-size: 1.25rem" class="my-2">Air conditioning</li>
                                <li style="font-size: 1.25rem" class="my-2">Private Bathroom</li>
                                <li style="font-size: 1.25rem" class="my-2">Flat-screen TV</li>
                                <li style="font-size: 1.25rem" class="my-2">Free WiFi</li>
                                <li style="font-size: 1.25rem" class="my-2">Free toiletries</li>
                                <li style="font-size: 1.25rem" class="my-2">Shower</li>
                                <li style="font-size: 1.25rem" class="my-2">Safe</li>
                                <li style="font-size: 1.25rem" class="my-2">Toilet</li>
                                <li style="font-size: 1.25rem" class="my-2">Towels</li>
                                <li style="font-size: 1.25rem" class="my-2">Tile/Marble floor</li>
                                <li style="font-size: 1.25rem" class="my-2">Desk</li>
                                <li style="font-size: 1.25rem" class="my-2">Refrigerator</li>
                                <li style="font-size: 1.25rem" class="my-2">Telephone</li>
                                <li style="font-size: 1.25rem" class="my-2">Ironing facilities</li>
                                <li style="font-size: 1.25rem" class="my-2">Satellite channels</li>
                                <li style="font-size: 1.25rem" class="my-2">Tea/Coffee maker</li>
                                <li style="font-size: 1.25rem" class="my-2">Hairdryer</li>
                                <li style="font-size: 1.25rem" class="my-2">Electric kettle</li>
                                <li style="font-size: 1.25rem" class="my-2">Wake-up service</li>
                                <li style="font-size: 1.25rem" class="my-2">Wardrobe or closet</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function updateSubImage(src) {
        document.getElementById('subImage').src = src;

    }

    function selectRoom(button) {
        if (button.classList.contains('btn-select')) {
            button.classList.remove('btn-select');
            button.classList.add('btn-selected');
            button.innerText = 'Selected';
            button.style.color = "#fff";
            button.style.backgroundColor = "#e67e22";
            button.style.border = "none";
        } else if (button.classList.contains('btn-selected')) {
            button.classList.remove('btn-selected');
            button.classList.add('btn-select');
            button.innerText = 'Select Room';
            button.style.color = "#e74c3c";
            button.style.backgroundColor = "transparent";
            button.style.border = "1px solid #e74c3c";
        }
    }
</script>
