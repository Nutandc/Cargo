@extends('front.layouts.app')
@section('title') @lang('app.cargo') | @lang('app.app-description') @endsection
@section('content')
    <div class="container-xxl py-3 mt-100">
        {{--<div class="d-flex justify-content-between align-items-center border-bottom py-2 mb-3">--}}
            {{--<a href="{{ route('cargos') }}" class="d-block h3 mb-0 color-b">@lang('app.cargos')</a>--}}
            {{--<form action="{{ route('cargos') }}">--}}
                {{--<div class="d-flex justify-content-center align-items-center"><input class="form-control form-control-sm" type="text" placeholder="@lang('app.search')" aria-label="Search" name="q"><button class="btn bg-color-b btn-sm" type="submit"><i class="bi bi-search"></i></button></div>--}}
            {{--</form>--}}
        {{--</div>--}}
        <div class="row g-3">
            <div class="col-sm">
                @if($cargos->count() > 0)
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
                        @foreach($cargos as $cargo)
                            <div class="col">
                                @include('front.app.cargo')
                            </div>
                        @endforeach
                    </div>
                    <div class="my-3">
                        {{ $cargos->links() }}
                    </div>
                @else
                    <div class="p-5 h2 mb-0 text-center">
                        @lang('app.not-found', ['name' => request('t')])
                    </div>
                @endif
            </div>
        </div>
    </div>




    {{--<!-- Quote Start -->--}}
    {{--<div class="container-xxl py-5">--}}
        {{--<div class="container py-5">--}}
            {{--<div class="row g-5 align-items-center">--}}
                {{--<div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">--}}
                    {{--<h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>--}}
                    {{--<h1 class="mb-5">Request A Free Qoute!</h1>--}}
                    {{--<p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et--}}
                        {{--eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>--}}
                    {{--<div class="d-flex align-items-center">--}}
                        {{--<i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>--}}
                        {{--<div class="ps-4">--}}
                            {{--<h6>Call for any query!</h6>--}}
                            {{--<h3 class="text-primary m-0">+993 65 00 00 00</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-7">--}}
                    {{--<div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">--}}
                        {{--<form>--}}
                            {{--<div class="row g-3">--}}
                                {{--<div class="col-12 col-sm-6">--}}
                                    {{--<input type="text" class="form-control border-0" placeholder="Your Name"--}}
                                           {{--style="height: 55px;">--}}
                                {{--</div>--}}
                                {{--<div class="col-12 col-sm-6">--}}
                                    {{--<input type="email" class="form-control border-0" placeholder="Your Email"--}}
                                           {{--style="height: 55px;">--}}
                                {{--</div>--}}
                                {{--<div class="col-12 col-sm-6">--}}
                                    {{--<input type="text" class="form-control border-0" placeholder="Your Mobile"--}}
                                           {{--style="height: 55px;">--}}
                                {{--</div>--}}
                                {{--<div class="col-12 col-sm-6">--}}
                                    {{--<select class="form-select border-0" style="height: 55px;">--}}
                                        {{--<option selected>Select A Freight</option>--}}
                                        {{--<option value="1">Freight 1</option>--}}
                                        {{--<option value="2">Freight 2</option>--}}
                                        {{--<option value="3">Freight 3</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="col-12">--}}
                                    {{--<textarea class="form-control border-0" placeholder="Special Note"></textarea>--}}
                                {{--</div>--}}
                                {{--<div class="col-12">--}}
                                    {{--<button class="btn btn-primary w-100 py-3" type="submit">Submit</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Quote End -->--}}
@endsection