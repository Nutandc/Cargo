@extends('front.layouts.app')
@section('title') @lang('app.contact') | @lang('app.app-description') @endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid py-5" style="margin-bottom: 6rem; background: linear-gradient(rgba(6, 3, 21, .5), rgba(6, 3, 21, .5)), url({{ asset('img/main-slider/carousel-1.jpg') }}) center center no-repeat;
    background-size: cover;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container contact-page py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                <h1 class="mb-4 text-center">Contact For Any Query</h1>
                <div class="bg-light p-4">
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" autocomplete="off" autofocus required>
                                    <label for="name">Name</label>
                                    @error('name')
                                    <div class="alert alert-danger mt-1"></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="d-flex justify-content-center align-items-center bg-primary ps-1"> +993 <input type="number" name="phone" class="py-3 ms-1 form-control @error('number') is-invalid @enderror" id="phone" placeholder="Phone number" autocomplete="off" min="61000000" max="65999999" aria-describedby="numberHelp" required></div>
                                    @error('phone')
                                    <div class="alert alert-danger mt-1"></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Leave a message here" name="message" id="message" style="height: 100px" autocomplete="off" maxlength="500" required></textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                    <div class="alert alert-danger mt-1"></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                <div class="position-relative h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10948948.27806203!2d49.35539932889458!3d38.11615883585033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f65cb5574bc6ccb%3A0x7edd826b4169a491!2sTurkmenistan!5e1!3m2!1sen!2sbd!4v1673251011388!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection