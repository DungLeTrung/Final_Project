@extends('layouts.admin_layout')

@section('title', 'Hotel Type Management')

@section('admin-content')
    <div class="d-flex">
        @include('component-admin.admin_sidebar')

        <!-- Main Content -->
        <div class="flex-grow-1 main-content">
            <!-- Header -->
            @include('component-admin.header_admin')

            @include('component-admin.hotel.admin_hotel_add_ons')
        </div>
    </div>
@endsection()
