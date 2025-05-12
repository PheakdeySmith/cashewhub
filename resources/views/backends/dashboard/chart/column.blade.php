@extends('backends.layouts.app')


@push('style')

<link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">

@endpush


@section('content')
<div class="page-container">


                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">Column Charts</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                            <li class="breadcrumb-item active">Column Charts</li>
                        </ol>
                    </div>
                </div>




                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Basic Column Chart</h4>
                                <div dir="ltr">
                                    <div id="basic-column" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#fa5c7c" style="min-height: 411px;">
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
                                <h4 class="header-title mb-3">Column Chart with Datalabels</h4>
                                <div dir="ltr">
                                    <div id="datalabels-column" class="apex-charts" data-colors="#ce7e7e" style="min-height: 395px;">
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
                                <h4 class="header-title">Stacked Column Chart</h4>
                                <div dir="ltr">
                                    <div id="stacked-column" class="apex-charts" data-colors="#39afd1,#ffbc00,#e3eaef" style="min-height: 395px;">
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
                                <h4 class="header-title">100% Stacked Column Chart</h4>
                                <div dir="ltr">
                                    <div id="full-stacked-column" class="apex-charts" data-colors="#39afd1,#6ac75a,#e3eaef" style="min-height: 395px;">
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
                                <h4 class="header-title">Column with Markers</h4>
                                <div dir="ltr">
                                    <div id="column-with-markers" class="apex-charts" data-colors="#ce7e7e,#ffbc00" style="min-height: 395px;">
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
                                <h4 class="header-title">Column with Group Label</h4>
                                <div dir="ltr">
                                    <div id="column-with-group-label" class="apex-charts" data-colors="#39afd1,#6ac75a,#e3eaef" style="min-height: 395px;">
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
                                <h4 class="header-title">Column Chart with rotated labels &amp; Annotations</h4>
                                <div dir="ltr">
                                    <div id="rotate-labels-column" class="apex-charts" data-colors="#fa5c7c" style="min-height: 395px;">
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
                                <h4 class="header-title">Column Chart with negative values</h4>
                                <div dir="ltr">
                                    <div id="negative-value-column" class="apex-charts" data-colors="#ce7e7e" style="min-height: 395px;">
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
                                <h4 class="header-title">Distributed Column Chart</h4>
                                <div dir="ltr">
                                    <div id="distributed-column" class="apex-charts" data-colors="#ce7e7e,#6c757d,#6ac75a,#fa5c7c,#ffbc00,#39afd1,#e3eaef,#313a46" style="min-height: 395px;">
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
                                <h4 class="header-title">Range Column Chart</h4>
                                <div dir="ltr">
                                    <div id="range-column" class="apex-charts" data-colors="#6ac75a,#39afd1" style="min-height: 395px;">
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
                    <div class="col-12">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <h4 class="header-title">Dynamic Loaded Chart</h4>
                                <div class="flex-shrink-0">
                                    <select id="model" class="form-select form-select-sm">
                                        <option value="iphone5">iPhone 5</option>
                                        <option value="iphone6">iPhone 6</option>
                                        <option value="iphone7">iPhone 7</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <h4 class="header-title"></h4>
                                <div dir="ltr">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="chart-year" data-colors="#ce7e7e,#6c757d,#6ac75a,#fa5c7c,#ffbc00,#39afd1" style="min-height: 415px;">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="chart-quarter" data-colors="#ce7e7e,#6c757d,#6ac75a,#fa5c7c,#ffbc00,#39afd1" style="min-height: 415px;">
                                                </div>
                                        </div>
                                    </div> <!-- end row-->
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

<!-- Apex Area Chart demo js -->
<script src="{{ asset('assets') }}/js/ohlc.js"></script>
<script src="{{ asset('assets') }}/js/dayjs.min.js"></script>
<script src="{{ asset('assets') }}/js/quarterOfYear.min.js"></script>
<script src="{{ asset('assets') }}/js/chart-apex-column.js"></script>
<svg id="SvgjsSvg1141" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1142"></defs><polyline id="SvgjsPolyline1143" points="0,0"></polyline><path id="SvgjsPath1144" d="M0 0 "></path>
</svg>

@endpush
