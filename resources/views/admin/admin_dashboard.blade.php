@extends('layouts.admin_layout')

@section('title', 'Admin-Dashboard')

@section('admin-content')
    <div class="d-flex">
        <aside class="bg-primary text-white p-3" id="sidebar">
            <h2>SB ADMIN<sup>2</sup></h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white active">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Components</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Utilities</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Pages</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Charts</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Tables</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="flex-grow-1">
            <!-- Header -->
            <header class="d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
                <input type="text" class="form-control w-25" placeholder="Search for...">
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-secondary mx-2">🔔</button>
                    <button class="btn btn-outline-secondary mx-2">💬</button>
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/32" alt="User" class="rounded-circle me-2">
                        <span>Valerie Luna</span>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-4">
                <!-- Summary Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">EARNINGS (MONTHLY)</h6>
                                <p class="card-text fs-4 fw-bold">$40,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">EARNINGS (ANNUAL)</h6>
                                <p class="card-text fs-4 fw-bold">$215,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">TASKS</h6>
                                <div class="d-flex align-items-center">
                                    <p class="fs-4 fw-bold mb-0">50%</p>
                                    <div class="progress w-100 ms-3">
                                        <div class="progress-bar bg-info" style="width: 50%;"></div>
                                    </div>
                                </div>
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
