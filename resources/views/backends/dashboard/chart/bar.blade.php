@extends('backends.layouts.app')


@push('style')

<link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">

@endpush


@section('content')
<div class="page-container">
                        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 text-uppercase fw-bold mb-0">Bar Charts</h4>
                            </div>

                            <div class="text-end">
                                <ol class="breadcrumb m-0 py-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>
                                    
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>
                                    
                                    <li class="breadcrumb-item active">Bar Charts</li>
                                </ol>
                            </div>
                        </div>
                        

                        

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Basic Bar Chart</h4>
                                        <div dir="ltr">
                                            <div id="basic-bar" class="apex-charts" data-colors="#39afd1" style="min-height: 395px;">
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
                                        <h4 class="header-title">Grouped Bar Chart</h4>
                                        <div dir="ltr">
                                            <div id="grouped-bar" class="apex-charts" data-colors="#fa5c7c,#6c757d" style="min-height: 395px;">
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
                                        <h4 class="header-title">Stacked Bar Chart</h4>
                                        <div dir="ltr">
                                            <div id="stacked-bar" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#fa5c7c,#6c757d,#39afd1" style="min-height: 395px;">
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
                                        <h4 class="header-title">100% Stacked Bar Chart</h4>
                                        <div dir="ltr">
                                            <div id="full-stacked-bar" class="apex-charts" data-colors="#ffbc00,#39afd1,#6c757d,#e3eaef,#ce7e7e" style="min-height: 395px;">
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
                                        <h4 class="header-title">Bar with Negative Values</h4>
                                        <div dir="ltr">
                                            <div id="negative-bar" class="apex-charts" data-colors="#fa5c7c,#6ac75a" style="min-height: 395px;">
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
                                        <h4 class="header-title">Reversed Bar Chart</h4>
                                        <div dir="ltr">
                                            <div id="reversed-bar" class="apex-charts" data-colors="#ce7e7e,#6ac75a" style="min-height: 395px;">
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
                                        <h4 class="header-title">Bar with Image Fill</h4>
                                        <div dir="ltr">
                                            <div id="image-fill-bar" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#e3eaef" style="min-height: 465px;">

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
                                        <h4 class="header-title">Custom DataLabels Bar</h4>
                                        <div dir="ltr">
                                            <div id="datalables-bar" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#fa5c7c,#6c757d,#39afd1,#2b908f,#ffbc00,#90ee7e,#f48024,#212730" style="min-height: 465px;">
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
                                        <h4 class="header-title">Patterned Bar Chart</h4>
                                        <div dir="ltr">
                                            <div id="pattern-bar" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#fa5c7c,#39afd1" style="min-height: 395px;">
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
                                        <h4 class="header-title">Bar with Markers</h4>
                                        <div dir="ltr">
                                            <div id="bar-markers" class="apex-charts" data-colors="#6ac75a,#fa5c7c" style="min-height: 395px;">
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
<script src="{{ asset('assets') }}/js/chart-apex-bar.js"></script>
<svg id="SvgjsSvg1141" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1142"></defs><polyline id="SvgjsPolyline1143" points="0,0"></polyline><path id="SvgjsPath1144" d="M0 0 "></path>
</svg>

@endpush

