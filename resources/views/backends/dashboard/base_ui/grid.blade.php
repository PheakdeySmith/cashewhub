@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Grid System</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Grid System</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-1">Grid Options</h4>
                    <p class="text-muted">
                        See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
                    </p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">
                                        Extra small<br>
                                        <small>&lt;576px</small>
                                    </th>
                                    <th class="text-center">
                                        Small<br>
                                        <small>≥576px</small>
                                    </th>
                                    <th class="text-center">
                                        Medium<br>
                                        <small>≥768px</small>
                                    </th>
                                    <th class="text-center">
                                        Large<br>
                                        <small>≥992px</small>
                                    </th>
                                    <th class="text-center">
                                        Extra Large<br>
                                        <small>≥1200px</small>
                                    </th>
                                    <th class="text-center">
                                        Extra Large<br>
                                        <small>≥1400px</small>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-nowrap" scope="row">Container <code class="fw-normal">max-width</code></th>
                                    <td>None (auto)</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                    <td><code>.col-</code></td>
                                    <td><code>.col-sm-</code></td>
                                    <td><code>.col-md-</code></td>
                                    <td><code>.col-lg-</code></td>
                                    <td><code>.col-xl-</code></td>
                                    <td><code>.col-xxl-</code></td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row"># of columns</th>
                                    <td colspan="6">12</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                    <td colspan="6">2rem (1rem on left and right)</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Custom gutters</th>
                                    <td colspan="6">Yes</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Nestable</th>
                                    <td colspan="6">Yes</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                    <td colspan="6">Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Grid Example</h4>

                    <div class="grid-structure">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="grid-container">
                                    col-lg-12
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="grid-container">
                                    col-lg-11
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="grid-container">
                                    col-lg-1
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="grid-container">
                                    col-lg-10
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-container">
                                    col-lg-2
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="grid-container">
                                    col-lg-9
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="grid-container">
                                    col-lg-3
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="grid-container">
                                    col-lg-8
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grid-container">
                                    col-lg-4
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="grid-container">
                                    col-lg-7
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="grid-container">
                                    col-lg-5
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="grid-container">
                                    col-lg-6
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="grid-container">
                                    col-lg-6
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="grid-container">
                                    col-lg-5
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="grid-container">
                                    col-lg-7
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="grid-container">
                                    col-lg-4
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="grid-container">
                                    col-lg-8
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="grid-container">
                                    col-lg-3
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="grid-container">
                                    col-lg-9
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="grid-container">
                                    col-lg-2
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="grid-container">
                                    col-lg-10
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1">
                                <div class="grid-container">
                                    col-lg-1
                                </div>
                            </div>
                            <div class="col-lg-11">
                                <div class="grid-container">
                                    col-lg-11
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="grid-container">
                                    col-lg-2
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="grid-container">
                                    col-lg-3
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grid-container">
                                    col-lg-4
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-container">
                                    col-lg-2
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="grid-container">
                                    col-lg-1
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- grid-structure -->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

</div> <!-- container -->
@endsection



@push('script')

@endpush
