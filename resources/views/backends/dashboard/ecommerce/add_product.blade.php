@extends('backends.layouts.app')
@push('style')
    <!-- Quill css -->
    <link href="{{ asset('assets') }}/css/quill.core.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/quill.snow.css" rel="stylesheet" type="text/css">

    <!-- One of the following themes -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/classic.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/monolith.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nano.min.css">
@endpush


@section('content')
    <!-- Start Content-->
    <div class="page-container">

        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Add
                    Products</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>

                    <li class="breadcrumb-item active">Add
                        Products</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="card-title">Product
                            Information</h4>
                        <p class="text-muted mb-0">Product
                            Information encompasses all data within
                            an organization pertaining to the
                            products it manufactures, procures,
                            sells, or distributes.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product
                                        Name</label>
                                    <input type="text" class="form-control" id="productName"
                                        placeholder="Enter product name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="skuId" class="form-label">SKU
                                        Id</label>
                                    <input type="text" class="form-control" id="skuId" placeholder="#19588" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Product
                                        Description</label>
                                    <textarea class="form-control" id="description" rows="7"
                                        placeholder="Short description about the product"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productCode" class="form-label">Product
                                        Code</label>
                                    <input type="text" class="form-control" id="productCode" placeholder="PC198866"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productCategory" class="form-label">Product
                                        Category</label>
                                    <select class="form-select my-1 my-md-0 me-sm-3 select2-hidden-accessible"
                                        data-toggle="select2" id="productCategory" data-select2-id="productCategory"
                                        tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="2">Select
                                            Category</option>
                                        <option>Electronics</option>
                                        <option>Mobile
                                            Accessories</option>
                                        <option>Games</option>
                                        <option>Sports</option>
                                        <option>Watches</option>
                                        <option>Bags</option>
                                        <option>Toys</option>
                                        <option>Cloth's</option>
                                        <option>Shoes</option>
                                        <option>Fashion</option>
                                        <option>Furniture</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productType" class="form-label">Product
                                        Type</label>
                                    <select class="form-select my-1 my-md-0 me-sm-3 select2-hidden-accessible"
                                        data-toggle="select2" id="productType" data-select2-id="productType" tabindex="-1"
                                        aria-hidden="true">
                                        <option data-select2-id="4">Select
                                            Type</option>
                                        <option>Simple</option>
                                        <option>Classy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productBrand" class="form-label">Product
                                        Brand</label>
                                    <select class="form-select my-1 my-md-0 me-sm-3 select2-hidden-accessible"
                                        data-toggle="select2" id="productBrand" data-select2-id="productBrand" tabindex="-1"
                                        aria-hidden="true">
                                        <option data-select2-id="6">Select
                                            Brand</option>
                                        <option>Sony</option>
                                        <option>Canon</option>
                                        <option>Snitch</option>
                                        <option>Titan</option>
                                        <option>JCB</option>
                                        <option>Wood</option>
                                        <option>Apple</option>
                                        <option>Nike</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productStatus" class="form-label">Status</label>
                                    <select class="form-select my-1 my-md-0 me-sm-3 select2-hidden-accessible"
                                        data-toggle="select2" id="productStatus" data-select2-id="productStatus"
                                        tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="8">Draft</option>
                                        <option>Scheduled</option>
                                        <option>Published</option>
                                        <option>Entertainment</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productVisibility" class="form-label">Visibility</label>
                                    <select class="form-select my-1 my-md-0 me-sm-3 select2-hidden-accessible"
                                        data-toggle="select2" id="productVisibility" data-select2-id="productVisibility"
                                        tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="10">Public</option>
                                        <option>Hidden</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basic-datepicker" class="form-label">Publish
                                        Date &amp; Time</label>
                                    <input type="text" id="basic-datepicker" class="form-control"
                                        placeholder="Basic datepicker">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="productPrice" placeholder="$00.00"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productDiscounts" class="form-label">Discounts</label>
                                    <input type="number" class="form-control" id="productDiscounts" placeholder="0%"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="productTax" class="form-label">Tax</label>
                                    <select class="form-select my-1 my-md-0 me-sm-3 select2-hidden-accessible"
                                        data-toggle="select2" id="productTax" data-select2-id="productTax" tabindex="-1"
                                        aria-hidden="true">
                                        <option data-select2-id="12">Select
                                            Tax</option>
                                        <option>5%</option>
                                        <option>8%</option>
                                        <option>12%</option>
                                        <option>16%</option>
                                        <option>20%</option>
                                        <option>22%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h5>Product Size</h5>
                                <div class="mb-3 pt-2">
                                    <label for="productLength" class="form-label">Length</label>
                                    <input type="number" class="form-control" id="productLength" placeholder="0.00cm"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="my-4">
                                    <label for="productBreadth" class="form-label">Breadth</label>
                                    <input type="number" class="form-control" id="productBreadth" placeholder="0.00cm"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="my-4">
                                    <label for="productWidth" class="form-label">Width</label>
                                    <input type="number" class="form-control" id="productWidth" placeholder="0.00cm"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5>Colors</h5>
                                <div class="d-flex flex-wrap align-items-center gap-1 mt-2" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="color-dark2">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-dark2"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-success"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-yellow2">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-yellow2"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-warning"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-white2">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-white2"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-primary"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-info">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-info"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-info"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-danger">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-danger"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-danger"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-black">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-black"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-dark"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-light">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-light"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-light"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-purple">
                                    <label
                                        class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center"
                                        for="color-purple"> <i
                                            class="ti ti-circle-filled fs-28 border rounded-circle text-secondary"></i></label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="card-title">Product Gallery</h4>
                        <p class="text-muted mb-0">You need at least
                            4 images. Pay attention to the quality
                            of the pictures you add (important)</p>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <form action="https://coderthemes.com/" method="post" class="dropzone dz-clickable"
                                id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                data-upload-preview-template="#uploadPreviewTemplate">

                                <div class="dz-message needsclick">
                                    <i class="h1 ti ti-cloud-upload mb-4"></i>
                                    <h4>Drop files here or click to
                                        upload.</h4>
                                    <span class="text-muted fs-13">(This
                                        is just a demo dropzone.
                                        Selected files are
                                        <strong>not</strong>
                                        actually uploaded.)</span>
                                </div>
                            </form>

                            <!-- Preview -->
                            <div class="dropzone-previews mt-3" id="file-previews"></div>

                            <!-- file preview template -->
                            <div class="d-none" id="uploadPreviewTemplate">
                                <div class="card mt-1 mb-0 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img data-dz-thumbnail
                                                    src="{{ asset('assets') }}/images/apps-ecommerce-products-add.html"
                                                    class="avatar-sm rounded bg-light" alt>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                <p class="mb-0" data-dz-size></p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-add.html"
                                                    class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                    <i class="ti ti-x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end file preview template -->
                        </div>
                    </div>
                    <div class="card-footer border-top border-dashed text-end">
                        <div class="d-flex justify-content-end gap-1">
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-add.html#!"
                                class="btn btn-primary">Create
                                Product</a>
                            <a href="https://coderthemes.com/boron/layouts/apps-ecommerce-products-add.html#!"
                                class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
@endsection
@push('script')
    <!-- Dropzone File Upload js -->
    <script src="{{ asset('assets') }}/js/dropzone-min.js"></script>

    <script src="{{ asset('assets') }}/js/quill.min.js"></script>

    <!-- Modern colorpicker bundle js -->
    <script src="{{ asset('assets') }}/js/pickr.min.js"></script>

    <script src="{{ asset('assets') }}/js/add-products.js"></script>
    <input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1"
        style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
@endpush
