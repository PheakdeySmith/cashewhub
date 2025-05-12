@extends('backends.layouts.app')


@push('style')
    <link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Line Charts</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                    <li class="breadcrumb-item active">Line Charts</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Simple line chart</h4>
                        <div dir="ltr">
                            <div id="line-chart" class="apex-charts" data-colors="#ffbc00" style="min-height: 395px;">
                            </div>
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
                        <h4 class="header-title mb-4">Line with Data Labels</h4>
                        <div dir="ltr">
                            <div id="line-chart-datalabel" class="apex-charts" data-colors="#6c757d,#ce7e7e"
                                style="min-height: 395px;"></div>
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
                        <h4 class="header-title mb-4">Zoomable Timeseries</h4>
                        <div dir="ltr">
                            <div id="line-chart-zoomable" class="apex-charts" data-colors="#fa5c7c"
                                style="min-height: 395px;"></div>
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
                        <h4 class="header-title mb-4">Line Chart with Annotations</h4>
                        <div dir="ltr">
                            <div id="line-chart-annotations" class="apex-charts" data-colors="#39afd1"
                                style="min-height: 365px;"></div>
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
                        <h4 class="header-title mb-4">Syncing charts</h4>
                        <div id="line-chart-syncing2" data-colors="#ce7e7e" style="min-height: 215px;" class=""></div>
                        <div dir="ltr">
                            <div id="line-chart-syncing" class="apex-charts" data-colors="#6c757d"
                                style="min-height: 175px;">

                            </div>
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
                        <h4 class="header-title mb-4">Gradient Line Chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-gradient" class="apex-charts" style="min-height: 365px;"></div>
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
                        <h4 class="header-title mb-4">Missing / Null values</h4>
                        <div dir="ltr">
                            <div id="line-chart-missing" class="apex-charts" data-colors="#ffbc00,#6ac75a,#39afd1"
                                style="min-height: 395px;"></div>
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
                        <h4 class="header-title mb-4">Dashed Line Chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-dashed" class="apex-charts" data-colors="#6c757d,#6ac75a,#39afd1"
                                style="min-height: 395px;"></div>
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
                        <h4 class="header-title mb-3">Stepline Chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-stepline" class="apex-charts" data-colors="#6ac75a"
                                style="min-height: 359px;"></div>
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
                        <h4 class="header-title">Brush Chart</h4>
                        <div dir="ltr">
                            <div id="chart-line2" class="apex-charts" data-colors="#ce7e7e" style="min-height: 245px;">
                            </div>
                            <div id="chart-line" class="apex-charts" data-colors="#39afd1" style="min-height: 145px;">
                            </div>
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
                        <h4 class="header-title">Realtime Chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-realtime" class="apex-charts" data-colors="#39afd1"
                                style="min-height: 365px;">

                            </div>
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

    <!-- Apex Chart line Demo js -->
    <script src="{{ asset('assets') }}/js/stock-prices.js"></script>
    <script src="{{ asset('assets') }}/js/irregular-data-series.js"></script>
    <script src="{{ asset('assets') }}/js/chart-apex-line.js"></script><svg id="SvgjsSvg1131" width="2" height="0" xmlns="http://www.w3.org/2000/svg"
        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1132"></defs>
        <polyline id="SvgjsPolyline1133" points="0,0"></polyline>
        <path id="SvgjsPath1134" d="M0 0 "></path>
    </svg>
@endpush
