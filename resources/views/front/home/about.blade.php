@extends('front.layouts.app')
@section('title') @lang('app.app-description') @endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5"
         style="margin-bottom: 6rem; background: linear-gradient(rgba(6, 3, 21, .5), rgba(6, 3, 21, .5)), url({{ asset('img/main-slider/carousel-1.jpg') }}) center center no-repeat;
                 background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">@lang('app.about')</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">@lang('app.home')</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">@lang('app.about')</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                             src="{{ asset ('img/resources/about.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">@lang('app.about')</h6>
                    <h1 class="mb-5">Quick Transport and Logistics Solutions</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                        amet</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Global Coverage</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam
                                justo.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam
                                justo.</p>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="btn btn-primary py-3 px-5">@lang('app.contact')</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection