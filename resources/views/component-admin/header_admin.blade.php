<header class="d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
    <input type="text" class="form-control w-25 p-3" placeholder="Search for...">
    <div class="d-flex align-items-center">
        <button class="btn btn-outline-secondary mx-2">
            <i class="fas fa-bell" style="font-size: 1.5rem;"></i>
        </button>
        <button class="btn btn-outline-secondary mx-2">
            <i class="fa-solid fa-message" style="font-size: 1.5rem;"></i>
        </button>
        <div class="d-flex align-items-center dropdown  mx-4">
            <img src="{{ asset('images/hanoi.jpg') }}" alt="User" class="rounded-circle me-2 dropdown-toggle" style="width: 60px; height: 60px; object-fit: cover;">
            <span style="cursor: pointer; font-size: 1.5rem; font-weight: bold" data-bs-toggle="dropdown" aria-expanded="false">Admin</span>

            <!-- Dropdown menu -->
            <ul class="dropdown-menu dropdown-menu-end custom-dropdown">
                <li><a class="dropdown-item" href="{{ route('admin-profile') }}">Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</header>
