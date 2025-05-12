@extends('backends.layouts.app')


@push('style')

<link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">

@endpush


@section('content')
<div class="page-container">


                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">Heatmap Charts</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                            <li class="breadcrumb-item active">Heatmap Charts</li>
                        </ol>
                    </div>
                </div>




                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Basic Heatmap - Single Series</h4>
                                <div dir="ltr">
                                    <div id="basic-heatmap" class="apex-charts" data-colors="#ce7e7e" style="min-height: 395px;"></div>
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
                                <h4 class="header-title">Heatmap - Multiple Series</h4>
                                <div dir="ltr">
                                    <div id="multiple-series-heatmap" class="apex-charts" data-colors="#F3B415,#F27036,#663F59,#6A6E94,#4E88B4,#00A7C6,#18D8D8,#A9D794,#46AF78" style="min-height: 395px;"></div>
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
                                <h4 class="header-title mb-3">Heatmap - Color Range</h4>
                                <div dir="ltr">
                                    <div id="color-range-heatmap" class="apex-charts" data-colors="#fa5c7c,#ffbc00,#39afd1,#6ac75a" style="min-height: 395px;"></div>
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
                                <h4 class="header-title mb-3">Heatmap - Range without Shades</h4>
                                <div dir="ltr">
                                    <div id="rounded-heatmap" class="apex-charts" data-colors="#6ac75a,#ffbc00" style="min-height: 395px;">
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

<!-- Apex Area Chart demo js -->
<script src="{{ asset('assets') }}/js/chart-apex-heatmap.js"></script>
<svg id="SvgjsSvg1141" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1142"></defs><polyline id="SvgjsPolyline1143" points="0,0"></polyline><path id="SvgjsPath1144" d="M0 0 "></path>
</svg>

@endpush
