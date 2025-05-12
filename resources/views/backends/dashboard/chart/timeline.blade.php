@extends('backends.layouts.app')


@push('style')
    <link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Timeline Charts</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                    <li class="breadcrumb-item active">Timeline Charts</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Basic Timeline</h4>
                        <div dir="ltr">
                            <div id="basic-timeline" class="apex-charts" data-colors="#f28888" style="min-height: 365px;">
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
                        <h4 class="header-title mb-3">Distributed Timeline </h4>
                        <div dir="ltr">
                            <div id="distributed-timeline" class="apex-charts"
                                data-colors="#ce7e7e,#6ac75a,#fa5c7c,#6c757d,#39afd1" style="min-height: 365px;">
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
                        <h4 class="header-title mb-3">Multi Series Timeline</h4>

                        <div dir="ltr">
                            <div id="multi-series-timeline" class="apex-charts" data-colors="#6c757d,#39afd1"
                                style="min-height: 365px;"></div>
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
                        <h4 class="header-title mb-3">Advanced Timeline</h4>
                        <div dir="ltr">
                            <div id="advanced-timeline" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#fa5c7c"
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
                        <h4 class="header-title mb-3">Multiple Series - Group Rows</h4>
                        <div dir="ltr">
                            <div id="group-rows-timeline" class="apex-charts"
                                data-colors="#ce7e7e,#6ac75a,#fa5c7c,#6c757d,#39afd1,#ffc35a, #eef2f7, #313a46,#3577f1, #0ab39c, #f0a548,#68eaff"
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

    </div> <!-- container -->
@endsection


@push('script')
    <!-- Apex Chart js -->
    <script src="{{ asset('assets') }}/js/apexcharts.min.js"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets') }}/js/moment.min.js"></script>

    <!-- Apex Chart Timeline Demo js -->
    <script src="{{ asset('assets') }}/js/chart-apex-timeline.js"></script><svg id="SvgjsSvg1285" width="2" height="0" xmlns="http://www.w3.org/2000/svg"
        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1286"></defs>
        <polyline id="SvgjsPolyline1287" points="0,0"></polyline>
        <path id="SvgjsPath1288" d="M0 0 "></path>
    </svg>
@endpush
