<nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="navbar">
    <div class="container-xxl">
        <a class="navbar-brand" href="{{ route('home') }}">@lang('app.app-name')</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbars">
            <ul class="navbar-nav me-auto">
                @if(app()->isLocale('tm'))
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('language', 'en') }}">ENG</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('language', 'tm') }}">TKM</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
