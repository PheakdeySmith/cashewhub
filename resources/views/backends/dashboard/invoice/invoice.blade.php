@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}
<link href="{{ asset('assets') }}/css/flatpickr.min.css" rel="stylesheet" type="text/css">

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Invoices</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Invoice</a></li>

                <li class="breadcrumb-item active">Invoices</li>
            </ol>
        </div>
    </div>




    <div class="card">
        <div class="card-body p-0">
            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0 text-center align-items-center">
                <div class="col border-end border-light border-dashed">
                    <div class="mt-3 mt-md-0 p-3">
                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">No.of Clients</h5>
                        <div class="d-flex align-items-center justify-content-center gap-2 my-3">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-22">
                                    <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M15.5 7.5a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0"></path><path fill="currentColor" d="M19.5 7.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0m-15 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 0 0-5 0" opacity=".4"></path><path fill="currentColor" d="M18 16.5c0 1.933-2.686 3.5-6 3.5s-6-1.567-6-3.5S8.686 13 12 13s6 1.567 6 3.5"></path><path fill="currentColor" d="M22 16.5c0 1.38-1.79 2.5-4 2.5s-4-1.12-4-2.5s1.79-2.5 4-2.5s4 1.12 4 2.5m-20 0C2 17.88 3.79 19 6 19s4-1.12 4-2.5S8.21 14 6 14s-4 1.12-4 2.5" opacity=".4"></path></svg></template></iconify-icon>
                                </span>
                            </div>
                            <h3 class="mb-0 fw-bold">9,458</h3>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 6.15%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div><!-- end col -->
                <div class="col border-end border-light border-dashed">
                    <div class="mt-3 mt-md-0 p-3">
                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">No. of Invoices</h5>
                        <div class="d-flex align-items-center justify-content-center gap-2 my-3">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-22">
                                    <iconify-icon icon="solar:bill-list-bold-duotone"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M7.245 2h9.51c1.159 0 1.738 0 2.206.163a3.05 3.05 0 0 1 1.881 1.936C21 4.581 21 5.177 21 6.37v14.004c0 .858-.985 1.314-1.608.744a.946.946 0 0 0-1.284 0l-.483.442a1.657 1.657 0 0 1-2.25 0a1.657 1.657 0 0 0-2.25 0a1.657 1.657 0 0 1-2.25 0a1.657 1.657 0 0 0-2.25 0a1.657 1.657 0 0 1-2.25 0l-.483-.442a.946.946 0 0 0-1.284 0c-.623.57-1.608.114-1.608-.744V6.37c0-1.193 0-1.79.158-2.27c.3-.913.995-1.629 1.881-1.937C5.507 2 6.086 2 7.245 2" opacity=".5"></path><path fill="currentColor" d="M7 6.75a.75.75 0 0 0 0 1.5h.5a.75.75 0 0 0 0-1.5zm3.5 0a.75.75 0 0 0 0 1.5H17a.75.75 0 0 0 0-1.5zM7 10.25a.75.75 0 0 0 0 1.5h.5a.75.75 0 0 0 0-1.5zm3.5 0a.75.75 0 0 0 0 1.5H17a.75.75 0 0 0 0-1.5zM7 13.75a.75.75 0 0 0 0 1.5h.5a.75.75 0 0 0 0-1.5zm3.5 0a.75.75 0 0 0 0 1.5H17a.75.75 0 0 0 0-1.5z"></path></svg></template></iconify-icon>
                                </span>
                            </div>
                            <h3 class="mb-0 fw-bold">16.75k</h3>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 26.87%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div><!-- end col -->
                <div class="col border-end border-light border-dashed">
                    <div class="mt-3 mt-md-0 p-3">
                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Paid by Clients</h5>
                        <div class="d-flex align-items-center justify-content-center gap-2 my-3">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-22">
                                    <iconify-icon icon="solar:wallet-money-bold-duotone"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M4.892 9.614c0-.402.323-.728.722-.728H9.47c.4 0 .723.326.723.728a.726.726 0 0 1-.723.729H5.614a.726.726 0 0 1-.722-.729"></path><path fill="currentColor" fill-rule="evenodd" d="M21.188 10.004q-.094-.005-.2-.004h-2.773C15.944 10 14 11.736 14 14s1.944 4 4.215 4h2.773q.106.001.2-.004c.923-.056 1.739-.757 1.808-1.737c.004-.064.004-.133.004-.197v-4.124c0-.064 0-.133-.004-.197c-.069-.98-.885-1.68-1.808-1.737m-3.217 5.063c.584 0 1.058-.478 1.058-1.067c0-.59-.474-1.067-1.058-1.067s-1.06.478-1.06 1.067c0 .59.475 1.067 1.06 1.067" clip-rule="evenodd"></path><path fill="currentColor" d="M21.14 10.002c0-1.181-.044-2.448-.798-3.355a4 4 0 0 0-.233-.256c-.749-.748-1.698-1.08-2.87-1.238C16.099 5 14.644 5 12.806 5h-2.112C8.856 5 7.4 5 6.26 5.153c-1.172.158-2.121.49-2.87 1.238c-.748.749-1.08 1.698-1.238 2.87C2 10.401 2 11.856 2 13.694v.112c0 1.838 0 3.294.153 4.433c.158 1.172.49 2.121 1.238 2.87c.749.748 1.698 1.08 2.87 1.238c1.14.153 2.595.153 4.433.153h2.112c1.838 0 3.294 0 4.433-.153c1.172-.158 2.121-.49 2.87-1.238q.305-.308.526-.66c.45-.72.504-1.602.504-2.45l-.15.001h-2.774C15.944 18 14 16.264 14 14s1.944-4 4.215-4h2.773q.079 0 .151.002" opacity=".5"></path><path fill="currentColor" d="M10.101 2.572L8 3.992l-1.733 1.16C7.405 5 8.859 5 10.694 5h2.112c1.838 0 3.294 0 4.433.153q.344.045.662.114L16 4l-2.113-1.428a3.42 3.42 0 0 0-3.786 0"></path></svg></template></iconify-icon>
                                </span>
                            </div>
                            <h3 class="mb-0 fw-bold">$98.24k</h3>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 3.51%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div><!-- end col -->
                <div class="col border-end border-light border-dashed">
                    <div class="mt-3 mt-md-0 p-3">
                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Pending Invoices</h5>
                        <div class="d-flex align-items-center justify-content-center gap-2 my-3">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                    <iconify-icon icon="solar:banknote-2-bold-duotone"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8.506 10.714c0-.92.755-1.666 1.686-1.666c.932 0 1.687.746 1.687 1.666s-.755 1.667-1.687 1.667a1.677 1.677 0 0 1-1.686-1.667"></path><path fill="currentColor" fill-rule="evenodd" d="M2 10.714c0-2.693 0-4.04.847-4.877S5.057 5 7.783 5h4.82c2.725 0 4.088 0 4.935.837s.847 2.184.847 4.877c0 2.694 0 4.041-.847 4.878s-2.21.837-4.936.837H7.783c-2.726 0-4.09 0-4.936-.837S2 13.408 2 10.714m5.06 0c0-1.71 1.402-3.095 3.132-3.095s3.133 1.386 3.133 3.095s-1.402 3.096-3.133 3.096c-1.73 0-3.132-1.386-3.132-3.096M4.168 12.62a.72.72 0 0 0 .723.715c.4 0 .723-.32.723-.715V8.81a.72.72 0 0 0-.723-.714a.72.72 0 0 0-.723.715zm11.326.715c-.4 0-.723-.32-.723-.715V8.81c0-.394.323-.714.723-.714s.722.32.722.715v3.81a.72.72 0 0 1-.722.714" clip-rule="evenodd"></path><path fill="currentColor" d="M4.065 16.225q.02.225.048.434c.117.857.366 1.579.946 2.152q.124.123.257.226c.566.514 1.266.742 2.09.851c.836.111 1.898.111 3.216.111h4.925c1.318 0 2.38 0 3.217-.111c.867-.115 1.598-.362 2.178-.935s.83-1.295.946-2.152c.112-.826.112-1.876.112-3.178v-.105c0-1.302 0-2.352-.112-3.178c-.117-.857-.366-1.579-.946-2.152a3 3 0 0 0-.257-.226c-.566-.514-1.266-.742-2.09-.851a9 9 0 0 0-.41-.045c.2.834.2 1.984.2 3.648c0 2.694 0 4.04-.847 4.878c-.846.836-2.21.836-4.936.836H7.783c-1.702 0-2.872 0-3.718-.203" opacity=".5"></path></svg></template></iconify-icon>
                                </span>
                            </div>
                            <h3 class="mb-0 fw-bold">87.94%</h3>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 1.05%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div><!-- end col -->
                <div class="col border-end border-light border-dashed">
                    <div class="mt-3 mt-md-0 p-3">
                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Cancelled Invoices</h5>
                        <div class="d-flex align-items-center justify-content-center gap-2 my-3">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-22">
                                    <iconify-icon icon="solar:bill-cross-bold-duotone"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6.333 2h11.334c.31 0 .464 0 .595.012c1.45.133 2.6 1.34 2.727 2.861c.011.137.011.3.011.624V20.26c0 .872-1.059 1.243-1.558.544a.84.84 0 0 0-1.384 0l-.433.606a1.367 1.367 0 0 1-2.25 0a1.367 1.367 0 0 0-2.25 0a1.367 1.367 0 0 1-2.25 0a1.367 1.367 0 0 0-2.25 0a1.367 1.367 0 0 1-2.25 0l-.433-.605a.84.84 0 0 0-1.384 0c-.5.698-1.558.327-1.558-.545V5.497c0-.324 0-.487.011-.624c.127-1.521 1.277-2.728 2.728-2.861C5.869 2 6.024 2 6.333 2" opacity=".5"></path><path fill="currentColor" d="M10.53 7.47a.75.75 0 1 0-1.06 1.06L10.94 10l-1.47 1.47a.75.75 0 1 0 1.06 1.06L12 11.06l1.47 1.47a.75.75 0 1 0 1.06-1.06L13.06 10l1.47-1.47a.75.75 0 0 0-1.06-1.06L12 8.94zM7.5 14.75a.75.75 0 0 0 0 1.5h9a.75.75 0 0 0 0-1.5z"></path></svg></template></iconify-icon>
                                </span>
                            </div>
                            <h3 class="fw-bold mb-0 ">7.11%</h3>
                        </div>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 0.05%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end card body -->
    </div><!-- end card -->

    <div class="d-flex flex-wrap flex-lg-nowrap align-items-center gap-2 mb-3">
        <div class="d-inline-flex align-items-center gap-2 me-auto">
            <h5 class="mb-0 fs-14 text-muted">Last Updated a minute ago</h5>
            <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#!"><i class="ti ti-refresh align-middle fs-16"></i></a>
        </div>

        <div class="d-inline-flex flex-wrap align-items-center gap-1">
            <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#!"><img src="{{ asset('assets') }}/images/mastercard.svg" alt="master card img" height="24"></a>
            <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#!"><img src="{{ asset('assets') }}/images/visa.svg" alt="vis card img" height="24"></a>
            <p class="mb-0">Invoice get paid 3x faster with online payments, <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#!" class="fw-medium">Turn On Payments</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom card-tabs d-flex flex-wrap align-items-center gap-2">
                    <div class="flex-grow-1">
                        <h4 class="header-title">Invoices</h4>
                    </div>

                    <div class="d-flex flex-wrap flex-lg-nowrap gap-2">
                        <div class="flex-shrink-0 d-flex align-items-center gap-2">
                            <div class="position-relative">
                                <input type="text" class="form-control ps-4" placeholder="Search Here...">
                                <i class="ti ti-search position-absolute top-50 translate-middle-y start-0 ms-2"></i>
                            </div>
                        </div>
                        <a href="https://coderthemes.com/boron/layouts/apps-invoice-create.html" class="btn btn-primary"><i class="ti ti-plus me-1"></i>Add Invoice</a>
                    </div><!-- end d-flex -->
                </div>

                <div class="table-responsive">
                    <table class="table table-hover text-nowrap mb-0">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th class="ps-3" style="width: 50px;">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                </th>
                                <th>Invoice ID</th>
                                <th>Category </th>
                                <th>Created On</th>
                                <th>Invoice To</th>
                                <th>Amount</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <!-- end table-head -->

                        <tbody>
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1020@20</span></td>
                                <td>Fashion</td>
                                <td><span class="fs-15 text-muted">12 Apr 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Raul Villa</h6>
                                    </div>
                                </td>
                                <td>$42,430</td>
                                <td><span class="fs-15 text-muted">12 Apr 2023</span></td>
                                <td>
                                    <span class="badge bg-success-subtle text-success fs-12 p-1">Paid</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1240@25</span></td>
                                <td>Electronics</td>
                                <td><span class="fs-15 text-muted">14 Apr 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Fae Sims</h6>
                                    </div>
                                </td>
                                <td>$416</td>
                                <td><span class="fs-15 text-muted">24 Apr 2023</span></td>
                                <td>
                                    <span class="badge bg-warning-subtle text-warning fs-12 p-1">Overdue</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1284@32</span></td>
                                <td>Mobile Accessories</td>
                                <td><span class="fs-15 text-muted">15 Apr 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">David Roderick</h6>
                                    </div>
                                </td>
                                <td>$187</td>
                                <td><span class="fs-15 text-muted">25 Apr 2023</span></td>
                                <td>
                                    <span class="badge bg-success-subtle text-success fs-12 p-1">Paid</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck5">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1279@69</span></td>
                                <td>Electronics</td>
                                <td><span class="fs-15 text-muted">6 Dec 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-5.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">James Zavel</h6>
                                    </div>
                                </td>
                                <td>$165</td>
                                <td><span class="fs-15 text-muted">14 Dec 2023</span></td>
                                <td>
                                    <span class="badge bg-success-subtle text-success fs-12 p-1">Paid</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck6">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1279@69</span></td>
                                <td>Electronics</td>
                                <td><span class="fs-15 text-muted">1 Jan 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-6.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Denese Martin</h6>
                                    </div>
                                </td>
                                <td>$165</td>
                                <td><span class="fs-15 text-muted">14 Jan 2023</span></td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger fs-12 p-1">Cancelled</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck7">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1276@33</span></td>
                                <td>Watches</td>
                                <td><span class="fs-15 text-muted">2 Dec 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-7.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Jack Nunnally</h6>
                                    </div>
                                </td>
                                <td>$192</td>
                                <td><span class="fs-15 text-muted">2 Dec 2023</span></td>
                                <td>
                                    <span class="badge bg-warning-subtle text-warning fs-12 p-1">Overdue</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck8">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1278@29</span></td>
                                <td>Bags</td>
                                <td><span class="fs-15 text-muted">12 May 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-8.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Margaret Shaw</h6>
                                    </div>
                                </td>
                                <td>$159</td>
                                <td><span class="fs-15 text-muted">24 May 2023</span></td>
                                <td>
                                    <span class="badge bg-success-subtle text-success fs-12 p-1">Paid</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck9">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1271@96</span></td>
                                <td>Cloth's</td>
                                <td><span class="fs-15 text-muted">21 Jun 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-9.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Anthony Williams</h6>
                                    </div>
                                </td>
                                <td>$259</td>
                                <td><span class="fs-15 text-muted">1 July 2023</span></td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger fs-12 p-1">Cancelled</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck10">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1986@65</span></td>
                                <td>Sofa</td>
                                <td><span class="fs-15 text-muted">12 Aug 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-10.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Axie Barnes</h6>
                                    </div>
                                </td>
                                <td>$259</td>
                                <td><span class="fs-15 text-muted">28 Aug 2023</span></td>
                                <td>
                                    <span class="badge bg-success-subtle text-success fs-12 p-1">Paid</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                            <tr>
                                <td class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck11">
                                </td>
                                <td><span class="text-muted fw-semibold">#PC1984@38</span></td>
                                <td>Shoes</td>
                                <td><span class="fs-15 text-muted">8 Aug 2023</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('assets') }}/images/avatar-1.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h6 class="fs-14 mb-0">Glen Morning</h6>
                                    </div>
                                </td>
                                <td>$256</td>
                                <td><span class="fs-15 text-muted">30 Aug 2023</span></td>
                                <td>
                                    <span class="badge bg-warning-subtle text-warning fs-12 p-1">Pending</span>
                                </td>
                                <td class="pe-3">
                                    <div class="hstack gap-1 justify-content-end">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr><!-- end table-row -->
                        </tbody><!-- end table-body -->
                    </table><!-- end table -->
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <ul class="pagination mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#" class="page-link"><i class="ti ti-chevrons-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="https://coderthemes.com/boron/layouts/apps-invoices.html#" class="page-link"><i class="ti ti-chevrons-right"></i></a>
                            </li>
                        </ul><!-- end pagination -->
                    </div><!-- end flex -->
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

</div> <!-- container -->
@endsection



@push('script')
<!-- flatpickr -->
<script src="{{ asset('assets') }}/js/flatpickr.min.js"></script>

<script>flatpickr("#datepicker-basic", { defaultDate: new Date() })</script>
@endpush
