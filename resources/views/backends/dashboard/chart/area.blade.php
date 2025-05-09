@extends('backends.layouts.app')


@push('style')

<link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">

@endpush

@section('content')
<div class="page-container">

                
    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Area Charts</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>
                
                <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>
                
                <li class="breadcrumb-item active">Area Charts</li>
            </ol>
        </div>
    </div>
    

    

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Basic Area Chart</h4>
                    <div dir="ltr">
                        <div id="basic-area" class="apex-charts" data-colors="#f28888" style="min-height: 395px;">
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
                    <h4 class="header-title mb-4">Spline Area</h4>
                    <div dir="ltr">
                        <div id="spline-area" class="apex-charts" data-colors="#ce7e7e,#6c757d" style="min-height: 395px;">
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
                    <h4 class="header-title mb-4">Area Chart - Datetime X-axis</h4>
                    <div class="toolbar apex-toolbar">
                        <button id="one_month" class="btn btn-sm btn-light">1M</button>
                        <button id="six_months" class="btn btn-sm btn-light">6M</button>
                        <button id="one_year" class="btn btn-sm btn-light active">1Y</button>
                        <button id="ytd" class="btn btn-sm btn-light">YTD</button>
                        <button id="all" class="btn btn-sm btn-light">ALL</button>
                    </div>
                    <div dir="ltr">
                        <div id="area-chart-datetime" class="apex-charts" data-colors="#6c757d" style="min-height: 395px;">
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
                    <h4 class="header-title mb-4">Area with Negative Values</h4>
                    <div dir="ltr">
                        <div id="area-chart-negative" class="apex-charts" data-colors="#6ac75a,#ffbc00" style="min-height: 395px;">
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
                    <h4 class="header-title mb-4">Selection - Github Style</h4>
                    <div dir="ltr">
                        <div id="area-chart-github" class="apex-charts" data-colors="#7BD39A" style="min-height: 190px;">
                        </div>
                        <div class="pt-2 pb-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('assets') }}/images/avatar-2.jpg" class="avatar-xs rounded" alt="file-image">
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Coderthemes</a>
                                </div>
                            </div>
                        </div>
                        <div id="area-chart-github2" class="apex-charts" data-colors="#FF7F00" style="min-height: 215px;">
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
                    <h4 class="header-title mb-4">Stacked Area</h4>
                    <div dir="ltr">
                        <div id="stacked-area" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#e3eaef" style="min-height: 365px;">

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
                    <h4 class="header-title mb-4">Irregular TimeSeries</h4>
                    <div dir="ltr">
                        <div id="area-timeSeries" class="apex-charts" data-colors="#f8b0f9,#ce7e7e,#669776" style="min-height: 365px;">
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
                    <h4 class="header-title mb-4">Area Chart with Null values</h4>
                    <div dir="ltr">
                        <div id="area-chart-nullvalues" class="apex-charts" data-colors="#669776" style="min-height: 365px;">
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
<!-- Apex Charts js -->
<script src="{{ asset('assets') }}/js/apexcharts.min.js"></script>
<script src="{{ asset('assets') }}/js/moment.js"></script>

<!-- Apex Chart Area Demo js -->
<script src="{{ asset('assets') }}/js/stock-prices.js"></script>
<script src="{{ asset('assets') }}/js/series1000.js"></script>
<script src="{{ asset('assets') }}/js/github-data.js"></script>
<script src="{{ asset('assets') }}/js/irregular-data-series.js"></script>



<!-- Apex Area Chart demo js -->
<script src="{{ asset('assets') }}/js/chart-apex-area.js"></script><svg id="SvgjsSvg1141" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1142"></defs><polyline id="SvgjsPolyline1143" points="0,0"></polyline><path id="SvgjsPath1144" d="M0 0 "></path></svg>

@endpush
