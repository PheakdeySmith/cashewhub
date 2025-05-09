@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Ratio Video</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Ratio Video</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Responsive Ratio video 21:9</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use class <code>.ratio-21x9</code>
                        <!-- 21:9 aspect ratio -->
                    </p><div class="ratio ratio-21x9">
                        <iframe src=""></iframe>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Responsive Ratio video 1:1</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use class <code>.ratio-1x1</code></p>
                    <!-- 1:1 aspect ratio -->
                    <div class="ratio ratio-1x1">
                        <iframe src=""></iframe>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Responsive Ratio video 16:9</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use class <code>.ratio-16x9</code>
                        <!-- 16:9 aspect ratio -->
                    </p><div class="ratio ratio-16x9">
                        <iframe src=""></iframe>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Responsive Ratio video 4:3</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use class <code>.ratio-4x3</code>
                        <!-- 4:3 aspect ratio -->
                    </p><div class="ratio ratio-4x3">
                        <iframe src=""></iframe>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection



@push('script')

@endpush
