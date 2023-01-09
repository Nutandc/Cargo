<div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <i class="fa-solid fa-gauge text-primary"> @lang('app.dashboard')</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.contacts.index') }}">
                <i class="fa-solid fa-address-card text-primary"> @lang('app.contacts') </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.cargos.index') }}">
                <i class="fa-solid fa-truck text-primary"> @lang('app.cargos') </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.couriers.index') }}">
                <i class="fa-solid fa-users-gear text-primary"> @lang('app.couriers') </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.locations.index') }}">
                <i class="fa-solid fa-map-location-dot text-primary"> @lang('app.locations') </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.transports.index') }}">
                <i class="fa-solid fa-truck-plane text-primary"> @lang('app.transports') </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.specialties.index') }}">
                <i class="fa-solid fa-star text-primary"> @lang('app.specialties') </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.userAgents.index') }}">
                <i class="fa-solid fa-user-shield text-primary"> @lang('app.user-agents') </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.visitors.index') }}">
                <i class="fa-solid fa-users text-primary"> @lang('app.visitors') </i>
            </a>
        </li>
    </ul>
</div>