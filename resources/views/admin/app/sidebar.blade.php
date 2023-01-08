<div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <i class="bi bi-speedometer me-1"></i> @lang('app.dashboard')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.contacts.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.contacts')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.cargos.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.cargos')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.couriers.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.couriers')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.locations.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.locations')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.transports.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.transports')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.specialties.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.specialties')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.userAgents.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.user-agents')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.visitors.index') }}">
                <i class="bi bi-speedometer me-1"></i> @lang('app.visitors')
            </a>
        </li>
    </ul>
</div>