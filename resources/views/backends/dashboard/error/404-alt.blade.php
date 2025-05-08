@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">404 Error</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>

                <li class="breadcrumb-item active">404 Error</li>
            </ol>
        </div>
    </div>




    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="text-center">
                <img src="{{ asset('assets') }}/images/error-404.png" height="230" alt="File not found Image">

                <h4 class="text-uppercase text-danger mt-3">Page Not Found</h4>
                <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry... it
                    happens to the best of us. Here's a
                    little tip that might help you get back on track.</p>

                <a class="btn btn-info mt-3" href="https://coderthemes.com/boron/layouts/index.html"><i class="ti ti-home me-1"></i> Return Home</a>
            </div> <!-- end /.text-center-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection



@push('script')

@endpush
