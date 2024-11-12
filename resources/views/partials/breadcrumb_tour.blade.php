<nav aria-label="breadcrumb" style="padding: 0 !important">
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ route('home-page') }}">Home</a>
        </li>

        @if(request()->is('list-tour') || request()->is('detail-tour'))
            <li class="breadcrumb-item {{ request()->is('list-tour') ? 'active' : '' }}">
                <a href="{{ route('list-tour') }}">Tour</a>
            </li>
        @endif

        @if(request()->is('detail-tour'))
            <li class="breadcrumb-item {{ request()->is('detail-tour') ? 'active' : '' }}">
                <a href="{{ route('detail-tour') }}">Detail Tour</a>
            </li>
        @endif

        @if(request()->is('list-hotel') || request()->is('detail-hotel'))
            <li class="breadcrumb-item {{ request()->is('list-hotel') ? 'active' : '' }}">
                <a href="{{ route('list-hotel') }}">Hotel</a>
            </li>
        @endif

        @if(request()->is('detail-hotel'))
            <li class="breadcrumb-item {{ request()->is('detail-hotel') ? 'active' : '' }}">
                <a href="{{ route('detail-hotel') }}">Detail Hotel</a>
            </li>
        @endif

    </ol>
</nav>
