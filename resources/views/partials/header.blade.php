<header class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="navbar-brand">
            <img class="img-fluid" src="{{ asset('images/logo_website_2.png') }}" alt="BUMYAYA" style="height: 120px; width: 120px">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-5 ">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home-page') }}" style="color: white">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}" style="color: white">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('list-tour') ? 'active' : '' }}" href="{{ route('list-tour') }}" style="color: white">Tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('list-hotel') ? 'active' : '' }}" href="{{ route('list-hotel') }}" style="color: white">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}" style="color: white">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white">Login</a>
                </li>
            </ul>
        </div>
</header>

