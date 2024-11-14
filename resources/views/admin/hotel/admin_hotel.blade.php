@extends('layouts.admin_layout')

@section('title', 'Hotel Management')

@section('admin-content')
    <div class="d-flex">
        @include('component-admin.admin_sidebar')

        <!-- Main Content -->
        <div class="flex-grow-1 main-content">
            <!-- Header -->
            @include('component-admin.header_admin')

            @include('component-admin.hotel.admin_hotel')
        </div>
    </div>
@endsection()
