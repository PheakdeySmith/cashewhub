@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush


@section('content')
<div class="page-container">


                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">Basic Tables</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                            <li class="breadcrumb-item active">Basic Tables</li>
                        </ol>
                    </div>
                </div>




                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">My Table</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted">
                                    For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Date of Birth</th>
                                                <th>Active?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Risa D. Pearson</td>
                                                <td>336-508-2157</td>
                                                <td>July 24, 1950</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch01" checked="" data-switch="success">
                                                        <label for="switch01" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ann C. Thompson</td>
                                                <td>646-473-2057</td>
                                                <td>January 25, 1959</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch02" checked="" data-switch="success">
                                                        <label for="switch02" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul J. Friend</td>
                                                <td>281-308-0793</td>
                                                <td>September 1, 1939</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch03" data-switch="success">
                                                        <label for="switch03" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Linda G. Smith</td>
                                                <td>606-253-1207</td>
                                                <td>May 3, 1962</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch04" data-switch="success">
                                                        <label for="switch04" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Inverse Table</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-dark mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Date of Birth</th>
                                                <th>Active?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Risa D. Pearson</td>
                                                <td>336-508-2157</td>
                                                <td>July 24, 1950</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch6" data-switch="success">
                                                        <label for="switch6" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ann C. Thompson</td>
                                                <td>646-473-2057</td>
                                                <td>January 25, 1959</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch7" checked="" data-switch="success">
                                                        <label for="switch7" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul J. Friend</td>
                                                <td>281-308-0793</td>
                                                <td>September 1, 1939</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch8" data-switch="success">
                                                        <label for="switch8" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sean C. Nguyen</td>
                                                <td>269-714-6825</td>
                                                <td>February 5, 1994</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch10" checked="" data-switch="success">
                                                        <label for="switch10" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Striped Rows</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Use <code>.table-striped</code> to add zebra-striping to any table row
                                    within the <code>&lt;tbody&gt;</code>.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Account No.</th>
                                                <th>Balance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-2.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Risa D. Pearson
                                                </td>
                                                <td>AC336 508 2157</td>
                                                <td>July 24, 1950</td>
                                                <td class="text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-3.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Ann C. Thompson
                                                </td>
                                                <td>SB646 473 2057</td>
                                                <td>January 25, 1959</td>
                                                <td class="text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-4.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Paul J. Friend
                                                </td>
                                                <td>DL281 308 0793</td>
                                                <td>September 1, 1939</td>
                                                <td class="text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-5.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Sean C. Nguyen
                                                </td>
                                                <td>CA269 714 6825</td>
                                                <td>February 5, 1994</td>
                                                <td class="text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Striped Columns</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Use <code>.table-striped-columns</code> to add zebra-striping to any table column.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-striped-columns mb-0">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Account No.</th>
                                                <th>Balance</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-2.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Risa D. Pearson
                                                </td>
                                                <td>AC336 508 2157</td>
                                                <td>July 24, 1950</td>
                                                <td class="text-muted text-center">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-3.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Ann C. Thompson
                                                </td>
                                                <td>SB646 473 2057</td>
                                                <td>January 25, 1959</td>
                                                <td class="text-muted text-center">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-4.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Paul J. Friend
                                                </td>
                                                <td>DL281 308 0793</td>
                                                <td>September 1, 1939</td>
                                                <td class="text-muted text-center">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-5.jpg" alt="table-user" class="me-2 avatar-sm rounded-circle">
                                                    Sean C. Nguyen
                                                </td>
                                                <td>CA269 714 6825</td>
                                                <td>February 5, 1994</td>
                                                <td class="text-muted text-center">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->



                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Table Head Options</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Courier</th>
                                                <th>Process</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>FedEx</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-success"></i> Delivered</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>DHL</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-warning"></i> Shipped</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>Bright</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-info"></i> Order Received</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>FedEx</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-success"></i> Delivered</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Table Head Options</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Product</th>
                                                <th>Courier</th>
                                                <th>Process</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>FedEx</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-success"></i> Delivered</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>DHL</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-warning"></i> Shipped</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>Bright</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-info"></i> Order Received</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>FedEx</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><i class="ti ti-circle text-success"></i> Delivered</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Hoverable Rows</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                <td>$6,518.18</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>$128.50</td>
                                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                                <td>$4,754.50</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$39.99</td>
                                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                                <td>$2,559.36</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>$20.00</td>
                                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                                <td>$3,680.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Inverse Hoverable Rows</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-dark table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                <td>$6,518.18</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>$128.50</td>
                                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                                <td>$4,754.50</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$39.99</td>
                                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                                <td>$2,559.36</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>$20.00</td>
                                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                                <td>$3,680.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Bordered Table</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Account No.</th>
                                                <th>Balance</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-6.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Risa D. Pearson
                                                </td>
                                                <td>AC336 508 2157</td>
                                                <td>July 24, 1950</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-7.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Ann C. Thompson
                                                </td>
                                                <td>SB646 473 2057</td>
                                                <td>January 25, 1959</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-8.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Paul J. Friend
                                                </td>
                                                <td>DL281 308 0793</td>
                                                <td>September 1, 1939</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-9.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Sean C. Nguyen
                                                </td>
                                                <td>CA269 714 6825</td>
                                                <td>February 5, 1994</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Bordered Color Table</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-bordered</code> &amp; <code>.border-primary</code> can be added to change colors.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered border-secondary mb-0">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Account No.</th>
                                                <th>Balance</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-6.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Risa D. Pearson
                                                </td>
                                                <td>AC336 508 2157</td>
                                                <td>July 24, 1950</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-7.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Ann C. Thompson
                                                </td>
                                                <td>SB646 473 2057</td>
                                                <td>January 25, 1959</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-8.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Paul J. Friend
                                                </td>
                                                <td>DL281 308 0793</td>
                                                <td>September 1, 1939</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/avatar-9.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                                                    Sean C. Nguyen
                                                </td>
                                                <td>CA269 714 6825</td>
                                                <td>February 5, 1994</td>
                                                <td class="text-center text-muted">
                                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Always Responsive</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Across every breakpoint, use
                                    <code>.table-responsive</code> for horizontally scrolling tables. Use
                                    <code>.table-responsive{-sm|-md|-lg|-xl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave
                                    normally and not scroll horizontally.
                                </p>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Basic Borderless Example</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-borderless</code> for a table without borders.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Date of Birth</th>
                                                <th>Active?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Risa D. Pearson</td>
                                                <td>336-508-2157</td>
                                                <td>July 24, 1950</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch21" checked="" data-switch="success">
                                                        <label for="switch21" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ann C. Thompson</td>
                                                <td>646-473-2057</td>
                                                <td>January 25, 1959</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch22" checked="" data-switch="success">
                                                        <label for="switch22" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul J. Friend</td>
                                                <td>281-308-0793</td>
                                                <td>September 1, 1939</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch23" data-switch="success">
                                                        <label for="switch23" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Linda G. Smith</td>
                                                <td>606-253-1207</td>
                                                <td>May 3, 1962</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch24" data-switch="success">
                                                        <label for="switch24" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Inverse Borderless Table</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-borderless</code> for a table without borders.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-dark table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Date of Birth</th>
                                                <th>Active?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Risa D. Pearson</td>
                                                <td>336-508-2157</td>
                                                <td>July 24, 1950</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch25" data-switch="success">
                                                        <label for="switch25" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ann C. Thompson</td>
                                                <td>646-473-2057</td>
                                                <td>January 25, 1959</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch26" checked="" data-switch="success">
                                                        <label for="switch26" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul J. Friend</td>
                                                <td>281-308-0793</td>
                                                <td>September 1, 1939</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch27" data-switch="success">
                                                        <label for="switch27" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sean C. Nguyen</td>
                                                <td>269-714-6825</td>
                                                <td>February 5, 1994</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch28" checked="" data-switch="success">
                                                        <label for="switch28" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Active Tables</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Highlight a table row or cell by adding a <code>.table-active</code> class.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Date of Birth</th>
                                                <th>Active?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active">
                                                <td>Risa D. Pearson</td>
                                                <td>336-508-2157</td>
                                                <td>July 24, 1950</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch29" checked="" data-switch="success">
                                                        <label for="switch29" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ann C. Thompson</td>
                                                <td>646-473-2057</td>
                                                <td>January 25, 1959</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch30" checked="" data-switch="success">
                                                        <label for="switch30" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul J. Friend</td>
                                                <td>281-308-0793</td>
                                                <td>September 1, 1939</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch31" data-switch="success">
                                                        <label for="switch31" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Linda G. Smith</td>
                                                <td colspan="2" class="table-active">606-253-1207</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch32" data-switch="success">
                                                        <label for="switch32" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul J. Friend</td>
                                                <td>281-308-0793</td>
                                                <td>September 1, 1939</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch33" checked="" data-switch="success">
                                                        <label for="switch33" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end table-responsive-->
                            </div><!-- end card body-->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Nesting</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Border styles, active styles, and table variants are not inherited by nested tables.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Date of Birth</th>
                                                <th>Active?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Risa D. Pearson</td>
                                                <td>336-508-2157</td>
                                                <td>July 24, 1950</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch34" checked="" data-switch="success">
                                                        <label for="switch34" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Date of Birth</th>
                                                                <th>Active?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Risa D. Pearson</td>
                                                                <td>336-508-2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch35" checked="" data-switch="success">
                                                                        <label for="switch35" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ann C. Thompson</td>
                                                                <td>646-473-2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch36" data-switch="success">
                                                                        <label for="switch36" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Linda G. Smith</td>
                                                <td>606-253-1207</td>
                                                <td>September 2, 1939</td>
                                                <td>
                                                    <!-- Switch-->
                                                    <div>
                                                        <input type="checkbox" id="switch37" data-switch="success">
                                                        <label for="switch37" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div><!-- end card body-->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Small Table</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                <td>$6,518.18</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>$128.50</td>
                                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                                <td>$4,754.50</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$39.99</td>
                                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                                <td>$2,559.36</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>$20.00</td>
                                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                                <td>$3,680.00</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Shoes</td>
                                                <td>$28.49</td>
                                                <td><span class="badge bg-primary">69 Pcs</span></td>
                                                <td>$1,965.81</td>
                                            </tr>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                <td>$6,518.18</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Table Foot</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                <td>$6,518.18</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>$128.50</td>
                                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                                <td>$4,754.50</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$39.99</td>
                                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                                <td>$2,559.36</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>$20.00</td>
                                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                                <td>$3,680.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Footer</th>
                                                <td>Footer</td>
                                                <td>Footer</td>
                                                <td>Footer</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Captions</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <caption>List of users</caption>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                <td>$6,518.18</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>$128.50</td>
                                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                                <td>$4,754.50</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$39.99</td>
                                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                                <td>$2,559.36</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>$20.00</td>
                                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                                <td>$3,680.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Caption Top</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                                </p>
                                <div class="table-responsive-sm">
                                    <table class="table mb-0 caption-top">
                                        <caption>List of users</caption>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ASOS Ridley High Waist</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                <td>$6,518.18</td>
                                            </tr>
                                            <tr>
                                                <td>Marco Lightweight Shirt</td>
                                                <td>$128.50</td>
                                                <td><span class="badge bg-primary">37 Pcs</span></td>
                                                <td>$4,754.50</td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$39.99</td>
                                                <td><span class="badge bg-primary">64 Pcs</span></td>
                                                <td>$2,559.36</td>
                                            </tr>
                                            <tr>
                                                <td>Lightweight Jacket</td>
                                                <td>$20.00</td>
                                                <td><span class="badge bg-primary">184 Pcs</span></td>
                                                <td>$3,680.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->
@endsection


@push('script')

@endpush
