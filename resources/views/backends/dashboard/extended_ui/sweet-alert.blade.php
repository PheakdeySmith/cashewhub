@extends('backends.layouts.app')


@push('style')

<!-- Sweet Alert css-->
<link href="{{ asset('assets') }}/css/sweetalert2.min.css" rel="stylesheet" type="text/css">

@endpush


@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Sweet Alert 2</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>

                <li class="breadcrumb-item active">Sweet Alert 2</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">A Basic Message</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Here's a basic example of SweetAlert.</p>
                    <button type="button" class="btn btn-primary" id="sweetalert-basic">Click me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Title</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">A Title with a Text Under.</p>
                    <button type="button" class="btn btn-primary" id="sweetalert-title">Click Me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">HTML</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Here's an example of SweetAlert with HTML content.</p>
                    <button type="button" class="btn btn-primary" id="custom-html-alert">Toggle HTML SweetAlert</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">All States</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Here are examples for each of SweetAlert's states.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" id="sweetalert-info" class="btn btn-info">Toggle Info</button>
                        <button type="button" id="sweetalert-warning" class="btn btn-warning">Toggle Warning</button>
                        <button type="button" id="sweetalert-error" class="btn btn-danger">Toggle Error</button>
                        <button type="button" id="sweetalert-success" class="btn btn-success">Toggle Success</button>
                        <button type="button" id="sweetalert-question" class="btn btn-primary">Toggle Question</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Long Content</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">A modal window with a long content inside.</p>

                    <button type="button" id="sweetalert-longcontent" class="btn btn-secondary">Click Me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Confirm Button</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">A warning message, with a function attached to the "Confirm"-button...</p>

                    <button type="button" id="sweetalert-confirm-button" class="btn btn-secondary">Click Me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Cancel Button</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">By passing a parameter, you can execute something else for "Cancel".</p>

                    <button type="button" id="sweetalert-params" class="btn btn-secondary">Click Me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Image Header (Logo)</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">A message with custom Image Header.</p>

                    <button type="button" id="sweetalert-image" class="btn btn-secondary">Click Me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Auto Close</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">A message with auto close timer.</p>

                    <button type="button" id="sweetalert-close" class="btn btn-secondary">Click Me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Position</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">A custom positioned dialog.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-primary" id="position-top-start">Top Start</button>
                        <button class="btn btn-primary" id="position-top-end">Top End</button>
                        <button class="btn btn-primary" id="position-bottom-start">Bottom Starts</button>
                        <button class="btn btn-primary" id="position-bottom-end">Bottom End</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Custom Padding, Background</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">A message with custom width, padding and background.</p>
                    <button type="button" id="custom-padding-width-alert" class="btn btn-secondary">Click Me</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Ajax Request</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Ajax request example.</p>
                    <button type="button" id="ajax-alert" class="btn btn-secondary">Click Me</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection


@push('script')
<!-- Sweet Alerts js -->
<script src="{{ asset('assets') }}/js/sweetalert2.min.js"></script>

<!-- Sweet alert demo js-->
<script src="{{ asset('assets') }}/js/extended-sweetalerts.js"></script>
@endpush
