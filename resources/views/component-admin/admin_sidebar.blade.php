<div class="text-white p-3 sidebar col-2" id="sidebar">
    <div class="d-flex justify-content-center align-items-center" style="height: 150px;">
        <img class="img-fluid" src="{{ asset('images/logo_website_2.png') }}" alt="BUMYAYA"
            style="height: 120px; width: 120px;">
    </div>
    <ul class="nav flex-column text-sidebar">
        <li class="nav-item mb-2 p-2">
            <a href="{{ route('admin-dashboard') }}" class="nav-link text-white">Dashboard</a>
        </li>
        <li class="nav-item mb-2 p-2">
            <a href="#" class="nav-link text-white">Booking History</a>
        </li>
        <li class="nav-item mb-2 p-2">
            <a href="{{ route('account-management') }}" class="nav-link text-white">User</a>
        </li>
        <li class="nav-item mb-2 p-2">
            <a href="#" class="nav-link text-white mb-2" id="tourMenuToggle" data-bs-toggle="collapse" data-bs-target="#tour-collapse" aria-expanded="true">
                Tour <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse show" id="tour-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="background: rgb(255, 168, 121); font-size: 1.25rem">
                    <li class="nav-link mb-2 p-2 {{ request()->is('tour-management') ? 'active' : '' }}"><a href="{{ route('tour-management') }}" class="nav-link text-white">Tour</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('tour-faq') ? 'active' : '' }}"><a href="{{ route('tour-faq') }}" class="nav-link text-white">Tour FAQ</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('tour-type') ? 'active' : '' }}"><a href="{{ route('tour-type') }}" class="nav-link text-white">Tour Type</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('tour-service') ? 'active' : '' }}"><a href="{{ route('tour-service') }}" class="nav-link text-white">Tour Service</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('tour-itinerary') ? 'active' : '' }}"><a href="{{ route('tour-itinerary') }}" class="nav-link text-white">Tour Itinerary</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item mb-2 p-2">
            <a href="#" class="nav-link text-white mb-2" id="hotelMenuToggle" data-bs-toggle="collapse" data-bs-target="#hotel-collapse" aria-expanded="true">
                Hotel <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse show" id="hotel-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="background: rgb(255, 168, 121); font-size: 1.25rem">
                    <li class="nav-link mb-2 p-2 {{ request()->is('hotel-management') ? 'active' : '' }}"><a href="{{ route('hotel-management') }}" class="nav-link text-white">Hotel</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('hotel-service') ? 'active' : '' }}"><a href="{{ route('hotel-service') }}" class="nav-link text-white">Hotel Service</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('hotel-add-ons') ? 'active' : '' }}"><a href="{{ route('hotel-add-ons') }}" class="nav-link text-white">Hotel Add Ons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item mb-2 p-2">
            <a href="#" class="nav-link text-white mb-2" id="roomMenuToggle" data-bs-toggle="collapse" data-bs-target="#room-collapse" aria-expanded="true">
                Room <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse show" id="room-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="background: rgb(255, 168, 121); font-size: 1.25rem">
                    <li class="nav-link mb-2 p-2 {{ request()->is('room-management') ? 'active' : '' }}"><a href="{{ route('room-management') }}" class="nav-link text-white">Room</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('room-service') ? 'active' : '' }}"><a href="{{ route('room-service') }}" class="nav-link text-white">Room Service</a></li>
                    <li class="nav-link mb-2 p-2 {{ request()->is('room-type') ? 'active' : '' }}"><a href="{{ route('room-type') }}" class="nav-link text-white">Room Type</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function() {
        $('#tourMenuToggle').click(function() {
            $(this).parent().toggleClass('active');
        });
    });

    $(document).ready(function() {
        $('#hotelMenuToggle').click(function() {
            $(this).parent().toggleClass('active');
        });
    });

    $(document).ready(function() {
        $('#roomMenuToggle').click(function() {
            $(this).parent().toggleClass('active');
        });
    });
</script>
