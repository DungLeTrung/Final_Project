@extends('layouts.admin_layout')

@section('title', 'Admin-Dashboard')

@section('admin-content')
    <div class="d-flex">
        @include('component-admin.admin_sidebar')

        <!-- Main Content -->
        <div class="flex-grow-1 main-content">
            <!-- Header -->
            @include('component-admin.header_admin');

            <!-- Dashboard Content -->
            <main class="p-4">
                <!-- Summary Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">NUMBER OF HOTEL</h6>
                                <p class="card-text fs-4 fw-bold">$40,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">NUMBER OF USER</h6>
                                <p class="card-text fs-4 fw-bold">$215,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">NUMBER OF BOOKING</h6>
                                <p class="card-text fs-4 fw-bold">$215,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">PENDING REQUESTS</h6>
                                <p class="card-text fs-4 fw-bold">18</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings Overview and Revenue Sources -->
                <div class="row g-3 mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Earnings Overview</h6>
                                <canvas id="earningsChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Revenue Sources</h6>
                                <canvas id="revenueChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects and Illustrations -->
                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Projects</h6>
                                <div class="mb-3">
                                    <p>Server Migration</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" style="width: 20%;"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p>Sales Tracking</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" style="width: 40%;"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p>Customer Database</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" style="width: 60%;"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p>Payout Details</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="card-title">Illustrations</h6>
                                <div class="bg-light p-4 rounded">[Illustration Placeholder]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection()
