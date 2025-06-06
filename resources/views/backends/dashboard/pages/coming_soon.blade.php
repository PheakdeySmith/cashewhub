@extends('backends.layouts.blank')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
    <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
        <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="card overflow-hidden text-center h-100 p-xxl-4 p-3 mb-0">
                <a href="https://coderthemes.com/boron/layouts/index.html" class="auth-brand mb-3">
                    <img src="{{ asset('assets') }}/images/logo-dark.png" alt="dark logo" height="24" class="logo-dark">
                    <img src="{{ asset('assets') }}/images/logo.png" alt="logo light" height="24" class="logo-light">
                </a>

                <div>
                    <h3 class="fw-semibold mb-2">We Are Launching Soon !</h3>
                    <p class="text-muted mb-0">something exciting is coming your way soon</p>
                </div>

                <div class="row text-center justify-content-center my-4 g-2">
                    <div class="col-6 col-sm-4 col-md-3 col-lg">
                        <div class="bg-body-secondary border border-primary-subtle border-dashed p-2 rounded">
                            <h3 id="days" class="fw-bold text-primary fs-35">587</h3>
                            <p class="fw-semibold fs-12 mb-0">Days</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg">
                        <div class="bg-body-secondary border border-primary-subtle border-dashed p-2 rounded">
                            <h3 id="hours" class="fw-bold text-primary fs-35">17</h3>
                            <p class="fw-semibold fs-12 mb-0">Hours</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg">
                        <div class="bg-body-secondary border border-primary-subtle border-dashed p-2 rounded">
                            <h3 id="minutes" class="fw-bold text-primary fs-35">22</h3>
                            <p class="fw-semibold fs-12 mb-0">Minutes</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg">
                        <div class="bg-body-secondary border border-primary-subtle border-dashed p-2 rounded">
                            <h3 id="seconds" class="fw-bold text-primary fs-35">50</h3>
                            <p class="fw-semibold fs-12 mb-0">Seconds</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="position-relative mb-3">
                            <form class="m-0">
                                <input type="email" id="email" name="email" class="form-control rounded border w-100 px-2 py-2" placeholder="Enter Your Email">
                                <button type="submit" class="btn btn-primary position-absolute top-50 translate-middle-y translate-middle-x end-0 fw-semibold me-1">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>

                <p class="text-muted">Sign up now to get early launch notification of our launch date !</p>

                <div class="d-flex justify-content-center gap-2">
                    <a href="https://coderthemes.com/boron/layouts/pages-coming-soon.html#!" class="btn btn-danger d-inline-flex align-items-center justify-content-center rounded avatar-md "><i class="ti ti-brand-google-filled fs-20"></i></a>
                    <a href="https://coderthemes.com/boron/layouts/pages-coming-soon.html#!" class="btn btn-primary d-inline-flex align-items-center justify-content-center rounded avatar-md "><i class="ti ti-brand-facebook fs-20"></i></a>
                    <a href="https://coderthemes.com/boron/layouts/pages-coming-soon.html#!" class="btn btn-info d-inline-flex align-items-center justify-content-center rounded avatar-md "><i class="ti ti-brand-linkedin fs-20"></i></a>
                    <a href="https://coderthemes.com/boron/layouts/pages-coming-soon.html#!" class="btn btn-warning d-inline-flex align-items-center justify-content-center rounded avatar-md "><i class="ti ti-brand-github fs-20"></i></a>
                    <a href="https://coderthemes.com/boron/layouts/pages-coming-soon.html#!" class="btn btn-danger d-inline-flex align-items-center justify-content-center rounded avatar-md "><i class="ti ti-brand-youtube fs-20"></i></a>
                </div>

                <p class="mt-3 mb-0">
                    <script>document.write(new Date().getFullYear())</script>2025 © Boron - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection



@push('script')
<script src="{{ asset('assets') }}/js/coming-soon.js"></script>
@endpush
