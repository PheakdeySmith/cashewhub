@extends('backends.layouts.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nouislider.min.css">
@endpush

@section('content')
<!-- Start Content-->
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Products Grid</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>

                <li class="breadcrumb-item active">Products Grid</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xxl-3">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="card-title mb-0">Popular Brands</h4>
                </div>
                <div class="card-body">
                    <div class="categories-list d-flex flex-column gap-2 mb-2">
                        <div class="form-check">
                            <input type="checkbox" id="samsung" class="form-check-input">
                            <label for="samsung" class="form-check-label">Samsung</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="sony" class="form-check-input">
                            <label for="sony" class="form-check-label">Sony</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="apple" class="form-check-input">
                            <label for="apple" class="form-check-label">Apple</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="h&amp;m" class="form-check-input">
                            <label for="h&amp;m" class="form-check-label">H &amp; M</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="blackBerry" class="form-check-input">
                            <label for="blackBerry" class="form-check-label">Black Berry</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="skullcandy" class="form-check-input">
                            <label for="skullcandy" class="form-check-label">Skullcandy</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="zara" class="form-check-input">
                            <label for="zara" class="form-check-label">Zara</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="noise" class="form-check-input">
                            <label for="noise" class="form-check-label">Noise</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="nike" class="form-check-input">
                            <label for="nike" class="form-check-label">Nike</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="adidas" class="form-check-input">
                            <label for="adidas" class="form-check-label">Adidas</label>
                        </div>
                    </div>
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                        class="text-primary fw-medium">More <i class="ti ti-arrow-right align-middle"></i></a>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="card-title mb-0">Popular Categories</h4>
                </div>
                <div class="card-body">
                    <div class="categories-list d-flex flex-column gap-2 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="all-categories" checked="">
                                <label class="form-check-label" for="all-categories">All Categories</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">5352</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="furniture-categories">
                                <label class="form-check-label" for="furniture-categories">Furniture</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">624</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="headphones-categories">
                                <label class="form-check-label" for="headphones-categories">Headphones</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">351</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="sunglass-categories">
                                <label class="form-check-label" for="sunglass-categories">Eye Ware &amp;
                                    Sunglass</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">98</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="shoes-categories">
                                <label class="form-check-label" for="shoes-categories">Foot Ware</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">452</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="fashion-categories">
                                <label class="form-check-label" for="fashion-categories">Fashion Men , Women &amp;
                                    Kid's</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">2120</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="electronics-categories">
                                <label class="form-check-label" for="electronics-categories">Electronics Items</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">667</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="watches-categories">
                                <label class="form-check-label" for="watches-categories">Watches</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">80</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="beauty-categories">
                                <label class="form-check-label" for="beauty-categories">Beauty &amp; Health</label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">960</span>
                            </div>
                        </div>
                    </div>
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                        class="text-primary fw-medium">More <i class="ti ti-arrow-right align-middle"></i></a>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="card-title mb-0">Custom Price</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column gap-2 mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="all-price">
                            <label class="form-check-label" for="all-price">All Price</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="price-1">
                            <label class="form-check-label" for="price-1">Below $200 (221)</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="price-2">
                            <label class="form-check-label" for="price-2">$200 - $500 (172)</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="price-3">
                            <label class="form-check-label" for="price-3">$500 - $800 (331)</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="price-4">
                            <label class="form-check-label" for="price-4">$800 - $1000 (455)</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="price-5">
                            <label class="form-check-label" for="price-5">$1000 - $1200 (1290)</label>
                        </div>
                    </div>
                    <div id="product-price-range" [data-slider-size="md" ]=""
                        class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                        <div class="noUi-base">
                            <div class="noUi-connects">
                                <div class="noUi-connect noUi-draggable"
                                    style="transform: translate(13.3333%, 0px) scale(0.732667, 1);"></div>
                            </div>
                            <div class="noUi-origin" style="transform: translate(-86.6667%, 0px); z-index: 5;">
                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                    role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                    aria-valuemax="1299.0" aria-valuenow="200.0" aria-valuetext="$ 200">
                                    <div class="noUi-touch-area"></div>
                                </div>
                            </div>
                            <div class="noUi-origin" style="transform: translate(-13.4%, 0px); z-index: 4;">
                                <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                    role="slider" aria-orientation="horizontal" aria-valuemin="200.0"
                                    aria-valuemax="1500.0" aria-valuenow="1299.0" aria-valuetext="$ 1299">
                                    <div class="noUi-touch-area"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="formCost d-flex gap-2 align-items-center mt-3">
                        <input class="form-control form-control-sm text-center" type="text" id="minCost"
                            value="0">
                        <span class="fw-semibold text-muted">to</span>
                        <input class="form-control form-control-sm text-center" type="text" id="maxCost"
                            value="1000">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="card-title mb-0">Rating</h4>
                </div>
                <div class="card-body">
                    <div class="categories-list d-flex flex-column gap-2">
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="five-star">
                                <label class="form-check-label" for="five-star"><span
                                        class="flex-grow-1 d-inline-flex align-items-center">
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ms-1">5 Star Rating </span>
                                    </span></label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">452</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="four-star">
                                <label class="form-check-label" for="four-star"><span
                                        class="flex-grow-1 d-inline-flex align-items-center">
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ms-1">4 Star Rating</span>
                                    </span>
                                </label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">622</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="three-star">
                                <label class="form-check-label" for="three-star"><span
                                        class="flex-grow-1 d-inline-flex align-items-center">
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ms-1">3 Star Rating</span>
                                    </span>
                                </label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">389</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="two-star">
                                <label class="form-check-label" for="two-star"><span
                                        class="flex-grow-1 d-inline-flex align-items-center">
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ms-1">2 Star Rating</span>
                                    </span>
                                </label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">215</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="one-star">
                                <label class="form-check-label" for="one-star"><span
                                        class="flex-grow-1 d-inline-flex align-items-center">
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ti ti-star text-muted"></span>
                                        <span class="ms-1">1 Star Rating</span>
                                    </span>
                                </label>
                            </div>
                            <div>
                                <span class="badge bg-primary-subtle text-primary">546</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-footer">
                    <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                        class="btn btn-primary w-100">Apply Filter</a>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-xxl-9">


            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div
                                class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center mx-auto mb-2">
                                <iconify-icon icon="solar:t-shirt-bold-duotone" class="fs-32 text-warning"><template
                                        shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M5.777 18.265v-7.97c0-.683 0-1.025-.132-1.326c-.131-.3-.378-.523-.871-.968l-.186-.167C3.532 6.882 3.004 6.405 3 5.716c-.004-.69.464-1.122 1.401-1.988q.214-.197.418-.362c.472-.378 1.138-.792 1.648-1.09a2.05 2.05 0 0 1 1.567-.205l.49.129c.389.102.727.353.949.703c.6.948 1.564 1.423 2.527 1.423V22c-1.467 0-2.724-.148-3.716-.33c-1.073-.198-1.61-.296-2.058-.858c-.45-.562-.45-1.224-.45-2.547"
                                                clip-rule="evenodd"></path>
                                            <path fill="currentColor"
                                                d="M18.223 18.265v-7.97c0-.683 0-1.025.132-1.326c.131-.3.378-.523.871-.968l.186-.167c1.056-.952 1.584-1.429 1.588-2.118c.004-.69-.465-1.122-1.401-1.988a8 8 0 0 0-.418-.362c-.472-.378-1.138-.792-1.648-1.09a2.05 2.05 0 0 0-1.567-.205l-.49.129a1.6 1.6 0 0 0-.949.703c-.6.948-1.564 1.423-2.527 1.423V22c1.467 0 2.724-.148 3.716-.33c1.073-.198 1.61-.296 2.059-.858c.448-.562.448-1.224.448-2.547"
                                                opacity=".5"></path>
                                        </svg>
                                    </template></iconify-icon>
                            </div>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="text-dark fs-16 fw-medium">Fashion Men &amp; Women</a>
                            <p class="mt-1 mb-0">2120 Items Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div
                                class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center mx-auto mb-2">
                                <iconify-icon icon="solar:sofa-2-bold-duotone" class="fs-32 text-warning"><template
                                        shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12.75 14h4.45a.8.8 0 0 0 .8-.8V12a2 2 0 1 1 4 0v2.444a3.55 3.55 0 0 1-1.25 2.707V19a.75.75 0 0 1-1.5 0v-1.092a3.6 3.6 0 0 1-.806.092H5.556a3.6 3.6 0 0 1-.806-.092V19a.75.75 0 0 1-1.5 0v-1.849A3.55 3.55 0 0 1 2 14.444V12a2 2 0 1 1 4 0v1.2a.8.8 0 0 0 .8.8h4.45V5h1.5z">
                                            </path>
                                            <path fill="currentColor"
                                                d="M17.2 14h-4.45V5H15c.93 0 1.394 0 1.78.077a4 4 0 0 1 3.143 3.143c.043.214.062.452.07.78H20v1a2 2 0 0 0-2 2v1.2a.8.8 0 0 1-.8.8m-5.95 0H6.8a.8.8 0 0 1-.8-.8V12a2 2 0 0 0-1.993-2V9c.008-.328.027-.566.07-.78A4 4 0 0 1 7.22 5.077C7.606 5 8.07 5 9 5h2.25z"
                                                opacity=".5"></path>
                                        </svg>
                                    </template></iconify-icon>
                            </div>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="text-dark fs-16 fw-medium">Furniture Sofa &amp; Chair</a>
                            <p class="mt-1 mb-0">624 Items Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div
                                class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center mx-auto mb-2">
                                <iconify-icon icon="solar:headphones-round-sound-bold-duotone"
                                    class="fs-32 text-warning"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M2 12.124C2 6.533 6.477 2 12 2s10 4.533 10 10.124v5.243c0 .817 0 1.378-.143 1.87a3.52 3.52 0 0 1-1.847 2.188c-.458.22-1.004.307-1.801.434l-.13.02a13 13 0 0 1-.727.105c-.209.02-.422.027-.64-.016a2.1 2.1 0 0 1-1.561-1.35a2.2 2.2 0 0 1-.116-.639c-.012-.204-.012-.452-.012-.742v-4.173c0-.425 0-.791.097-1.105a2.1 2.1 0 0 1 1.528-1.43c.316-.073.677-.044 1.096-.01l.093.007l.11.01c.783.062 1.32.104 1.775.275q.481.181.883.487v-1.174c0-4.811-3.853-8.711-8.605-8.711s-8.605 3.9-8.605 8.711v1.174c.267-.203.563-.368.883-.487c.455-.17.992-.213 1.775-.276l.11-.009l.093-.007c.42-.034.78-.063 1.096.01a2.1 2.1 0 0 1 1.528 1.43c.098.314.097.68.097 1.105v4.172c0 .291 0 .54-.012.743c-.012.213-.04.427-.116.638a2.1 2.1 0 0 1-1.56 1.35a2.2 2.2 0 0 1-.641.017c-.201-.02-.444-.059-.727-.104l-.13-.02c-.797-.128-1.344-.215-1.801-.436a3.52 3.52 0 0 1-1.847-2.188c-.118-.405-.139-.857-.142-1.461L2 17.58z">
                                            </path>
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M12 5.75a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0v-5a.75.75 0 0 1 .75-.75m3 1.5a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 .75-.75m-6 0a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0V8A.75.75 0 0 1 9 7.25"
                                                clip-rule="evenodd" opacity=".5"></path>
                                        </svg>
                                    </template></iconify-icon>
                            </div>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="text-dark fs-16 fw-medium">Electronics Items</a>
                            <p class="mt-1 mb-0">667 Items Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div
                                class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center mx-auto mb-2">
                                <iconify-icon icon="solar:glasses-bold-duotone" class="fs-32 text-warning"><template
                                        shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M6.712 3.763a.75.75 0 0 1-.475.949l-.518.172c-.617.206-1.024.343-1.326.481c-.286.13-.414.235-.5.343c-.085.107-.157.256-.219.564c-.065.326-.105.753-.164 1.401l-.367 4.037l-.048.532a4.75 4.75 0 0 1 7.585 2.942a4.8 4.8 0 0 1 1.32-.187v1.5c-.37 0-.739.063-1.092.19l-.22.077A4.75 4.75 0 0 1 6 20.75c-2.62 0-4.745-2.14-4.75-4.758q0-.421.072-.823L2.02 7.5c.054-.6.1-1.107.183-1.521c.089-.441.23-.842.515-1.201c.284-.36.642-.59 1.051-.776c.384-.176.868-.337 1.439-.527l.555-.185a.75.75 0 0 1 .949.474"
                                                clip-rule="evenodd"></path>
                                            <path fill="currentColor"
                                                d="M20.905 12.242a4.75 4.75 0 0 0-7.585 2.942a4.8 4.8 0 0 0-1.32-.187v1.5c.37 0 .739.063 1.092.19l.22.077A4.75 4.75 0 0 0 18 20.75c2.62 0 4.744-2.14 4.75-4.758q0-.421-.073-.823L21.98 7.5c-.054-.6-.1-1.107-.183-1.521c-.089-.441-.23-.842-.515-1.201s-.642-.59-1.051-.776c-.384-.176-.868-.337-1.439-.527l-.555-.185a.75.75 0 0 0-.474 1.423l.518.172c.617.206 1.024.343 1.326.481c.286.13.414.235.5.343c.085.107.157.256.219.564c.065.326.105.753.164 1.401z"
                                                opacity=".5"></path>
                                        </svg>
                                    </template></iconify-icon>
                            </div>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="text-dark fs-16 fw-medium">Eye Ware &amp; Sunglass</a>
                            <p class="mt-1 mb-0">98 Items Available</p>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-1.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">Zara Fashion</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">Men White Slim Fit T-shirt</a>
                            </div>
                            <h5 class="my-1">Size : XS , S , M</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-half text-warning"></span>
                                <span class="ms-1 fs-14">123k Reviews </span>
                            </div>
                        </div>

                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$90.99</span> $70.90
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>

                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="on">
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>

                        <span class="position-absolute top-0 start-0 p-2">
                            <span class="badge bg-danger fs-11">On Deal</span>
                        </span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-2.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">Wrogn Bags</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">55 L Laptop Backpack fits upto 16 In...</a>
                            </div>
                            <h5 class="my-1">Size : 30L , 40L , 55L</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-half text-warning"></span>
                                <span class="ms-1 fs-14">43k Reviews </span>
                            </div>
                        </div>

                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$120.99</span> $100.90
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>

                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="off">
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-3.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">Premium Furniture</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">Minetta Rattan Swivel Premium Chair</a>
                            </div>
                            <h5 class="my-1">Size : 56L X 63D X 102H CM</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ms-1 fs-14">23k Reviews </span>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$349.99</span> $300.00
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>
                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="off">
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>
                        <span class="position-absolute top-0 start-0 p-2">
                            <span class="badge bg-danger fs-11">On Deal</span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-4.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">Bose Headphones</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">HYPERX Cloud Gaming Headphone</a>
                            </div>
                            <h5 class="my-1">Size : S , M</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star text-muted"></span>
                                <span class="ms-1 fs-14">311k Reviews </span>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$259.99</span> $230.90
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>
                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="on">
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-5.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">Winter Fashion</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">Men Winter Knitted Sweater</a>
                            </div>
                            <h5 class="my-1">Size : S , M , XL ,XXL</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star text-muted"></span>
                                <span class="ms-1 fs-14">12k Reviews </span>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$100.99</span> $90.00
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>
                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="on">
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>
                        <span class="position-absolute top-0 start-0 p-2">
                            <span class="badge bg-danger fs-11">On Seal</span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-6.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">Nike Foot Ware</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">Jordan Jumpman MVP Men's Shoes Size</a>
                            </div>
                            <h5 class="my-1">Size US : 7 , 8 , 8.5 , 9 , 10</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ms-1 fs-14">200k Reviews </span>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$480.99</span> $400.00
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>
                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="on">
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>
                        <span class="position-absolute top-0 start-0 p-2">
                            <span class="badge bg-danger fs-11">On Seal</span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-7.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">CRAFT Furniture</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">Sleepify Luno 4 Seater Fabric Sofa</a>
                            </div>
                            <h5 class="my-1">Size : 117W x 38D x 34H CM</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ms-1 fs-14">120k Reviews </span>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$400.99</span> $340.00
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>
                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="off">
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/p-8.png" alt="product images" class="img-fluid">

                        <div class="card-body border-top border-dashed">
                            <h5 class="text-primary fw-medium">H&amp;M Fashion</h5>
                            <div>
                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                    class="fw-semibold fs-16 text-dark">Navy Blue Over Size T-shirt For Men</a>
                            </div>
                            <h5 class="my-1">Size : M , XL , XXL , XXXL</h5>
                            <div class="flex-grow-1 d-inline-flex align-items-center fs-16 mt-1">
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star-filled text-warning"></span>
                                <span class="ti ti-star text-muted"></span>
                                <span class="ms-1 fs-14">176k Reviews </span>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between border-top border-dashed">
                            <h4 class="fw-semibold text-danger d-flex align-items-center gap-2 mb-0">
                                <span class="text-muted text-decoration-line-through">$90.99</span> $80.00
                            </h4>

                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#!"
                                class="btn btn-soft-primary px-2 fs-20">
                                <iconify-icon icon="solar:cart-3-bold-duotone"><template shadowrootmode="open">
                                        <style data-style="data-style">
                                            :host {
                                                display: inline-block;
                                                vertical-align: 0
                                            }

                                            span,
                                            svg {
                                                display: block
                                            }
                                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M10 2a1.75 1.75 0 1 0 0 3.5h4A1.75 1.75 0 1 0 14 2zM3.863 16.205c-.858-3.432-1.287-5.147-.386-6.301S6.147 8.75 9.684 8.75h4.63c3.538 0 5.307 0 6.208 1.154s.472 2.87-.386 6.301c-.546 2.183-.819 3.274-1.633 3.91c-.813.635-1.938.635-4.188.635h-4.63c-2.25 0-3.376 0-4.19-.635c-.813-.636-1.086-1.727-1.632-3.91"
                                                opacity=".5"></path>
                                            <path fill="currentColor"
                                                d="M15.58 4.502a1.74 1.74 0 0 0 .002-1.501c.683.005 1.216.036 1.692.222a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.047.17l.512 2.964c-.408-.282-.935-.45-1.617-.55l-.361-2.087c-.284-1.04-.387-1.367-.561-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118M8.418 3a1.74 1.74 0 0 0 .002 1.502c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.561-.56 1.6l-.362 2.089c-.681.1-1.208.267-1.617.548l.512-2.962l.047-.17c.237-.872.41-1.506.776-2a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222m.332 9.749a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM16 12a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4A.75.75 0 0 1 16 12m-3.25.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0z">
                                            </path>
                                        </svg>
                                    </template></iconify-icon>
                            </a>
                        </div>
                        <span class="position-absolute top-0 end-0 p-2">
                            <div data-toggler="on">
                                <button type="button" class="btn btn-icon btn-light rounded-circle"
                                    data-toggler-on="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone"
                                        class="fs-22 text-danger"><template shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                                <button type="button" class="btn btn-icon btn-light rounded-circle d-none"
                                    data-toggler-off="">
                                    <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22"><template
                                            shadowrootmode="open">
                                            <style data-style="data-style">
                                                :host {
                                                    display: inline-block;
                                                    vertical-align: 0
                                                }

                                                span,
                                                svg {
                                                    display: block
                                                }
                                            </style><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M2 9.137c0 4.405 3.298 6.946 6.106 9.11q.44.337.856.664C10 19.729 11 20.5 12 20.5v-15C7.5.826 2 4.275 2 9.138"
                                                    clip-rule="evenodd" opacity=".5"></path>
                                                <path fill="currentColor"
                                                    d="m14 7.5l-2-2v15c1 0 2-.77 3.038-1.59q.417-.326.856-.663C18.702 16.083 22 13.542 22 9.137c0-4.462-4.631-7.734-8.871-4.63l1.931 1.931A.75.75 0 0 1 14 7.5">
                                                </path>
                                            </svg>
                                        </template></iconify-icon>
                                </button>
                            </div>
                        </span>
                        <span class="position-absolute top-0 start-0 p-2">
                            <span class="badge bg-danger fs-11">On Seal</span>
                        </span>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row mb-4 align-items-center">
                <div class="col-sm">
                    <div class="text-muted">
                        Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">35</span> Results
                    </div>
                </div>

                <div class="col-sm-auto mt-3 mt-sm-0">
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link"
                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#"
                                    tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link"
                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#">1</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link"
                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link"
                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link"
                                    href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-grid.html#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- end pagination -->
        </div><!--end col-->
    </div>

</div> <!-- container -->

@endsection
@push('script')


<!-- nouisliderribute js -->
<script src="{{ asset('assets') }}/js/nouislider.min.js"></script>
<script src="{{ asset('assets') }}/js/wNumb.min.js"></script>

<!-- Select2 Plugin Js -->
<script src="{{ asset('assets') }}/js/select2.min.js"></script>

<!-- ecommerce product grid js -->
<script src="{{ asset('assets') }}/js/ecommerce-product-grid-list.init.js"></script>
@endpush
