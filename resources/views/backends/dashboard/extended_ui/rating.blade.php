@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

<link href="{{ asset('assets') }}/css/rating.css" rel="stylesheet" type="text/css" id="app-style">

@endpush


@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Ratings</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>

                <li class="breadcrumb-item active">Ratings</li>
            </ol>
        </div>
    </div>




    <div class="row row-cols-lg-2">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Basic 5 star rater</h4>
                </div>
                <div class="card-body">
                    <div>
                        <div id="rater" dir="ltr" class="star-rating" style="width: 160px; height: 32px; background-size: 32px;" title="5/5"><div class="star-value" style="background-size: 32px; width: 0%;"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">5 star rater with step</h4>
                </div>
                <div class="card-body">
                    <div>
                        <div id="rater-step" dir="ltr" class="star-rating" style="width: 160px; height: 32px; background-size: 32px;"><div class="star-value" style="background-size: 32px; width: 0px;"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Custom Messages Example</h4>
                </div>
                <div class="card-body">
                    <div>
                        <div id="rater2" dir="ltr" class="star-rating" data-rating="4" style="width: 80px; height: 16px; background-size: 16px;"><div class="star-value" style="background-size: 16px; width: 80%;"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Unlimited Number</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">You can have unlimited number of stars. Example with 16 stars. readOnly option is set to true.</p>
                    <div>
                        <div id="rater3" dir="ltr" class="star-rating disabled" data-rating="4.4" title="4.4/16" style="width: 256px; height: 16px; background-size: 16px;"><div class="star-value" style="background-size: 16px; width: 27.5%;"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Random Number</h4>
                </div>
                <div class="card-body">
                    <div>
                        <div id="rater4" dir="ltr" class="star-rating" style="width: 80px; height: 16px; background-size: 16px;"><div class="star-value" style="background-size: 16px; width: 0px;"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">On Hover Event Example</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="rater5" class="align-middle star-rating" style="width: 80px; height: 16px; background-size: 16px;"><div class="star-value" style="background-size: 16px; width: 0px;"></div></div>
                        <span class="live-rating badge bg-info align-middle ms-2"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Clear/Reset Rater Example</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="rater6" class="align-middle star-rating" style="width: 160px; height: 32px; background-size: 32px;"><div class="star-value" style="background-size: 32px; width: 0px;"></div></div>
                        <span class="clear-rating"></span>
                        <button id="rater6-button" class="btn btn-light btn-sm ms-2">Reset</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Right to left support</h4>
                </div>
                <div class="card-body">
                    <div dir="rtl">
                        <span id="rater7" class="star-rating" style="width: 96px; height: 16px; background-size: 16px;"><div class="star-value rtl" style="background-size: 16px; width: 0px;"></div></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container -->
@endsection


@push('script')
<!-- rater-js plugin -->
<script src="{{ asset('assets') }}/js/index.js"></script>

<script src="{{ asset('assets') }}/js/extended-rating.js"></script>
@endpush
