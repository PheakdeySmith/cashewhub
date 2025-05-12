@extends('backends.layouts.app')


@push('style')
    <link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">
@endpush



@section('content')
<div class="page-container">


                        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 text-uppercase fw-bold mb-0">Boxplot Charts</h4>
                            </div>

                            <div class="text-end">
                                <ol class="breadcrumb m-0 py-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                                    <li class="breadcrumb-item active">Boxplot Charts</li>
                                </ol>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Basic Boxplot</h4>
                                        <div dir="ltr">
                                            <div id="basic-boxplot" class="apex-charts" data-colors="#ce7e7e,#6ac75a" style="min-height: 365px;"></div>
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
                                        <h4 class="header-title mb-4">Scatter Boxplot </h4>
                                        <div dir="ltr">
                                            <div id="scatter-boxplot" class="apex-charts" data-colors="#fa5c7c,#6c757d" style="min-height: 365px;"></div>
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
                                        <h4 class="header-title mb-4">Horizontal BoxPlot</h4>
                                        <div dir="ltr">
                                            <div id="horizontal-boxplot" class="apex-charts" data-colors="#ce7e7e,#6ac75a,#e3eaef" style="min-height: 365px;"></div>
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

        <!-- Apex Chart Boxplot Demo js -->
        <script src="{{ asset('assets') }}/js/chart-apex-boxplot.js"></script><svg id="SvgjsSvg1112" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1113"></defs><polyline id="SvgjsPolyline1114" points="0,0"></polyline><path id="SvgjsPath1115" d="M343.90420957292827 250.49126907587046C343.90420957292827 250.49126907587046 343.90420957292827 270.5305706019401 343.90420957292827 270.5305706019401C343.90420957292827 270.5305706019401 381.28510191781186 270.5305706019401 381.28510191781186 270.5305706019401C381.28510191781186 270.5305706019401 381.28510191781186 260.5109198389053 381.28510191781186 260.5109198389053C381.28510191781186 260.5109198389053 508.3801358904158 260.5109198389053 508.3801358904158 260.5109198389053C508.3801358904158 260.5109198389053 508.3801358904158 265.52074522042267 508.3801358904158 265.52074522042267C508.3801358904158 265.52074522042267 508.3801358904158 255.50109445738786 508.3801358904158 255.50109445738786C508.3801358904158 255.50109445738786 508.3801358904158 260.5109198389053 508.3801358904158 260.5109198389053C508.3801358904158 260.5109198389053 381.28510191781186 260.5109198389053 381.28510191781186 260.5109198389053C381.28510191781186 260.5109198389053 381.28510191781186 250.49126907587046 381.28510191781186 250.49126907587046C381.28510191781186 250.49126907587046 343.90420957292827 250.49126907587046 343.90420957292827 250.49126907587046C343.90420957292827 250.49126907587046 343.90420957292827 250.49126907587046 343.90420957292827 250.49126907587046 "></path></svg>


@endpush
