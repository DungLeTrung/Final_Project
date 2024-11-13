@extends('layouts.main')

@section('title', 'Privacy Policy')

@section('content')

<div class="banner-detail-tour">

</div>
<div class="container flex flex-col col-12 container-policy mt-5">
    <div class="row justify-content-center container-policy-detail">
        <div class="col-10 d-flex">
            <div class="row col-12 p-0 mb-3" style="font-size: 1.25rem">
                <div class="col-12 col-md-8 order-3 order-md-1">

                    <div class="col-12 mt-5 p-0">
                        <div class="mt-5">
                            @include('component-tour.privacy')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
