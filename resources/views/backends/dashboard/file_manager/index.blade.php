@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">File Manager</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>

                <li class="breadcrumb-item active">File Manager</li>
            </ol>
        </div>
    </div>




    <div class="card">
        <div class="d-flex">
            <div class="offcanvas-xl offcanvas-start file-manager" tabindex="-1" id="fileManagerSidebar" aria-labelledby="fileManagerSidebarLabel">
                <!-- users -->
                <div class="d-flex flex-column">
                    <div class="py-2 px-3 flex-shrink-0 d-flex align-items-center gap-2 border-bottom border-dashed">
                        <!-- user -->
                        <div class="avatar-md">
                            <img src="{{ asset('assets') }}/images/avatar-1.jpg" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div>
                            <h5 class="mb-1 fs-16 fw-semibold">Chris K <i class="ti ti-rosette-discount-check-filled text-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pro User"></i></h5>
                            <p class="fs-12 mb-0">Welcome!</p>
                        </div>
                        <button type="button" class="btn btn-sm btn-icon btn-soft-danger ms-auto d-xl-none" data-bs-dismiss="offcanvas" data-bs-target="#fileManagerSidebar" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="p-3">
                        <div class="d-flex flex-column">
                            <button type="button" class="btn fw-medium btn-success drop-arrow-none dropdown-toggle w-100 mb-3">
                                Create New <i class="ti ti-plus ms-1"></i>
                            </button>
                            <div class="file-menu">
                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="list-group-item active"><i class="ti ti-folder fs-18 align-middle me-2"></i>My Files</a>
                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="list-group-item"><i class="ti ti-brand-google-drive fs-18 align-middle me-2"></i>Google Drive</a>
                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="list-group-item"><i class="ti ti-share-3 fs-18 align-middle me-2"></i>Share with me</a>
                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="list-group-item"><i class="ti ti-clock fs-18 align-middle me-2"></i>Recent</a>
                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="list-group-item"><i class="ti ti-star fs-18 align-middle me-2"></i>Starred</a>
                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="list-group-item"><i class="ti ti-trash fs-18 align-middle me-2"></i>Deleted Files</a>
                            </div>

                            <div class="mt-5 pt-5">
                                <div class="alert alert-secondary p-3 pt-0 text-center mb-0" role="alert">
                                    <img src="{{ asset('assets') }}/images/panda.svg" alt="" class="img-fluid mt-n5" style="max-width: 135px;">
                                    <div>
                                        <h5 class="alert-heading fw-semibold fs-18 mt-2">Get more space for files</h5>
                                        <p>We offer you unlimited storage space for all you needs</p>

                                        <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#!" class="btn btn-secondary">Upgrade to Pro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 border-start">
                <div class="p-3">
                    <div class="d-flex align-items-center gap-1 mb-3">
                        <div class="flex-shrink-0 d-xl-none d-inline-flex">
                            <button class="btn btn-sm btn-icon btn-soft-primary align-items-center p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#fileManagerSidebar" aria-controls="fileManagerSidebar">
                                <i class="ti ti-menu-2 fs-20"></i>
                            </button>
                        </div>
                        <h4 class="header-title">Quick Access</h4>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xxl-3" id="googleMedia">
                            <div class="card border ">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-primary-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <iconify-icon icon="logos:google-meet" class="fs-18"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1.22em" height="1em" viewBox="0 0 256 211"><path fill="#00832D" d="m144.822 105.322l24.957 28.527l33.562 21.445l5.838-49.792l-5.838-48.669l-34.205 18.839z"></path><path fill="#0066DA" d="M0 150.66v42.43c0 9.688 7.864 17.554 17.554 17.554h42.43l8.786-32.059l-8.786-27.925l-29.11-8.786z"></path><path fill="#E94235" d="M59.984 0L0 59.984l30.876 8.765l29.108-8.765l8.626-27.545z"></path><path fill="#2684FC" d="M.001 150.679h59.983V59.983H.001z"></path><path fill="#00AC47" d="M241.659 25.398L203.34 56.834v98.46l38.477 31.558c5.76 4.512 14.186.4 14.186-6.922V32.18c0-7.403-8.627-11.495-14.345-6.781"></path><path fill="#00AC47" d="M144.822 105.322v45.338H59.984v59.984h125.804c9.69 0 17.553-7.866 17.553-17.554v-37.796z"></path><path fill="#FFBA00" d="M185.788 0H59.984v59.984h84.838v45.338l58.52-48.49V17.555c0-9.69-7.864-17.554-17.554-17.554"></path></svg></template></iconify-icon>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <span data-toggler="on">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-on="">
                                                    <i class="ti ti-star-filled text-warning fs-16"></i>
                                                </a>
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-off="" class="d-none">
                                                    <i class="ti ti-star-filled text-muted fs-16"></i>
                                                </a>
                                            </span>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                                    <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item" data-dismissible="#googleMedia"><i class="ti ti-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 mt-3">
                                        <h5 class="mb-1"><a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#!" class="link-reset">Google Media</a></h5>
                                        <p class="text-muted mb-0">38 Files</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3 mb-1">
                                        <p class="fs-14 mb-0">44.6GB</p>
                                        <p class="fs-14 mb-0">50GB</p>
                                    </div>
                                    <div class="progress progress-sm bg-primary-subtle" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 94%"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-6 col-xxl-3" id="googleDrive">
                            <div class="card border ">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-success-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <iconify-icon icon="logos:google-drive" class="fs-18"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1.12em" height="1em" viewBox="0 0 256 229"><path fill="#0066DA" d="m19.354 196.034l11.29 19.5c2.346 4.106 5.718 7.332 9.677 9.678q17.009-21.591 23.68-33.137q6.77-11.717 16.641-36.655q-26.604-3.502-40.32-3.502q-13.165 0-40.322 3.502c0 4.545 1.173 9.09 3.519 13.196z"></path><path fill="#EA4335" d="M215.681 225.212c3.96-2.346 7.332-5.572 9.677-9.677l4.692-8.064l22.434-38.855a26.57 26.57 0 0 0 3.518-13.196q-27.315-3.502-40.247-3.502q-13.899 0-40.248 3.502q9.754 25.075 16.422 36.655q6.724 11.683 23.752 33.137"></path><path fill="#00832D" d="M128.001 73.311q19.68-23.768 27.125-36.655q5.996-10.377 13.196-33.137C164.363 1.173 159.818 0 155.126 0h-54.25C96.184 0 91.64 1.32 87.68 3.519q9.16 26.103 15.544 37.154q7.056 12.213 24.777 32.638"></path><path fill="#2684FC" d="M175.36 155.42H80.642l-40.32 69.792c3.958 2.346 8.503 3.519 13.195 3.519h148.968c4.692 0 9.238-1.32 13.196-3.52z"></path><path fill="#00AC47" d="M128.001 73.311L87.681 3.52c-3.96 2.346-7.332 5.571-9.678 9.677L3.519 142.224A26.57 26.57 0 0 0 0 155.42h80.642z"></path><path fill="#FFBA00" d="m215.242 77.71l-37.243-64.514c-2.345-4.106-5.718-7.331-9.677-9.677l-40.32 69.792l47.358 82.109h80.496c0-4.546-1.173-9.09-3.519-13.196z"></path></svg></template></iconify-icon>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <span data-toggler="off">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-on="" class="d-none">
                                                    <i class="ti ti-star-filled text-warning fs-16"></i>
                                                </a>
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-off="">
                                                    <i class="ti ti-star-filled text-muted fs-16"></i>
                                                </a>
                                            </span>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                                    <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item" data-dismissible="#googleDrive"><i class="ti ti-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 mt-3">
                                        <h5 class="mb-1"><a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#!" class="link-reset">Google Drive</a></h5>
                                        <p class="text-muted mb-0">42 Files</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3 mb-1">
                                        <p class="fs-14 mb-0">34.80GB</p>
                                        <p class="fs-14 mb-0">50GB</p>
                                    </div>
                                    <div class="progress progress-sm bg-success-subtle" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 78%"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-6 col-xxl-3" id="dropbox">
                            <div class="card border ">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-info-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <iconify-icon icon="logos:dropbox" class="fs-18"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1.18em" height="1em" viewBox="0 0 256 218"><path fill="#0061FF" d="M63.995 0L0 40.771l63.995 40.772L128 40.771zM192 0l-64 40.775l64 40.775l64.001-40.775zM0 122.321l63.995 40.772L128 122.321L63.995 81.55zM192 81.55l-64 40.775l64 40.774l64-40.774zM64 176.771l64.005 40.772L192 176.771L128.005 136z"></path></svg></template></iconify-icon>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <span data-toggler="off">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-on="" class="d-none">
                                                    <i class="ti ti-star-filled text-warning fs-16"></i>
                                                </a>
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-off="">
                                                    <i class="ti ti-star-filled text-muted fs-16"></i>
                                                </a>
                                            </span>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                                    <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item" data-dismissible="#dropbox"><i class="ti ti-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 mt-3">
                                        <h5 class="mb-1"><a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#!" class="link-reset">Dropbox</a></h5>
                                        <p class="text-muted mb-0">98 Files</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3 mb-1">
                                        <p class="fs-14 mb-0">44.86GB</p>
                                        <p class="fs-14 mb-0">50GB</p>
                                    </div>
                                    <div class="progress progress-sm bg-info-subtle" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 92%"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-6 col-xxl-3" id="cloudStorage">
                            <div class="card border ">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-secondary-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <iconify-icon icon="logos:cloudlinux" class="fs-18"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1.01em" height="1em" viewBox="0 0 256 255"><path fill="#265597" d="M99.704 5.004c3.402-.886 6.649-1.702 9.88-2.579c6.468-1.754 13.07-2.47 19.749-2.423c15.02.108 29.148 3.742 42.063 11.434c22.147 13.19 35.718 32.543 40.836 57.818c.735 3.634.082 7.199-.512 10.745c-2.932 17.487-10.775 32.44-23.375 44.904c-.507.501-1.031.985-1.551 1.473c-.055.052-.133.078-.351.2c.51-1.752.996-3.384 1.46-5.023c1.979-7.01 3.062-14.157 3.34-21.439c.487-12.812-1.51-25.22-6.307-37.1c-1.307-3.238-3.1-6.38-5.188-9.18c-4.947-6.639-9.823-13.397-15.412-19.478c-13.843-15.065-31.123-24.15-51.247-27.734c-4.337-.773-8.757-1.072-13.385-1.618m69.484 81.832c-14.68-27.305-36.784-44.497-67.328-50.071c-30.532-5.572-57.213 2.77-80.522 23.052c1.088-1.953 2.102-3.952 3.278-5.85C37.595 33.014 56.07 19.6 80.255 14.833c24.327-4.794 46.96.03 67.443 14.14c1.996 1.376 3.572 3.473 5.074 5.44c8.494 11.13 13.836 23.635 15.675 37.526c.606 4.58.597 9.242.858 13.866c.016.297-.066.598-.117 1.03m-42.814-16.87c-29.045-8.81-56.749-5.803-82.01 11.685c-25.24 17.474-37.898 42.262-39.8 72.941c-.243-.737-.443-1.33-.635-1.927c-.205-.64-.42-1.28-.601-1.928c-2.32-8.3-3.614-16.766-3.274-25.374c.86-21.797 8.65-40.767 23.819-56.544c11.069-11.51 24.409-19.226 39.883-23.198c2.491-.64 5.02-1.304 7.566-1.507c2.262-.181 4.595.125 6.862.452c16.213 2.346 30.487 8.932 42.728 19.829c1.973 1.756 3.711 3.773 5.462 5.57m69.413-47.302c9.3 4.535 17.386 10.585 24.383 18.08c11.52 12.337 18.822 26.84 21.53 43.487c3.728 22.928-.971 44.087-14.381 63.118c-1.748 2.479-4.466 4.366-6.976 6.196c-11.387 8.303-24.142 13.233-38.135 14.826c-4.226.482-8.504.505-12.757.597c26.937-14.572 44.444-36.331 49.931-66.607c5.483-30.253-3.197-56.736-23.595-79.697M85.93 87.21c-26.856 14.426-44.35 36.13-49.828 66.378c-5.467 30.177 3.122 56.636 23.352 79.476l-.2.292c-3.622-2.242-7.379-4.297-10.843-6.76c-17.386-12.365-28.842-28.91-33.577-49.716c-5.65-24.827-1.05-47.839 13.577-68.76c.492-.704 1.144-1.32 1.806-1.876C42.594 95.83 56.818 89.59 72.87 87.658c4.316-.518 8.69-.541 13.039-.791zm68.107 162.822c-2.38.665-4.747 1.383-7.145 1.985c-7.667 1.93-15.484 2.8-23.354 2.324c-29.147-1.765-51.841-14.894-67.927-39.258c-6.24-9.451-10.151-19.905-11.903-31.084c-.407-2.594.012-5.378.393-8.026c2.077-14.448 7.652-27.432 16.776-38.827c2.448-3.055 5.285-5.8 7.949-8.682c.18-.194.41-.34.666-.548c-8.886 29.293-5.857 56.995 11.646 82.252c17.504 25.258 42.306 37.925 72.9 39.864m-67.399-81.52c14.512 27.003 36.242 44.432 66.432 49.906c30.2 5.476 56.666-3.157 79.643-23.368c-1.061 1.92-2.052 3.882-3.196 5.75c-12.174 19.887-29.462 33.086-52.132 38.6c-24.885 6.053-48.061 1.62-69.223-12.906c-.997-.684-1.904-1.563-2.682-2.495c-9.55-11.429-15.545-24.487-17.93-39.202c-.835-5.146-1.137-10.317-.994-15.52c.005-.196.04-.392.082-.765M251.827 100c1.012 4.428 2.18 8.828 3 13.29c1.336 7.257 1.456 14.603.735 21.93c-1.156 11.744-4.59 22.813-10.453 33.079c-9.612 16.83-23.351 29.051-41.19 36.643c-5.97 2.541-12.16 4.426-18.581 5.278c-2.538.337-5.223-.041-7.796-.41c-12.569-1.8-24.096-6.327-34.55-13.55a80.8 80.8 0 0 1-12.965-11.156c-.205-.219-.384-.463-.576-.698c29.241 8.872 56.94 5.877 82.204-11.603c25.24-17.46 37.916-42.236 39.805-72.69zm-158.12 64.848c5.403 4.91 11.27 9.146 17.589 12.772c.389.224.713.626.966 1.01c7.748 11.81 17.69 21.314 29.864 28.48c.218.128.426.275.566.503c-22.062-7.678-38.375-21.959-48.984-42.765m68.432-75.4c-1.747-1.468-3.407-3.06-5.26-4.381c-3.838-2.735-7.783-5.318-11.67-7.983c-.51-.35-1.055-.74-1.385-1.24c-7.685-11.7-17.52-21.148-29.547-28.312c-.264-.158-.52-.333-.694-.605q32.812 11.475 48.556 42.521m47.147 21.72c-7.784 21.988-21.952 38.244-42.715 48.797c.197-.256.375-.527.59-.765c4.49-4.96 8.38-10.35 11.721-16.144c.305-.528.745-1.05 1.249-1.38c11.84-7.78 21.37-17.755 28.561-29.963c.1-.169.217-.328.332-.487c.014-.02.06-.015.262-.059m-119.9-16.776c-2.477 3.17-5.042 6.292-7.42 9.55c-1.679 2.298-3.078 4.8-4.662 7.172c-.468.7-1.048 1.405-1.738 1.864c-11.51 7.66-20.844 17.384-27.923 29.265c-.194.327-.415.637-.752 1.151c6.113-19.77 22.076-39.235 42.496-49.002M59.54 82.016c20.898-10.165 42.389-11.568 64.45-4.445c-6.376.347-12.682 1.198-18.85 2.836c-2.1.557-4.057.55-6.166.157c-13.007-2.417-25.936-1.988-38.756 1.333c-.22.057-.452.08-.678.119m17.416 48.519c.49 4.048.901 8.178 1.524 12.276c.402 2.656 1.056 5.281 1.714 7.89c.289 1.149.33 2.22.093 3.374c-1.68 8.167-2.34 16.427-1.504 24.722c.555 5.502 1.603 10.954 2.317 15.687c-2.467-4.005-7.474-17.217-8.341-31.115c-.703-11.254.652-22.222 4.197-32.834m97.68-71.544c10.097 21.288 11.511 42.84 4.503 64.929c-.583-4.485-1.123-8.99-1.775-13.478c-.273-1.875-.638-3.765-1.227-5.561c-.646-1.97-.525-3.843-.14-5.82c1.82-9.376 2.126-18.81.74-28.267c-.562-3.831-1.35-7.63-2.1-11.803m-42.716 117.84c7.274-.268 14.383-1.554 21.428-3.343c.922-.234 2.02.106 3.016.298c13.333 2.57 26.565 2.097 39.703-1.285c.222-.058.447-.102.685-.038c-21.01 10.133-42.624 11.542-64.832 4.369"></path></svg></template></iconify-icon>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <span data-toggler="on">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-on="">
                                                    <i class="ti ti-star-filled text-warning fs-16"></i>
                                                </a>
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" data-toggler-off="" class="d-none">
                                                    <i class="ti ti-star-filled text-muted fs-16"></i>
                                                </a>
                                            </span>
                                            <div class="dropdown flex-shrink-0 text-muted">
                                                <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                                    <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="dropdown-item" data-dismissible="#cloudStorage"><i class="ti ti-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 mt-3">
                                        <h5 class="mb-1"><a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#!" class="link-reset">Cloud Storage</a></h5>
                                        <p class="text-muted mb-0">56 Files</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3 mb-1">
                                        <p class="fs-14 mb-0">20.63GB</p>
                                        <p class="fs-14 mb-0">50GB</p>
                                    </div>
                                    <div class="progress progress-sm bg-secondary-subtle" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row-->
                </div>

                <div class="px-3 d-flex align-items-center justify-content-between mb-3">
                    <h4 class="header-title">Recent</h4>
                    <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="link-reset fw-semibold text-decoration-underline link-offset-2">View All <i class="ti ti-arrow-right"></i></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap border-top mb-0">
                        <thead class="bg-light bg-opacity-25">
                            <tr>
                                <th class="ps-3">Name</th>
                                <th>Uploaded By</th>
                                <th>Size</th>
                                <th>Last Update</th>
                                <th>Members</th>
                                <th style="width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-info-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <i class="ti ti-file-type-docx fs-22 text-info"></i>
                                        </div>
                                        <div>
                                            <span class="fw-semibold"><a href="javascript: void(0);" class="text-reset">Dashboard-requirements.docx</a></span>
                                            <p class="mb-0 fs-12">12 Docx</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <a href="javascript: void(0);">
                                                <img src="{{ asset('assets') }}/images/avatar-1.jpg" class="rounded-circle avatar-md" alt="friend">
                                            </a>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-dark fw-medium">Harriett E. Penix</p>
                                            <span class="fs-12">harriettepenix@rhyta.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>128 MB</td>
                                <td>
                                    April 25, 2023
                                </td>
                                <td id="tooltips-container">
                                    <div class="avatar-group flex-nowrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-success rounded-circle fw-bold">
                                                D
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                K
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                H
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                L
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-info rounded-circle fw-bold">
                                                G
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown flex-shrink-0 text-muted">
                                        <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                            <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-danger-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <i class="ti ti-file-type-pdf fs-22 text-danger"></i>
                                        </div>
                                        <div>
                                            <span class="fw-semibold"><a href="javascript: void(0);" class="text-reset">ocen-dashboard.pdf</a></span>
                                            <p class="mb-0 fs-12">18 Pdf</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <a href="javascript: void(0);">
                                                <img src="{{ asset('assets') }}/images/avatar-2.jpg" class="rounded-circle avatar-md" alt="friend">
                                            </a>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-dark fw-medium">Carol L. Simon</p>
                                            <span class="fs-12">carollcimon@jourrapide.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>521 MB</td>
                                <td>
                                    April 28, 2023
                                </td>
                                <td id="tooltips-container1">
                                    <div class="avatar-group flex-nowrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-danger rounded-circle fw-bold">
                                                Y
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-success rounded-circle fw-bold">
                                                L
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-dark rounded-circle fw-bold">
                                                O
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                J
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                G
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown flex-shrink-0 text-muted">
                                        <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                            <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-warning-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <i class="ti ti-files fs-22 text-warning"></i>
                                        </div>
                                        <div>
                                            <span class="fw-semibold"><a href="javascript: void(0);" class="text-reset">Dashboard tech requirements</a></span>
                                            <p class="mb-0 fs-12">12 File</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <a href="javascript: void(0);">
                                                <img src="{{ asset('assets') }}/images/avatar-3.jpg" class="rounded-circle avatar-md" alt="friend">
                                            </a>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-dark fw-medium">Rosa L. Winters</p>
                                            <span class="fs-12">rosalwinters@teleworm.us</span>
                                        </div>
                                    </div>
                                </td>
                                <td>7.2 MB</td>
                                <td>
                                    May 1, 2023
                                </td>
                                <td>
                                    <div class="avatar-group flex-nowrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                A
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                B
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-danger rounded-circle fw-bold">
                                                R
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                C
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-dark rounded-circle fw-bold">
                                                U
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown flex-shrink-0 text-muted">
                                        <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                            <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-primary-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <i class="ti ti-file-type-jpg fs-22 text-primary"></i>
                                        </div>
                                        <div>
                                            <span class="fw-semibold"><a href="javascript: void(0);" class="text-reset">dashboard.jpg</a></span>
                                            <p class="mb-0 fs-12">172 Jpg Photo</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <a href="javascript: void(0);">
                                                <img src="{{ asset('assets') }}/images/avatar-4.jpg" class="rounded-circle avatar-md" alt="friend">
                                            </a>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-dark fw-medium">Jeremy C. Willi</p>
                                            <span class="fs-12">jeremycwilliams@dayrep.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>54.2 MB</td>
                                <td>
                                    May 2, 2023
                                </td>
                                <td>
                                    <div class="avatar-group flex-nowrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                L
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                Y
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-dark rounded-circle fw-bold">
                                                A
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                R
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-info rounded-circle fw-bold">
                                                V
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown flex-shrink-0 text-muted">
                                        <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                            <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="flex-shrink-0 avatar-md bg-success-subtle d-inline-flex align-items-center justify-content-center rounded-2">
                                            <i class="ti ti-file-type-zip fs-22 text-success"></i>
                                        </div>
                                        <div>
                                            <span class="fw-semibold"><a href="javascript: void(0);" class="text-reset">admin-hospital.zip</a></span>
                                            <p class="mb-0 fs-12">admin-hospital.zip</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <a href="javascript: void(0);">
                                                <img src="{{ asset('assets') }}/images/avatar-5.jpg" class="rounded-circle avatar-md" alt="friend">
                                            </a>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-dark fw-medium">James R. Alvares</p>
                                            <span class="fs-12">jamesralvares@jourrapide.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>8.3 MB</td>
                                <td>
                                    May 6, 2023
                                </td>
                                <td>
                                    <div class="avatar-group flex-nowrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-dark rounded-circle fw-bold">
                                                G
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-light text-dark rounded-circle fw-bold">
                                                O
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-secondary rounded-circle fw-bold">
                                                W
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-primary rounded-circle fw-bold">
                                                A
                                            </span>
                                        </div>
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-title bg-warning rounded-circle fw-bold">
                                                K
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown flex-shrink-0 text-muted">
                                        <a href="https://coderthemes.com/boron/layouts/apps-file-manager.html#" class="dropdown-toggle drop-arrow-none fs-20 link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-share me-1"></i> Share</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-link me-1"></i> Get Sharable Link</a>
                                            <a href="{{ asset('assets') }}/images/avatar-1.jpg" download="" class="dropdown-item"><i class="ti ti-download me-1"></i> Download</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-pin me-1"></i> Pin</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-edit me-1"></i> Edit</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container -->
@endsection



@push('script')

@endpush
