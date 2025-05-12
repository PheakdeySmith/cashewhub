@extends('backends.layouts.app')


@push('style')
    <link href="{{ asset('assets') }}/css/chart.css" rel="stylesheet" type="text/css">
@endpush



@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Sparklines Charts</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>

                    <li class="breadcrumb-item active">Sparklines Charts</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row" dir="ltr">
                            <div class="col-md-4">
                                <div id="spark1" class="apex-charts" data-colors="#ce7e7e" style="min-height: 160px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="spark2" class="apex-charts apexcharts-tooltip-active" data-colors="#ffbc00"
                                    style="min-height: 160px;"></div>
                            </div>
                            <div class="col-md-4">
                                <div id="spark3" class="apex-charts" data-colors="#6ac75a" style="min-height: 160px;">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div><!-- end card body-->

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-3">Total Value</th>
                                            <th>Percentage of Portfolio</th>
                                            <th>Last 10 days</th>
                                            <th>Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-3">$32,554</td>
                                            <td>15%</td>
                                            <td>
                                                <div id="chart1" data-colors="#ce7e7e" style="min-height: 60px;"></div>
                                            </td>
                                            <td>
                                                <div id="chart5" data-colors="#ce7e7e" style="min-height: 60px;"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">$23,533</td>
                                            <td>7%</td>
                                            <td>
                                                <div id="chart2" data-colors="#6ac75a" style="min-height: 60px;"></div>
                                            </td>
                                            <td>
                                                <div id="chart6" data-colors="#6ac75a" style="min-height: 60px;"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">$54,276</td>
                                            <td>9%</td>
                                            <td>
                                                <div id="chart3" data-colors="#ffbc00" style="min-height: 60px;"></div>
                                            </td>
                                            <td>
                                                <div id="chart7" data-colors="#ffbc00" style="min-height: 60px;"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">$11,533</td>
                                            <td>2%</td>
                                            <td>
                                                <div id="chart4" data-colors="#fa5c7c" style="min-height: 60px;"></div>
                                            </td>
                                            <td>
                                                <div id="chart8" data-colors="#fa5c7c" style="min-height: 60px;"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive -->
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div><!-- end card -->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->
@endsection


@push('script')
    <!-- Apex Chart js -->
    <script src="{{ asset('assets') }}/js/apexcharts.min.js"></script>

    <!-- Apex Chart Sparkline Demo js -->
    <script src="{{ asset('assets') }}/js/chart-apex-sparklines.js"></script>



    <svg id="SvgjsSvg1641" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1642"></defs>
        <polyline id="SvgjsPolyline1643" points="0,0"></polyline>
        <path id="SvgjsPath1644" d="M0 0 "></path>
    </svg>
@endpush
