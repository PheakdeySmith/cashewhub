@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Cards</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Cards</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-sm-6 col-lg-3">

            <!-- Simple card -->
            <div class="card d-block">
                <img class="card-img-top" src="{{ asset('assets') }}/images/small-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
                    <a href="javascript: void(0);" class="btn btn-primary">Button</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->

        <div class="col-sm-6 col-lg-3">
            <div class="card d-block">
                <img class="card-img-top" src="{{ asset('assets') }}/images/small-2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card..</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                </ul>
                <div class="card-body">
                    <a href="javascript: void(0);" class="card-link text-custom">Card link</a>
                    <a href="javascript: void(0);" class="card-link text-custom">Another link</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->

        <div class="col-sm-6 col-lg-3">
            <div class="card d-block">
                <img class="card-img-top" src="{{ asset('assets') }}/images/small-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
                    <a href="javascript: void(0);" class="btn btn-primary">Button</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->


        <div class="col-sm-6 col-lg-3">
            <div class="card d-block">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <img class="img-fluid" src="{{ asset('assets') }}/images/small-4.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content.</p>
                    <a href="javascript: void(0);" class="card-link text-custom">Card link</a>
                    <a href="javascript: void(0);" class="card-link text-custom">Another link</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="card card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional
                    content.</p>
                <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-sm-6">
            <div class="card card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional
                    content.</p>
                <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-light">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-light">
                    Quote
                </div>
                <div class="card-body">
                    <blockquote class="card-bodyquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-light">
                    Featured
                </div>
                <div class="card-body">
                    <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer border-top border-light text-muted">
                    2 days ago
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <h4 class="mb-4 mt-3">Card Colored</h4>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-secondary">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="javascript: void(0);" class="btn btn-primary btn-sm">Button</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-primary">
                <div class="card-body">
                    <blockquote class="card-bodyquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-success">
                <div class="card-body">
                    <blockquote class="card-bodyquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-info">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-warning">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-danger">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-secondary bg-gradient">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-primary bg-gradient">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-success bg-gradient">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-info bg-gradient">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-warning bg-gradient">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4 col-sm-6">
            <div class="card text-bg-danger bg-gradient">
                <div class="card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <h4 class="mb-4 mt-3">Card Bordered</h4>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-md-4">
            <div class="card border-secondary border">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Button</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-4">
            <div class="card border-primary border border-dashed">
                <div class="card-body">
                    <h5 class="card-title text-primary">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="javascript: void(0);" class="btn btn-primary btn-sm">Button</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-4">
            <div class="card border-success border">
                <div class="card-body">
                    <h5 class="card-title text-success">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="javascript: void(0);" class="btn btn-success btn-sm">Button</a>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <h4 class="mb-4 mt-3">Horizontal Card</h4>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('assets') }}/images/small-4.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div> <!-- end card-body-->
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-lg-6">
            <div class="card">
                <div class="row g-0 align-items-center">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div> <!-- end card-body -->
                    </div> <!-- end col -->
                    <div class="col-md-4">
                        <img src="{{ asset('assets') }}/images/small-1.jpg" class="img-fluid rounded-end" alt="...">
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <h4 class="mb-4 mt-3">Stretched link</h4>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <img src="{{ asset('assets') }}/images/small-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card with stretched link</h5>
                    <a href="https://coderthemes.com/boron/layouts/ui-cards.html#" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <img src="{{ asset('assets') }}/images/small-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://coderthemes.com/boron/layouts/ui-cards.html#" class="text-success stretched-link">Card with stretched link</a></h5>
                    <p class="card-text">
                        Some quick example text to build on the card up the bulk of the card's content.
                    </p>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <img src="{{ asset('assets') }}/images/small-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card with stretched link</h5>
                    <a href="https://coderthemes.com/boron/layouts/ui-cards.html#" class="btn btn-info mt-2 stretched-link">Go somewhere</a>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <img src="{{ asset('assets') }}/images/small-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://coderthemes.com/boron/layouts/ui-cards.html#" class="stretched-link">Card with stretched link</a></h5>
                    <p class="card-text">
                        Some quick example text to build on the card up the bulk of the card's content.
                    </p>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <h4 class="mb-4 mt-3">Card Group</h4>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card-group">
                <div class="card d-block">
                    <img class="card-img-top" src="{{ asset('assets') }}/images/small-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card d-block">
                    <img class="card-img-top" src="{{ asset('assets') }}/images/small-2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural
                            lead-in to additional content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card d-block">
                    <img class="card-img-top" src="{{ asset('assets') }}/images/small-3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a
                            natural lead-in to additional content. This card has even longer content
                            than the first to show that equal height action.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div> <!-- end card-group-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection



@push('script')

@endpush
