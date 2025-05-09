@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Breadcrumb</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Breadcrumb</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Example</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Indicate the current page’s location within a navigational hierarchy that
                        automatically adds separators via CSS.
                        Please read the official <a target="_blank" href="https://getbootstrap.com/docs/5.3/components/breadcrumb/">Bootstrap</a>
                        documentation for more options.
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Icons</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Optionally you can also specify the icon with your breadcrumb item.
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-opacity-50 p-2 mb-2">
                            <li class="breadcrumb-item active" aria-current="page"><i class="ti ti-smart-home fs-16 me-1"></i>Home</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-opacity-50 p-2 mb-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#"><i class="ti ti-smart-home fs-16 me-1"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-opacity-50 p-2 mb-0">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#"><i class="ti ti-smart-home fs-16 me-1"></i>Home</a></li>
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dividers</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Indicate the current page’s location within a navigational hierarchy that
                        automatically adds separators via CSS.
                        Please read the official <a target="_blank" href="https://getbootstrap.com/docs/5.3/components/breadcrumb/">Bootstrap</a>
                        documentation for more options.
                    </p>

                    <nav style="--bs-breadcrumb-divider: &#39;&gt;&#39;;" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns=&#39;http://www.w3.org/2000/svg&#39; width=&#39;8&#39; height=&#39;8&#39;%3E%3Cpath d=&#39;M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z&#39; fill=&#39;%236c757d&#39;/%3E%3C/svg%3E&quot;);" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: &#39;\ea1c&#39;;" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: &#39;\f4f9&#39;;" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: &#39;\eb0c&#39;;" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-2">
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://coderthemes.com/boron/layouts/ui-breadcrumb.html#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container -->
@endsection



@push('script')

@endpush
