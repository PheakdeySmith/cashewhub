@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Pricing</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>

                <li class="breadcrumb-item active">Pricing</li>
            </ol>
        </div>
    </div>




    <div class="row justify-content-center">
        <div class="col-xxl-9">

            <!-- Pricing Title-->
            <div class="text-center">
                <h3 class="mb-2">Our Plans and Pricing</h3>
                <p class="text-muted w-50 m-auto">
                    We have plans and prices that fit your business perfectly. Make your client site a
                    success with our products.
                </p>
            </div>

            <!-- Plans -->
            <div class="row mt-sm-5 align-items-center justify-content-center mt-3 mb-3">
                <div class="col-lg-6">
                    <div class="card card-pricing">
                        <div class="card-body p-4">
                            <h3 class=" fw-semibold">Professional</h3>
                            <p class="fs-5 text-muted">Everything a small team needs</p>
                            <div class="price">
                                <h1 class="display-5  fw-bold">
                                    $18<span class="fs-4">.99</span> <span class="text-body-tertiary fs-4 fw-medium">USD / month</span>
                                </h1>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <ul class="d-flex flex-column gap-2 list-unstyled fs-16">
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Up to 10 people
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Collect data
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Code extensibility
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="d-flex flex-column gap-2 list-unstyled fs-16">
                                        <li>
                                            <i class="ti ti-circle-x-filled text-muted fs-4 align-middle me-1"></i>
                                            Custom reports
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-x-filled text-muted fs-4 align-middle me-1"></i>
                                            Product Support
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-x-filled text-muted fs-4 align-middle me-1"></i>
                                            Activity reporting
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mt-3">
                                <div class="col-lg-5">
                                    <p class="fs-5 mb-1">- Cancel anytime.</p>
                                    <p class="fs-5 mb-0">- No card required.</p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="price-btn">
                                        <a href="https://coderthemes.com/boron/layouts/pages-pricing.html#!" class="btn btn-primary">Start Free Trial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card card-pricing">
                        <div class="card-body p-4">
                            <h3 class=" fw-semibold">Teams</h3>
                            <p class="fs-5 text-muted">Foe growing business</p>
                            <div class="price">
                                <h1 class="display-5  fw-bold">
                                    $36<span class="fs-4">.99</span> <span class="text-body-tertiary fs-4 fw-medium">USD / month</span>
                                </h1>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <ul class="d-flex flex-column gap-2 list-unstyled fs-16">
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Up to 15 people
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Collect data
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Code extensibility
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="d-flex flex-column gap-2 list-unstyled fs-16">
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Custom reports
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Product Support
                                        </li>
                                        <li>
                                            <i class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                            Activity reporting
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mt-3">
                                <div class="col-lg-5">
                                    <p class="fs-5 mb-1">- Cancel anytime.</p>
                                    <p class="fs-5 mb-0">- No card required.</p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="price-btn">
                                        <a href="https://coderthemes.com/boron/layouts/pages-pricing.html#!" class="btn btn-primary">Start Free Trial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
            </div>
            <!-- end -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection



@push('script')

@endpush
