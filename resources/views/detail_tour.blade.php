@extends('layouts.main')

@section('title', 'Detail Tour')

@section('content')
    <div class="banner-detail">
    </div>

    <div class="container flex flex-col col-12 component-detail-tour mt-5">
        <div class="row justify-content-center detail-tour-component">
            <div class="col-10">
                <div class="row">
                    @include('partials.breadcrumb_tour')
                </div>
            </div>
            <div class="col-10 d-flex detail-tour">
                <div class="row col-8" style="padding: 0">
                    <h1>Discover interesting things in the romantic coastal city of Vungtau</h1>
                    <div style="padding: 0">
                        @include('component-tour.detail-tour')
                    </div>
                    <div style="padding: 0" class="mt-5">
                        @include('component-tour.detail-tabs')
                    </div>
                </div>
                <div class="row col-4 justify-content-center">
                    <div class="col-11 d-flex ">
                        <div class="search-overlay">
                            <div class="search-section">
                                <form class="p-4">
                                    <p>From <strong style="font-size: 1.5rem" >$234.5</strong></p>
                                    <hr/>
                                    <div class="mb-3 d-flex gap-5">
                                        <div>
                                            <p style="font-size: 1rem; ">Duration: </p>
                                            <p style="font-size: 1.25rem; font-weight: bold">3 days - 2 nights</p>
                                        </div>
                                        <div>
                                            <p style="font-size: 1rem; ">Tour type: </p>
                                            <p style="font-size: 1.25rem; font-weight: bold">Sun-beach</p>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Book now</button>
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
