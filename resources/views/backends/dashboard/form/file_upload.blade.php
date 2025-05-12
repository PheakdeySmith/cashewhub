@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}
<!-- dropzone css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dropzone.css" type="text/css">
@endpush


@section('content')
<div class="page-container">


                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">File Uploads</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>

                            <li class="breadcrumb-item active">File Uploads</li>
                        </ol>
                    </div>
                </div>




                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Dropzone File Upload</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                        </p>
                        <form action="https://coderthemes.com/" method="post" class="dropzone dz-clickable" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">


                            <div class="dz-message needsclick">
                                <i class="ti ti-cloud-upload h1 text-muted"></i>
                                <h3>Drop files here or click to upload.</h3>
                                <span class="text-muted fs-13">(This is just a demo dropzone. Selected files are
                                    <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>

                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card-->

                <!-- file preview template -->
                <div class="d-none" id="uploadPreviewTemplate">
                    <div class="card mt-1 mb-0 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img data-dz-thumbnail="" src="./file_upload_files/form-fileuploads.html" class="avatar-sm rounded bg-light" alt="">
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name=""></a>
                                    <p class="mb-0" data-dz-size=""></p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="https://coderthemes.com/boron/layouts/form-fileuploads.html" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                                        <i class="ti ti-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container -->
@endsection


@push('script')
<!-- Dropzone File Upload js -->
    <script src="{{ asset('assets') }}/js/dropzone-min.js"></script>

    <!-- File Upload Demo js -->
    <script src="{{ asset('assets') }}/js/form-fileupload.js"></script><input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">

@endpush
