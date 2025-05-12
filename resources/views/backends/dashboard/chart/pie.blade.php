@extends('backends.layouts.app')


@push('style')
    <link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">
@endpush



@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Pie Charts</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                    <li class="breadcrumb-item active">Pie Charts</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Simple Pie Chart</h4>
                        <div dir="ltr">
                            <div id="simple-pie" class="apex-charts" data-colors="#ce7e7e,#6c757d,#6ac75a,#fa5c7c,#e3eaef"
                                style="min-height: 287.7px;"></div>
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
                        <h4 class="header-title">Simple Donut Chart</h4>
                        <div dir="ltr">
                            <div id="simple-donut" class="apex-charts" data-colors="#39afd1,#ffbc00,#313a46,#fa5c7c,#6ac75a"
                                style="min-height: 287.7px;"></div>
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
                        <h4 class="header-title mb-4">Monochrome Pie Chart</h4>
                        <div dir="ltr">
                            <div id="monochrome-pie" class="apex-charts" style="min-height: 287.7px;"></div>
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
                        <h4 class="header-title mb-4">Gradient Donut Chart</h4>
                        <div dir="ltr">
                            <div id="gradient-donut" class="apex-charts"
                                data-colors="#ce7e7e,#6c757d,#6ac75a,#fa5c7c,#e3eaef" style="min-height: 287.7px;"></div>
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
                        <h4 class="header-title mb-4">Patterned Donut Chart</h4>
                        <div dir="ltr">
                            <div id="patterned-donut" class="apex-charts"
                                data-colors="#39afd1,#ffbc00,#313a46,#fa5c7c,#6ac75a" style="min-height: 289.75px;"></div>
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
                        <h4 class="header-title mb-4">Pie Chart with Image fill</h4>
                        <div dir="ltr">
                            <div id="image-pie" class="apex-charts" data-colors="#39afd1,#ffbc00,#ce7e7e,#6ac75a"
                                style="min-height: 283.6px;"></div>
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
                        <h4 class="header-title mb-4">Donut Update</h4>
                        <div dir="ltr">
                            <div id="update-donut" class="apex-charts" data-colors="#ce7e7e,#6c757d,#6ac75a,#fa5c7c"
                                style="min-height: 287.7px;"></div>
                        </div>

                        <div class="text-center mt-2">
                            <button class="btn btn-sm btn-primary" id="randomize">RANDOMIZE</button>
                            <button class="btn btn-sm btn-primary" id="add">ADD</button>
                            <button class="btn btn-sm btn-primary" id="remove">REMOVE</button>
                            <button class="btn btn-sm btn-primary" id="reset">RESET</button>
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

    <!-- Apex Chart Pie Demo js -->
    <script src="{{ asset('assets') }}/js/chart-apex-pie.js"></script><svg id="SvgjsSvg1006" width="2" height="0" xmlns="http://www.w3.org/2000/svg"
        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1007"></defs>
        <polyline id="SvgjsPolyline1008" points="0,0"></polyline>
        <path id="SvgjsPath1009" d="M0 0 "></path>
    </svg>
@endpush
