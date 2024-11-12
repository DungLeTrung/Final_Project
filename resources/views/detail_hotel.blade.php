@extends('layouts.main')

@section('title', 'Detail Hotel')

@section('content')
    <div class="banner-detail-hotel">
        
    </div>

    <div class="container flex flex-col col-12 component-detail-hotel mt-5">
        <div class="row justify-content-center detail-hotel-component">
            <div class="col-10">
                <div class="row">
                    @include('partials.breadcrumb_tour')
                </div>
            </div>
            <div class="col-12 col-md-10 d-flex detail-hotel">
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
                                            <p style="font-size: 1rem;">Hotel type: </p>
                                            <p style="font-size: 1.5rem; font-weight: bold">Sun-beach</p>
                                        </div>
                                    </div>

                                    <div class="input-style mb-3">
                                        <label for="check_in" class="form-label">Check-In</label>
                                        <div class="text-style d-flex justify-content-between align-items-center gap-3">
                                            <i class="bi bi-calendar-check-fill iconic ml-3" style="font-size: 1.5rem;"></i>
                                            <input type="date" class="form-control form-control-lg p-3 no-border" style="flex-grow: 1; height: 6vh;" id="check_in">
                                        </div>
                                    </div>

                                    <div class="input-style mb-3">
                                        <label for="check_out" class="form-label">Check-Out</label>
                                        <div class="text-style d-flex justify-content-between align-items-center gap-3">
                                            <i class="bi bi-calendar-check-fill iconic ml-3" style="font-size: 1.5rem; "></i>
                                            <input type="date" class="form-control form-control-lg p-3 no-border" style="flex-grow: 1; height: 6vh;" id="check_out">
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

                                    <!-- Room Selection -->
                                    <div class="mb-3">
                                        <label class="form-label">Rooms</label>
                                        <div class="d-flex justify-content-between align-items-center mb-2 p-0">
                                            <span class="col-4">Standard Room</span>
                                            <div class="quantity-control col-5 justify-content-center align-items-center gap-2">
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('standard', -1)">-</button>
                                                <span id="standard-count" class="mx-2" style="width: 10%">1</span>
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('standard', 1)">+</button>
                                            </div>
                                            <span class="col-3" id="standard-price">$120.00</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="col-4">Family Suite</span>
                                            <div class="quantity-control col-5 justify-content-center align-items-center gap-2">
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('family', -1)">-</button>
                                                <span id="family-count" class="mx-2" style="width: 10%">0</span>
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('family', 1)">+</button>
                                            </div>
                                            <span class="col-3" id="family-price">$240.00</span>
                                        </div>
                                    </div>

                                    <!-- Add-ons -->
                                    <div class="mb-3">
                                        <label class="form-label">Add-ons</label>
                                        <div class="addon-item">
                                            <label class="col-4"><input type="checkbox" id="breakfast" onchange="updateTotal()"> Breakfast</label>
                                            <div class="quantity-control col-5 justify-content-center align-items-center gap-2">
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('breakfast', -1)">-</button>
                                                <span id="breakfast-count" class="mx-2" style="width: 10%">1</span>
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('breakfast', 1)">+</button>
                                            </div>
                                            <span class="col-3" id="breakfast-price">$20.00</span>
                                        </div>
                                        <div class="addon-item mt-2">
                                            <label class="col-4"><input type="checkbox" id="extra-bed" onchange="updateTotal()"> Extra Bed</label>
                                            <div class="quantity-control col-5 justify-content-center align-items-center gap-2">
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('extraBed', -1)">-</button>
                                                <span id="extraBed-count" class="mx-2" style="width: 10%">0</span>
                                                <button type="button" class="quantity-btn" onclick="changeQuantity('extraBed', 1)">+</button>
                                            </div>
                                            <span class="col-3" id="extra-bed-price">$10.00</span>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="input-style d-flex gap-3 justify-content-between">
                                        <label for="number_of_guests_hotel" class="form-label">Total: </label>
                                        <p class="form-label" style="font-size: 2rem">$450</p>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Book now</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content - Adjusted to appear below the form on smaller screens -->
                    <div class="col-12 col-md-8 order-1 order-md-1">
                        <h1>TownePlace Suites Gaithersburg by Marriott</h1>
                        <div class="row mt-3">
                            <div class="col-12 d-flex gap-2 location">
                                <i class="bi bi-geo-alt-fill icon" style="color: #ff6f3c"></i>
                                <h5 class="font-bold text-lg"
                                    style="font-size: 1.25rem; font-weight: 600; color: rgb(181, 181, 181)">Sapa, Laocai
                                </h5>
                            </div>

                            <div class="d-flex gap-5 mt-3 flex-wrap">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="rating-icon my-3 d-flex align-items-center px-3 py-2 rounded"
                                        style="background-color: #ff6f3c; color: white;">
                                        <i class="bi bi-star-fill"></i>
                                        <span style="font-size: 1.25rem; color: white">4.5</span>
                                    </div>
                                    <span style="font-size: 1.25rem; font-weight: bold; color: rgb(181, 181, 181)">(150
                                        review)</span>
                                </div>

                                <div class="d-flex gap-1 align-items-center">
                                    <span class="rating-star">★</span>
                                    <span class="rating-star">★</span>
                                    <span class="rating-star">★</span>
                                    <span class="rating-star">★</span>
                                    <span class="rating-star">★</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-8 order-3 order-md-1">
                        <div class="col-12 mt-5 p-0">
                            <div>
                                @include('component-tour.detail-hotel')
                            </div>
                            <div class="mt-5">
                                @include('component-tour.detail-hotel-tabs')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container flex flex-col col-12 component-list-hotel">
                <div class="row justify-content-center filter-hotel-component">
                    <div class="col-10 filter-hotel">
                        <div class="row filter-hotel-detail">
                            <div class="col-12 d-flex justify-content-between filter-hotel-detail-more">
                                <h1>Recommended for you</h1>
                            </div>
                            <div class="position-relative w-100 overflow-hidden">
                                <div class="destination-cards-container-list-hotel">
                                    <div class="row list-hotel-parent-component">
                                        <div class="list-hotel-children-component col-4">
                                            @include('component-tour.list-hotel-info')
                                        </div>
                                        <div class="list-hotel-children-component col-4">
                                            @include('component-tour.list-hotel-info')
                                        </div>
                                        <div class="list-hotel-children-component col-4">
                                            @include('component-tour.list-hotel-info')
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

            const prices = {
                standard: 120.00,
                family: 240.00,
                breakfast: 20.00,
                extraBed: 10.00
            };

            let quantities = {
                standard: 1,
                family: 0,
                breakfast: 1,
                extraBed: 0
            };

            function changeQuantity(item, delta) {
                if (quantities[item] + delta >= 0) {
                    quantities[item] += delta;
                    document.getElementById(item + '-count').textContent = quantities[item];
                    updateTotal();
                }
            }

            function updateTotal() {
                let total = 0;
                total += quantities.standard * prices.standard;
                total += quantities.family * prices.family;
                if (document.getElementById('breakfast').checked) {
                    total += quantities.breakfast * prices.breakfast;
                }
                if (document.getElementById('extraBed').checked) {
                    total += quantities.extraBed * prices.extraBed;
                }
                document.getElementById('total-price').textContent = `$${total.toFixed(2)}`;
            }

            function bookNow() {
                alert("Booking confirmed with total: " + document.getElementById('total-price').textContent);
            }

            updateTotal();
        </script>

        <script></script>
    @endsection()
