@extends('errors.app')
@section('title') 429 | @lang('app.app-description') @endsection
@section('content')
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">429</h1>
                    <h1 class="mb-4">Too Many Requests</h1>
                    <p class="mb-4">Too Many Attempts! Maybe go to
                        our home page?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('home')}}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection