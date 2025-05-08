@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
    <link href="{{ asset('assets') }}/css/flatpickr.min.css" rel="stylesheet" type="text/css">
@endpush



@section('content')
    <div class="container-xxl">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Create Invoice</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>

                    <li class="breadcrumb-item active">Create Invoice</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-12">
                <div class="card position-relative">
                    <form>
                        <div class="card-body">
                            <!-- Invoice Logo-->
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="overflow-hidden position-relative border rounded d-flex align-items-center justify-content-start px-2"
                                    style="height: 60px; width: 260px;">
                                    <label for="imageInput" class="position-absolute top-0 start-0 end-0 bottom-0"></label>
                                    <input class="d-none" type="file" id="imageInput">
                                    <img id="preview" src="{{ asset('assets') }}/images/logo-dark.png" alt="Preview Image"
                                        height="28">
                                </div>

                                <div class="text-end">
                                    <div class="row g-1 align-items-center">
                                        <div class="col-auto">
                                            <label for="invoiceNo" class="col-form-label fs-16 fw-bold">#INV</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="number" id="invoiceNo" class="form-control"
                                                placeholder="00001234">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-3">
                                    <div class="mb-2">
                                        <label class="form-label">Invoice Date :</label>
                                        <input type="text" data-provider="flatpickr" data-date-format="d M, Y"
                                            data-deafult-date="today" class="form-control flatpickr-input"
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Due Date :</label>
                                        <input type="hidden" data-provider="flatpickr" data-altformat="F j, Y"
                                            class="form-control flatpickr-input" placeholder="Select Date">
                                    </div>

                                    <div class="mb-2">
                                        <label for="InvoicePaymentStatus" class="form-label">Payment Status</label>
                                        <select class="form-select" id="InvoicePaymentStatus">
                                            <option value="">Select Status</option>
                                            <option value="Choice 1">Paid</option>
                                            <option value="Choice 2">Unpaid</option>
                                            <option value="Choice 3">Cancelled</option>
                                            <option value="Choice 4">Refunded</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="InvoicePaymentMethod" class="form-label">Payment Method</label>
                                        <select class="form-select" id="InvoicePaymentMethod">
                                            <option value="">Select Method</option>
                                            <option value="Choice 1">Credit / Debit Card</option>
                                            <option value="Choice 2">Bank Transfer</option>
                                            <option value="Choice 3">PayPal</option>
                                            <option value="Choice 4">Payoneer</option>
                                            <option value="Choice 5">Cash On Delivery</option>
                                            <option value="Choice 6">Wallet</option>
                                            <option value="Choice 7">UPI (Gpay)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">Billing Address :</label>
                                        <div class="mb-2 pb-1">
                                            <input type="text" id="BName" class="form-control"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <textarea type="text" id="BAddress" rows="3" class="form-control" placeholder="Address"></textarea>
                                        </div>
                                        <div>
                                            <input type="text" id="BNumber" class="form-control"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-3">
                                    <div class="mb-4">
                                        <label class="form-label">Shipping Address :</label>
                                        <div class="mb-2 pb-1">
                                            <input type="text" id="SName" class="form-control"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <textarea type="text" id="SAddress" rows="3" class="form-control" placeholder="Address"></textarea>
                                        </div>
                                        <div>
                                            <input type="text" id="SNumber" class="form-control"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="table text-center table-nowrap align-middle mb-0">
                                        <thead>
                                            <tr class="bg-light bg-opacity-50">
                                                <th scope="col" class="border-0" style="width: 70px;">#</th>
                                                <th scope="col" class="border-0 text-start">Product Details</th>
                                                <th scope="col" class="border-0" style="width: 140px">Quantity</th>
                                                <th scope="col" class="border-0" style="width: 140px;">Unit price</th>
                                                <th scope="col" class="border-0" style="width: 240px">Amount</th>
                                                <th scope="col" class="border-0" style="width: 50px;">•••</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td class="text-start">
                                                    <input type="text" id="product-detail-one"
                                                        class="form-control mb-1" placeholder="Product One">
                                                    <input type="text" id="product-desc-one" class="form-control"
                                                        placeholder="Item description">
                                                </td>
                                                <td>
                                                    <input type="number" id="product-category-one" class="form-control"
                                                        placeholder="Quantity">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="Price">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control  w-auto"
                                                        placeholder="$0.00">
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn flex-shrink-0 rounded-circle btn-icon btn-ghost-danger"><iconify-icon
                                                            icon="solar:trash-bin-trash-bold-duotone"
                                                            class="fs-20"><template shadowrootmode="open">
                                                                <style data-style="data-style">
                                                                    :host {
                                                                        display: inline-block;
                                                                        vertical-align: 0
                                                                    }

                                                                    span,
                                                                    svg {
                                                                        display: block
                                                                    }
                                                                </style><svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="1em" height="1em" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M3 6.386c0-.484.345-.877.771-.877h2.665c.529-.016.996-.399 1.176-.965l.03-.1l.115-.391c.07-.24.131-.45.217-.637c.338-.739.964-1.252 1.687-1.383c.184-.033.378-.033.6-.033h3.478c.223 0 .417 0 .6.033c.723.131 1.35.644 1.687 1.383c.086.187.147.396.218.637l.114.391l.03.1c.18.566.74.95 1.27.965h2.57c.427 0 .772.393.772.877s-.345.877-.771.877H3.77c-.425 0-.77-.393-.77-.877">
                                                                    </path>
                                                                    <path fill="currentColor" fill-rule="evenodd"
                                                                        d="M9.425 11.482c.413-.044.78.273.821.707l.5 5.263c.041.433-.26.82-.671.864c-.412.043-.78-.273-.821-.707l-.5-5.263c-.041-.434.26-.821.671-.864m5.15 0c.412.043.713.43.671.864l-.5 5.263c-.04.434-.408.75-.82.707c-.413-.044-.713-.43-.672-.864l.5-5.264c.041-.433.409-.75.82-.707"
                                                                        clip-rule="evenodd"></path>
                                                                    <path fill="currentColor"
                                                                        d="M11.596 22h.808c2.783 0 4.174 0 5.08-.886c.904-.886.996-2.339 1.181-5.245l.267-4.188c.1-1.577.15-2.366-.303-2.865c-.454-.5-1.22-.5-2.753-.5H8.124c-1.533 0-2.3 0-2.753.5s-.404 1.288-.303 2.865l.267 4.188c.185 2.906.277 4.36 1.182 5.245c.905.886 2.296.886 5.079.886"
                                                                        opacity=".5"></path>
                                                                </svg>
                                                            </template></iconify-icon></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">02</th>
                                                <td class="text-start">
                                                    <input type="text" id="product-detail-two"
                                                        class="form-control mb-1" placeholder="Product Two">
                                                    <input type="text" id="product-desc-two" class="form-control"
                                                        placeholder="Item description">
                                                </td>
                                                <td>
                                                    <input type="number" id="product-category-two" class="form-control"
                                                        placeholder="Quantity">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="Price">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control  w-auto"
                                                        placeholder="$0.00">
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn flex-shrink-0 rounded-circle btn-icon btn-ghost-danger"><iconify-icon
                                                            icon="solar:trash-bin-trash-bold-duotone"
                                                            class="fs-20"><template shadowrootmode="open">
                                                                <style data-style="data-style">
                                                                    :host {
                                                                        display: inline-block;
                                                                        vertical-align: 0
                                                                    }

                                                                    span,
                                                                    svg {
                                                                        display: block
                                                                    }
                                                                </style><svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="1em" height="1em" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M3 6.386c0-.484.345-.877.771-.877h2.665c.529-.016.996-.399 1.176-.965l.03-.1l.115-.391c.07-.24.131-.45.217-.637c.338-.739.964-1.252 1.687-1.383c.184-.033.378-.033.6-.033h3.478c.223 0 .417 0 .6.033c.723.131 1.35.644 1.687 1.383c.086.187.147.396.218.637l.114.391l.03.1c.18.566.74.95 1.27.965h2.57c.427 0 .772.393.772.877s-.345.877-.771.877H3.77c-.425 0-.77-.393-.77-.877">
                                                                    </path>
                                                                    <path fill="currentColor" fill-rule="evenodd"
                                                                        d="M9.425 11.482c.413-.044.78.273.821.707l.5 5.263c.041.433-.26.82-.671.864c-.412.043-.78-.273-.821-.707l-.5-5.263c-.041-.434.26-.821.671-.864m5.15 0c.412.043.713.43.671.864l-.5 5.263c-.04.434-.408.75-.82.707c-.413-.044-.713-.43-.672-.864l.5-5.264c.041-.433.409-.75.82-.707"
                                                                        clip-rule="evenodd"></path>
                                                                    <path fill="currentColor"
                                                                        d="M11.596 22h.808c2.783 0 4.174 0 5.08-.886c.904-.886.996-2.339 1.181-5.245l.267-4.188c.1-1.577.15-2.366-.303-2.865c-.454-.5-1.22-.5-2.753-.5H8.124c-1.533 0-2.3 0-2.753.5s-.404 1.288-.303 2.865l.267 4.188c.185 2.906.277 4.36 1.182 5.245c.905.886 2.296.886 5.079.886"
                                                                        opacity=".5"></path>
                                                                </svg>
                                                            </template></iconify-icon></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end table-->

                                    <div class="p-2">
                                        <button type="button" class="btn btn-primary"><i
                                                class="ti ti-circle-plus me-1"></i> Add Products</button>
                                    </div>
                                </div>
                                <div>
                                    <table class="table table-sm table-borderless table-nowrap align-middle mb-0 ms-auto"
                                        style="width:300px">
                                        <tbody>
                                            <tr>
                                                <td class="fw-medium">Subtotal</td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productSubtotal" class="form-control"
                                                            placeholder="$0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Shipping</td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productShipping" class="form-control"
                                                            placeholder="$0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Discount <small class="text-muted">(10%)</small>
                                                </td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productDiscount" class="form-control"
                                                            placeholder="$0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Tax <small class="text-muted">(18%)</small></td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productTaxes" class="form-control"
                                                            placeholder="$0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-15">
                                                <th scope="row" class="fw-bold">Total Amount</th>
                                                <th class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productTotalAmount" disabled=""
                                                            class="form-control" placeholder="$0.00">
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                            </div>

                            <div>
                                <label class="form-label" for="InvoiceNote"> Note : </label>
                                <textarea class="form-control" id="InvoiceNote" placeholder="Thanks for your business " rows="3"></textarea>
                            </div>
                        </div> <!-- end card-body-->
                    </form>
                </div><!-- end card -->
                <div class="mb-5">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="javascript:window.print()" class="btn btn-primary gap-1"><i class="ti ti-eye fs-16"></i>
                            Preview</a>
                        <a href="javascript: void(0);" class="btn btn-success gap-1"><i
                                class="ti ti-device-floppy fs-16"></i> Save</a>
                        <a href="javascript: void(0);" class="btn btn-info gap-1"><i class="ti ti-send fs-16"></i> Send
                            Invoice</a>
                    </div>
                </div>
                <!-- end buttons -->
            </div>
        </div>

    </div> <!-- container -->
