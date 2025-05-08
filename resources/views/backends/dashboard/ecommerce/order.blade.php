@extends('backends.layouts.app')


@push('style')
    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/daterangepicker.css">
@endpush



@section('content')
    <!-- Start Content-->
    <div class="page-container" data-select2-id="10">

        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Orders</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>

                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>

        <div class="row" data-select2-id="9">
            <div class="col-12" data-select2-id="8">
                <div class="card" data-select2-id="7">
                    <div class="card-header border-bottom border-light">
                        <div class="row justify-content-between g-3">
                            <div class="col-lg-6" data-select2-id="6">
                                <div class="row g-3" data-select2-id="5">
                                    <div class="col-lg-4">
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-4" placeholder="Search Order">
                                            <i class="ti ti-search position-absolute top-50 translate-middle-y ms-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="flex-grow-1 d-flex align-items-center">
                                            <label for="status-select" class="me-2">Status</label>

                                            <div class="flex-grow-1" data-select2-id="4">
                                                <select class="form-select my-1 my-md-0 select2-hidden-accessible"
                                                    data-toggle="select2" id="status-select" data-select2-id="status-select"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="2">Select</option>
                                                    <option value="Date" data-select2-id="12">All</option>
                                                    <option value="Name" data-select2-id="13">Cancelled</option>
                                                    <option value="Revenue" data-select2-id="14">Completed</option>
                                                    <option value="Employee" data-select2-id="15">Denied</option>
                                                    <option value="Employee" data-select2-id="16">Pending</option>
                                                    <option value="Employee" data-select2-id="17">Processing</option>
                                                    <option value="Employee" data-select2-id="18">Refunded</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control flatpickr-input"
                                                data-provider="flatpickr" data-deafult-date="01 May to 31 May"
                                                data-date-format="d M" data-range-date="true" readonly="readonly">
                                            <span class="input-group-text bg-primary border-primary text-white">
                                                <i class="ti ti-calendar fs-15"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-md-end mt-3 mt-md-0">
                                    <button type="button" class="btn btn-success waves-effect waves-light me-1"><i
                                            class="ti ti-settings me-1"></i>More
                                        Setting</button>
                                    <button type="button" class="btn btn-dark waves-effect waves-light"><i
                                            class="ti ti-filter me-1"></i>
                                        Filters</button>
                                </div>
                            </div><!-- end col-->
                        </div>
                    </div> <!-- end card-body-->

                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th class="ps-3" style="width: 50px;">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                    </th>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Order Date</th>
                                    <th>Payment Status</th>
                                    <th>Order Status</th>
                                    <th class="text-center" style="width: 120px;">Action</th>
                                </tr>
                            </thead><!-- end thead -->
                            <tbody>
                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM9708</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-8.jpg"
                                                alt class="rounded-circle avatar-xs me-1"><a
                                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Federico
                                                Hand</a></h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> Men White
                                            Slim Fit T-shirt</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> HYPERX
                                            Cloud Gaming
                                            Headphone</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">2 Piece</p>
                                        <p class="mb-0">1 Piece</p>
                                    </td>

                                    <td>
                                        $176.41
                                    </td>
                                    <td>
                                        August 05 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge text-success border border-success-subtle fs-11 p-1">Completed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-info fs-11 p-1"><i
                                                    class="ti ti-checks me-1 align-middle"></i>Delivered</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM2484</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-1.jpg"
                                                alt class="rounded-circle avatar-xs me-1">
                                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Raci
                                                Lopez</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> Minetta
                                            Rattan Swivel Premium
                                            Chair</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> Sleepify
                                            Luno 4 Seater Fabric
                                            Sofa</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">3 Piece</p>
                                        <p class="mb-0">1 Piece</p>
                                    </td>

                                    <td>
                                        $2312.00
                                    </td>
                                    <td>
                                        November 05 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge border border-danger-subtle text-danger fs-11 p-1">Failed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-danger fs-11 p-1"><i
                                                    class="ti ti-x me-1 align-middle"></i>Cancel</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM2543</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-3.jpg"
                                                alt class="rounded-circle avatar-xs me-1">
                                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">James
                                                Cantrell</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> 55 L Laptop
                                            Backpack fits upto 16
                                            In.</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> Men White
                                            Slim Fit T-shirt</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">4 Piece</p>
                                        <p class="mb-0">2 Piece</p>
                                    </td>
                                    <td>
                                        $677.09
                                    </td>
                                    <td>
                                        March 15 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge text-warning border border-warning-subtle fs-11 p-1">Pending</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-dark fs-11 p-1"><i
                                                    class="ti ti-check me-1 align-middle"></i>Ready
                                                To
                                                Pick</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM6754</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-4.jpg"
                                                alt class="rounded-circle avatar-xs me-1">
                                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Reginald
                                                Brown</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> Sleepify
                                            Luno 4 Seater Fabric
                                            Sofa</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> HYPERX
                                            Cloud Gaming
                                            Headphone</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">2 Piece</p>
                                        <p class="mb-0">1 Piece</p>
                                    </td>
                                    <td>
                                        $532.98
                                    </td>
                                    <td>
                                        December 23 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge border border-danger-subtle text-danger fs-11 p-1">Failed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-danger fs-11 p-1"><i
                                                    class="ti ti-x me-1 align-middle"></i>Cancel</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM0863</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-5.jpg"
                                                alt class="rounded-circle avatar-xs me-1"><a
                                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Stacey
                                                Smith</a></h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> 55 L Laptop
                                            Backpack fits upto 16
                                            In...</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">1 Piece</p>
                                    </td>
                                    <td>
                                        $233.15
                                    </td>
                                    <td>
                                        August 23 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge text-success border border-success-subtle fs-11 p-1">Completed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-danger fs-11 p-1"><i
                                                    class="ti ti-x me-1 align-middle"></i>Cancel</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM8630</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-6.jpg"
                                                alt class="rounded-circle avatar-xs me-1">
                                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Alan
                                                Green</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> Navy Blue
                                            Over Size T-shirt For
                                            Men</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> Men White
                                            Slim Fit T-shirt</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">5 Piece</p>
                                        <p class="mb-0">6 Piece</p>
                                    </td>
                                    <td>
                                        $772.44
                                    </td>
                                    <td>
                                        January 01 2024
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge text-warning border border-warning-subtle fs-11 p-1">Pending</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-dark fs-11 p-1"><i
                                                    class="ti ti-check me-1 align-middle"></i>Ready
                                                To
                                                Pick</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck8">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM2584</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-7.jpg"
                                                alt class="rounded-circle avatar-xs me-1">
                                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Linda
                                                Nelson</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P1
                                                -</span> Sleepify
                                            Luno 4 Seater Fabric
                                            Sofa</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">2 Piece</p>
                                    </td>
                                    <td>
                                        $425.56
                                    </td>
                                    <td>
                                        October 19 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge text-success border border-success-subtle fs-11 p-1">Completed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-info fs-11 p-1"><i
                                                    class="ti ti-checks me-1 align-middle"></i>Delivered</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck9">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM7466</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-9.jpg"
                                                alt class="rounded-circle avatar-xs me-1">
                                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Pauline
                                                Piaffe </a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> Jordan
                                            Jumpman MVP Men's Shoes
                                            Size</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> Men White
                                            Slim Fit T-shirt</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">1 Piece</p>
                                        <p class="mb-0">2 Piece</p>
                                    </td>
                                    <td>
                                        $754.32
                                    </td>
                                    <td>
                                        April 15 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge border border-danger-subtle text-danger fs-11 p-1">Failed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-warning fs-11 p-1"><i
                                                    class="ti ti-progress-check me-1 align-middle"></i>Dispatched</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck10">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM2565</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-10.jpg"
                                                alt class="rounded-circle avatar-xs me-1">
                                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">
                                                Ethan Wilder</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> 55 L Laptop
                                            Backpack fits upto 16
                                            In</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> HYPERX
                                            Cloud Gaming
                                            Headphonet</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">3 Piece</p>
                                        <p class="mb-0">1 Piece</p>
                                    </td>
                                    <td>
                                        $533.76
                                    </td>
                                    <td>
                                        May 21 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge text-success border border-success-subtle fs-11 p-1">Completed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-info fs-11 p-1"><i
                                                    class="ti ti-checks me-1 align-middle"></i>Delivered</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck11">
                                    </td>
                                    <td>
                                        <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-order-details.html"
                                            class="text-muted fw-medium">#BM6569</a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-dark"><img src="{{ asset('assets') }}/images/avatar-2.jpg"
                                                alt class="rounded-circle avatar-xs me-1"><a
                                                href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#!"
                                                class="text-dark">Steven
                                                Mendoza</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <p class="mb-1"><span class="text-dark fw-semibold">P1
                                                -</span> Jordan
                                            Jumpman MVP Men's Shoes
                                            Size</p>
                                        <p class="mb-0"><span class="text-dark fw-semibold">P2
                                                -</span> Navy Blue
                                            Over Size T-shirt For
                                            Men</p>
                                    </td>
                                    <td>
                                        <p class="mb-1">1 Piece</p>
                                        <p class="mb-0">3 Piece</p>
                                    </td>
                                    <td>
                                        $423.00
                                    </td>
                                    <td>
                                        Jun 02 2023
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span
                                                class="badge text-success border border-success-subtle fs-11 p-1">Completed</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0"><span class="badge badge-soft-warning fs-11 p-1"><i
                                                    class="ti ti-progress-check me-1 align-middle"></i>Dispatched</span>
                                        </h5>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>

                    <div class="card-footer d-flex align-items-center justify-content-end">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#"
                                    class="page-link"><i class="ti ti-chevrons-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#"
                                    class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#"
                                    class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#"
                                    class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-orders.html#"
                                    class="page-link"><i class="ti ti-chevrons-right"></i></a>
                            </li>
                        </ul>
                    </div><!-- end card-footer -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection



