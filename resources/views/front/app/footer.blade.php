<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">@lang('app.address')</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ashgabat, Turkmenistan</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+993 65 000000</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>example@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">@lang('app.services')</h4>
                <a class="btn btn-link" href="">@lang('app.air')</a>
                <a class="btn btn-link" href="">@lang('app.road')</a>
                <a class="btn btn-link" href="">@lang('app.railway')</a>
                <a class="btn btn-link" href="">@lang('app.sea')</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">@lang('app.q-links')</h4>
                <a class="btn btn-link" href="">@lang('app.about')</a>
                <a class="btn btn-link" href="">@lang('app.contact')</a>
                <a class="btn btn-link" href="">@lang('app.services')</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">@lang('app.newsletter')</h4>
                <p>@lang('app.news-text')</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">@lang('app.confirm')</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-primary border-bottom text-primary" href="{{ route('home') }}">@lang('app.app-name')</a> @lang('app.footer')
                </div>
                <div class="col-md-6 text-center text-md-end">
                    @lang('app.footer2')
                </div>
            </div>
        </div>
    </div>
</div>

