@extends('backends.layouts.app')

@push('style')
<link rel="stylesheet" href="{{ asset('assets') }}/css/apexcharts.css">
@endpush

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Sellers</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>

                    <li class="breadcrumb-item active">Sellers</li>
                </ol>
            </div>
        </div>





        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div
                                class="avatar-xl bg-light d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('assets') }}/images/s-1.svg" alt="" class="avatar-lg flex-shrink-0">
                            </div>
                            <div>
                                <h4 class="text-dark fw-semibold">Lacoste</h4>
                                <div class="flex-grow-1 d-inline-flex align-items-center fs-18">
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-half-filled text-warning"></span>
                                    <span class="ms-1 fs-14 fw-medium">5.3k</span>
                                </div>
                            </div>
                            <div class="ms-lg-auto">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                    class="btn btn-primary btn-sm">Message</a>
                            </div>
                        </div>
                        <p class="my-3 fw-medium">" Lacoste, a global icon in the world of fashion, was founded in 1933 by
                            the legendary French tennis player René Lacoste. " </p>
                        <p class="mb-1 fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:map-point-search-bold" class="fs-20 text-danger"><template
                                    shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2c-4.418 0-8 3.646-8 8.143c0 4.462 2.553 9.67 6.537 11.531a3.45 3.45 0 0 0 2.926 0C17.447 19.812 20 14.606 20 10.144C20 5.645 16.418 2 12 2m-3.75 8a3.75 3.75 0 1 1 6.88 2.065l.902.907a.75.75 0 0 1-1.064 1.057l-.897-.902A3.75 3.75 0 0 1 8.25 10m1.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <span class="fw-medium">966 Hiddenview Drive
                                Philadelphia,</span></p>
                        <p class="mb-3 text-dark fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:letter-bold" class="fs-20 text-danger"><template shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M3.172 5.172C2 6.343 2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12s0-5.657-1.172-6.828S17.771 4 14 4h-4C6.229 4 4.343 4 3.172 5.172M18.576 7.52a.75.75 0 0 1-.096 1.056l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693s-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1 .96-1.153l2.16 1.799c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455s.704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 0 1 1.056.097"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="link-primary fw-medium">lacostefashion@rhyta.com</a></p>
                        <div class="border border-end-0 border-start-0 border-dashed p-2 mx-n3">
                            <div class="row text-center g-2">
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">941</h4>
                                    <p class="text-muted mb-0">Item Stock</p>
                                </div>
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">+6.7k</h4>
                                    <p class="text-muted mb-0">Sells</p>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <h4 class="mb-1">Fashion</h4>
                                    <p class="text-muted mb-0">Brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between my-4 text-center">
                            <div class="col-lg-8 border-end">
                                <div id="sales1" data-colors="#ff6c2f" class="apex-charts pe-lg-3"
                                    style="min-height: 100px;">
                                    <div id="apexchartsvezynd3c"
                                        class="apexcharts-canvas apexchartsvezynd3c apexcharts-theme-"
                                        style="width: 269px; height: 100px;"><svg id="SvgjsSvg1001" width="269" height="100"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                            <foreignobject x="0" y="0" width="269" height="100">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 50px;"></div>
                                            </foreignobject>
                                            <rect id="SvgjsRect1005" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1009" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1010" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1044" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1002">
                                                    <clippath id="gridRectMaskvezynd3c">
                                                        <rect id="SvgjsRect1007" width="275" height="104" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <clippath id="forecastMaskvezynd3c"></clippath>
                                                    <clippath id="nonForecastMaskvezynd3c"></clippath>
                                                    <clippath id="gridRectMarkerMaskvezynd3c">
                                                        <rect id="SvgjsRect1008" width="273" height="102" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <lineargradient id="SvgjsLinearGradient1015" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1016" stop-opacity="0.4"
                                                            stop-color="rgba(70,93,255,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1017" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1018" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                    </lineargradient>
                                                </defs>
                                                <line id="SvgjsLine1006" x1="0" y1="0" x2="0" y2="98" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="98"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1021" class="apexcharts-grid">
                                                    <g id="SvgjsG1022" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1025" x1="0" y1="0" x2="269" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1026" x1="0" y1="98" x2="269" y2="98"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1023" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1028" x1="0" y1="98" x2="269" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1027" x1="0" y1="1" x2="0" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1024" class="apexcharts-grid-borders" style="display: none;">
                                                </g>
                                                <g id="SvgjsG1011" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1012" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1019"
                                                            d="M0 70.77777777777777C9.415 70.77777777777777 17.485 26.13333333333334 26.9 26.13333333333334C36.315 26.13333333333334 44.385 53.355555555555554 53.8 53.355555555555554C63.214999999999996 53.355555555555554 71.285 1.0888888888888886 80.7 1.0888888888888886C90.115 1.0888888888888886 98.185 29.400000000000006 107.6 29.400000000000006C117.015 29.400000000000006 125.085 70.77777777777777 134.5 70.77777777777777C143.915 70.77777777777777 151.985 50.08888888888889 161.4 50.08888888888889C170.815 50.08888888888889 178.885 84.93333333333334 188.29999999999998 84.93333333333334C197.71499999999997 84.93333333333334 205.785 58.800000000000004 215.2 58.800000000000004C224.61499999999998 58.800000000000004 232.685 88.2 242.1 88.2C251.515 88.2 259.585 39.2 269 39.2C269 39.2 269 39.2 269 98L0 98C0 98 0 70.77777777777777 0 70.77777777777777 "
                                                            fill="url(#SvgjsLinearGradient1015)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskvezynd3c)"
                                                            pathTo="M 0 70.77777777777777C 9.415 70.77777777777777 17.485 26.13333333333334 26.9 26.13333333333334C 36.315 26.13333333333334 44.385 53.355555555555554 53.8 53.355555555555554C 63.214999999999996 53.355555555555554 71.285 1.0888888888888886 80.7 1.0888888888888886C 90.115 1.0888888888888886 98.185 29.400000000000006 107.6 29.400000000000006C 117.015 29.400000000000006 125.085 70.77777777777777 134.5 70.77777777777777C 143.915 70.77777777777777 151.985 50.08888888888889 161.4 50.08888888888889C 170.815 50.08888888888889 178.885 84.93333333333334 188.29999999999998 84.93333333333334C 197.71499999999997 84.93333333333334 205.785 58.800000000000004 215.2 58.800000000000004C 224.61499999999998 58.800000000000004 232.685 88.2 242.1 88.2C 251.515 88.2 259.585 39.2 269 39.2C 269 39.2 269 39.2 269 98 L 0 98z"
                                                            pathFrom="M 0 98 L 0 98 L 26.9 98 L 53.8 98 L 80.7 98 L 107.6 98 L 134.5 98 L 161.4 98 L 188.29999999999998 98 L 215.2 98 L 242.1 98 L 269 98z">
                                                        </path>
                                                        <path id="SvgjsPath1020"
                                                            d="M0 70.77777777777777C9.415 70.77777777777777 17.485 26.13333333333334 26.9 26.13333333333334C36.315 26.13333333333334 44.385 53.355555555555554 53.8 53.355555555555554C63.214999999999996 53.355555555555554 71.285 1.0888888888888886 80.7 1.0888888888888886C90.115 1.0888888888888886 98.185 29.400000000000006 107.6 29.400000000000006C117.015 29.400000000000006 125.085 70.77777777777777 134.5 70.77777777777777C143.915 70.77777777777777 151.985 50.08888888888889 161.4 50.08888888888889C170.815 50.08888888888889 178.885 84.93333333333334 188.29999999999998 84.93333333333334C197.71499999999997 84.93333333333334 205.785 58.800000000000004 215.2 58.800000000000004C224.61499999999998 58.800000000000004 232.685 88.2 242.1 88.2C251.515 88.2 259.585 39.2 269 39.2C269 39.2 269 39.2 269 39.2 "
                                                            fill="none" fill-opacity="1" stroke="#465dff" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskvezynd3c)"
                                                            pathTo="M 0 70.77777777777777C 9.415 70.77777777777777 17.485 26.13333333333334 26.9 26.13333333333334C 36.315 26.13333333333334 44.385 53.355555555555554 53.8 53.355555555555554C 63.214999999999996 53.355555555555554 71.285 1.0888888888888886 80.7 1.0888888888888886C 90.115 1.0888888888888886 98.185 29.400000000000006 107.6 29.400000000000006C 117.015 29.400000000000006 125.085 70.77777777777777 134.5 70.77777777777777C 143.915 70.77777777777777 151.985 50.08888888888889 161.4 50.08888888888889C 170.815 50.08888888888889 178.885 84.93333333333334 188.29999999999998 84.93333333333334C 197.71499999999997 84.93333333333334 205.785 58.800000000000004 215.2 58.800000000000004C 224.61499999999998 58.800000000000004 232.685 88.2 242.1 88.2C 251.515 88.2 259.585 39.2 269 39.2"
                                                            pathFrom="M 0 98 L 0 98 L 26.9 98 L 53.8 98 L 80.7 98 L 107.6 98 L 134.5 98 L 161.4 98 L 188.29999999999998 98 L 215.2 98 L 242.1 98 L 269 98"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1013"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1048" d="M 0, 0
    m -0, 0
    a 0,0 0 1,0 0,0
    a 0,0 0 1,0 -0,0" fill="#465dff" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-marker w425wp0ea no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1014" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1029" x1="0" y1="0" x2="269" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1030" x1="0" y1="0" x2="269" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1032" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1045"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1046"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1047"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(70, 93, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-1 fw-semibold">$62,100</h3>
                                <p class="text-muted mb-0 fs-14">Revenue</p>
                            </div>
                        </div>
                        <div class="gap-1 hstack">
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-primary w-100">Show Profile</a>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-light w-100">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div
                                class="avatar-xl bg-light d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('assets') }}/images/s-4.svg" alt="" class="avatar-lg flex-shrink-0">
                            </div>
                            <div>
                                <h4 class="text-dark fw-semibold">Asics Foot Ware</h4>
                                <div class="flex-grow-1 d-inline-flex align-items-center fs-18">
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-half-filled text-warning"></span>
                                    <span class="ms-1 fs-14 fw-medium">2.5k</span>
                                </div>
                            </div>
                            <div class="ms-lg-auto">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                    class="btn btn-primary btn-sm">Message</a>
                            </div>
                        </div>
                        <p class="my-3 fw-medium">" Asics footwear is renowned for its advanced technology and superior
                            craftsmanship, making it a favorite among athletes and fitness worldwide. " </p>
                        <p class="mb-1 fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:map-point-search-bold" class="fs-20 text-danger"><template
                                    shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2c-4.418 0-8 3.646-8 8.143c0 4.462 2.553 9.67 6.537 11.531a3.45 3.45 0 0 0 2.926 0C17.447 19.812 20 14.606 20 10.144C20 5.645 16.418 2 12 2m-3.75 8a3.75 3.75 0 1 1 6.88 2.065l.902.907a.75.75 0 0 1-1.064 1.057l-.897-.902A3.75 3.75 0 0 1 8.25 10m1.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <span class="fw-medium">2267 Raver Croft Drive
                                Chattanooga,</span></p>
                        <p class="mb-3 text-dark fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:letter-bold" class="fs-20 text-danger"><template shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M3.172 5.172C2 6.343 2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12s0-5.657-1.172-6.828S17.771 4 14 4h-4C6.229 4 4.343 4 3.172 5.172M18.576 7.52a.75.75 0 0 1-.096 1.056l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693s-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1 .96-1.153l2.16 1.799c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455s.704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 0 1 1.056.097"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="link-primary fw-medium">asionwares@rhyta.com</a></p>
                        <div class="border border-end-0 border-start-0 border-dashed p-2 mx-n3">
                            <div class="row text-center g-2">
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">764</h4>
                                    <p class="text-muted mb-0">Item Stock</p>
                                </div>
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">+2.9k</h4>
                                    <p class="text-muted mb-0">Sells</p>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <h4 class="mb-1">Footware</h4>
                                    <p class="text-muted mb-0">Brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between my-4 text-center">
                            <div class="col-lg-8 border-end">
                                <div id="sales2" data-colors="#ff6c2f" class="apex-charts pe-lg-3"
                                    style="min-height: 100px;">
                                    <div id="apexchartspmutf4p9"
                                        class="apexcharts-canvas apexchartspmutf4p9 apexcharts-theme-"
                                        style="width: 269px; height: 100px;"><svg id="SvgjsSvg1049" width="269" height="100"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                            <foreignobject x="0" y="0" width="269" height="100">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 50px;"></div>
                                            </foreignobject>
                                            <rect id="SvgjsRect1053" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1057" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1058" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1092" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1051" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1050">
                                                    <clippath id="gridRectMaskpmutf4p9">
                                                        <rect id="SvgjsRect1055" width="275" height="104" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <clippath id="forecastMaskpmutf4p9"></clippath>
                                                    <clippath id="nonForecastMaskpmutf4p9"></clippath>
                                                    <clippath id="gridRectMarkerMaskpmutf4p9">
                                                        <rect id="SvgjsRect1056" width="273" height="102" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <lineargradient id="SvgjsLinearGradient1063" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1064" stop-opacity="0.4"
                                                            stop-color="rgba(70,93,255,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1065" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1066" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                    </lineargradient>
                                                </defs>
                                                <line id="SvgjsLine1054" x1="0" y1="0" x2="0" y2="98" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="98"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1069" class="apexcharts-grid">
                                                    <g id="SvgjsG1070" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1073" x1="0" y1="0" x2="269" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1074" x1="0" y1="98" x2="269" y2="98"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1071" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1076" x1="0" y1="98" x2="269" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1075" x1="0" y1="1" x2="0" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1072" class="apexcharts-grid-borders" style="display: none;">
                                                </g>
                                                <g id="SvgjsG1059" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1060" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1067"
                                                            d="M0 90.37777777777778C9.415 90.37777777777778 17.485 18.511111111111106 26.9 18.511111111111106C36.315 18.511111111111106 44.385 47.91111111111111 53.8 47.91111111111111C63.214999999999996 47.91111111111111 71.285 59.888888888888886 80.7 59.888888888888886C90.115 59.888888888888886 98.185 77.3111111111111 107.6 77.3111111111111C117.015 77.3111111111111 125.085 8.711111111111109 134.5 8.711111111111109C143.915 8.711111111111109 151.985 67.5111111111111 161.4 67.5111111111111C170.815 67.5111111111111 178.885 30.488888888888894 188.29999999999998 30.488888888888894C197.71499999999997 30.488888888888894 205.785 96.91111111111111 215.2 96.91111111111111C224.61499999999998 96.91111111111111 232.685 35.93333333333334 242.1 35.93333333333334C251.515 35.93333333333334 259.585 51.17777777777778 269 51.17777777777778C269 51.17777777777778 269 51.17777777777778 269 98L0 98C0 98 0 90.37777777777778 0 90.37777777777778 "
                                                            fill="url(#SvgjsLinearGradient1063)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskpmutf4p9)"
                                                            pathTo="M 0 90.37777777777778C 9.415 90.37777777777778 17.485 18.511111111111106 26.9 18.511111111111106C 36.315 18.511111111111106 44.385 47.91111111111111 53.8 47.91111111111111C 63.214999999999996 47.91111111111111 71.285 59.888888888888886 80.7 59.888888888888886C 90.115 59.888888888888886 98.185 77.3111111111111 107.6 77.3111111111111C 117.015 77.3111111111111 125.085 8.711111111111109 134.5 8.711111111111109C 143.915 8.711111111111109 151.985 67.5111111111111 161.4 67.5111111111111C 170.815 67.5111111111111 178.885 30.488888888888894 188.29999999999998 30.488888888888894C 197.71499999999997 30.488888888888894 205.785 96.91111111111111 215.2 96.91111111111111C 224.61499999999998 96.91111111111111 232.685 35.93333333333334 242.1 35.93333333333334C 251.515 35.93333333333334 259.585 51.17777777777778 269 51.17777777777778C 269 51.17777777777778 269 51.17777777777778 269 98 L 0 98z"
                                                            pathFrom="M 0 108.88888888888889 L 0 108.88888888888889 L 26.9 108.88888888888889 L 53.8 108.88888888888889 L 80.7 108.88888888888889 L 107.6 108.88888888888889 L 134.5 108.88888888888889 L 161.4 108.88888888888889 L 188.29999999999998 108.88888888888889 L 215.2 108.88888888888889 L 242.1 108.88888888888889 L 269 108.88888888888889z">
                                                        </path>
                                                        <path id="SvgjsPath1068"
                                                            d="M0 90.37777777777778C9.415 90.37777777777778 17.485 18.511111111111106 26.9 18.511111111111106C36.315 18.511111111111106 44.385 47.91111111111111 53.8 47.91111111111111C63.214999999999996 47.91111111111111 71.285 59.888888888888886 80.7 59.888888888888886C90.115 59.888888888888886 98.185 77.3111111111111 107.6 77.3111111111111C117.015 77.3111111111111 125.085 8.711111111111109 134.5 8.711111111111109C143.915 8.711111111111109 151.985 67.5111111111111 161.4 67.5111111111111C170.815 67.5111111111111 178.885 30.488888888888894 188.29999999999998 30.488888888888894C197.71499999999997 30.488888888888894 205.785 96.91111111111111 215.2 96.91111111111111C224.61499999999998 96.91111111111111 232.685 35.93333333333334 242.1 35.93333333333334C251.515 35.93333333333334 259.585 51.17777777777778 269 51.17777777777778C269 51.17777777777778 269 51.17777777777778 269 51.17777777777778 "
                                                            fill="none" fill-opacity="1" stroke="#465dff" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskpmutf4p9)"
                                                            pathTo="M 0 90.37777777777778C 9.415 90.37777777777778 17.485 18.511111111111106 26.9 18.511111111111106C 36.315 18.511111111111106 44.385 47.91111111111111 53.8 47.91111111111111C 63.214999999999996 47.91111111111111 71.285 59.888888888888886 80.7 59.888888888888886C 90.115 59.888888888888886 98.185 77.3111111111111 107.6 77.3111111111111C 117.015 77.3111111111111 125.085 8.711111111111109 134.5 8.711111111111109C 143.915 8.711111111111109 151.985 67.5111111111111 161.4 67.5111111111111C 170.815 67.5111111111111 178.885 30.488888888888894 188.29999999999998 30.488888888888894C 197.71499999999997 30.488888888888894 205.785 96.91111111111111 215.2 96.91111111111111C 224.61499999999998 96.91111111111111 232.685 35.93333333333334 242.1 35.93333333333334C 251.515 35.93333333333334 259.585 51.17777777777778 269 51.17777777777778"
                                                            pathFrom="M 0 108.88888888888889 L 0 108.88888888888889 L 26.9 108.88888888888889 L 53.8 108.88888888888889 L 80.7 108.88888888888889 L 107.6 108.88888888888889 L 134.5 108.88888888888889 L 161.4 108.88888888888889 L 188.29999999999998 108.88888888888889 L 215.2 108.88888888888889 L 242.1 108.88888888888889 L 269 108.88888888888889"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1061"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1096" d="M 0, 0
    m -0, 0
    a 0,0 0 1,0 0,0
    a 0,0 0 1,0 -0,0" fill="#465dff" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-marker w62pl2v4w no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1062" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1077" x1="0" y1="0" x2="269" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1078" x1="0" y1="0" x2="269" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1079" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1080" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1093"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1094"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1095"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(70, 93, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-1 fw-semibold">$40,400</h3>
                                <p class="text-muted mb-0 fs-14">Revenue</p>
                            </div>
                        </div>
                        <div class="gap-1 hstack">
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-primary w-100">Show Profile</a>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-light w-100">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div
                                class="avatar-xl bg-light d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('assets') }}/images/s-6.svg" alt="" class="avatar-lg flex-shrink-0">
                            </div>
                            <div>
                                <h4 class="text-dark fw-semibold">American Tourister</h4>
                                <div class="flex-grow-1 d-inline-flex align-items-center fs-18">
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-half-filled text-warning"></span>
                                    <span class="ms-1 fs-14 fw-medium">4.9k</span>
                                </div>
                            </div>
                            <div class="ms-lg-auto">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                    class="btn btn-primary btn-sm">Message</a>
                            </div>
                        </div>
                        <p class="my-3 fw-medium">" American Tourister, a trusted name in the luggage industry, has been
                            synonymous with quality, durability, and style since its founding in 1933. " </p>
                        <p class="mb-1 fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:map-point-search-bold" class="fs-20 text-danger"><template
                                    shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2c-4.418 0-8 3.646-8 8.143c0 4.462 2.553 9.67 6.537 11.531a3.45 3.45 0 0 0 2.926 0C17.447 19.812 20 14.606 20 10.144C20 5.645 16.418 2 12 2m-3.75 8a3.75 3.75 0 1 1 6.88 2.065l.902.907a.75.75 0 0 1-1.064 1.057l-.897-.902A3.75 3.75 0 0 1 8.25 10m1.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <span class="fw-medium">3383 Briarhill Lane Youngstown,</span>
                        </p>
                        <p class="mb-3 text-dark fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:letter-bold" class="fs-20 text-danger"><template shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M3.172 5.172C2 6.343 2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12s0-5.657-1.172-6.828S17.771 4 14 4h-4C6.229 4 4.343 4 3.172 5.172M18.576 7.52a.75.75 0 0 1-.096 1.056l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693s-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1 .96-1.153l2.16 1.799c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455s.704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 0 1 1.056.097"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="link-primary fw-medium">americanbag@rhyta.com</a></p>
                        <div class="border border-end-0 border-start-0 border-dashed p-2 mx-n3">
                            <div class="row text-center g-2">
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">1.6k</h4>
                                    <p class="text-muted mb-0">Item Stock</p>
                                </div>
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">+5.1k</h4>
                                    <p class="text-muted mb-0">Sells</p>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <h4 class="mb-1">Luggage </h4>
                                    <p class="text-muted mb-0">Brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between my-4 text-center">
                            <div class="col-lg-8 border-end">
                                <div id="sales3" data-colors="#ff6c2f" class="apex-charts pe-lg-3"
                                    style="min-height: 100px;">
                                    <div id="apexcharts4i4f9rlb"
                                        class="apexcharts-canvas apexcharts4i4f9rlb apexcharts-theme-"
                                        style="width: 269px; height: 100px;"><svg id="SvgjsSvg1097" width="269" height="100"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                            <foreignobject x="0" y="0" width="269" height="100">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 50px;"></div>
                                            </foreignobject>
                                            <rect id="SvgjsRect1101" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1105" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1106" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1140" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1099" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1098">
                                                    <clippath id="gridRectMask4i4f9rlb">
                                                        <rect id="SvgjsRect1103" width="275" height="104" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <clippath id="forecastMask4i4f9rlb"></clippath>
                                                    <clippath id="nonForecastMask4i4f9rlb"></clippath>
                                                    <clippath id="gridRectMarkerMask4i4f9rlb">
                                                        <rect id="SvgjsRect1104" width="273" height="102" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <lineargradient id="SvgjsLinearGradient1111" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1112" stop-opacity="0.4"
                                                            stop-color="rgba(70,93,255,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1113" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1114" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                    </lineargradient>
                                                </defs>
                                                <line id="SvgjsLine1102" x1="0" y1="0" x2="0" y2="98" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="98"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1117" class="apexcharts-grid">
                                                    <g id="SvgjsG1118" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1121" x1="0" y1="0" x2="269" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1122" x1="0" y1="98" x2="269" y2="98"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1119" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1124" x1="0" y1="98" x2="269" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1123" x1="0" y1="1" x2="0" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1120" class="apexcharts-grid-borders" style="display: none;">
                                                </g>
                                                <g id="SvgjsG1107" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1108" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1115"
                                                            d="M0 68.6C9.415 68.6 17.485 15.924999999999997 26.9 15.924999999999997C36.315 15.924999999999997 44.385 82.075 53.8 82.075C63.214999999999996 82.075 71.285 30.625 80.7 30.625C90.115 30.625 98.185 51.45 107.6 51.45C117.015 51.45 125.085 0 134.5 0C143.915 0 151.985 93.1 161.4 93.1C170.815 93.1 178.885 25.72500000000001 188.29999999999998 25.72500000000001C197.71499999999997 25.72500000000001 205.785 64.92500000000001 215.2 64.92500000000001C224.61499999999998 64.92500000000001 232.685 46.550000000000004 242.1 46.550000000000004C251.515 46.550000000000004 259.585 11.025000000000006 269 11.025000000000006C269 11.025000000000006 269 11.025000000000006 269 98L0 98C0 98 0 68.6 0 68.6 "
                                                            fill="url(#SvgjsLinearGradient1111)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask4i4f9rlb)"
                                                            pathTo="M 0 68.6C 9.415 68.6 17.485 15.924999999999997 26.9 15.924999999999997C 36.315 15.924999999999997 44.385 82.075 53.8 82.075C 63.214999999999996 82.075 71.285 30.625 80.7 30.625C 90.115 30.625 98.185 51.45 107.6 51.45C 117.015 51.45 125.085 0 134.5 0C 143.915 0 151.985 93.1 161.4 93.1C 170.815 93.1 178.885 25.72500000000001 188.29999999999998 25.72500000000001C 197.71499999999997 25.72500000000001 205.785 64.92500000000001 215.2 64.92500000000001C 224.61499999999998 64.92500000000001 232.685 46.550000000000004 242.1 46.550000000000004C 251.515 46.550000000000004 259.585 11.025000000000006 269 11.025000000000006C 269 11.025000000000006 269 11.025000000000006 269 98 L 0 98z"
                                                            pathFrom="M 0 110.25 L 0 110.25 L 26.9 110.25 L 53.8 110.25 L 80.7 110.25 L 107.6 110.25 L 134.5 110.25 L 161.4 110.25 L 188.29999999999998 110.25 L 215.2 110.25 L 242.1 110.25 L 269 110.25z">
                                                        </path>
                                                        <path id="SvgjsPath1116"
                                                            d="M0 68.6C9.415 68.6 17.485 15.924999999999997 26.9 15.924999999999997C36.315 15.924999999999997 44.385 82.075 53.8 82.075C63.214999999999996 82.075 71.285 30.625 80.7 30.625C90.115 30.625 98.185 51.45 107.6 51.45C117.015 51.45 125.085 0 134.5 0C143.915 0 151.985 93.1 161.4 93.1C170.815 93.1 178.885 25.72500000000001 188.29999999999998 25.72500000000001C197.71499999999997 25.72500000000001 205.785 64.92500000000001 215.2 64.92500000000001C224.61499999999998 64.92500000000001 232.685 46.550000000000004 242.1 46.550000000000004C251.515 46.550000000000004 259.585 11.025000000000006 269 11.025000000000006C269 11.025000000000006 269 11.025000000000006 269 11.025000000000006 "
                                                            fill="none" fill-opacity="1" stroke="#465dff" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask4i4f9rlb)"
                                                            pathTo="M 0 68.6C 9.415 68.6 17.485 15.924999999999997 26.9 15.924999999999997C 36.315 15.924999999999997 44.385 82.075 53.8 82.075C 63.214999999999996 82.075 71.285 30.625 80.7 30.625C 90.115 30.625 98.185 51.45 107.6 51.45C 117.015 51.45 125.085 0 134.5 0C 143.915 0 151.985 93.1 161.4 93.1C 170.815 93.1 178.885 25.72500000000001 188.29999999999998 25.72500000000001C 197.71499999999997 25.72500000000001 205.785 64.92500000000001 215.2 64.92500000000001C 224.61499999999998 64.92500000000001 232.685 46.550000000000004 242.1 46.550000000000004C 251.515 46.550000000000004 259.585 11.025000000000006 269 11.025000000000006"
                                                            pathFrom="M 0 110.25 L 0 110.25 L 26.9 110.25 L 53.8 110.25 L 80.7 110.25 L 107.6 110.25 L 134.5 110.25 L 161.4 110.25 L 188.29999999999998 110.25 L 215.2 110.25 L 242.1 110.25 L 269 110.25"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1109"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1144" d="M 0, 0
    m -0, 0
    a 0,0 0 1,0 0,0
    a 0,0 0 1,0 -0,0" fill="#465dff" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-marker wba3gdwp2 no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1110" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1125" x1="0" y1="0" x2="269" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1126" x1="0" y1="0" x2="269" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1127" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1128" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1141"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1142"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1143"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(70, 93, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-1 fw-semibold">$75,450</h3>
                                <p class="text-muted mb-0 fs-14">Revenue</p>
                            </div>
                        </div>
                        <div class="gap-1 hstack">
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-primary w-100">Show Profile</a>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-light w-100">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div
                                class="avatar-xl bg-light d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('assets') }}/images/s-7.svg" alt="" class="avatar-lg flex-shrink-0">
                            </div>
                            <div>
                                <h4 class="text-dark fw-semibold">Hitachi</h4>
                                <div class="flex-grow-1 d-inline-flex align-items-center fs-18">
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-half-filled text-warning"></span>
                                    <span class="ms-1 fs-14 fw-medium">8.0k</span>
                                </div>
                            </div>
                            <div class="ms-lg-auto">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                    class="btn btn-primary btn-sm">Message</a>
                            </div>
                        </div>
                        <p class="my-3 fw-medium">" Hitachi, Ltd., founded in 1910, is a global leader in technology and
                            innovation, renowned for its diverse range of products and services. " </p>
                        <p class="mb-1 fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:map-point-search-bold" class="fs-20 text-danger"><template
                                    shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2c-4.418 0-8 3.646-8 8.143c0 4.462 2.553 9.67 6.537 11.531a3.45 3.45 0 0 0 2.926 0C17.447 19.812 20 14.606 20 10.144C20 5.645 16.418 2 12 2m-3.75 8a3.75 3.75 0 1 1 6.88 2.065l.902.907a.75.75 0 0 1-1.064 1.057l-.897-.902A3.75 3.75 0 0 1 8.25 10m1.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <span class="fw-medium">2496 Gladwell Street Cleburne,</span>
                        </p>
                        <p class="mb-3 text-dark fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:letter-bold" class="fs-20 text-danger"><template shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M3.172 5.172C2 6.343 2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12s0-5.657-1.172-6.828S17.771 4 14 4h-4C6.229 4 4.343 4 3.172 5.172M18.576 7.52a.75.75 0 0 1-.096 1.056l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693s-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1 .96-1.153l2.16 1.799c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455s.704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 0 1 1.056.097"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="link-primary fw-medium">hitachielectronics@rhyta.com</a></p>

                        <div class="border border-end-0 border-start-0 border-dashed p-2 mx-n3">
                            <div class="row text-center g-2">
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">3.1k</h4>
                                    <p class="text-muted mb-0">Item Stock</p>
                                </div>
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">+15.9k</h4>
                                    <p class="text-muted mb-0">Sells</p>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <h4 class="mb-1">Electronics </h4>
                                    <p class="text-muted mb-0">Brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between my-4 text-center">
                            <div class="col-lg-8 border-end">
                                <div id="sales4" data-colors="#ff6c2f" class="apex-charts pe-lg-3"
                                    style="min-height: 100px;">
                                    <div id="apexchartsnoqvcobrl"
                                        class="apexcharts-canvas apexchartsnoqvcobrl apexcharts-theme-"
                                        style="width: 269px; height: 100px;"><svg id="SvgjsSvg1145" width="269" height="100"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                            <foreignobject x="0" y="0" width="269" height="100">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 50px;"></div>
                                            </foreignobject>
                                            <rect id="SvgjsRect1149" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1153" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1154" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1188" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1147" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1146">
                                                    <clippath id="gridRectMasknoqvcobrl">
                                                        <rect id="SvgjsRect1151" width="275" height="104" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <clippath id="forecastMasknoqvcobrl"></clippath>
                                                    <clippath id="nonForecastMasknoqvcobrl"></clippath>
                                                    <clippath id="gridRectMarkerMasknoqvcobrl">
                                                        <rect id="SvgjsRect1152" width="273" height="102" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <lineargradient id="SvgjsLinearGradient1159" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1160" stop-opacity="0.4"
                                                            stop-color="rgba(70,93,255,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1161" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1162" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                    </lineargradient>
                                                </defs>
                                                <line id="SvgjsLine1150" x1="0" y1="0" x2="0" y2="98" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="98"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1165" class="apexcharts-grid">
                                                    <g id="SvgjsG1166" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1169" x1="0" y1="0" x2="269" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1170" x1="0" y1="98" x2="269" y2="98"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1167" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1172" x1="0" y1="98" x2="269" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1171" x1="0" y1="1" x2="0" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1168" class="apexcharts-grid-borders" style="display: none;">
                                                </g>
                                                <g id="SvgjsG1155" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1156" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1163"
                                                            d="M0 59.888888888888886C9.415 59.888888888888886 17.485 95.82222222222222 26.9 95.82222222222222C36.315 95.82222222222222 44.385 23.95555555555555 53.8 23.95555555555555C63.214999999999996 23.95555555555555 71.285 75.13333333333333 80.7 75.13333333333333C90.115 75.13333333333333 98.185 47.91111111111111 107.6 47.91111111111111C117.015 47.91111111111111 125.085 11.977777777777774 134.5 11.977777777777774C143.915 11.977777777777774 151.985 84.93333333333334 161.4 84.93333333333334C170.815 84.93333333333334 178.885 35.93333333333334 188.29999999999998 35.93333333333334C197.71499999999997 35.93333333333334 205.785 64.24444444444444 215.2 64.24444444444444C224.61499999999998 64.24444444444444 232.685 51.17777777777778 242.1 51.17777777777778C251.515 51.17777777777778 259.585 4.355555555555554 269 4.355555555555554C269 4.355555555555554 269 4.355555555555554 269 98L0 98C0 98 0 59.888888888888886 0 59.888888888888886 "
                                                            fill="url(#SvgjsLinearGradient1159)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMasknoqvcobrl)"
                                                            pathTo="M 0 59.888888888888886C 9.415 59.888888888888886 17.485 95.82222222222222 26.9 95.82222222222222C 36.315 95.82222222222222 44.385 23.95555555555555 53.8 23.95555555555555C 63.214999999999996 23.95555555555555 71.285 75.13333333333333 80.7 75.13333333333333C 90.115 75.13333333333333 98.185 47.91111111111111 107.6 47.91111111111111C 117.015 47.91111111111111 125.085 11.977777777777774 134.5 11.977777777777774C 143.915 11.977777777777774 151.985 84.93333333333334 161.4 84.93333333333334C 170.815 84.93333333333334 178.885 35.93333333333334 188.29999999999998 35.93333333333334C 197.71499999999997 35.93333333333334 205.785 64.24444444444444 215.2 64.24444444444444C 224.61499999999998 64.24444444444444 232.685 51.17777777777778 242.1 51.17777777777778C 251.515 51.17777777777778 259.585 4.355555555555554 269 4.355555555555554C 269 4.355555555555554 269 4.355555555555554 269 98 L 0 98z"
                                                            pathFrom="M 0 108.88888888888889 L 0 108.88888888888889 L 26.9 108.88888888888889 L 53.8 108.88888888888889 L 80.7 108.88888888888889 L 107.6 108.88888888888889 L 134.5 108.88888888888889 L 161.4 108.88888888888889 L 188.29999999999998 108.88888888888889 L 215.2 108.88888888888889 L 242.1 108.88888888888889 L 269 108.88888888888889z">
                                                        </path>
                                                        <path id="SvgjsPath1164"
                                                            d="M0 59.888888888888886C9.415 59.888888888888886 17.485 95.82222222222222 26.9 95.82222222222222C36.315 95.82222222222222 44.385 23.95555555555555 53.8 23.95555555555555C63.214999999999996 23.95555555555555 71.285 75.13333333333333 80.7 75.13333333333333C90.115 75.13333333333333 98.185 47.91111111111111 107.6 47.91111111111111C117.015 47.91111111111111 125.085 11.977777777777774 134.5 11.977777777777774C143.915 11.977777777777774 151.985 84.93333333333334 161.4 84.93333333333334C170.815 84.93333333333334 178.885 35.93333333333334 188.29999999999998 35.93333333333334C197.71499999999997 35.93333333333334 205.785 64.24444444444444 215.2 64.24444444444444C224.61499999999998 64.24444444444444 232.685 51.17777777777778 242.1 51.17777777777778C251.515 51.17777777777778 259.585 4.355555555555554 269 4.355555555555554C269 4.355555555555554 269 4.355555555555554 269 4.355555555555554 "
                                                            fill="none" fill-opacity="1" stroke="#465dff" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMasknoqvcobrl)"
                                                            pathTo="M 0 59.888888888888886C 9.415 59.888888888888886 17.485 95.82222222222222 26.9 95.82222222222222C 36.315 95.82222222222222 44.385 23.95555555555555 53.8 23.95555555555555C 63.214999999999996 23.95555555555555 71.285 75.13333333333333 80.7 75.13333333333333C 90.115 75.13333333333333 98.185 47.91111111111111 107.6 47.91111111111111C 117.015 47.91111111111111 125.085 11.977777777777774 134.5 11.977777777777774C 143.915 11.977777777777774 151.985 84.93333333333334 161.4 84.93333333333334C 170.815 84.93333333333334 178.885 35.93333333333334 188.29999999999998 35.93333333333334C 197.71499999999997 35.93333333333334 205.785 64.24444444444444 215.2 64.24444444444444C 224.61499999999998 64.24444444444444 232.685 51.17777777777778 242.1 51.17777777777778C 251.515 51.17777777777778 259.585 4.355555555555554 269 4.355555555555554"
                                                            pathFrom="M 0 108.88888888888889 L 0 108.88888888888889 L 26.9 108.88888888888889 L 53.8 108.88888888888889 L 80.7 108.88888888888889 L 107.6 108.88888888888889 L 134.5 108.88888888888889 L 161.4 108.88888888888889 L 188.29999999999998 108.88888888888889 L 215.2 108.88888888888889 L 242.1 108.88888888888889 L 269 108.88888888888889"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1157"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1192" d="M 0, 0
    m -0, 0
    a 0,0 0 1,0 0,0
    a 0,0 0 1,0 -0,0" fill="#465dff" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-marker whq0jfnj4 no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1158" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1173" x1="0" y1="0" x2="269" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1174" x1="0" y1="0" x2="269" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1175" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1176" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1189"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1190"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1191"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(70, 93, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-1 fw-semibold">$98,900</h3>
                                <p class="text-muted mb-0 fs-14">Revenue</p>
                            </div>
                        </div>
                        <div class="gap-1 hstack">
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-primary w-100">Show Profile</a>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-light w-100">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div
                                class="avatar-xl bg-light d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('assets') }}/images/s-8.svg" alt="" class="flex-shrink-0" height="20" width="60">
                            </div>
                            <div>
                                <h4 class="text-dark fw-semibold">Pepperfry</h4>
                                <div class="flex-grow-1 d-inline-flex align-items-center fs-18">
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-half-filled text-warning"></span>
                                    <span class="ms-1 fs-14 fw-medium">6.9k</span>
                                </div>
                            </div>
                            <div class="ms-lg-auto">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                    class="btn btn-primary btn-sm">Message</a>
                            </div>
                        </div>
                        <p class="my-3 fw-medium">" Pepperfry, launched in 2012, has rapidly grown to become India's leading
                            online marketplace for furniture and home decor. " </p>
                        <p class="mb-1 fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:map-point-search-bold" class="fs-20 text-danger"><template
                                    shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2c-4.418 0-8 3.646-8 8.143c0 4.462 2.553 9.67 6.537 11.531a3.45 3.45 0 0 0 2.926 0C17.447 19.812 20 14.606 20 10.144C20 5.645 16.418 2 12 2m-3.75 8a3.75 3.75 0 1 1 6.88 2.065l.902.907a.75.75 0 0 1-1.064 1.057l-.897-.902A3.75 3.75 0 0 1 8.25 10m1.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <span class="fw-medium">3840 Sunset Drive Brinkley, </span></p>
                        <p class="mb-3 text-dark fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:letter-bold" class="fs-20 text-danger"><template shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M3.172 5.172C2 6.343 2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12s0-5.657-1.172-6.828S17.771 4 14 4h-4C6.229 4 4.343 4 3.172 5.172M18.576 7.52a.75.75 0 0 1-.096 1.056l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693s-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1 .96-1.153l2.16 1.799c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455s.704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 0 1 1.056.097"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="link-primary fw-medium">pepperfryfurniture@rhyta.com</a></p>

                        <div class="border border-end-0 border-start-0 border-dashed p-2 mx-n3">
                            <div class="row text-center g-2">
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">2.9k</h4>
                                    <p class="text-muted mb-0">Item Stock</p>
                                </div>
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">+7.5k</h4>
                                    <p class="text-muted mb-0">Sells</p>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <h4 class="mb-1">Furniture </h4>
                                    <p class="text-muted mb-0">Brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between my-4 text-center">
                            <div class="col-lg-8 border-end">
                                <div id="sales5" data-colors="#ff6c2f" class="apex-charts pe-lg-3"
                                    style="min-height: 100px;">
                                    <div id="apexchartscw0lkw7v"
                                        class="apexcharts-canvas apexchartscw0lkw7v apexcharts-theme-"
                                        style="width: 269px; height: 100px;"><svg id="SvgjsSvg1193" width="269" height="100"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                            <foreignobject x="0" y="0" width="269" height="100">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 50px;"></div>
                                            </foreignobject>
                                            <rect id="SvgjsRect1197" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1201" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1202" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1236" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1195" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1194">
                                                    <clippath id="gridRectMaskcw0lkw7v">
                                                        <rect id="SvgjsRect1199" width="275" height="104" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <clippath id="forecastMaskcw0lkw7v"></clippath>
                                                    <clippath id="nonForecastMaskcw0lkw7v"></clippath>
                                                    <clippath id="gridRectMarkerMaskcw0lkw7v">
                                                        <rect id="SvgjsRect1200" width="273" height="102" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <lineargradient id="SvgjsLinearGradient1207" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1208" stop-opacity="0.4"
                                                            stop-color="rgba(70,93,255,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1209" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1210" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                    </lineargradient>
                                                </defs>
                                                <line id="SvgjsLine1198" x1="0" y1="0" x2="0" y2="98" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="98"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1213" class="apexcharts-grid">
                                                    <g id="SvgjsG1214" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1217" x1="0" y1="0" x2="269" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1218" x1="0" y1="98" x2="269" y2="98"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1215" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1220" x1="0" y1="98" x2="269" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1219" x1="0" y1="1" x2="0" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1216" class="apexcharts-grid-borders" style="display: none;">
                                                </g>
                                                <g id="SvgjsG1203" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1204" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1211"
                                                            d="M0 30.488888888888894C9.415 30.488888888888894 17.485 70.77777777777777 26.9 70.77777777777777C36.315 70.77777777777777 44.385 14.155555555555551 53.8 14.155555555555551C63.214999999999996 14.155555555555551 71.285 83.84444444444443 80.7 83.84444444444443C90.115 83.84444444444443 98.185 47.91111111111111 107.6 47.91111111111111C117.015 47.91111111111111 125.085 6.533333333333331 134.5 6.533333333333331C143.915 6.533333333333331 151.985 96.91111111111111 161.4 96.91111111111111C170.815 96.91111111111111 178.885 34.84444444444445 188.29999999999998 34.84444444444445C197.71499999999997 34.84444444444445 205.785 55.53333333333333 215.2 55.53333333333333C224.61499999999998 55.53333333333333 232.685 27.222222222222214 242.1 27.222222222222214C251.515 27.222222222222214 259.585 75.13333333333333 269 75.13333333333333C269 75.13333333333333 269 75.13333333333333 269 98L0 98C0 98 0 30.488888888888894 0 30.488888888888894 "
                                                            fill="url(#SvgjsLinearGradient1207)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskcw0lkw7v)"
                                                            pathTo="M 0 30.488888888888894C 9.415 30.488888888888894 17.485 70.77777777777777 26.9 70.77777777777777C 36.315 70.77777777777777 44.385 14.155555555555551 53.8 14.155555555555551C 63.214999999999996 14.155555555555551 71.285 83.84444444444443 80.7 83.84444444444443C 90.115 83.84444444444443 98.185 47.91111111111111 107.6 47.91111111111111C 117.015 47.91111111111111 125.085 6.533333333333331 134.5 6.533333333333331C 143.915 6.533333333333331 151.985 96.91111111111111 161.4 96.91111111111111C 170.815 96.91111111111111 178.885 34.84444444444445 188.29999999999998 34.84444444444445C 197.71499999999997 34.84444444444445 205.785 55.53333333333333 215.2 55.53333333333333C 224.61499999999998 55.53333333333333 232.685 27.222222222222214 242.1 27.222222222222214C 251.515 27.222222222222214 259.585 75.13333333333333 269 75.13333333333333C 269 75.13333333333333 269 75.13333333333333 269 98 L 0 98z"
                                                            pathFrom="M 0 108.88888888888889 L 0 108.88888888888889 L 26.9 108.88888888888889 L 53.8 108.88888888888889 L 80.7 108.88888888888889 L 107.6 108.88888888888889 L 134.5 108.88888888888889 L 161.4 108.88888888888889 L 188.29999999999998 108.88888888888889 L 215.2 108.88888888888889 L 242.1 108.88888888888889 L 269 108.88888888888889z">
                                                        </path>
                                                        <path id="SvgjsPath1212"
                                                            d="M0 30.488888888888894C9.415 30.488888888888894 17.485 70.77777777777777 26.9 70.77777777777777C36.315 70.77777777777777 44.385 14.155555555555551 53.8 14.155555555555551C63.214999999999996 14.155555555555551 71.285 83.84444444444443 80.7 83.84444444444443C90.115 83.84444444444443 98.185 47.91111111111111 107.6 47.91111111111111C117.015 47.91111111111111 125.085 6.533333333333331 134.5 6.533333333333331C143.915 6.533333333333331 151.985 96.91111111111111 161.4 96.91111111111111C170.815 96.91111111111111 178.885 34.84444444444445 188.29999999999998 34.84444444444445C197.71499999999997 34.84444444444445 205.785 55.53333333333333 215.2 55.53333333333333C224.61499999999998 55.53333333333333 232.685 27.222222222222214 242.1 27.222222222222214C251.515 27.222222222222214 259.585 75.13333333333333 269 75.13333333333333C269 75.13333333333333 269 75.13333333333333 269 75.13333333333333 "
                                                            fill="none" fill-opacity="1" stroke="#465dff" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskcw0lkw7v)"
                                                            pathTo="M 0 30.488888888888894C 9.415 30.488888888888894 17.485 70.77777777777777 26.9 70.77777777777777C 36.315 70.77777777777777 44.385 14.155555555555551 53.8 14.155555555555551C 63.214999999999996 14.155555555555551 71.285 83.84444444444443 80.7 83.84444444444443C 90.115 83.84444444444443 98.185 47.91111111111111 107.6 47.91111111111111C 117.015 47.91111111111111 125.085 6.533333333333331 134.5 6.533333333333331C 143.915 6.533333333333331 151.985 96.91111111111111 161.4 96.91111111111111C 170.815 96.91111111111111 178.885 34.84444444444445 188.29999999999998 34.84444444444445C 197.71499999999997 34.84444444444445 205.785 55.53333333333333 215.2 55.53333333333333C 224.61499999999998 55.53333333333333 232.685 27.222222222222214 242.1 27.222222222222214C 251.515 27.222222222222214 259.585 75.13333333333333 269 75.13333333333333"
                                                            pathFrom="M 0 108.88888888888889 L 0 108.88888888888889 L 26.9 108.88888888888889 L 53.8 108.88888888888889 L 80.7 108.88888888888889 L 107.6 108.88888888888889 L 134.5 108.88888888888889 L 161.4 108.88888888888889 L 188.29999999999998 108.88888888888889 L 215.2 108.88888888888889 L 242.1 108.88888888888889 L 269 108.88888888888889"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1205"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1240" d="M 0, 0
    m -0, 0
    a 0,0 0 1,0 0,0
    a 0,0 0 1,0 -0,0" fill="#465dff" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-marker wmrao2h89 no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1206" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1221" x1="0" y1="0" x2="269" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1222" x1="0" y1="0" x2="269" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1223" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1224" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1237"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1238"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1239"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(70, 93, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-1 fw-semibold">$54,810</h3>
                                <p class="text-muted mb-0 fs-14">Revenue</p>
                            </div>
                        </div>
                        <div class="gap-1 hstack">
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-primary w-100">Show Profile</a>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-light w-100">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div
                                class="avatar-xl bg-light d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('assets') }}/images/s-2.svg" alt="" class="flex-shrink-0" height="30" width="70">
                            </div>
                            <div>
                                <h4 class="text-dark fw-semibold">Skulcandy</h4>
                                <div class="flex-grow-1 d-inline-flex align-items-center fs-18">
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-filled text-warning"></span>
                                    <span class="ti ti-star-half-filled text-warning"></span>
                                    <span class="ms-1 fs-14 fw-medium">7.5k</span>
                                </div>
                            </div>
                            <div class="ms-lg-auto">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                    class="btn btn-primary btn-sm">Message</a>
                            </div>
                        </div>
                        <p class="my-3 fw-medium">" Skullcandy, founded in 2003 by Rick Alden, is a leading audio brand
                            known for its innovative and stylish audio accessories. " </p>
                        <p class="mb-1 fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:map-point-search-bold" class="fs-20 text-danger"><template
                                    shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2c-4.418 0-8 3.646-8 8.143c0 4.462 2.553 9.67 6.537 11.531a3.45 3.45 0 0 0 2.926 0C17.447 19.812 20 14.606 20 10.144C20 5.645 16.418 2 12 2m-3.75 8a3.75 3.75 0 1 1 6.88 2.065l.902.907a.75.75 0 0 1-1.064 1.057l-.897-.902A3.75 3.75 0 0 1 8.25 10m1.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <span class="fw-medium">1024 Veltri Drive Takotna, </span></p>
                        <p class="mb-3 text-dark fw-medium  d-flex align-items-center gap-2"><iconify-icon
                                icon="solar:letter-bold" class="fs-20 text-danger"><template shadowrootmode="open">
                                    <style data-style="data-style">
                                        :host {
                                            display: inline-block;
                                            vertical-align: 0
                                        }

                                        span,
                                        svg {
                                            display: block
                                        }
                                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M3.172 5.172C2 6.343 2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12s0-5.657-1.172-6.828S17.771 4 14 4h-4C6.229 4 4.343 4 3.172 5.172M18.576 7.52a.75.75 0 0 1-.096 1.056l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693s-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1 .96-1.153l2.16 1.799c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455s.704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 0 1 1.056.097"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </template></iconify-icon> : <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="link-primary fw-medium">skulcandyaudio@rhyta.com</a></p>

                        <div class="border border-end-0 border-start-0 border-dashed p-2 mx-n3">
                            <div class="row text-center g-2">
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">4.8k</h4>
                                    <p class="text-muted mb-0">Item Stock</p>
                                </div>
                                <div class="col-lg-4 col-4 border-end">
                                    <h4 class="mb-1">+10.3k</h4>
                                    <p class="text-muted mb-0">Sells</p>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <h4 class="mb-1">Audio </h4>
                                    <p class="text-muted mb-0">Brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between my-4 text-center">
                            <div class="col-lg-8 border-end">
                                <div id="sales6" data-colors="#ff6c2f" class="apex-charts pe-lg-3"
                                    style="min-height: 100px;">
                                    <div id="apexchartssp358foll"
                                        class="apexcharts-canvas apexchartssp358foll apexcharts-theme-"
                                        style="width: 269px; height: 100px;"><svg id="SvgjsSvg1241" width="269" height="100"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                            <foreignobject x="0" y="0" width="269" height="100">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 50px;"></div>
                                            </foreignobject>
                                            <rect id="SvgjsRect1245" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1249" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1250" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1284" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1243" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1242">
                                                    <clippath id="gridRectMasksp358foll">
                                                        <rect id="SvgjsRect1247" width="275" height="104" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <clippath id="forecastMasksp358foll"></clippath>
                                                    <clippath id="nonForecastMasksp358foll"></clippath>
                                                    <clippath id="gridRectMarkerMasksp358foll">
                                                        <rect id="SvgjsRect1248" width="273" height="102" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clippath>
                                                    <lineargradient id="SvgjsLinearGradient1255" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1256" stop-opacity="0.4"
                                                            stop-color="rgba(70,93,255,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1257" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1258" stop-opacity="0"
                                                            stop-color="rgba(163,174,255,0)" offset="1"></stop>
                                                    </lineargradient>
                                                </defs>
                                                <line id="SvgjsLine1246" x1="0" y1="0" x2="0" y2="98" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="98"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1261" class="apexcharts-grid">
                                                    <g id="SvgjsG1262" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1265" x1="0" y1="0" x2="269" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1266" x1="0" y1="98" x2="269" y2="98"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1263" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1268" x1="0" y1="98" x2="269" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1267" x1="0" y1="1" x2="0" y2="98"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1264" class="apexcharts-grid-borders" style="display: none;">
                                                </g>
                                                <g id="SvgjsG1251" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1252" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1259"
                                                            d="M0 88.2C9.415 88.2 17.485 52.675000000000004 26.9 52.675000000000004C36.315 52.675000000000004 44.385 71.05000000000001 53.8 71.05000000000001C63.214999999999996 71.05000000000001 71.285 17.150000000000006 80.7 17.150000000000006C90.115 17.150000000000006 98.185 47.775 107.6 47.775C117.015 47.775 125.085 83.3 134.5 83.3C143.915 83.3 151.985 30.625 161.4 30.625C170.815 30.625 178.885 62.475 188.29999999999998 62.475C197.71499999999997 62.475 205.785 39.2 215.2 39.2C224.61499999999998 39.2 232.685 93.1 242.1 93.1C251.515 93.1 259.585 8.575000000000003 269 8.575000000000003C269 8.575000000000003 269 8.575000000000003 269 98L0 98C0 98 0 88.2 0 88.2 "
                                                            fill="url(#SvgjsLinearGradient1255)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMasksp358foll)"
                                                            pathTo="M 0 88.2C 9.415 88.2 17.485 52.675000000000004 26.9 52.675000000000004C 36.315 52.675000000000004 44.385 71.05000000000001 53.8 71.05000000000001C 63.214999999999996 71.05000000000001 71.285 17.150000000000006 80.7 17.150000000000006C 90.115 17.150000000000006 98.185 47.775 107.6 47.775C 117.015 47.775 125.085 83.3 134.5 83.3C 143.915 83.3 151.985 30.625 161.4 30.625C 170.815 30.625 178.885 62.475 188.29999999999998 62.475C 197.71499999999997 62.475 205.785 39.2 215.2 39.2C 224.61499999999998 39.2 232.685 93.1 242.1 93.1C 251.515 93.1 259.585 8.575000000000003 269 8.575000000000003C 269 8.575000000000003 269 8.575000000000003 269 98 L 0 98z"
                                                            pathFrom="M 0 110.25 L 0 110.25 L 26.9 110.25 L 53.8 110.25 L 80.7 110.25 L 107.6 110.25 L 134.5 110.25 L 161.4 110.25 L 188.29999999999998 110.25 L 215.2 110.25 L 242.1 110.25 L 269 110.25z">
                                                        </path>
                                                        <path id="SvgjsPath1260"
                                                            d="M0 88.2C9.415 88.2 17.485 52.675000000000004 26.9 52.675000000000004C36.315 52.675000000000004 44.385 71.05000000000001 53.8 71.05000000000001C63.214999999999996 71.05000000000001 71.285 17.150000000000006 80.7 17.150000000000006C90.115 17.150000000000006 98.185 47.775 107.6 47.775C117.015 47.775 125.085 83.3 134.5 83.3C143.915 83.3 151.985 30.625 161.4 30.625C170.815 30.625 178.885 62.475 188.29999999999998 62.475C197.71499999999997 62.475 205.785 39.2 215.2 39.2C224.61499999999998 39.2 232.685 93.1 242.1 93.1C251.515 93.1 259.585 8.575000000000003 269 8.575000000000003C269 8.575000000000003 269 8.575000000000003 269 8.575000000000003 "
                                                            fill="none" fill-opacity="1" stroke="#465dff" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMasksp358foll)"
                                                            pathTo="M 0 88.2C 9.415 88.2 17.485 52.675000000000004 26.9 52.675000000000004C 36.315 52.675000000000004 44.385 71.05000000000001 53.8 71.05000000000001C 63.214999999999996 71.05000000000001 71.285 17.150000000000006 80.7 17.150000000000006C 90.115 17.150000000000006 98.185 47.775 107.6 47.775C 117.015 47.775 125.085 83.3 134.5 83.3C 143.915 83.3 151.985 30.625 161.4 30.625C 170.815 30.625 178.885 62.475 188.29999999999998 62.475C 197.71499999999997 62.475 205.785 39.2 215.2 39.2C 224.61499999999998 39.2 232.685 93.1 242.1 93.1C 251.515 93.1 259.585 8.575000000000003 269 8.575000000000003"
                                                            pathFrom="M 0 110.25 L 0 110.25 L 26.9 110.25 L 53.8 110.25 L 80.7 110.25 L 107.6 110.25 L 134.5 110.25 L 161.4 110.25 L 188.29999999999998 110.25 L 215.2 110.25 L 242.1 110.25 L 269 110.25"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1253"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1288" d="M 0, 0
    m -0, 0
    a 0,0 0 1,0 0,0
    a 0,0 0 1,0 -0,0" fill="#465dff" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-marker wn1ofjrss no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1254" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1269" x1="0" y1="0" x2="269" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1270" x1="0" y1="0" x2="269" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1271" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1272" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1285"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1286"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1287"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(70, 93, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-1 fw-semibold">$63,219</h3>
                                <p class="text-muted mb-0 fs-14">Revenue</p>
                            </div>
                        </div>
                        <div class="gap-1 hstack">
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-primary w-100">Show Profile</a>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#!"
                                class="btn btn-light w-100">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-end">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#" class="page-link"><i
                            class="ti ti-chevrons-left"></i></a>
                </li>
                <li class="page-item">
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-sellers.html#" class="page-link"><i
                            class="ti ti-chevrons-right"></i></a>
                </li>
            </ul>
        </div>

    </div> <!-- container -->
@endsection



@push('script')
    <!-- apexcharts js -->
    <script src="{{ asset('assets') }}/js/apexcharts.min.js"></script>

    <!-- Sellers Demo App js -->
    <script src="{{ asset('assets') }}/js/sellers.js"></script>

    <svg id="SvgjsSvg1289" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1290"></defs>
        <polyline id="SvgjsPolyline1291" points="0,0"></polyline>
        <path id="SvgjsPath1292" d="M0 0 "></path>
    </svg>
@endpush