@endsection



@push('script')
    <div class="flatpickr-calendar animate" tabindex="-1">
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
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day today selected" aria-label="May 8, 2025"
                            aria-current="date" tabindex="-1">8</span><span class="flatpickr-day"
                            aria-label="May 9, 2025" tabindex="-1">9</span><span class="flatpickr-day"
                            aria-label="May 10, 2025" tabindex="-1">10</span><span class="flatpickr-day"
                            aria-label="May 11, 2025" tabindex="-1">11</span><span class="flatpickr-day"
                            aria-label="May 12, 2025" tabindex="-1">12</span><span class="flatpickr-day"
                            aria-label="May 13, 2025" tabindex="-1">13</span><span class="flatpickr-day"
                            aria-label="May 14, 2025" tabindex="-1">14</span><span class="flatpickr-day"
                            aria-label="May 15, 2025" tabindex="-1">15</span><span class="flatpickr-day"
                            aria-label="May 16, 2025" tabindex="-1">16</span><span class="flatpickr-day"
                            aria-label="May 17, 2025" tabindex="-1">17</span><span class="flatpickr-day"
                            aria-label="May 18, 2025" tabindex="-1">18</span><span class="flatpickr-day"
                            aria-label="May 19, 2025" tabindex="-1">19</span><span class="flatpickr-day"
                            aria-label="May 20, 2025" tabindex="-1">20</span><span class="flatpickr-day"
                            aria-label="May 21, 2025" tabindex="-1">21</span><span class="flatpickr-day"
                            aria-label="May 22, 2025" tabindex="-1">22</span><span class="flatpickr-day"
                            aria-label="May 23, 2025" tabindex="-1">23</span><span class="flatpickr-day"
                            aria-label="May 24, 2025" tabindex="-1">24</span><span class="flatpickr-day"
                            aria-label="May 25, 2025" tabindex="-1">25</span><span class="flatpickr-day"
                            aria-label="May 26, 2025" tabindex="-1">26</span><span class="flatpickr-day"
                            aria-label="May 27, 2025" tabindex="-1">27</span><span class="flatpickr-day"
                            aria-label="May 28, 2025" tabindex="-1">28</span><span class="flatpickr-day"
                            aria-label="May 29, 2025" tabindex="-1">29</span><span class="flatpickr-day"
                            aria-label="May 30, 2025" tabindex="-1">30</span><span class="flatpickr-day"
                            aria-label="May 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 1, 2025" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 2, 2025" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 3, 2025" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 4, 2025" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 5, 2025" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 6, 2025" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 7, 2025" tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar animate" tabindex="-1">
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
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day today" aria-label="May 8, 2025"
                            aria-current="date" tabindex="-1">8</span><span class="flatpickr-day"
                            aria-label="May 9, 2025" tabindex="-1">9</span><span class="flatpickr-day"
                            aria-label="May 10, 2025" tabindex="-1">10</span><span class="flatpickr-day"
                            aria-label="May 11, 2025" tabindex="-1">11</span><span class="flatpickr-day"
                            aria-label="May 12, 2025" tabindex="-1">12</span><span class="flatpickr-day"
                            aria-label="May 13, 2025" tabindex="-1">13</span><span class="flatpickr-day"
                            aria-label="May 14, 2025" tabindex="-1">14</span><span class="flatpickr-day"
                            aria-label="May 15, 2025" tabindex="-1">15</span><span class="flatpickr-day"
                            aria-label="May 16, 2025" tabindex="-1">16</span><span class="flatpickr-day"
                            aria-label="May 17, 2025" tabindex="-1">17</span><span class="flatpickr-day"
                            aria-label="May 18, 2025" tabindex="-1">18</span><span class="flatpickr-day"
                            aria-label="May 19, 2025" tabindex="-1">19</span><span class="flatpickr-day"
                            aria-label="May 20, 2025" tabindex="-1">20</span><span class="flatpickr-day"
                            aria-label="May 21, 2025" tabindex="-1">21</span><span class="flatpickr-day"
                            aria-label="May 22, 2025" tabindex="-1">22</span><span class="flatpickr-day"
                            aria-label="May 23, 2025" tabindex="-1">23</span><span class="flatpickr-day"
                            aria-label="May 24, 2025" tabindex="-1">24</span><span class="flatpickr-day"
                            aria-label="May 25, 2025" tabindex="-1">25</span><span class="flatpickr-day"
                            aria-label="May 26, 2025" tabindex="-1">26</span><span class="flatpickr-day"
                            aria-label="May 27, 2025" tabindex="-1">27</span><span class="flatpickr-day"
                            aria-label="May 28, 2025" tabindex="-1">28</span><span class="flatpickr-day"
                            aria-label="May 29, 2025" tabindex="-1">29</span><span class="flatpickr-day"
                            aria-label="May 30, 2025" tabindex="-1">30</span><span class="flatpickr-day"
                            aria-label="May 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 1, 2025" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 2, 2025" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 3, 2025" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 4, 2025" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 5, 2025" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 6, 2025" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay"
                            aria-label="June 7, 2025" tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
@endpush
