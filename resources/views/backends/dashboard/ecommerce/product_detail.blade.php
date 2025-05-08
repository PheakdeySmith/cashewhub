@extends('backends.layouts.app')
@push('style')

    <!--Swiper slider css-->
    <link href="{{ asset('assets') }}/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
@endpush


@section('content')
<div class="page-container">

    <div
        class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4
                class="fs-18 text-uppercase fw-bold mb-0">Product
                Details</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a
                        href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a
                        href="javascript: void(0);">eCommerce</a></li>

                <li class="breadcrumb-item active">Product
                    Details</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-5 col-lg-12">
            <div class="card bg-body">
                <div class="card-body">
                    <!-- Crossfade -->
                    <div id="carouselExampleFade"
                        class="carousel slide carousel-fade"
                        data-bs-ride="carousel">
                        <div class="carousel-inner"
                            role="listbox">
                            <div
                                class="carousel-item text-center">
                                <img
                                    src="{{ asset('assets') }}/images/p-3.png"
                                    alt
                                    class="img-fluid bg-body shadow-none rounded">
                            </div>
                            <div
                                class="carousel-item text-center">
                                <img
                                    src="{{ asset('assets') }}/images/p-9.png"
                                    alt
                                    class="img-fluid bg-body shadow-none rounded">
                            </div>
                            <div
                                class="carousel-item text-center">
                                <img
                                    src="{{ asset('assets') }}/images/p-10.png"
                                    alt
                                    class="img-fluid bg-body shadow-none rounded">
                            </div>
                            <div
                                class="carousel-item text-center active">
                                <img
                                    src="{{ asset('assets') }}/images/p-11.png"
                                    alt
                                    class="img-fluid bg-body shadow-none rounded">
                            </div>
                            <div
                                class="carousel-item text-center">
                                <img
                                    src="{{ asset('assets') }}/images/p-12.png"
                                    alt
                                    class="img-fluid bg-body shadow-none rounded">
                            </div>
                        </div>
                        <div
                            class="carousel-indicators m-0 mt-2 d-lg-flex d-none position-static h-100 rounded gap-1">
                            <button type="button"
                                data-bs-target="#carouselExampleFade"
                                data-bs-slide-to="0"
                                aria-label="Slide 1"
                                class="h-auto rounded bg-light-subtle border"
                                style="width: auto !important;">
                                <img
                                    src="{{ asset('assets') }}/images/p-3.png"
                                    class="d-block avatar-xl"
                                    alt="swiper-indicator-img">
                            </button>
                            <button type="button"
                                data-bs-target="#carouselExampleFade"
                                data-bs-slide-to="1"
                                aria-label="Slide 2"
                                class="h-auto rounded bg-light-subtle border"
                                style="width: auto !important;">
                                <img
                                    src="{{ asset('assets') }}/images/p-9.png"
                                    class="d-block avatar-xl"
                                    alt="swiper-indicator-img">
                            </button>
                            <button type="button"
                                data-bs-target="#carouselExampleFade"
                                data-bs-slide-to="2"
                                aria-label="Slide 3"
                                class="h-auto rounded bg-light-subtle border"
                                style="width: auto !important;">
                                <img
                                    src="{{ asset('assets') }}/images/p-10.png"
                                    class="d-block avatar-xl"
                                    alt="swiper-indicator-img">
                            </button>
                            <button type="button"
                                data-bs-target="#carouselExampleFade"
                                data-bs-slide-to="3"
                                aria-label="Slide 4"
                                class="h-auto rounded bg-light-subtle border active"
                                style="width: auto !important;"
                                aria-current="true">
                                <img
                                    src="{{ asset('assets') }}/images/p-11.png"
                                    class="d-block avatar-xl"
                                    alt="swiper-indicator-img">
                            </button>
                            <button type="button"
                                data-bs-target="#carouselExampleFade"
                                data-bs-slide-to="4"
                                aria-label="Slide 1"
                                class="h-auto rounded bg-light-subtle border"
                                style="width: auto !important;">
                                <img
                                    src="{{ asset('assets') }}/images/p-12.png"
                                    class="d-block avatar-xl"
                                    alt="swiper-indicator-img">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-footer p-0">
                    <div
                        class="bg-dark-gradient shadow text-center p-3">
                        <p
                            class="fs-20 fw-semibold text-white mb-1">Enjoy
                            an Additional 20% Discount on Your
                            Purchase</p>
                        <p class="mb-1 text-white-50">On
                            Purchase Of 2+ Style</p>
                        <p class="mb-0 text-white-50">USE CODE :
                            <span
                                class="text-warning fw-bold">OCEN24</span></p>
                    </div>
                    <div
                        class="bg-body-secondary shadow rounded p-3">
                        <h4 class="mb-3 text-dark">Offer Expires
                            In :</h4>
                        <div
                            class="bg-warning-subtle border border-warning-subtle p-2 rounded">
                            <div class="row text-xxl-center">
                                <div
                                    class="col border-end border-warning-subtle">
                                    <h3 id="days"
                                        class="fw-bold fs-18 text-dark">10</h3>
                                    <p class="mb-0">Days</p>
                                </div>
                                <div
                                    class="col border-end border-warning-subtle">
                                    <h3 id="hours"
                                        class="fw-bold fs-18 text-dark">09</h3>
                                    <p class="mb-0">Hours</p>
                                </div>
                                <div
                                    class="col border-end border-warning-subtle">
                                    <h3 id="minutes"
                                        class="fw-bold fs-18 text-dark">30</h3>
                                    <p class="mb-0">Minutes</p>
                                </div>
                                <div class="col">
                                    <h3 id="seconds"
                                        class="fw-bold fs-18 text-dark">70</h3>
                                    <p class="mb-0">Seconds</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span
                    class="position-absolute top-0 end-0 p-5 pt-3 z-1">
                    <div data-toggler="on">
                        <button type="button"
                            class="btn btn-icon btn-secondary rounded-circle"
                            data-toggler-on>
                            <iconify-icon
                                icon="solar:heart-angle-bold-duotone"
                                class="fs-22 text-danger"><template
                                    shadowrootmode="open"><style
                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="1em" height="1em"
                                        viewBox="0 0 24 24"><path
                                            fill="currentColor"
                                            fill-rule="evenodd"
                                            d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                            clip-rule="evenodd"
                                            opacity=".5"></path><path
                                            fill="currentColor"
                                            d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5"></path></svg></template></iconify-icon>
                        </button>
                        <button type="button"
                            class="btn btn-icon btn-light rounded-circle d-none"
                            data-toggler-off>
                            <iconify-icon
                                icon="solar:heart-angle-bold-duotone"
                                class="fs-22"
                                data-toggler-off><template
                                    shadowrootmode="open"><style
                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="1em" height="1em"
                                        viewBox="0 0 24 24"><path
                                            fill="currentColor"
                                            fill-rule="evenodd"
                                            d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                            clip-rule="evenodd"
                                            opacity=".5"></path><path
                                            fill="currentColor"
                                            d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5"></path></svg></template></iconify-icon>
                        </button>
                    </div>
                </span>
                <span
                    class="position-absolute top-0 start-0 p-5 pt-2 z-1">
                    <span class="badge bg-danger fs-14">On
                        Deal</span>
                </span>
            </div>
        </div>
        <div class="col-xl-7 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div
                        class="d-flex align-items-center justify-content-between">
                        <div>
                            <span
                                class="badge bg-success-subtle text-success px-2 py-1 fs-13 rounded-pill">New</span>
                        </div>
                        <div
                            class="flex-grow-1 d-inline-flex align-items-center justify-content-end fs-16">
                            <span
                                class="ti ti-star-filled text-warning"></span>
                            <span
                                class="ti ti-star-filled text-warning"></span>
                            <span
                                class="ti ti-star-filled text-warning"></span>
                            <span
                                class="ti ti-star-filled text-warning"></span>
                            <span
                                class="ti ti-star-filled text-warning"></span>
                            <span class="ms-1 fs-14">23k Reviews
                            </span>
                        </div>
                    </div>
                    <div class="mt-3 mb-1">
                        <a
                            href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                            class="text-dark fs-20 fw-medium">Minetta
                            Rattan Swivel Luxury Green Premium
                            Lounge Chair</a>
                    </div>
                    <p
                        class="text-muted fw-medium fs-14 mb-1"><span
                            class="text-dark">Menufechar :
                        </span> Premium Furniture</p>
                    <p
                        class="text-muted fw-medium fs-14 mb-1"><span
                            class="text-dark">Article : </span>
                        CR63541</p>
                    <p
                        class="text-muted fw-medium fs-14 mb-1"><span
                            class="text-dark">Sold Items :
                        </span> 76k</p>
                    <p
                        class="text-muted fw-medium fs-14 mb-0"><span
                            class="text-dark">Product Code :
                        </span> CD4671CR</p>

                    <h2 class="my-4 fw-bold text-dark">$300.00
                        <span
                            class="text-muted fs-14 fw-medium">/
                            20% Off</span></h2>
                    <div
                        class="d-flex flex-wrap align-items-center gap-2 mt-3 mb-2"
                        role="group"
                        aria-label="Basic checkbox toggle button group">
                        <p
                            class="mb-0 text-dark fw-semibold fs-15">Colors
                            : </p>
                        <input type="checkbox" class="btn-check"
                            id="color-dark2">
                        <label
                            class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                            for="color-dark2"> <i
                                class="ti ti-circle-filled fs-28 rounded-circle text-success"></i></label>

                        <input type="checkbox" class="btn-check"
                            id="color-yellow2">
                        <label
                            class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                            for="color-yellow2"> <i
                                class="ti ti-circle-filled fs-28 rounded-circle text-warning"></i></label>

                        <input type="checkbox" class="btn-check"
                            id="color-white2">
                        <label
                            class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                            for="color-white2"> <i
                                class="ti ti-circle-filled fs-28 rounded-circle text-primary"></i></label>

                        <input type="checkbox" class="btn-check"
                            id="color-info" checked>
                        <label
                            class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                            for="color-info"> <i
                                class="ti ti-circle-filled fs-28 rounded-circle text-info"></i></label>

                    </div>
                    <div
                        class="d-flex flex-wrap align-items-center gap-2 my-3">
                        <p
                            class="mb-0 text-dark fw-semibold fs-15">Stock
                            : </p>
                        <div>
                            <p
                                class="text-success mb-0 fw-semibold fs-15"><i
                                    class="ti ti-checks"></i> In
                                Stock</p>
                        </div>
                    </div>
                    <div
                        class="d-flex flex-wrap align-items-center gap-2 my-3">
                        <p
                            class="mb-0 text-dark fw-semibold fs-15">Quantity
                            : </p>
                        <div data-touchspin
                            class="input-step border bg-body-secondary p-1 mt-1 rounded-pill d-inline-flex overflow-visible">
                            <button type="button"
                                class="minus bg-light text-dark border-0 rounded-circle fs-20 lh-1 h-100">-</button>
                            <input type="number"
                                class="text-dark text-center border-0 bg-body-secondary rounded h-100"
                                value="1" min="0" max="100"
                                readonly>
                            <button type="button"
                                class="plus bg-light text-dark border-0 rounded-circle fs-20 lh-1 h-100">+</button>
                        </div>
                    </div>
                    <h4 class="text-dark fw-medium">Description
                        :</h4>
                    <p class="mb-1">Bring Axis home and watch
                        life revolve around it. This 2-seat sofa
                        offers exceptional durability for family
                        rooms and casual living rooms, featuring
                        track arms that create a clean look. Low
                        back cushions and deep seats encourage
                        lounging with family and friends.</p>
                    <p class="mb-1">An exceptional occasional
                        chair with slim arm rests, styled with a
                        reclined back for supreme comfort. The
                        metal tipped flaring legs add a
                        decorative flourish to this elegant
                        classic. Also available with a quilted
                        fabric back (60-0775)</p>
                    <a
                        href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                        class="link-primary">Read More...</a>
                    <h4 class="text-dark fw-medium mt-3">Details
                        :</h4>
                    <ul
                        class="d-flex flex-column gap-1 fs-14 mb-0">
                        <li>
                            Doweled mortise and tenon frame in
                            solid Mahogany from certified
                            source.
                        </li>
                        <li>
                            Solid certified Mahogany.
                        </li>
                        <li>
                            Available in a selection of
                            finishes.
                        </li>
                        <li>
                            Tight seat undersupport with
                            high-density upholstery fill.
                        </li>
                    </ul>

                    <h4
                        class="text-dark fw-medium mt-3 mb-2 pb-1">Additional
                        Information :</h4>
                    <div
                        class="border border-dashed p-2 rounded text-center">
                        <div class="row">
                            <div
                                class="col-lg-3 col-4 border-end">
                                <p
                                    class="text-muted fw-medium fs-14 mb-0"><span
                                        class="text-dark">Arm
                                        Width : </span> 54
                                    cm</p>
                            </div>
                            <div
                                class="col-lg-3 col-4 border-end">
                                <p
                                    class="text-muted fw-medium fs-14 mb-0"><span
                                        class="text-dark">Seat
                                        Width : </span> 67
                                    cm</p>
                            </div>
                            <div
                                class="col-lg-3 col-4 border-end">
                                <p
                                    class="text-muted fw-medium fs-14 mb-0"><span
                                        class="text-dark">Seat
                                        Depth : </span> 54
                                    cm</p>
                            </div>
                            <div
                                class="col-lg-3 col-4 border-end">
                                <p
                                    class="text-muted fw-medium fs-14 mb-0"><span
                                        class="text-dark">Seat
                                        Height : </span> 40
                                    cm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="card-footer border-top border-dashed">
                    <div class="row g-2">
                        <div class="col-lg-3">
                            <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                class="btn btn-primary w-100 d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:cart-large-2-bold"
                                    class="fs-16 align-middle"><template
                                        shadowrootmode="open"><style
                                            data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 24 24"><path
                                                fill="currentColor"
                                                d="M2.237 2.288a.75.75 0 1 0-.474 1.423l.265.089c.676.225 1.124.376 1.453.529c.312.145.447.262.533.382s.155.284.194.626c.041.361.042.833.042 1.546v2.672c0 1.367 0 2.47.117 3.337c.12.9.38 1.658.982 2.26c.601.602 1.36.86 2.26.981c.866.117 1.969.117 3.336.117H18a.75.75 0 0 0 0-1.5h-7c-1.435 0-2.436-.002-3.192-.103c-.733-.099-1.122-.28-1.399-.556c-.235-.235-.4-.551-.506-1.091h10.12c.959 0 1.438 0 1.814-.248s.565-.688.943-1.57l.428-1c.81-1.89 1.215-2.834.77-3.508S18.506 6 16.45 6H5.745a9 9 0 0 0-.047-.833c-.055-.485-.176-.93-.467-1.333c-.291-.404-.675-.66-1.117-.865c-.417-.194-.946-.37-1.572-.58zM7.5 18a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3"></path></svg></template></iconify-icon>
                                Add to Bag</a>
                        </div>
                        <div class="col-lg-3">
                            <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                class="btn btn-success w-100 d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:bag-check-bold"
                                    class="fs-16 align-middle"><template
                                        shadowrootmode="open"><style
                                            data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 24 24"><path
                                                fill="currentColor"
                                                fill-rule="evenodd"
                                                d="M8.25 6.015V5a3.75 3.75 0 1 1 7.5 0v1.015c1.287.039 2.075.177 2.676.676c.833.692 1.053 1.862 1.492 4.203l.75 4c.617 3.292.925 4.938.026 6.022C19.794 22 18.119 22 14.77 22H9.23c-3.35 0-5.024 0-5.924-1.084s-.59-2.73.026-6.022l.75-4c.44-2.34.659-3.511 1.492-4.203c.601-.499 1.389-.637 2.676-.676M9.75 5a2.25 2.25 0 0 1 4.5 0v1h-4.5zm5.719 5.914a.75.75 0 0 1 .117 1.055l-4 5a.75.75 0 0 1-1.116.061l-2-2a.75.75 0 0 1 1.06-1.06l1.408 1.407l3.476-4.346a.75.75 0 0 1 1.055-.117"
                                                clip-rule="evenodd"></path></svg></template></iconify-icon>
                                Buy Now</a>
                        </div>
                        <div class="col-lg-3">
                            <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                class="btn btn-outline-danger w-75 d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:heart-bold"
                                    class="fs-16 align-middle"><template
                                        shadowrootmode="open"><style
                                            data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 24 24"><path
                                                fill="currentColor"
                                                d="M2 9.137C2 14 6.02 16.591 8.962 18.911C10 19.729 11 20.5 12 20.5s2-.77 3.038-1.59C17.981 16.592 22 14 22 9.138S16.5.825 12 5.501C7.5.825 2 4.274 2 9.137"></path></svg></template></iconify-icon>
                                Wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header p-0">
                    <ul class="nav nav-tabs nav-bordered"
                        role="tablist">
                        <li class="nav-item px-3"
                            role="presentation">
                            <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#description"
                                data-bs-toggle="tab"
                                aria-expanded="false"
                                class="nav-link py-2 active"
                                aria-selected="true" role="tab">
                                <span
                                    class="d-block d-sm-none"><iconify-icon
                                        icon="solar:notebook-bold"
                                        class="fs-20"><template
                                            shadowrootmode="open"><style
                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"><path
                                                    fill="currentColor"
                                                    fill-rule="evenodd"
                                                    d="M8.75 2.013V22H15c2.828 0 4.243 0 5.121-.879C21 20.243 21 18.828 21 16V8c0-2.828 0-4.243-.879-5.121C19.243 2 17.828 2 15 2H9zm2 4.487a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75m0 3.5a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75M3 7.25c.008-2.336.081-3.574.879-4.371c.675-.675 1.666-.832 3.371-.868v19.978c-1.705-.036-2.696-.193-3.371-.868c-.798-.797-.871-2.035-.878-4.371H4a.75.75 0 0 0 0-1.5H3v-2.5h1a.75.75 0 0 0 0-1.5H3v-2.5h1a.75.75 0 0 0 0-1.5zm0 0H2a.75.75 0 0 0 0 1.5h1zm0 5.5H2a.75.75 0 0 1 0-1.5h1zm0 2.5H2a.75.75 0 0 0 0 1.5h1z"
                                                    clip-rule="evenodd"></path></svg></template></iconify-icon></span>
                                <span
                                    class="d-none d-sm-block"><iconify-icon
                                        icon="solar:notebook-bold"
                                        class="fs-14 me-1 align-middle"><template
                                            shadowrootmode="open"><style
                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"><path
                                                    fill="currentColor"
                                                    fill-rule="evenodd"
                                                    d="M8.75 2.013V22H15c2.828 0 4.243 0 5.121-.879C21 20.243 21 18.828 21 16V8c0-2.828 0-4.243-.879-5.121C19.243 2 17.828 2 15 2H9zm2 4.487a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75m0 3.5a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75M3 7.25c.008-2.336.081-3.574.879-4.371c.675-.675 1.666-.832 3.371-.868v19.978c-1.705-.036-2.696-.193-3.371-.868c-.798-.797-.871-2.035-.878-4.371H4a.75.75 0 0 0 0-1.5H3v-2.5h1a.75.75 0 0 0 0-1.5H3v-2.5h1a.75.75 0 0 0 0-1.5zm0 0H2a.75.75 0 0 0 0 1.5h1zm0 5.5H2a.75.75 0 0 1 0-1.5h1zm0 2.5H2a.75.75 0 0 0 0 1.5h1z"
                                                    clip-rule="evenodd"></path></svg></template></iconify-icon>
                                    Description</span>
                            </a>
                        </li>
                        <li class="nav-item px-3"
                            role="presentation">
                            <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#review"
                                data-bs-toggle="tab"
                                aria-expanded="true"
                                class="nav-link py-2"
                                aria-selected="false"
                                tabindex="-1" role="tab">
                                <span
                                    class="d-block d-sm-none"><iconify-icon
                                        icon="solar:chat-dots-bold"
                                        class="fs-20"><template
                                            shadowrootmode="open"><style
                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"><path
                                                    fill="currentColor"
                                                    fill-rule="evenodd"
                                                    d="m13.087 21.388l.542-.916c.42-.71.63-1.066.968-1.262c.338-.197.763-.204 1.613-.219c1.256-.021 2.043-.098 2.703-.372a5 5 0 0 0 2.706-2.706C22 14.995 22 13.83 22 11.5v-1c0-3.273 0-4.91-.737-6.112a5 5 0 0 0-1.65-1.651C18.41 2 16.773 2 13.5 2h-3c-3.273 0-4.91 0-6.112.737a5 5 0 0 0-1.651 1.65C2 5.59 2 7.228 2 10.5v1c0 2.33 0 3.495.38 4.413a5 5 0 0 0 2.707 2.706c.66.274 1.447.35 2.703.372c.85.015 1.275.022 1.613.219c.337.196.548.551.968 1.262l.542.916c.483.816 1.69.816 2.174 0M16 12a1 1 0 1 0 0-2a1 1 0 0 0 0 2m-3-1a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2"
                                                    clip-rule="evenodd"></path></svg></template></iconify-icon></span>
                                <span
                                    class="d-none d-sm-block"><iconify-icon
                                        icon="solar:chat-dots-bold"
                                        class="fs-14 me-1 align-middle"><template
                                            shadowrootmode="open"><style
                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"><path
                                                    fill="currentColor"
                                                    fill-rule="evenodd"
                                                    d="m13.087 21.388l.542-.916c.42-.71.63-1.066.968-1.262c.338-.197.763-.204 1.613-.219c1.256-.021 2.043-.098 2.703-.372a5 5 0 0 0 2.706-2.706C22 14.995 22 13.83 22 11.5v-1c0-3.273 0-4.91-.737-6.112a5 5 0 0 0-1.65-1.651C18.41 2 16.773 2 13.5 2h-3c-3.273 0-4.91 0-6.112.737a5 5 0 0 0-1.651 1.65C2 5.59 2 7.228 2 10.5v1c0 2.33 0 3.495.38 4.413a5 5 0 0 0 2.707 2.706c.66.274 1.447.35 2.703.372c.85.015 1.275.022 1.613.219c.337.196.548.551.968 1.262l.542.916c.483.816 1.69.816 2.174 0M16 12a1 1 0 1 0 0-2a1 1 0 0 0 0 2m-3-1a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2"
                                                    clip-rule="evenodd"></path></svg></template></iconify-icon>
                                    Review</span>
                            </a>
                        </li>
                        <li class="nav-item px-3"
                            role="presentation">
                            <a
                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#offer-warranty"
                                data-bs-toggle="tab"
                                aria-expanded="false"
                                class="nav-link py-2"
                                aria-selected="false"
                                tabindex="-1" role="tab">
                                <span
                                    class="d-block d-sm-none"><iconify-icon
                                        icon="solar:ticket-sale-bold"
                                        class="fs-20"><template
                                            shadowrootmode="open"><style
                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"><path
                                                    fill="currentColor"
                                                    fill-rule="evenodd"
                                                    d="M9.995 4h4.01c3.78 0 5.67 0 6.845 1.172c.81.806 1.061 1.951 1.14 3.817c.015.37.023.556-.046.679c-.07.123-.345.278-.897.586a1.999 1.999 0 0 0 0 3.492c.552.309.828.463.897.586s.061.308.045.678c-.078 1.867-.33 3.012-1.139 3.818C19.676 20 17.786 20 14.005 20h-4.01c-3.78 0-5.67 0-6.845-1.172c-.81-.806-1.061-1.951-1.14-3.817c-.015-.37-.023-.556.046-.679c.07-.123.345-.277.897-.586a1.999 1.999 0 0 0 0-3.492c-.552-.308-.828-.463-.897-.586s-.061-.308-.045-.679c.078-1.866.33-3.01 1.139-3.817C4.324 4 6.214 4 9.995 4m5.553 4.47a.75.75 0 0 1 0 1.06l-6.015 6a.753.753 0 0 1-1.063 0a.75.75 0 0 1 0-1.06l6.015-6a.753.753 0 0 1 1.063 0m-1.033 7.03a1.001 1.001 0 1 0 0-2c-.554 0-1.003.448-1.003 1s.45 1 1.003 1m-5.013-5c.554 0 1.003-.448 1.003-1s-.449-1-1.003-1a1.001 1.001 0 1 0 0 2"
                                                    clip-rule="evenodd"></path></svg></template></iconify-icon></span>
                                <span
                                    class="d-none d-sm-block"><iconify-icon
                                        icon="solar:ticket-sale-bold"
                                        class="fs-14 me-1 align-middle"><template
                                            shadowrootmode="open"><style
                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"><path
                                                    fill="currentColor"
                                                    fill-rule="evenodd"
                                                    d="M9.995 4h4.01c3.78 0 5.67 0 6.845 1.172c.81.806 1.061 1.951 1.14 3.817c.015.37.023.556-.046.679c-.07.123-.345.278-.897.586a1.999 1.999 0 0 0 0 3.492c.552.309.828.463.897.586s.061.308.045.678c-.078 1.867-.33 3.012-1.139 3.818C19.676 20 17.786 20 14.005 20h-4.01c-3.78 0-5.67 0-6.845-1.172c-.81-.806-1.061-1.951-1.14-3.817c-.015-.37-.023-.556.046-.679c.07-.123.345-.277.897-.586a1.999 1.999 0 0 0 0-3.492c-.552-.308-.828-.463-.897-.586s-.061-.308-.045-.679c.078-1.866.33-3.01 1.139-3.817C4.324 4 6.214 4 9.995 4m5.553 4.47a.75.75 0 0 1 0 1.06l-6.015 6a.753.753 0 0 1-1.063 0a.75.75 0 0 1 0-1.06l6.015-6a.753.753 0 0 1 1.063 0m-1.033 7.03a1.001 1.001 0 1 0 0-2c-.554 0-1.003.448-1.003 1s.45 1 1.003 1m-5.013-5c.554 0 1.003-.448 1.003-1s-.449-1-1.003-1a1.001 1.001 0 1 0 0 2"
                                                    clip-rule="evenodd"></path></svg></template></iconify-icon>
                                    Offers &amp; Warranty</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content ">
                        <div class="tab-pane show active"
                            id="description" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Modern designer chair
                                        with a frame made of a
                                        metal profile. The
                                        minimalist style will
                                        work in any modern and
                                        loft interior. The
                                        furniture is
                                        characterized by high
                                        durability and solid
                                        workmanship, so you can
                                        be sure that it will
                                        serve you for many
                                        years.</p>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h4
                                        class="card-title my-2">Dimension
                                        :</h4>
                                    <div
                                        class="table-responsive">
                                        <table
                                            class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Width
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">54
                                                        cm</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Length
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">50
                                                        cm</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Seat
                                                            Width
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">67
                                                        cm</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Seat
                                                            Length
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">65
                                                        cm</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Seat
                                                            Height
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">40
                                                        cm</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Backrest
                                                            Height
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">50
                                                        cm</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Armrest
                                                            Height
                                                            From
                                                            THe
                                                            Ground
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">58
                                                        cm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4
                                        class="card-title my-2">Material
                                        :</h4>
                                    <div
                                        class="table-responsive">
                                        <table
                                            class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Material
                                                            Seat
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">Velor
                                                        Fabric</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Material
                                                            Base
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">Steel
                                                        Powder
                                                        Coated</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h4
                                        class="card-title mb-1 mt-3">Colors
                                        :</h4>
                                    <div
                                        class="table-responsive">
                                        <table
                                            class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Seat
                                                            Color
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">Sky
                                                        Blue</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="px-0">
                                                        <p
                                                            class="d-flex mb-0 align-items-center gap-1">Base
                                                            Color
                                                            :
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="text-end text-dark fw-medium px-0">Wooden
                                                        Brown</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="review"
                            role="tabpanel">
                            <div class="row g-2">
                                <div class="col-xl-6 col-lg-12">
                                    <div class="pe-lg-3">

                                        <h4
                                            class="card-title"><iconify-icon
                                                icon="solar:box-bold-duotone"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            d="M8.422 20.618C10.178 21.54 11.056 22 12 22V12L2.638 7.073l-.04.067C2 8.154 2 9.417 2 11.942v.117c0 2.524 0 3.787.597 4.801c.598 1.015 1.674 1.58 3.825 2.709z"></path><path
                                                            fill="currentColor"
                                                            d="m17.577 4.432l-2-1.05C13.822 2.461 12.944 2 12 2c-.945 0-1.822.46-3.578 1.382l-2 1.05C4.318 5.536 3.242 6.1 2.638 7.072L12 12l9.362-4.927c-.606-.973-1.68-1.537-3.785-2.641"
                                                            opacity=".7"></path><path
                                                            fill="currentColor"
                                                            d="m21.403 7.14l-.041-.067L12 12v10c.944 0 1.822-.46 3.578-1.382l2-1.05c2.151-1.129 3.227-1.693 3.825-2.708c.597-1.014.597-2.277.597-4.8v-.117c0-2.525 0-3.788-.597-4.802"
                                                            opacity=".5"></path><path
                                                            fill="currentColor"
                                                            d="m6.323 4.484l.1-.052l1.493-.784l9.1 5.005l4.025-2.011q.205.232.362.498c.15.254.262.524.346.825L17.75 9.964V13a.75.75 0 0 1-1.5 0v-2.286l-3.5 1.75v9.44A3 3 0 0 1 12 22c-.248 0-.493-.032-.75-.096v-9.44l-8.998-4.5c.084-.3.196-.57.346-.824q.156-.266.362-.498l9.04 4.52l3.387-1.693z"></path></svg></template></iconify-icon>
                                            Product Rating</h4>
                                        <div
                                            class="row align-items-center text-center my-4">
                                            <div
                                                class="col-lg-4">
                                                <h2
                                                    class="text-dark fw-semibold d-flex align-items-center gap-1 justify-content-center">4.5
                                                    <iconify-icon
                                                        icon="solar:star-bold"
                                                        class="text-warning"><template
                                                            shadowrootmode="open"><style
                                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="1em"
                                                                height="1em"
                                                                viewBox="0 0 24 24"><path
                                                                    fill="currentColor"
                                                                    d="M9.153 5.408C10.42 3.136 11.053 2 12 2s1.58 1.136 2.847 3.408l.328.588c.36.646.54.969.82 1.182s.63.292 1.33.45l.636.144c2.46.557 3.689.835 3.982 1.776c.292.94-.546 1.921-2.223 3.882l-.434.507c-.476.557-.715.836-.822 1.18c-.107.345-.071.717.001 1.46l.066.677c.253 2.617.38 3.925-.386 4.506s-1.918.051-4.22-1.009l-.597-.274c-.654-.302-.981-.452-1.328-.452s-.674.15-1.328.452l-.596.274c-2.303 1.06-3.455 1.59-4.22 1.01c-.767-.582-.64-1.89-.387-4.507l.066-.676c.072-.744.108-1.116 0-1.46c-.106-.345-.345-.624-.821-1.18l-.434-.508c-1.677-1.96-2.515-2.941-2.223-3.882S3.58 8.328 6.04 7.772l.636-.144c.699-.158 1.048-.237 1.329-.45s.46-.536.82-1.182z"></path></svg></template></iconify-icon></h2>
                                                <p
                                                    class="mb-0 fs-5">Best
                                                    Review</p>
                                            </div>
                                            <div
                                                class="col-lg-8">
                                                <div
                                                    class="d-flex align-items-center gap-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">5
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 90%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">4525</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 my-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">4
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 70%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">2343</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 my-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">3
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 30%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">221</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 my-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">2
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 20%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">109</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 mt-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">1
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 10%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">129</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <h4
                                            class="card-title mb-3">Customer
                                            Upload Photos :</h4>
                                        <div
                                            class="d-flex flex-wrap align-items-center gap-2 text-center">
                                            <div>
                                                <a
                                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!">
                                                    <img
                                                        src="{{ asset('assets') }}/images/p-3.png"
                                                        alt
                                                        class="avatar-xl bg-light-subtle rounded border">
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!">
                                                    <img
                                                        src="{{ asset('assets') }}/images/p-12.png"
                                                        alt
                                                        class="avatar-xl bg-light-subtle rounded border">
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!">
                                                    <img
                                                        src="{{ asset('assets') }}/images/p-11.png"
                                                        alt
                                                        class="avatar-xl bg-light-subtle rounded border">
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!">
                                                    <img
                                                        src="{{ asset('assets') }}/images/p-10.png"
                                                        alt
                                                        class="avatar-xl bg-light-subtle rounded border">
                                                </a>
                                            </div>
                                            <div
                                                class="avatar-xl bg-light rounded border d-flex justify-content-center align-items-center">
                                                <a
                                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                                    class="fs-16 fw-semibold text-dark">
                                                    44+
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex  align-items-center justify-content-between mt-4 mb-3">
                                            <h4
                                                class="card-title">Customer
                                                Reviews (2567)
                                                :</h4>
                                            <div>
                                                <a
                                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                                    class="link-primary fw-medium text-decoration-underline">View
                                                    All</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-lg-12">
                                                <div
                                                    class="d-flex gap-3">
                                                    <div>
                                                        <span
                                                            class="badge bg-warning-subtle text-dark py-1 px-2 fs-14 d-flex align-items-center justify-content-center gap-1 mb-2">4.5
                                                            <iconify-icon
                                                                icon="solar:star-bold"
                                                                class="text-warning fs-16"><template
                                                                    shadowrootmode="open"><style
                                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="1em"
                                                                        height="1em"
                                                                        viewBox="0 0 24 24"><path
                                                                            fill="currentColor"
                                                                            d="M9.153 5.408C10.42 3.136 11.053 2 12 2s1.58 1.136 2.847 3.408l.328.588c.36.646.54.969.82 1.182s.63.292 1.33.45l.636.144c2.46.557 3.689.835 3.982 1.776c.292.94-.546 1.921-2.223 3.882l-.434.507c-.476.557-.715.836-.822 1.18c-.107.345-.071.717.001 1.46l.066.677c.253 2.617.38 3.925-.386 4.506s-1.918.051-4.22-1.009l-.597-.274c-.654-.302-.981-.452-1.328-.452s-.674.15-1.328.452l-.596.274c-2.303 1.06-3.455 1.59-4.22 1.01c-.767-.582-.64-1.89-.387-4.507l.066-.676c.072-.744.108-1.116 0-1.46c-.106-.345-.345-.624-.821-1.18l-.434-.508c-1.677-1.96-2.515-2.941-2.223-3.882S3.58 8.328 6.04 7.772l.636-.144c.699-.158 1.048-.237 1.329-.45s.46-.536.82-1.182z"></path></svg></template></iconify-icon></span>
                                                        <a
                                                            href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!">
                                                            <img
                                                                src="{{ asset('assets') }}/images/p-10.png"
                                                                alt
                                                                class="avatar-xl bg-light-subtle rounded border">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <p
                                                            class="fs-15 d-flex gap-2 fw-semibold">Ruth
                                                            L.
                                                            Garner<span
                                                                class="text-muted fs-14 fw-normal">|</span><span
                                                                class="text-muted fs-14 fw-normal">11
                                                                November
                                                                2023</span></p>
                                                        <p
                                                            class="mb-0">The
                                                            design
                                                            of
                                                            the
                                                            chair
                                                            is
                                                            sleek
                                                            and
                                                            modern,
                                                            fitting
                                                            perfectly
                                                            with
                                                            the
                                                            aesthetic
                                                            of
                                                            my
                                                            home
                                                            office.
                                                            The
                                                            black
                                                            mesh
                                                            backrest
                                                            not
                                                            only
                                                            looks
                                                            stylish
                                                            but
                                                            also
                                                            provides
                                                            excellent
                                                            reachability,
                                                            preventing
                                                            any
                                                            discomfort
                                                            during
                                                            long
                                                            working
                                                            hours.
                                                        </p>
                                                        <div
                                                            class="d-flex align-items-center gap-2 mt-2 mb-1">
                                                            <ul
                                                                class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-half-filled"></i>
                                                                </li>
                                                            </ul>
                                                            <p
                                                                class="fw-medium mb-0 text-dark fs-14">4.5
                                                                /
                                                                5
                                                                Best
                                                                Review</p>
                                                        </div>
                                                        <div
                                                            class="mt-3">
                                                            <a
                                                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                                                class="fs-14 me-3 link-reset"><i
                                                                    class="ti ti-thumb-up fs-18"></i>
                                                                2543</a>
                                                            <a
                                                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                                                class="fs-14 me-3 link-reset"><i
                                                                    class="ti ti-thumb-down fs-18"></i>
                                                                129</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr
                                                    class="my-3">
                                                <div
                                                    class="d-flex gap-3">
                                                    <div>
                                                        <span
                                                            class="badge bg-warning-subtle text-dark py-1 px-2 fs-14 d-flex align-items-center justify-content-center gap-1 mb-2">4.2
                                                            <iconify-icon
                                                                icon="solar:star-bold"
                                                                class="text-warning fs-16"><template
                                                                    shadowrootmode="open"><style
                                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="1em"
                                                                        height="1em"
                                                                        viewBox="0 0 24 24"><path
                                                                            fill="currentColor"
                                                                            d="M9.153 5.408C10.42 3.136 11.053 2 12 2s1.58 1.136 2.847 3.408l.328.588c.36.646.54.969.82 1.182s.63.292 1.33.45l.636.144c2.46.557 3.689.835 3.982 1.776c.292.94-.546 1.921-2.223 3.882l-.434.507c-.476.557-.715.836-.822 1.18c-.107.345-.071.717.001 1.46l.066.677c.253 2.617.38 3.925-.386 4.506s-1.918.051-4.22-1.009l-.597-.274c-.654-.302-.981-.452-1.328-.452s-.674.15-1.328.452l-.596.274c-2.303 1.06-3.455 1.59-4.22 1.01c-.767-.582-.64-1.89-.387-4.507l.066-.676c.072-.744.108-1.116 0-1.46c-.106-.345-.345-.624-.821-1.18l-.434-.508c-1.677-1.96-2.515-2.941-2.223-3.882S3.58 8.328 6.04 7.772l.636-.144c.699-.158 1.048-.237 1.329-.45s.46-.536.82-1.182z"></path></svg></template></iconify-icon></span>
                                                        <a
                                                            href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!">
                                                            <img
                                                                src="{{ asset('assets') }}/images/p-10.png"
                                                                alt
                                                                class="avatar-xl bg-light-subtle rounded border d-none">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <p
                                                            class="fs-15 d-flex gap-2 fw-semibold">Michelle
                                                            M.
                                                            Kellerman<span
                                                                class="text-muted fs-14 fw-normal">|</span><span
                                                                class="text-muted fs-14 fw-normal">20
                                                                March
                                                                2024</span></p>
                                                        <p
                                                            class="mb-0">One
                                                            of
                                                            the
                                                            standout
                                                            features
                                                            of
                                                            this
                                                            chair
                                                            is
                                                            its
                                                            adjustability.
                                                            The
                                                            chair
                                                            offers
                                                            a
                                                            wide
                                                            range
                                                            of
                                                            adjustments,
                                                            including
                                                            seat
                                                            height,
                                                            armrest
                                                            height,
                                                            and
                                                            tilt
                                                            tension.
                                                            The
                                                            lumbar
                                                            support
                                                            can
                                                            be
                                                            easily
                                                            adjusted
                                                            to
                                                            fit
                                                            the
                                                            natural
                                                            curve</p>
                                                        <div
                                                            class="d-flex align-items-center gap-2 mt-2 mb-1">
                                                            <ul
                                                                class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-half-filled"></i>
                                                                </li>
                                                            </ul>
                                                            <p
                                                                class="fw-medium mb-0 text-dark fs-14">4.2
                                                                /
                                                                5
                                                                Best
                                                                Review</p>
                                                        </div>
                                                        <div
                                                            class="mt-3">
                                                            <a
                                                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                                                class="fs-14 me-3 link-reset"><i
                                                                    class="ti ti-thumb-up fs-18"></i>
                                                                1323</a>
                                                            <a
                                                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                                                class="fs-14 me-3 link-reset"><i
                                                                    class="ti ti-thumb-down fs-18"></i>
                                                                34</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-6 col-lg-12 border-start">
                                    <div class="ps-lg-3">
                                        <h4
                                            class="card-title"><iconify-icon
                                                icon="solar:shop-2-bold"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            d="M16.528 2H7.472c-1.203 0-1.804 0-2.288.299c-.483.298-.752.836-1.29 1.912L2.491 7.76c-.325.82-.608 1.786-.062 2.479A2 2 0 0 0 6 9a2 2 0 1 0 4 0a2 2 0 1 0 4 0a2 2 0 1 0 4 0a2 2 0 0 0 3.571 1.238c.546-.693.262-1.659-.062-2.479l-1.404-3.548c-.538-1.076-.806-1.614-1.29-1.912C18.332 2 17.73 2 16.528 2"></path><path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="M20 21.25h2a.75.75 0 0 1 0 1.5H2a.75.75 0 0 1 0-1.5h2V12.5c.744 0 1.433-.232 2-.627a3.5 3.5 0 0 0 2 .627c.744 0 1.433-.232 2-.627a3.5 3.5 0 0 0 2 .627c.744 0 1.433-.232 2-.627a3.5 3.5 0 0 0 2 .627c.744 0 1.433-.232 2-.627a3.5 3.5 0 0 0 2 .627zm-10.5 0h5V18.5c0-.935 0-1.402-.201-1.75a1.5 1.5 0 0 0-.549-.55c-.348-.2-.815-.2-1.75-.2s-1.402 0-1.75.2a1.5 1.5 0 0 0-.549.55c-.201.348-.201.815-.201 1.75z"
                                                            clip-rule="evenodd"></path></svg></template></iconify-icon>
                                            Shop Rating</h4>
                                        <div
                                            class="row align-items-center text-center my-4">
                                            <div
                                                class="col-lg-4">
                                                <h2
                                                    class="text-dark fw-semibold d-flex align-items-center gap-1 justify-content-center">4.2
                                                    <iconify-icon
                                                        icon="solar:star-bold"
                                                        class="text-warning"><template
                                                            shadowrootmode="open"><style
                                                                data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="1em"
                                                                height="1em"
                                                                viewBox="0 0 24 24"><path
                                                                    fill="currentColor"
                                                                    d="M9.153 5.408C10.42 3.136 11.053 2 12 2s1.58 1.136 2.847 3.408l.328.588c.36.646.54.969.82 1.182s.63.292 1.33.45l.636.144c2.46.557 3.689.835 3.982 1.776c.292.94-.546 1.921-2.223 3.882l-.434.507c-.476.557-.715.836-.822 1.18c-.107.345-.071.717.001 1.46l.066.677c.253 2.617.38 3.925-.386 4.506s-1.918.051-4.22-1.009l-.597-.274c-.654-.302-.981-.452-1.328-.452s-.674.15-1.328.452l-.596.274c-2.303 1.06-3.455 1.59-4.22 1.01c-.767-.582-.64-1.89-.387-4.507l.066-.676c.072-.744.108-1.116 0-1.46c-.106-.345-.345-.624-.821-1.18l-.434-.508c-1.677-1.96-2.515-2.941-2.223-3.882S3.58 8.328 6.04 7.772l.636-.144c.699-.158 1.048-.237 1.329-.45s.46-.536.82-1.182z"></path></svg></template></iconify-icon></h2>
                                                <p
                                                    class="mb-0 fs-5">Best
                                                    Review</p>
                                            </div>
                                            <div
                                                class="col-lg-8">
                                                <div
                                                    class="d-flex align-items-center gap-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">5
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 70%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">3641</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 my-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">4
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 65%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">2912</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 my-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">3
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 60%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">321</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 my-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">2
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 30%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">231</h5>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center gap-3 mt-3">
                                                    <h5
                                                        class="mb-0 flex-shrink-0">1
                                                        star
                                                        :</h5>
                                                    <div
                                                        class="progress flex-grow-1"
                                                        role="progressbar"
                                                        aria-label="Basic example"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="height: 10px">
                                                        <div
                                                            class="progress-bar bg-warning rounded"
                                                            style="width: 20%"></div>
                                                    </div>
                                                    <h5
                                                        class="mb-0 flex-shrink-0">149</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <h4
                                            class="card-title">Shop
                                            Product Rating
                                            :</h4>
                                        <div
                                            class="row mt-3 text-center g-2">
                                            <div
                                                class="col-lg-4">
                                                <img
                                                    src="{{ asset('assets') }}/images/p-3.png"
                                                    alt
                                                    class="img-fluid border rounded">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                    <ul
                                                        class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-half-filled"></i>
                                                        </li>
                                                    </ul>
                                                    <p
                                                        class="fw-medium mb-0 text-dark fs-14">4.5
                                                        / 5</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-4">
                                                <img
                                                    src="{{ asset('assets') }}/images/p-9.png"
                                                    alt
                                                    class="img-fluid border rounded">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                    <ul
                                                        class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-half-filled"></i>
                                                        </li>
                                                    </ul>
                                                    <p
                                                        class="fw-medium mb-0 text-dark fs-14">4.2
                                                        / 5</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-4">
                                                <img
                                                    src="{{ asset('assets') }}/images/p-10.png"
                                                    alt
                                                    class="img-fluid border rounded">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                    <ul
                                                        class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-half-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p
                                                        class="fw-medium mb-0 text-dark fs-14">3.5
                                                        / 5</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-4">
                                                <img
                                                    src="{{ asset('assets') }}/images/p-11.png"
                                                    alt
                                                    class="img-fluid border rounded">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                    <ul
                                                        class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                    </ul>
                                                    <p
                                                        class="fw-medium mb-0 text-dark fs-14">5
                                                        / 5</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-4">
                                                <img
                                                    src="{{ asset('assets') }}/images/p-12.png"
                                                    alt
                                                    class="img-fluid border rounded">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                    <ul
                                                        class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-filled"></i>
                                                        </li>
                                                        <li>
                                                            <i
                                                                class="ti ti-star-half-filled"></i>
                                                        </li>
                                                    </ul>
                                                    <p
                                                        class="fw-medium mb-0 text-dark fs-14">4.4
                                                        / 5</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane"
                            id="offer-warranty" role="tabpanel">
                            <h4 class="card-title">Available
                                Offers : </h4>
                            <div class="row mt-3 g-2">
                                <div class="col-lg-6">
                                    <div
                                        class="border rounded p-2 text-center">
                                        <p
                                            class="fw-semibold text-dark fs-20 my-1">To
                                            Get This Price , Use
                                            Code : <span
                                                class="text-primary fw-semibold">WINTER2024</span></p>
                                        <p
                                            class="fs-15 text-muted fw-medium">Fast
                                            &amp; Free
                                            Delivery</p>
                                        <a
                                            href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                            class="btn btn-primary">Show
                                            Offers</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div
                                        class="border rounded p-2 text-center">
                                        <p
                                            class="fw-semibold text-dark fs-20 my-1">Enjoy
                                            an Additional 20%
                                            Discount on Your
                                            Purchase : <span
                                                class="text-primary fw-semibold">OCEN24</span></p>
                                        <p
                                            class="fs-15 text-muted fw-medium">Fast
                                            &amp; Free
                                            Delivery</p>
                                        <a
                                            href="https://coderthemes.com/boron/layouts/apps-ecommerce-product-details.html#!"
                                            class="btn btn-primary">Show
                                            Offers</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title my-3">Shop
                                Offers : </h4>
                            <div class="row g-3">
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:refresh-square-bold"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="M3.464 3.464C2 4.93 2 7.286 2 12s0 7.071 1.464 8.535C4.93 22 7.286 22 12 22s7.071 0 8.535-1.465C22 19.072 22 16.714 22 12s0-7.071-1.465-8.536C19.072 2 16.714 2 12 2S4.929 2 3.464 3.464m1.997 7.62A6.59 6.59 0 0 1 12.01 5.25c1.982 0 3.76.875 4.967 2.257a.75.75 0 0 1-1.13.986A5.08 5.08 0 0 0 12.01 6.75a5.09 5.09 0 0 0-5.037 4.333h.364a.75.75 0 0 1 .53 1.281l-1.169 1.167a.75.75 0 0 1-1.06 0L4.47 12.364a.75.75 0 0 1 .53-1.28zm11.84-.615a.75.75 0 0 1 1.06 0l1.169 1.167a.75.75 0 0 1-.53 1.28h-.46a6.59 6.59 0 0 1-6.55 5.834a6.58 6.58 0 0 1-4.967-2.256a.75.75 0 0 1 1.13-.987a5.08 5.08 0 0 0 3.838 1.743a5.09 5.09 0 0 0 5.036-4.333h-.363a.75.75 0 0 1-.53-1.281z"
                                                            clip-rule="evenodd"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">Free
                                                Return</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:money-bag-bold"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="M12.052 1.25h-.104c-.899 0-1.648 0-2.242.08c-.628.084-1.195.27-1.65.725c-.456.456-.642 1.023-.726 1.65c-.057.427-.074 1.446-.078 2.32c-2.022.067-3.237.303-4.08 1.147C2 8.343 2 10.229 2 14s0 5.657 1.172 6.828S6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.172S22 17.771 22 14s0-5.657-1.172-6.828c-.843-.844-2.058-1.08-4.08-1.146c-.004-.875-.02-1.894-.078-2.32c-.084-.628-.27-1.195-.726-1.65c-.455-.456-1.022-.642-1.65-.726c-.594-.08-1.344-.08-2.242-.08m3.196 4.752c-.005-.847-.019-1.758-.064-2.097c-.063-.461-.17-.659-.3-.789s-.328-.237-.79-.3c-.482-.064-1.13-.066-2.094-.066s-1.612.002-2.095.067c-.461.062-.659.169-.789.3s-.237.327-.3.788c-.045.34-.06 1.25-.064 2.097Q9.34 5.999 10 6h4q.662 0 1.248.002M12 9.25a.75.75 0 0 1 .75.75v.01c1.089.274 2 1.133 2 2.323a.75.75 0 0 1-1.5 0c0-.384-.426-.916-1.25-.916s-1.25.532-1.25.916s.426.917 1.25.917c1.385 0 2.75.96 2.75 2.417c0 1.19-.911 2.048-2 2.323V18a.75.75 0 0 1-1.5 0v-.01c-1.089-.274-2-1.133-2-2.323a.75.75 0 0 1 1.5 0c0 .384.426.916 1.25.916s1.25-.532 1.25-.916s-.426-.917-1.25-.917c-1.385 0-2.75-.96-2.75-2.417c0-1.19.911-2.049 2-2.323V10a.75.75 0 0 1 .75-.75"
                                                            clip-rule="evenodd"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">Multiple
                                                Payment
                                                Option</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:sofa-2-bold-duotone"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            d="M12.75 14h4.45a.8.8 0 0 0 .8-.8V12a2 2 0 1 1 4 0v2.444a3.55 3.55 0 0 1-1.25 2.707V19a.75.75 0 0 1-1.5 0v-1.092a3.6 3.6 0 0 1-.806.092H5.556a3.6 3.6 0 0 1-.806-.092V19a.75.75 0 0 1-1.5 0v-1.849A3.55 3.55 0 0 1 2 14.444V12a2 2 0 1 1 4 0v1.2a.8.8 0 0 0 .8.8h4.45V5h1.5z"></path><path
                                                            fill="currentColor"
                                                            d="M17.2 14h-4.45V5H15c.93 0 1.394 0 1.78.077a4 4 0 0 1 3.143 3.143c.043.214.062.452.07.78H20v1a2 2 0 0 0-2 2v1.2a.8.8 0 0 1-.8.8m-5.95 0H6.8a.8.8 0 0 1-.8-.8V12a2 2 0 0 0-1.993-2V9c.008-.328.027-.566.07-.78A4 4 0 0 1 7.22 5.077C7.606 5 8.07 5 9 5h2.25z"
                                                            opacity=".5"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">Free
                                                Assembly</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:verified-check-bold"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="M9.592 3.2a6 6 0 0 1-.495.399c-.298.2-.633.338-.985.408c-.153.03-.313.043-.632.068c-.801.064-1.202.096-1.536.214a2.71 2.71 0 0 0-1.655 1.655c-.118.334-.15.735-.214 1.536a6 6 0 0 1-.068.632c-.07.352-.208.687-.408.985c-.087.13-.191.252-.399.495c-.521.612-.782.918-.935 1.238c-.353.74-.353 1.6 0 2.34c.153.32.414.626.935 1.238c.208.243.312.365.399.495c.2.298.338.633.408.985c.03.153.043.313.068.632c.064.801.096 1.202.214 1.536a2.71 2.71 0 0 0 1.655 1.655c.334.118.735.15 1.536.214c.319.025.479.038.632.068c.352.07.687.209.985.408c.13.087.252.191.495.399c.612.521.918.782 1.238.935c.74.353 1.6.353 2.34 0c.32-.153.626-.414 1.238-.935c.243-.208.365-.312.495-.399c.298-.2.633-.338.985-.408c.153-.03.313-.043.632-.068c.801-.064 1.202-.096 1.536-.214a2.71 2.71 0 0 0 1.655-1.655c.118-.334.15-.735.214-1.536c.025-.319.038-.479.068-.632c.07-.352.209-.687.408-.985c.087-.13.191-.252.399-.495c.521-.612.782-.918.935-1.238c.353-.74.353-1.6 0-2.34c-.153-.32-.414-.626-.935-1.238a6 6 0 0 1-.399-.495a2.7 2.7 0 0 1-.408-.985a6 6 0 0 1-.068-.632c-.064-.801-.096-1.202-.214-1.536a2.71 2.71 0 0 0-1.655-1.655c-.334-.118-.735-.15-1.536-.214a6 6 0 0 1-.632-.068a2.7 2.7 0 0 1-.985-.408a6 6 0 0 1-.495-.399c-.612-.521-.918-.782-1.238-.935a2.71 2.71 0 0 0-2.34 0c-.32.153-.626.414-1.238.935m6.781 6.663a.814.814 0 0 0-1.15-1.15l-4.85 4.85l-1.596-1.595a.814.814 0 0 0-1.15 1.15l2.17 2.17a.814.814 0 0 0 1.15 0z"
                                                            clip-rule="evenodd"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">Guaranteed
                                                Product
                                                Replace</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:tram-bold"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="M6.376 19.572c-.478-.17-.87-.41-1.204-.744c-.975-.974-1.139-2.442-1.166-5.078h15.988c-.027 2.636-.191 4.104-1.166 5.078a3.15 3.15 0 0 1-1.203.744l1.046 2.093a.75.75 0 0 1-1.342.67l-1.224-2.447C15.057 20 13.726 20 12 20s-3.057 0-4.105-.112L6.67 22.336a.75.75 0 0 1-1.342-.671zM14.75 16a.75.75 0 0 1 .75-.75H17a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75M7 15.25a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5z"
                                                            clip-rule="evenodd"></path><path
                                                            fill="currentColor"
                                                            d="M20 12.25V10c0-3.771 0-5.657-1.172-6.828c-.878-.88-2.16-1.099-4.336-1.154A.48.48 0 0 0 14 2.5a2 2 0 1 1-4 0a.48.48 0 0 0-.492-.482c-2.177.055-3.458.275-4.336 1.154C4 4.343 4 6.229 4 10v2.25z"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">Fast
                                                &amp; Free
                                                Shipping</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:tag-price-bold"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="m16.137 4.728l1.83 1.83C20.656 9.248 22 10.592 22 12.262c0 1.671-1.344 3.015-4.033 5.704c-2.69 2.69-4.034 4.034-5.705 4.034c-1.67 0-3.015-1.344-5.704-4.033l-1.83-1.83c-1.545-1.546-2.318-2.318-2.605-3.321c-.288-1.003-.042-2.068.45-4.197l.283-1.228c.413-1.792.62-2.688 1.233-3.302s1.51-.82 3.302-1.233l1.228-.284c2.13-.491 3.194-.737 4.197-.45c1.003.288 1.775 1.061 3.32 2.606m-4.99 9.6c-.673-.672-.668-1.638-.265-2.403a.75.75 0 0 1 1.04-1.046c.34-.18.713-.276 1.085-.272a.75.75 0 0 1-.014 1.5a.88.88 0 0 0-.609.277c-.387.387-.286.775-.177.884c.11.109.497.21.884-.177c.784-.784 2.138-1.044 3.005-.177c.673.673.668 1.639.265 2.404a.75.75 0 0 1-1.04 1.045a2.2 2.2 0 0 1-1.472.232a.75.75 0 1 1 .302-1.47c.177.037.463-.021.708-.266c.387-.388.286-.775.177-.884c-.11-.109-.497-.21-.884.177c-.784.784-2.138 1.044-3.005.176m-1.126-4.035a2 2 0 1 0-2.829-2.828a2 2 0 0 0 2.829 2.828"
                                                            clip-rule="evenodd"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">Your
                                                Best Price
                                                Matching</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:headphones-round-bold"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            d="M2 12.124C2 6.533 6.477 2 12 2s10 4.533 10 10.124v5.243c0 .817 0 1.378-.143 1.87a3.52 3.52 0 0 1-1.847 2.188c-.458.22-1.004.307-1.801.434l-.13.02a13 13 0 0 1-.727.105c-.209.02-.422.027-.64-.016a2.1 2.1 0 0 1-1.561-1.35a2.2 2.2 0 0 1-.116-.639c-.012-.204-.012-.452-.012-.742v-4.173c0-.425 0-.791.097-1.105a2.1 2.1 0 0 1 1.528-1.43c.316-.073.677-.044 1.096-.01l.093.007l.11.01c.783.062 1.32.104 1.775.275q.481.181.883.487v-1.174c0-4.811-3.853-8.711-8.605-8.711s-8.605 3.9-8.605 8.711v1.174c.267-.203.563-.368.883-.487c.455-.17.992-.213 1.775-.276l.11-.009l.093-.007c.42-.034.78-.063 1.096.01a2.1 2.1 0 0 1 1.528 1.43c.098.314.097.68.097 1.105v4.172c0 .291 0 .54-.012.743c-.012.213-.04.427-.116.638a2.1 2.1 0 0 1-1.56 1.35a2.2 2.2 0 0 1-.641.017c-.201-.02-.444-.059-.727-.104l-.13-.02c-.797-.128-1.344-.215-1.801-.436a3.52 3.52 0 0 1-1.847-2.188c-.118-.405-.139-.857-.142-1.461L2 17.58z"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">24/7
                                                Support</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div
                                        class="d-flex align-items-center gap-2">
                                        <div
                                            class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                            <iconify-icon
                                                icon="solar:card-2-bold"
                                                class="fs-28 text-primary"><template
                                                    shadowrootmode="open"><style
                                                        data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        viewBox="0 0 24 24"><path
                                                            fill="currentColor"
                                                            d="M14 4h-4C6.229 4 4.343 4 3.172 5.172c-.844.843-1.08 2.057-1.146 4.078h19.948c-.066-2.021-.302-3.235-1.146-4.078C19.657 4 17.771 4 14 4"></path><path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="M14 20h-4c-3.771 0-5.657 0-6.828-1.172S2 15.771 2 12q0-.662.002-1.25h19.996Q22 11.338 22 12c0 3.771 0 5.657-1.172 6.828S17.771 20 14 20m2.045-7.75c.433 0 .83 0 1.152.043c.356.048.731.16 1.04.47s.422.684.47 1.04c.043.323.043.72.043 1.152v.09c0 .433 0 .83-.043 1.152c-.048.356-.16.731-.47 1.04s-.684.422-1.04.47c-.323.043-.72.043-1.152.043h-.09c-.433 0-.83 0-1.152-.043c-.356-.048-.731-.16-1.04-.47s-.422-.684-.47-1.04c-.043-.323-.043-.72-.043-1.152v-.09c0-.433 0-.83.043-1.152c.048-.356.16-.731.47-1.04s.684-.422 1.04-.47c.323-.043.72-.043 1.152-.043zM5.25 13.5a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75m0 3a.75.75 0 0 1 .75-.75h4a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75"
                                                            clip-rule="evenodd"></path><path
                                                            fill="currentColor"
                                                            d="m14.823 13.823l.003-.001l.01-.005a.7.7 0 0 1 .167-.037c.21-.028.504-.03.997-.03s.787.002.997.03a.7.7 0 0 1 .177.042l.003.001l.001.003l.005.01c.009.022.024.07.037.167c.028.21.03.504.03.997s-.002.787-.03.997a.7.7 0 0 1-.042.177l-.001.003l-.003.001l-.01.005a.7.7 0 0 1-.167.037c-.21.028-.504.03-.997.03s-.787-.002-.997-.03a.7.7 0 0 1-.177-.042l-.003-.001l-.001-.003l-.005-.01a.7.7 0 0 1-.037-.167c-.028-.21-.03-.504-.03-.997s.002-.787.03-.997a.7.7 0 0 1 .042-.177z"></path></svg></template></iconify-icon>
                                        </div>

                                        <div>
                                            <p
                                                class="text-dark fw-medium fs-16 mb-0">Secure
                                                Checkout</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="alert alert-success d-flex align-items-center mt-4 mb-0"
                                role="alert">
                                <iconify-icon
                                    icon="solar:shield-check-bold"
                                    class="fs-20 me-1"><template
                                        shadowrootmode="open"><style
                                            data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 24 24"><path
                                                fill="currentColor"
                                                fill-rule="evenodd"
                                                d="M3.378 5.082C3 5.62 3 7.22 3 10.417v1.574c0 5.638 4.239 8.375 6.899 9.536c.721.315 1.082.473 2.101.473c1.02 0 1.38-.158 2.101-.473C16.761 20.365 21 17.63 21 11.991v-1.574c0-3.198 0-4.797-.378-5.335c-.377-.537-1.88-1.052-4.887-2.081l-.573-.196C13.595 2.268 12.812 2 12 2s-1.595.268-3.162.805L8.265 3c-3.007 1.03-4.51 1.545-4.887 2.082M15.06 10.5a.75.75 0 0 0-1.12-.999l-3.011 3.374l-.87-.974a.75.75 0 0 0-1.118 1l1.428 1.6a.75.75 0 0 0 1.119 0z"
                                                clip-rule="evenodd"></path></svg></template></iconify-icon>
                                <div class="lh-1"><strong>3
                                        Years -
                                    </strong>Guaranteed Product
                                    Global Warranty</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('script')


@endpush
