@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<!-- Start Content-->
<div class="container-fluid">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Order Details</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>

                <li class="breadcrumb-item active">Order Details</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-start justify-content-between">
                        <div class="col-lg-5">
                            <p class="text-dark fw-medium fs-15 d-flex align-items-center gap-1 mb-2">
                                <iconify-icon icon="solar:box-bold-duotone" class="text-danger"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8.422 20.618C10.178 21.54 11.056 22 12 22V12L2.638 7.073l-.04.067C2 8.154 2 9.417 2 11.942v.117c0 2.524 0 3.787.597 4.801c.598 1.015 1.674 1.58 3.825 2.709z"></path><path fill="currentColor" d="m17.577 4.432l-2-1.05C13.822 2.461 12.944 2 12 2c-.945 0-1.822.46-3.578 1.382l-2 1.05C4.318 5.536 3.242 6.1 2.638 7.072L12 12l9.362-4.927c-.606-.973-1.68-1.537-3.785-2.641" opacity=".7"></path><path fill="currentColor" d="m21.403 7.14l-.041-.067L12 12v10c.944 0 1.822-.46 3.578-1.382l2-1.05c2.151-1.129 3.227-1.693 3.825-2.708c.597-1.014.597-2.277.597-4.8v-.117c0-2.525 0-3.788-.597-4.802" opacity=".5"></path><path fill="currentColor" d="m6.323 4.484l.1-.052l1.493-.784l9.1 5.005l4.025-2.011q.205.232.362.498c.15.254.262.524.346.825L17.75 9.964V13a.75.75 0 0 1-1.5 0v-2.286l-3.5 1.75v9.44A3 3 0 0 1 12 22c-.248 0-.493-.032-.75-.096v-9.44l-8.998-4.5c.084-.3.196-.57.346-.824q.156-.266.362-.498l9.04 4.52l3.387-1.693z"></path></svg></template></iconify-icon>
                                Order
                                <i class="ti ti-arrow-right"></i>
                                <span class="badge bg-light-subtle rounded-pill text-dark border fs-12 py-1 px-2">
                                    #OC3142-EN
                                </span>
                            </p>

                            <h3 class="mb-1 text-dark fw-semibold">Order ID : #OC3142-EN <span class="badge bg-warning-subtle rounded-pill text-warning border border-warning fs-11 py-1 px-2 my-2">Shipping</span> <span class="badge bg-success-subtle rounded-pill text-success border border-success fs-11 py-1 px-2  my-2"> No Action Needed</span></h3>

                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <p class="mb-0 fs-15">Order Date : 2 July 2024</p>
                                <div>|</div>
                                <div>
                                    <p class="mb-0 fs-15 text-success fw-medium  d-flex align-items-center gap-1"><i class="ti ti-plane-tilt"></i>Estimated delivery: July 9, 2024</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 text-end">
                            <div class="d-flex gap-2 flex-wrap justify-content-end my-2">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="btn btn-soft-primary">Invoice</a>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="btn btn-primary">Edit Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                            <iconify-icon icon="solar:delivery-bold-duotone" class="fs-32 text-primary"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2.277 5.247a.75.75 0 0 1 .924-.522l1.703.472A2.71 2.71 0 0 1 6.8 7.075l2.151 7.786l.158.547a2.96 2.96 0 0 1 1.522 1.267l.31-.096l8.87-2.305a.75.75 0 1 1 .378 1.452l-8.837 2.296l-.33.102c-.006 1.27-.883 2.432-2.21 2.776c-1.59.414-3.225-.502-3.651-2.044s.518-3.129 2.108-3.542q.119-.03.237-.052L5.354 7.474a1.21 1.21 0 0 0-.85-.831L2.8 6.17a.75.75 0 0 1-.523-.923"></path><path fill="currentColor" d="m9.564 8.73l.515 1.863c.485 1.755.727 2.633 1.44 3.032c.713.4 1.618.164 3.428-.306l1.92-.5c1.81-.47 2.715-.705 3.127-1.396c.412-.692.17-1.57-.316-3.325l-.514-1.862c-.485-1.756-.728-2.634-1.44-3.033c-.714-.4-1.619-.164-3.429.307l-1.92.498c-1.81.47-2.715.706-3.126 1.398c-.412.691-.17 1.569.315 3.324" opacity=".5"></path></svg></template></iconify-icon>
                        </div>
                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="btn btn-primary btn-sm">Track Order</a>
                    </div>
                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-5 pt-1">
                        <div>
                            <p class="fs-15 fw-medium mb-0 text-muted mb-1">Estimated Arrival</p>
                            <p class="text-dark fw-semibold mb-0 fs-16">9 July 2024</p>
                        </div>
                        <div>
                            <p class="fs-15 fw-medium mb-0 text-muted mb-1">Tracker ID</p>
                            <p class="text-dark fw-semibold mb-0 fs-16">#TR73647</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded  flex-shrink-0">
                            <img src="{{ asset('assets') }}/images/mastercard.svg" alt="Card Img" class="img-fluid">
                        </div>
                        <div>
                            <p class="text-dark fw-medium fs-16 mb-1">Master Card</p>
                            <p class="mb-0">**** **** **** 3541 </p>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-success-subtle rounded-pill text-success border border-success fs-11 py-1 px-2  my-2">Paid</span>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-5 pt-1">
                        <div>
                            <p class="fs-15 fw-medium mb-0 text-muted mb-1">Transaction ID</p>
                            <p class="text-dark fw-semibold mb-0 fs-16">TR626788-MR</p>
                        </div>
                        <div>
                            <p class="fs-15 fw-medium mb-0 text-muted mb-1">Payment Method</p>
                            <p class="text-dark fw-semibold mb-0 fs-16">Master Card</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                        <iconify-icon icon="solar:scooter-bold-duotone" class="fs-32 text-primary"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6.5 19a3 3 0 0 0 3-3h-6a3 3 0 0 0 3 3m12.324-8.502L18 11l-1.643-3.5h1.482c.618 0 .927 0 1.157.132a1 1 0 0 1 .372.372c.132.23.132.54.132 1.157c0 .326 0 .49-.047.638a1 1 0 0 1-.143.282c-.091.126-.223.223-.486.417" opacity=".5"></path><path fill="currentColor" d="M13.864 5.783c-.313-.032-.72-.033-1.336-.033H12a.75.75 0 0 1 0-1.5h.565c.57 0 1.054 0 1.454.041c.425.044.819.14 1.19.37c.373.23.634.539.864.9c.216.34.432.772.687 1.282l3.148 6.297a3.001 3.001 0 1 1-3.814 3.61H3.06q-.1.001-.197-.005a1.75 1.75 0 0 1-1.613-1.826v-.057c0-.335 0-.548.015-.735A4.75 4.75 0 0 1 5.702 9.76a9 9 0 0 1 .54-.01h.81c.898 0 1.648 0 2.242.08c.628.084 1.195.27 1.65.726c.456.455.642 1.022.726 1.65c.08.594.08 1.344.08 2.242v.802h4.345a3 3 0 0 1 2.119-2.146l-2.78-5.557c-.275-.552-.457-.915-.627-1.18c-.16-.252-.274-.361-.386-.43c-.111-.07-.26-.123-.557-.154"></path></svg></template></iconify-icon>
                    </div>
                    <p class="my-3 text-dark fs-20 text-dark fw-medium">Be patient, package on deliver!</p>
                    <div class="d-flex flex-wrap align-items-center mt-3 mb-2 justify-content-between gap-2">
                        <div>
                            <span class="badge bg-light-subtle rounded-pill text-dark border fs-13 fw-medium py-1 px-2 d-flex align-items-center gap-1"><i class="ti ti-plane-tilt text-warning"></i> 613 Kuhl Avenue</span>
                        </div>
                        <i class="ti ti-arrow-narrow-right fs-18 text-muted"></i>
                        <div>
                            <span class="badge bg-light-subtle rounded-pill text-dark border fs-13 fw-medium py-1 px-2 d-flex align-items-center gap-1"><iconify-icon icon="solar:map-point-bold-duotone" class="fs-18 text-warning"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2c-4.418 0-8 4.003-8 8.5c0 4.462 2.553 9.312 6.537 11.174a3.45 3.45 0 0 0 2.926 0C17.447 19.812 20 14.962 20 10.5C20 6.003 16.418 2 12 2" opacity=".5"></path><path fill="currentColor" d="M12 12.5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5"></path></svg></template></iconify-icon> 1890 Uitsig St Grahamstad USA</span>
                        </div>
                    </div>
                    <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                        <div class="progress-bar bg-warning rounded progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Timeline</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td class="px-0">
                                        <p class="mb-1 fs-14 fw-medium">4 July (Now)</p>
                                        <p class="mb-0 fs-14 fw-medium">06:00</p>
                                    </td>
                                    <td class="fs-14 fw-medium">
                                        <p class="mb-1 fs-14 fw-medium">Your package is packed by the courier</p>
                                        <p class="mb-0 fs-14 fw-medium text-muted">613 Kuhl Avenue Jennifer Lane</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-0">
                                        <p class="mb-1 fs-14 fw-medium text-muted">2 July</p>
                                        <p class="mb-0 fs-14 fw-medium text-muted">10:00</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 fs-14 fw-medium text-muted">Shipment has been created</p>
                                        <p class="mb-0 fs-14 fw-medium text-muted">613 Kuhl Avenue</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-0">
                                        <p class="mb-1 fs-14 fw-medium text-muted">2 July</p>
                                        <p class="mb-0 fs-14 fw-medium text-muted">04:00</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 fs-14 fw-medium text-muted">Order Placed</p>
                                        <p class="mb-0 fs-14 fw-medium text-muted">Coderthemes <iconify-icon icon="solar:verified-check-bold" class="align-middle text-success"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M9.592 3.2a6 6 0 0 1-.495.399c-.298.2-.633.338-.985.408c-.153.03-.313.043-.632.068c-.801.064-1.202.096-1.536.214a2.71 2.71 0 0 0-1.655 1.655c-.118.334-.15.735-.214 1.536a6 6 0 0 1-.068.632c-.07.352-.208.687-.408.985c-.087.13-.191.252-.399.495c-.521.612-.782.918-.935 1.238c-.353.74-.353 1.6 0 2.34c.153.32.414.626.935 1.238c.208.243.312.365.399.495c.2.298.338.633.408.985c.03.153.043.313.068.632c.064.801.096 1.202.214 1.536a2.71 2.71 0 0 0 1.655 1.655c.334.118.735.15 1.536.214c.319.025.479.038.632.068c.352.07.687.209.985.408c.13.087.252.191.495.399c.612.521.918.782 1.238.935c.74.353 1.6.353 2.34 0c.32-.153.626-.414 1.238-.935c.243-.208.365-.312.495-.399c.298-.2.633-.338.985-.408c.153-.03.313-.043.632-.068c.801-.064 1.202-.096 1.536-.214a2.71 2.71 0 0 0 1.655-1.655c.118-.334.15-.735.214-1.536c.025-.319.038-.479.068-.632c.07-.352.209-.687.408-.985c.087-.13.191-.252.399-.495c.521-.612.782-.918.935-1.238c.353-.74.353-1.6 0-2.34c-.153-.32-.414-.626-.935-1.238a6 6 0 0 1-.399-.495a2.7 2.7 0 0 1-.408-.985a6 6 0 0 1-.068-.632c-.064-.801-.096-1.202-.214-1.536a2.71 2.71 0 0 0-1.655-1.655c-.334-.118-.735-.15-1.536-.214a6 6 0 0 1-.632-.068a2.7 2.7 0 0 1-.985-.408a6 6 0 0 1-.495-.399c-.612-.521-.918-.782-1.238-.935a2.71 2.71 0 0 0-2.34 0c-.32.153-.626.414-1.238.935m6.781 6.663a.814.814 0 0 0-1.15-1.15l-4.85 4.85l-1.596-1.595a.814.814 0 0 0-1.15 1.15l2.17 2.17a.814.814 0 0 0 1.15 0z" clip-rule="evenodd"></path></svg></template></iconify-icon></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Shipment &amp; Details</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2">
                        <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                            <img src="{{ asset('assets') }}/images/digital-ocean.svg" alt="" class="avatar-md">
                        </div>

                        <div>
                            <p class="text-dark fw-medium fs-16 mb-1">American Franklin Simon</p>
                            <p class="mb-0">dhanookapns142@armyspy.com </p>
                        </div>
                    </div>
                    <div class="row justify-content-between my-3">
                        <div class="col-lg-5">
                            <p class="fs-15 mb-1">Recipient</p>
                            <p class="fw-semibold text-dark fs-15 mb-0">Dhanoo K.</p>
                        </div>
                        <div class="col-lg-7">
                            <p class="fs-15 mb-1">Delivery Address</p>
                            <p class="fw-semibold text-dark fs-15 mb-0">1890 Uitsig Grahamstad USA</p>
                        </div>
                    </div>
                    <div class="row justify-content-between mt-4">
                        <div class="col-lg-5">
                            <p class="fs-15 mb-1">Phone Number</p>
                            <p class="fw-semibold text-dark fs-15 mb-0">+ 727-456-6512</p>
                        </div>
                        <div class="col-lg-7">
                            <p class="fs-15 mb-1">Payment ID</p>
                            <span class="badge bg-light-subtle rounded-pill text-dark border fs-13 fw-medium py-1 px-2 ">#PY26356-NT <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="ms-1"><i class="ti ti-copy"></i></a></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe class="gmap_iframe rounded" width="100%" style="height: 264px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=""></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="mb-0 card-title">Order Items</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center border border-dashed rounded p-2 gap-3">
                                <div class="rounded bg-light avatar-xl d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets') }}/images/p-3.png" alt="" class="avatar-xl">
                                </div>
                                <div>
                                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="text-dark fw-medium fs-15">Minetta Rattan Swivel Luxury Green Lounge Chair</a>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Price : </span> $300.00</p>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Size : </span>56L X 63D X 102H CM</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center border border-dashed rounded p-2 gap-3">
                                <div class="rounded bg-light avatar-xl d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets') }}/images/p-6.png" alt="" class="avatar-xl">
                                </div>
                                <div>
                                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="text-dark fw-medium fs-15">Jordan Jumpman MVP Men's Shoes Size</a>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Price : </span> $400.00</p>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Size : </span> 8</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center border border-dashed rounded p-2 gap-3">
                                <div class="rounded bg-light avatar-xl d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets') }}/images/p-1.png" alt="" class="avatar-xl">
                                </div>
                                <div>
                                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="text-dark fw-medium fs-15">Men White Slim Fit T-shirt</a>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Price : </span> $70.90</p>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Size : </span> M</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center border border-dashed rounded p-2 gap-3">
                                <div class="rounded bg-light avatar-xl d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets') }}/images/p-4.png" alt="" class="avatar-xl">
                                </div>
                                <div>
                                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="text-dark fw-medium fs-15">HYPERX Cloud Gaming Headphone</a>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Price : </span> $230.90</p>
                                    <p class="text-muted fw-medium fs-14 my-1"><span class="text-dark">Size : </span> M</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Purchase Summary</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <tbody>
                                <tr>
                                    <td class="px-0">
                                        <p class="mb-0 fs-15 fw-medium"> Sub Total : </p>
                                    </td>
                                    <td class="text-end text-dark fs-14 fw-medium px-0">$1001.8</td>
                                </tr>
                                <tr>
                                    <td class="px-0">
                                        <p class="mb-0 fs-15 fw-medium">Discount : </p>
                                    </td>
                                    <td class="text-end text-dark fs-14 fw-medium px-0">-$120.00</td>
                                </tr>
                                <tr>
                                    <td class="px-0">
                                        <p class="mb-0 fs-15 fw-medium">Delivery Charge : </p>
                                    </td>
                                    <td class="text-end text-success fs-14 fw-medium px-0">Free</td>
                                </tr>
                                <tr>
                                    <td class="px-0">
                                        <p class="mb-0 fs-15 fw-medium">Estimated Tax (18.5%) : </p>
                                    </td>
                                    <td class="text-end text-dark fs-14 fw-medium px-0">$30.00</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between border-top">
                    <div>
                        <p class="fw-medium text-dark mb-0 fs-15">Grand Amount</p>
                    </div>
                    <div>
                        <p class="fw-medium fs-14 text-dark mb-0">$911.8</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end gap-2 text-end mb-3">
        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="btn btn-primary">Contact To Seller</a>
        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html#!" class="btn btn-outline-primary">Invoice</a>
    </div>

</div> <!-- container -->
@endsection



@push('script')

@endpush
