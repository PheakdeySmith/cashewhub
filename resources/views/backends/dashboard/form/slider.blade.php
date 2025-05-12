@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nouislider.min.css">
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Range Slider</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>

                    <li class="breadcrumb-item active">Range Slider</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Basic Range Slider</h4>
                    </div>
                    <div class="card-body">
                        <div id="rangeslider_basic" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Multi Elements Range</h4>
                    </div>
                    <div class="card-body">
                        <div id="rangeslider_multielement" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Value Range Slider</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div id="nonlinear" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="example-val" id="lower-value">500.00, 10.00%</div>
                                <div class="example-val" id="upper-value">4000.00, 50.00%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Color Scheme</h4>
                    </div><!-- end card header -->
                    <div class="card-body">

                        <div>
                            <h5 class="fs-14">Primary</h5>
                            <div id="slider-primary" data-slider-color="primary"
                                class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">

                            </div>
                        </div>

                        <div class="mt-3">
                            <h5 class="fs-14">Secondary</h5>
                            <div id="slider-secondary" data-slider-color="secondary"
                                class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">

                            </div>
                        </div>

                        <div class="mt-3">
                            <h5 class="fs-14">Success</h5>
                            <div id="slider-success" data-slider-color="success"
                                class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                            </div>
                        </div>

                        <div class="mt-3">
                            <h5 class="fs-14">Info</h5>
                            <div id="slider-info" data-slider-color="info"
                                class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                            </div>
                        </div>

                        <div class="mt-3">
                            <h5 class="fs-14">Warning</h5>
                            <div id="slider-warning" data-slider-color="warning"
                                class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                            </div>
                        </div>

                        <div class="mt-3">
                            <h5 class="fs-14">Danger</h5>
                            <div id="slider-danger" data-slider-color="danger"
                                class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Locking Sliders Together</h4>
                    </div>
                    <div class="card-body">
                        <div class="slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" id="slider1">
                        </div>
                        <span class="example-val mt-2" id="slider1-span">60.00</span>

                        <div class="slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" id="slider2">
                        </div>
                        <span class="example-val mt-2" id="slider2-span">80.00</span>

                        <button id="lockbutton" class="btn btn-primary">Lock</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Tooltip</h4>
                    </div>
                    <div class="card-body">
                        <div class="slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"
                            id="slider-merging-tooltips">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Soft Limits</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 pb-5">
                            <div class="slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" id="soft">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Color Picker</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="sliders noUi-target noUi-ltr noUi-vertical noUi-txt-dir-ltr" id="red">

                            </div>
                            <div class="sliders noUi-target noUi-ltr noUi-vertical noUi-txt-dir-ltr" id="green">

                            </div>
                            <div class="sliders noUi-target noUi-ltr noUi-vertical noUi-txt-dir-ltr" id="blue">
                            </div>

                            <div id="result" style="background: rgb(127, 127, 127); color: rgb(127, 127, 127);"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Vertical Range Slider</h4>
                    </div>
                    <div class="card-body">
                        <div id="slider-vertical" class="mx-auto noUi-target noUi-ltr noUi-vertical noUi-txt-dir-ltr"
                            style="height: 200px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Vertical Range Slider</h4>
                    </div>
                    <div class="card-body">
                        <div id="slider-connect-upper" class="mx-auto noUi-target noUi-ltr noUi-vertical noUi-txt-dir-ltr"
                            style="height: 200px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Vertical Range Slider</h4>
                    </div>
                    <div class="card-body">
                        <div id="slider-vertical-tooltip"
                            class="mx-auto noUi-target noUi-ltr noUi-vertical noUi-txt-dir-ltr" style="height: 200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
@endsection


@push('script')
    <!-- noUiSlider js -->
    <script src="{{ asset('assets') }}/js/nouislider.min.js"></script>
    <script src="{{ asset('assets') }}/js/wNumb.min.js"></script>

    <!-- Plugins only -->
    <script src="{{ asset('assets') }}/js/extended-range-slider.js"></script>
@endpush
