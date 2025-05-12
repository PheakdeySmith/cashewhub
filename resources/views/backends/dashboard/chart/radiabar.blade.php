@extends('backends.layouts.app')


@push('style')
    <link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">
@endpush


@section('content')
<div class="page-container">


                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">RadialBar Charts</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                            <li class="breadcrumb-item active">RadialBar Charts</li>
                        </ol>
                    </div>
                </div>




                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Basic RadialBar Chart</h4>
                                <div dir="ltr">
                                    <div id="basic-radialbar" class="apex-charts" data-colors="#39afd1" style="min-height: 278.7px;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Multiple RadialBars</h4>
                                <div dir="ltr">
                                    <div id="multiple-radialbar" class="apex-charts" data-colors="#6c757d,#ffbc00,#ce7e7e,#6ac75a" style="min-height: 278.7px;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Circle Chart - Custom Angle</h4>
                                <div class="text-center" dir="ltr">
                                    <div id="circle-angle-radial" class="apex-charts" data-colors="#6ac75a,#ce7e7e,#fa5c7c,#ffbc00" style="min-height: 308.7px;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Circle Chart with Image</h4>
                                <div dir="ltr">
                                    <div id="image-radial" class="apex-charts" style="min-height: 318.7px;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Stroked Circular Guage</h4>
                                <div dir="ltr">
                                    <div id="stroked-guage-radial" class="apex-charts" data-colors="#ce7e7e" style="min-height: 319.275px;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Gradient Circular Chart</h4>
                                <div dir="ltr">
                                    <div id="gradient-chart" class="apex-charts" data-colors="#8f75da,#ce7e7e" style="min-height: 288.7px;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Semi Circle Gauge</h4>
                                <div dir="ltr">
                                    <div id="semi-circle-gauge" class="apex-charts" data-colors="#ce7e7e" style="min-height: 260.167px;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->
@endsection


@push('script')
<!-- Apex Chart js -->
    <script src="{{ asset('assets') }}/js/apexcharts.min.js"></script>

    <!-- Apex Chart RadialBar Demo js -->
    <script src="{{ asset('assets') }}/js/chart-apex-radialbar.js"></script><svg id="SvgjsSvg1052" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1053"></defs><polyline id="SvgjsPolyline1054" points="0,0"></polyline><path id="SvgjsPath1055" d="M0 0 "></path></svg>


@endpush
