@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="container-xxl">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">View Invoice</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>

                <li class="breadcrumb-item active">View Invoice</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Invoice Logo-->
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div>
                            <img src="{{ asset('assets') }}/images/logo-dark.png" alt="dark logo" height="24">
                        </div>
                        <div class="text-end">
                            <span class="badge bg-success-subtle text-success px-1 fs-12 mb-3">Paid</span>
                            <h3 class="m-0 fw-bolder fs-20">Invoice: #INV7896</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <h5 class="fw-bold pb-1 mb-2 fs-14"> Invoice From : </h5>
                                <h6 class="fs-14 mb-2">Chris Keller</h6>
                                <h6 class="fs-14 text-muted mb-2 lh-base">1055 Station Street Fremont, <br> CA - 94539</h6>
                                <h6 class="fs-14 text-muted mb-0">Phone: 510-875-0005</h6>
                            </div>
                            <div>
                                <h5 class="fw-bold fs-14"> Invoice Date : </h5>
                                <h6 class="fs-14 text-muted">12 Apr 2024</h6>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-4">
                                <h5 class="fw-bold pb-1 mb-2 fs-14"> Bill To : </h5>
                                <h6 class="fs-14 mb-2">Lucian Obrien</h6>
                                <h6 class="fs-14 text-muted mb-2 lh-base">1147 Rohan Drive Suite, <br>Burlington, VT / 82021</h6>
                                <h6 class="fs-14 text-muted mb-0">Phone: 904-966-2836</h6>
                            </div>
                            <div>
                                <h5 class="fw-bold fs-14"> Due Date : </h5>
                                <h6 class="fs-14 text-muted">28 Apr 2024</h6>
                            </div>
                        </div>

                        <div class="col-lg-4 text-end">
                            <img src="{{ asset('assets') }}/images/qr-code.png" alt="qr-code-image" height="100">
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="table-responsive">
                        <table class="table text-center table-nowrap align-middle mb-0">
                            <thead>
                                <tr class="bg-light bg-opacity-50">
                                    <th class="border-0" scope="col" style="width: 50px;">#</th>
                                    <th class="text-start border-0" scope="col">Product Details</th>
                                    <th class="border-0" scope="col">Quantity</th>
                                    <th class="border-0" scope="col">Unit price</th>
                                    <th class="text-end border-0" scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody id="products-list">
                                <tr>
                                    <th scope="row">01</th>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center gap-2">
                                            <iconify-icon icon="logos:react" class="fs-22"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1.13em" height="1em" viewBox="0 0 256 228"><path fill="#00D8FF" d="M210.483 73.824a172 172 0 0 0-8.24-2.597c.465-1.9.893-3.777 1.273-5.621c6.238-30.281 2.16-54.676-11.769-62.708c-13.355-7.7-35.196.329-57.254 19.526a171 171 0 0 0-6.375 5.848a156 156 0 0 0-4.241-3.917C100.759 3.829 77.587-4.822 63.673 3.233C50.33 10.957 46.379 33.89 51.995 62.588a171 171 0 0 0 1.892 8.48c-3.28.932-6.445 1.924-9.474 2.98C17.309 83.498 0 98.307 0 113.668c0 15.865 18.582 31.778 46.812 41.427a146 146 0 0 0 6.921 2.165a168 168 0 0 0-2.01 9.138c-5.354 28.2-1.173 50.591 12.134 58.266c13.744 7.926 36.812-.22 59.273-19.855a146 146 0 0 0 5.342-4.923a168 168 0 0 0 6.92 6.314c21.758 18.722 43.246 26.282 56.54 18.586c13.731-7.949 18.194-32.003 12.4-61.268a145 145 0 0 0-1.535-6.842c1.62-.48 3.21-.974 4.76-1.488c29.348-9.723 48.443-25.443 48.443-41.52c0-15.417-17.868-30.326-45.517-39.844m-6.365 70.984q-2.102.694-4.3 1.345c-3.24-10.257-7.612-21.163-12.963-32.432c5.106-11 9.31-21.767 12.459-31.957c2.619.758 5.16 1.557 7.61 2.4c23.69 8.156 38.14 20.213 38.14 29.504c0 9.896-15.606 22.743-40.946 31.14m-10.514 20.834c2.562 12.94 2.927 24.64 1.23 33.787c-1.524 8.219-4.59 13.698-8.382 15.893c-8.067 4.67-25.32-1.4-43.927-17.412a157 157 0 0 1-6.437-5.87c7.214-7.889 14.423-17.06 21.459-27.246c12.376-1.098 24.068-2.894 34.671-5.345q.785 3.162 1.386 6.193M87.276 214.515c-7.882 2.783-14.16 2.863-17.955.675c-8.075-4.657-11.432-22.636-6.853-46.752a157 157 0 0 1 1.869-8.499c10.486 2.32 22.093 3.988 34.498 4.994c7.084 9.967 14.501 19.128 21.976 27.15a135 135 0 0 1-4.877 4.492c-9.933 8.682-19.886 14.842-28.658 17.94M50.35 144.747c-12.483-4.267-22.792-9.812-29.858-15.863c-6.35-5.437-9.555-10.836-9.555-15.216c0-9.322 13.897-21.212 37.076-29.293c2.813-.98 5.757-1.905 8.812-2.773c3.204 10.42 7.406 21.315 12.477 32.332c-5.137 11.18-9.399 22.249-12.634 32.792a135 135 0 0 1-6.318-1.979m12.378-84.26c-4.811-24.587-1.616-43.134 6.425-47.789c8.564-4.958 27.502 2.111 47.463 19.835a144 144 0 0 1 3.841 3.545c-7.438 7.987-14.787 17.08-21.808 26.988c-12.04 1.116-23.565 2.908-34.161 5.309a160 160 0 0 1-1.76-7.887m110.427 27.268a348 348 0 0 0-7.785-12.803c8.168 1.033 15.994 2.404 23.343 4.08c-2.206 7.072-4.956 14.465-8.193 22.045a381 381 0 0 0-7.365-13.322m-45.032-43.861c5.044 5.465 10.096 11.566 15.065 18.186a322 322 0 0 0-30.257-.006c4.974-6.559 10.069-12.652 15.192-18.18M82.802 87.83a323 323 0 0 0-7.227 13.238c-3.184-7.553-5.909-14.98-8.134-22.152c7.304-1.634 15.093-2.97 23.209-3.984a322 322 0 0 0-7.848 12.897m8.081 65.352c-8.385-.936-16.291-2.203-23.593-3.793c2.26-7.3 5.045-14.885 8.298-22.6a321 321 0 0 0 7.257 13.246c2.594 4.48 5.28 8.868 8.038 13.147m37.542 31.03c-5.184-5.592-10.354-11.779-15.403-18.433c4.902.192 9.899.29 14.978.29c5.218 0 10.376-.117 15.453-.343c-4.985 6.774-10.018 12.97-15.028 18.486m52.198-57.817c3.422 7.8 6.306 15.345 8.596 22.52c-7.422 1.694-15.436 3.058-23.88 4.071a382 382 0 0 0 7.859-13.026a347 347 0 0 0 7.425-13.565m-16.898 8.101a359 359 0 0 1-12.281 19.815a329 329 0 0 1-23.444.823c-7.967 0-15.716-.248-23.178-.732a310 310 0 0 1-12.513-19.846h.001a307 307 0 0 1-10.923-20.627a310 310 0 0 1 10.89-20.637l-.001.001a307 307 0 0 1 12.413-19.761c7.613-.576 15.42-.876 23.31-.876H128c7.926 0 15.743.303 23.354.883a329 329 0 0 1 12.335 19.695a359 359 0 0 1 11.036 20.54a330 330 0 0 1-11 20.722m22.56-122.124c8.572 4.944 11.906 24.881 6.52 51.026q-.518 2.504-1.15 5.09c-10.622-2.452-22.155-4.275-34.23-5.408c-7.034-10.017-14.323-19.124-21.64-27.008a161 161 0 0 1 5.888-5.4c18.9-16.447 36.564-22.941 44.612-18.3M128 90.808c12.625 0 22.86 10.235 22.86 22.86s-10.235 22.86-22.86 22.86s-22.86-10.235-22.86-22.86s10.235-22.86 22.86-22.86"></path></svg></template></iconify-icon>
                                            <div>
                                                <span class="fw-medium">React Development</span>
                                                <p class="text-muted mb-0">(Advance payment for 25 hours)</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>25</td>
                                    <td>$40.00</td>
                                    <td class="text-end">$1000.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">02</th>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center gap-2">
                                            <iconify-icon icon="logos:openai-icon" class="fs-22"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="0.99em" height="1em" viewBox="0 0 256 260"><path d="M239.184 106.203a64.72 64.72 0 0 0-5.576-53.103C219.452 28.459 191 15.784 163.213 21.74A65.586 65.586 0 0 0 52.096 45.22a64.72 64.72 0 0 0-43.23 31.36c-14.31 24.602-11.061 55.634 8.033 76.74a64.67 64.67 0 0 0 5.525 53.102c14.174 24.65 42.644 37.324 70.446 31.36a64.72 64.72 0 0 0 48.754 21.744c28.481.025 53.714-18.361 62.414-45.481a64.77 64.77 0 0 0 43.229-31.36c14.137-24.558 10.875-55.423-8.083-76.483m-97.56 136.338a48.4 48.4 0 0 1-31.105-11.255l1.535-.87l51.67-29.825a8.6 8.6 0 0 0 4.247-7.367v-72.85l21.845 12.636c.218.111.37.32.409.563v60.367c-.056 26.818-21.783 48.545-48.601 48.601M37.158 197.93a48.35 48.35 0 0 1-5.781-32.589l1.534.921l51.722 29.826a8.34 8.34 0 0 0 8.441 0l63.181-36.425v25.221a.87.87 0 0 1-.358.665l-52.335 30.184c-23.257 13.398-52.97 5.431-66.404-17.803M23.549 85.38a48.5 48.5 0 0 1 25.58-21.333v61.39a8.29 8.29 0 0 0 4.195 7.316l62.874 36.272l-21.845 12.636a.82.82 0 0 1-.767 0L41.353 151.53c-23.211-13.454-31.171-43.144-17.804-66.405zm179.466 41.695l-63.08-36.63L161.73 77.86a.82.82 0 0 1 .768 0l52.233 30.184a48.6 48.6 0 0 1-7.316 87.635v-61.391a8.54 8.54 0 0 0-4.4-7.213m21.742-32.69l-1.535-.922l-51.619-30.081a8.39 8.39 0 0 0-8.492 0L99.98 99.808V74.587a.72.72 0 0 1 .307-.665l52.233-30.133a48.652 48.652 0 0 1 72.236 50.391zM88.061 139.097l-21.845-12.585a.87.87 0 0 1-.41-.614V65.685a48.652 48.652 0 0 1 79.757-37.346l-1.535.87l-51.67 29.825a8.6 8.6 0 0 0-4.246 7.367zm11.868-25.58L128.067 97.3l28.188 16.218v32.434l-28.086 16.218l-28.188-16.218z"></path></svg></template></iconify-icon>
                                            <div>
                                                <span class="fw-medium">OpenAI Support</span>
                                                <p class="text-muted mb-0">(Small help for bug fixes)</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>01</td>
                                    <td>$200.00</td>
                                    <td class="text-end">$200.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">03</th>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center gap-2">
                                            <iconify-icon icon="logos:apple-app-store" class="fs-22"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><defs><lineargradient id="logosAppleAppStore0" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#17C9FB"></stop><stop offset="100%" stop-color="#1A74E8"></stop></lineargradient></defs><path fill="url(#logosAppleAppStore0)" d="M56.064 0h143.872C230.9 0 256 25.1 256 56.064v143.872C256 230.9 230.9 256 199.936 256H56.064C25.1 256 0 230.9 0 199.936V56.064C0 25.1 25.1 0 56.064 0"></path><path fill="#FFF" d="m82.042 185.81l.024.008l-8.753 15.16c-3.195 5.534-10.271 7.43-15.805 4.235s-7.43-10.271-4.235-15.805l6.448-11.168l.619-1.072c1.105-1.588 3.832-4.33 9.287-3.814c0 0 12.837 1.393 13.766 8.065c0 0 .126 2.195-1.351 4.391m124.143-38.72h-27.294c-1.859-.125-2.67-.789-2.99-1.175l-.02-.035l-29.217-50.606l-.038.025l-1.752-2.512c-2.872-4.392-7.432 6.84-7.432 6.84c-5.445 12.516.773 26.745 2.94 31.046l40.582 70.29c3.194 5.533 10.27 7.43 15.805 4.234c5.533-3.195 7.43-10.271 4.234-15.805l-10.147-17.576c-.197-.426-.539-1.582 1.542-1.587h13.787c6.39 0 11.57-5.18 11.57-11.57s-5.18-11.57-11.57-11.57m-53.014 15.728s1.457 7.411-4.18 7.411H48.092c-6.39 0-11.57-5.18-11.57-11.57s5.18-11.57 11.57-11.57h25.94c4.188-.242 5.18-2.66 5.18-2.66l.024.012l33.86-58.648l-.01-.002c.617-1.133.103-2.204.014-2.373l-11.183-19.369c-3.195-5.533-1.299-12.61 4.235-15.804s12.61-1.3 15.805 4.234l5.186 8.983l5.177-8.967c3.195-5.533 10.271-7.43 15.805-4.234s7.43 10.27 4.235 15.804l-47.118 81.61c-.206.497-.269 1.277 1.264 1.414h28.164l.006.275s16.278.253 18.495 15.454"></path></svg></template></iconify-icon>
                                            <div>
                                                <span class="fw-medium">Custom App Development - iOS</span>
                                                <p class="text-muted mb-0">(Phase 1 payment)</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>01</td>
                                    <td>$1200.00</td>
                                    <td class="text-end">$1200.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">04</th>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center gap-2">
                                            <iconify-icon icon="logos:digital-ocean-icon" class="fs-22"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="#0080FF" d="M128 206.55v49.448c83.813 0 149.07-80.968 121.653-168.793c-11.981-38.38-42.478-68.877-80.858-80.858C80.97-21.069 0 44.19 0 128.001h49.561c.008 0 .013-.014.013-.014c.008-52.597 52.061-93.262 107.36-73.196c20.487 7.435 36.829 23.773 44.268 44.259c20.069 55.266-20.535 107.3-73.088 107.374v-49.288l-.009-.003H78.697c-.005 0-.01.007-.01.007v49.41zm-49.32 37.977H40.715l-.01-.009V206.55h37.982v37.968s-.005.009-.009.009M40.732 206.55H8.908c-.013 0-.023-.008-.023-.008v-31.81s.01-.024.023-.024H40.71c.013 0 .023.01.023.01z"></path></svg></template></iconify-icon>
                                            <div>
                                                <span class="fw-medium">Digital Ocean Server Setup</span>
                                                <p class="text-muted mb-0">(Fix amount)</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>01</td>
                                    <td>$199.00</td>
                                    <td class="text-end">$199.00</td>
                                </tr>
                            </tbody>
                        </table><!--end table-->
                    </div>
                    <div>
                        <table class="table table-nowrap align-middle mb-0 ms-auto" style="width:335px">
                            <tbody>
                                <tr>
                                    <td class="fw-medium">Subtotal</td>
                                    <td class="text-end">$2,599.00</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Shipping <small class="text-muted">(Free)</small></td>
                                    <td class="text-end">-</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Discount <small class="text-muted">(10%)</small></td>
                                    <td class="text-end">-$259.90</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Tax <small class="text-muted">(5%)</small></td>
                                    <td class="text-end">$116.95</td>
                                </tr>
                                <tr class="border-top border-top-dashed fs-16">
                                    <td class="fw-bold">Total Amount</td>
                                    <td class="fw-bold text-end">$2456.05</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
                </div>

                <div class="card-body">
                    <div class="bg-body p-2 rounded-2 mt-4">
                        <p class="mb-0"><span class="fs-12 fw-bold text-uppercase">Note : </span>Payment for all accounts is due within 7 days from the date of invoice receipt. Payments can be made via cheque, credit card, or direct online payment. Failure to settle the account within 7 days will result in the agreed quoted fee, as noted above, being charged against the credit details provided as confirmation of the work undertaken.</p>
                    </div>

                    <div class="mt-4">
                        <p class="mb-2 pb-2"><b>Congratulations on your recent purchase!</b> It has been our pleasure to serve you, and we hope we see you again soon.</p>

                        <div class="d-inline-block">
                            <img src="{{ asset('assets') }}/images/signature.png" alt="signature" height="32">
                            <h5 class="mb-0 mt-2">Authorized Sign</h5>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>

            <div class="d-print-none mb-5">
                <div class="d-flex justify-content-center gap-2">
                    <a href="javascript:window.print()" class="btn btn-primary"><i class="ti ti-printer me-1"></i> Print</a>
                    <a href="javascript: void(0);" class="btn btn-secondary"><i class="ti ti-send me-1"></i> Send</a>
                    <a href="javascript: void(0);" class="btn btn-info"><i class="ti ti-download me-1"></i> Download</a>
                </div>
            </div>
            <!-- end buttons -->
        </div>
    </div>

</div> <!-- container -->
@endsection



@push('script')

@endpush
