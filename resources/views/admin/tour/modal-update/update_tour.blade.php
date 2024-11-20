@extends('layouts.admin_layout')

@section('title', 'Tour Updating')

@section('admin-content')
    <div class="d-flex">
        @include('component-admin.admin_sidebar')

        <!-- Main Content -->
        <div class="flex-grow-1 main-content">
            <!-- Header -->
            @include('component-admin.header_admin')

            @include('component-admin.tour.modal.tour_update')
        </div>
    </div>
@endsection()
