@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush


@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Placeholders</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Placeholders</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Placeholders</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two.
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border shadow-none mb-md-0">
                                <img src="{{ asset('assets') }}/images/small-1.jpg" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.</p>
                                    <a href="https://coderthemes.com/boron/layouts/ui-placeholders.html#" class="btn btn-primary">Go somewhere</a>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6">
                            <div class="card border shadow-none mb-0" aria-hidden="true">
                                <img src="{{ asset('assets') }}/images/small-2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="header-title placeholder-glow">
                                        <span class="placeholder col-6"></span>
                                    </h5>
                                    <p class="card-text placeholder-glow">
                                        <span class="placeholder col-7"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-6"></span>
                                    </p>
                                    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"> <span class="invisible">Read Only</span></a>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Color</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        By default, the <code>placeholder</code> uses <code>currentColor</code>. This can be overriden with a custom color or utility class.
                    </p>
                    <span class="placeholder col-12"></span>
                    <span class="placeholder col-12 bg-primary"></span>
                    <span class="placeholder col-12 bg-secondary"></span>
                    <span class="placeholder col-12 bg-success"></span>
                    <span class="placeholder col-12 bg-danger"></span>
                    <span class="placeholder col-12 bg-warning"></span>
                    <span class="placeholder col-12 bg-info"></span>
                    <span class="placeholder col-12 bg-light"></span>
                    <span class="placeholder col-12 bg-dark"></span>

                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Width</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        You can change the <code>width</code> through grid column classes, width utilities, or inline styles.
                    </p>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder w-75"></span>
                    <span class="placeholder" style="width: 25%;"></span> <br>
                    <span class="placeholder" style="width: 10%;"></span>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Sizing</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        The size of <code>.placeholder</code>s are based on the typographic style of the parent element. Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or <code>.placeholder-xs</code>.
                    </p>
                    <span class="placeholder col-12 placeholder-lg"></span>
                    <span class="placeholder col-12"></span>
                    <span class="placeholder col-12 placeholder-sm"></span>
                    <span class="placeholder col-12 placeholder-xs"></span>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">How it works</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Create placeholders with the <code>.placeholder</code> class and a grid column class (e.g., <code>.col-6</code>) to set the <code>width</code>. They can replace the text inside an element or as be added as a modifier class to an existing component.
                    </p>
                    <p aria-hidden="true">
                        <span class="placeholder col-6"></span>
                    </p>

                    <a href="https://coderthemes.com/boron/layouts/ui-placeholders.html#" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Animation</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Animate placehodlers with <code>.placeholder-glow</code> or <code>.placeholder-wave</code> to better convey the perception of something being <em>actively</em> loaded.
                    </p>
                    <p class="placeholder-glow">
                        <span class="placeholder col-12"></span>
                    </p>

                    <p class="placeholder-wave mb-0">
                        <span class="placeholder col-12"></span>
                    </p>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row -->

</div> <!-- container -->
@endsection


@push('script')

@endpush