@push('script')
<div class="flatpickr-calendar rangeMode animate arrowTop arrowLeft" tabindex="-1"
style="top: 232px; left: 827.312px; right: auto;">
<div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
            <g></g>
            <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
        </svg></span>
    <div class="flatpickr-month">
        <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                tabindex="-1">
                <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
            </select>
            <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                    aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
        </div>
    </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
            <g></g>
            <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
            </path>
        </svg></span>
</div>
<div class="flatpickr-innerContainer">
    <div class="flatpickr-rContainer">
        <div class="flatpickr-weekdays">
            <div class="flatpickr-weekdaycontainer">
                <span class="flatpickr-weekday">
                    Sun</span><span class="flatpickr-weekday">Mon</span><span
                    class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                    class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                    class="flatpickr-weekday">Sat
                </span>
            </div>
        </div>
        <div class="flatpickr-days" tabindex="-1">
            <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                    tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                    tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                    tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                    tabindex="-1">30</span><span class="flatpickr-day selected startRange"
                    aria-label="May 1, 2025" tabindex="-1">1</span><span class="flatpickr-day inRange"
                    aria-label="May 2, 2025" tabindex="-1">2</span><span class="flatpickr-day inRange"
                    aria-label="May 3, 2025" tabindex="-1">3</span><span class="flatpickr-day inRange"
                    aria-label="May 4, 2025" tabindex="-1">4</span><span class="flatpickr-day inRange"
                    aria-label="May 5, 2025" tabindex="-1">5</span><span class="flatpickr-day inRange"
                    aria-label="May 6, 2025" tabindex="-1">6</span><span class="flatpickr-day inRange"
                    aria-label="May 7, 2025" tabindex="-1">7</span><span class="flatpickr-day today inRange"
                    aria-label="May 8, 2025" aria-current="date" tabindex="-1">8</span><span
                    class="flatpickr-day inRange" aria-label="May 9, 2025" tabindex="-1">9</span><span
                    class="flatpickr-day inRange" aria-label="May 10, 2025" tabindex="-1">10</span><span
                    class="flatpickr-day inRange" aria-label="May 11, 2025" tabindex="-1">11</span><span
                    class="flatpickr-day inRange" aria-label="May 12, 2025" tabindex="-1">12</span><span
                    class="flatpickr-day inRange" aria-label="May 13, 2025" tabindex="-1">13</span><span
                    class="flatpickr-day inRange" aria-label="May 14, 2025" tabindex="-1">14</span><span
                    class="flatpickr-day inRange" aria-label="May 15, 2025" tabindex="-1">15</span><span
                    class="flatpickr-day inRange" aria-label="May 16, 2025" tabindex="-1">16</span><span
                    class="flatpickr-day inRange" aria-label="May 17, 2025" tabindex="-1">17</span><span
                    class="flatpickr-day inRange" aria-label="May 18, 2025" tabindex="-1">18</span><span
                    class="flatpickr-day inRange" aria-label="May 19, 2025" tabindex="-1">19</span><span
                    class="flatpickr-day inRange" aria-label="May 20, 2025" tabindex="-1">20</span><span
                    class="flatpickr-day inRange" aria-label="May 21, 2025" tabindex="-1">21</span><span
                    class="flatpickr-day inRange" aria-label="May 22, 2025" tabindex="-1">22</span><span
                    class="flatpickr-day inRange" aria-label="May 23, 2025" tabindex="-1">23</span><span
                    class="flatpickr-day inRange" aria-label="May 24, 2025" tabindex="-1">24</span><span
                    class="flatpickr-day inRange" aria-label="May 25, 2025" tabindex="-1">25</span><span
                    class="flatpickr-day inRange" aria-label="May 26, 2025" tabindex="-1">26</span><span
                    class="flatpickr-day inRange" aria-label="May 27, 2025" tabindex="-1">27</span><span
                    class="flatpickr-day inRange" aria-label="May 28, 2025" tabindex="-1">28</span><span
                    class="flatpickr-day inRange" aria-label="May 29, 2025" tabindex="-1">29</span><span
                    class="flatpickr-day inRange" aria-label="May 30, 2025" tabindex="-1">30</span><span
                    class="flatpickr-day selected endRange" aria-label="May 31, 2025"
                    tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                    tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                    tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                    tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                    tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                    tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                    tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                    tabindex="-1">7</span></div>
        </div>
    </div>
</div>
</div>
@endpush
