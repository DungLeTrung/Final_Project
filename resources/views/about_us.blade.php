@extends('layouts.main')

@section('title', 'About Us')

@section('content')
    <div class="row w-100">
        <div class="thumbnail_image">
            <img  src="{{ asset('images/thumbnail_image_2.png') }}" alt="BUMYAYA" style="min-width: 100vw; height: 100vh;">
            <div class="text-overlay">
                <h2>About Us</h2>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12 my-5">
        <div class="travel-component container d-flex flex-column align-items-center py-5 col-md-10">
            <div class="row w-100 justify-content-center">
                <!-- Phần ảnh, chỉ hiển thị trên màn hình md trở lên -->
                <div class="images-section col-md-7 d-none d-md-block" style="position: relative;">
                    <img src="{{ asset('images/home_page_1.jpg') }}" alt="Desert" class="img-fluid main-image">
                    <img src="{{ asset('images/home_page_2.png') }}" alt="Mountains" class="img-fluid sub-image">
                </div>

                <!-- Phần text -->
                <div class="text-section col-md-5 text-center">
                    <h2>With <span class="highlight">NgaoduVietnam</span>, immerses you in majestic space and unique cultural features</h2>
                    <div class="quote-section mt-3 d-flex justify-content-center">
                        <div class="quote-icon me-3">
                            <span>❝</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                    </div>
                    <div class="quote-section mt-3 d-flex justify-content-center">
                        <div class="quote-icon me-3">
                            <span>❝</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12 my-5">
        <div class="travel-component container d-flex flex-column align-items-center py-5 col-md-10">
            <div class="row w-100 justify-content-center">
                <div class="text-section col-md-7 text-center">
                    <h2>With <span class="highlight">NgaoduVietnam</span>, immerses you in majestic space and unique cultural features</h2>
                    <div class="quote-section mt-3 d-flex justify-content-center">
                        <div class="quote-icon me-3">
                            <span>❝</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                    </div>
                    <div class="quote-section mt-3 d-flex justify-content-center">
                        <div class="quote-icon me-3">
                            <span>❝</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes.</p>
                    </div>
                </div>
                <div class="images-section col-md-5 d-none d-md-block">
                    <img src="{{ asset('images/home_page_3.png') }}" alt="Mountains" class="img-fluid third-image">
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col col-12 my-5">
        <div class="row w-100 ">
            <div class="images-section d-flex col-md-12 justify-content-center">
                <img src="{{ asset('images/about_us_1.jpg') }}" alt="Mountains" class="img-fluid four-image">
            </div>
        </div>

    </div>

@endsection
