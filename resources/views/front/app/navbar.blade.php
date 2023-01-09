<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="{{ route('home')}}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">@lang('app.app-name')</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home')}}" class="nav-item nav-link active">@lang('app.home')</a>
            <a href="#" class="nav-item nav-link">@lang('app.about')</a>
            <a href="#" class="nav-item nav-link">@lang('app.services')</a>
            <a href="{{ route('contact')}}" class="nav-item nav-link">@lang('app.contact')</a>
        </div>
        @if(app()->isLocale('tm'))
            <a class="nav-link fw-bold" href="{{ route('language', 'en') }}"><h5 class="m-0"><i class="fa-solid fa-language text-primary" title="English"></i></h5></a>
        @else
            <a class="nav-link fw-bold" href="{{ route('language', 'tm') }}"><h5 class="m-0"><i class="fa-solid fa-language text-primary" title="Turkmen"></i></h5></a>
        @endif
        <h5 class="m-0"><a href="tel:+99365000000"><i class="fa-solid fa-phone text-primary me-3" title="+993 65 000000"></i></a></h5>
        @guest
        <a href="{{ route('login') }}"><h5 class="m-0 pe-lg-5"><i class="fa-solid fa-user-xmark text-primary me-3"></i></h5></a>
        @endguest
        @auth
            <h4 class="m-0 pe-lg-5"><i class="fa-solid fa-user-check text-primary me-3"></i></h4>
        @endauth
    </div>
</nav>