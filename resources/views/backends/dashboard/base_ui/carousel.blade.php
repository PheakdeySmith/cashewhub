@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Carousel</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Carousel</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Slides Only</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Here’s a carousel with slides only.
                        Note the presence of the <code>.d-block</code>
                        and <code>.img-fluid</code> on carousel images
                        to prevent browser default image alignment.</p>

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-3.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Controls</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Adding in the previous and next controls:</p>

                    <!-- START carousel-->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-4.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-2.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END carousel-->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Indicators</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">You can also add the indicators to the
                        carousel, alongside the controls, too.</p>

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=""></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-3.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item active carousel-item-start">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item carousel-item-next carousel-item-start">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-1.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleIndicators" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleIndicators" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">With Captions</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>.</p>
                    <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <img src="{{ asset('assets') }}/images/small-1.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">First slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item active carousel-item-start">
                                <img src="{{ asset('assets') }}/images/small-3.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Second slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-next carousel-item-start">
                                <img src="{{ asset('assets') }}/images/small-2.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Third slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleCaption" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleCaption" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Crossfade</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item active carousel-item-start">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item carousel-item-next carousel-item-start">
                                <img class="d-block img-fluid" src="{{ asset('assets') }}/images/small-3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleFade" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleFade" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Individual Interval</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Add <code>data-bs-interval=""</code> to a <code>.carousel-item</code> to change the amount of time to delay between automatically cycling to the next item.</p>

                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="{{ asset('assets') }}/images/small-4.jpg" class="img-fluid d-block w-100" alt="First slide">
                            </div>
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="{{ asset('assets') }}/images/small-2.jpg" class="img-fluid d-block w-100" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets') }}/images/small-1.jpg" class="img-fluid d-block w-100" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleInterval" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="https://coderthemes.com/boron/layouts/ui-carousel.html#carouselExampleInterval" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dark Variant</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Add <code>.carousel-dark</code> to the <code>.carousel</code> for darker controls, indicators, and captions. Controls are inverted compared to their default white fill with the <code>filter</code> CSS property. Captions and controls have additional Sass variables that customize the <code>color</code> and <code>background-color</code>.</p>

                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('assets') }}/images/small-5.jpg" class="img-fluid" alt="Images">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('assets') }}/images/small-6.jpg" class="img-fluid" alt="Images">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets') }}/images/small-7.jpg" class="img-fluid" alt="Images">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection



@push('script')

@endpush
