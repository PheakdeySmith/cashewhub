@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Alerts</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Alerts</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Default Alert</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        For proper styling, use one of the eight
                        <strong>required</strong> contextual classes (e.g.,
                        <code>.alert-success</code>). For background color use class
                        <code>.bg-* </code>, <code>.text-white </code>
                    </p>
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.75 9v.704c0 .845.24 1.671.692 2.374l1.108 1.723c1.011 1.574.239 3.713-1.52 4.21a25.8 25.8 0 0 1-14.06 0c-1.759-.497-2.531-2.636-1.52-4.21l1.108-1.723a4.4 4.4 0 0 0 .693-2.374V9c0-3.866 3.022-7 6.749-7s6.75 3.134 6.75 7" opacity=".5"></path><path fill="currentColor" d="M12.75 6a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM7.243 18.545a5.002 5.002 0 0 0 9.513 0c-3.145.59-6.367.59-9.513 0"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Primary - </strong> A simple primary alert — check
                            it out!</div>
                    </div>
                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                        <iconify-icon icon="solar:bicycling-round-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0"></path><path fill="currentColor" fill-rule="evenodd" d="M10.919 8.506a1.888 1.888 0 1 0-1.93 3.207l3.09 1.349a2.64 2.64 0 0 1 1.37 3.46l-.76 1.773a.75.75 0 0 1-1.379-.59l.76-1.775a1.14 1.14 0 0 0-.591-1.494l-3.09-1.348a3.388 3.388 0 1 1 3.464-5.756l2.158 1.719a.92.92 0 0 0 .571.199H18.5a.75.75 0 0 1 0 1.5h-3.918a2.4 2.4 0 0 1-1.505-.526z" clip-rule="evenodd"></path><path fill="currentColor" fill-rule="evenodd" d="M18 14.25a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m0 1.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5m-12-1.5a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m0 1.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5" clip-rule="evenodd" opacity=".5"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Secondary - </strong> A simple secondary alert —
                            check it out!</div>
                    </div>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <iconify-icon icon="solar:check-read-line-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m4 12.9l3.143 3.6L15 7.5" opacity=".5"></path><path d="m20 7.563l-8.571 9L11 16"></path></g></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Success - </strong> A simple success alert — check
                            it out!</div>
                    </div>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3c-2.31 0-3.77 2.587-6.688 7.762l-.364.644c-2.425 4.3-3.638 6.45-2.542 8.022S6.214 21 11.636 21h.728c5.422 0 8.134 0 9.23-1.572s-.117-3.722-2.542-8.022l-.364-.645C15.77 5.587 14.311 3 12 3" opacity=".5"></path><path fill="currentColor" d="M12 7.25a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 .75-.75M12 17a1 1 0 1 0 0-2a1 1 0 0 0 0 2"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Error - </strong> A simple danger alert — check it
                            out!</div>
                    </div>
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <iconify-icon icon="solar:shield-warning-line-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path stroke="currentColor" stroke-width="1.5" d="M3 10.417c0-3.198 0-4.797.378-5.335c.377-.537 1.88-1.052 4.887-2.081l.573-.196C10.405 2.268 11.188 2 12 2s1.595.268 3.162.805l.573.196c3.007 1.029 4.51 1.544 4.887 2.081C21 5.62 21 7.22 21 10.417v1.574c0 5.638-4.239 8.375-6.899 9.536C13.38 21.842 13.02 22 12 22s-1.38-.158-2.101-.473C7.239 20.365 3 17.63 3 11.991z" opacity=".5"></path><path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M12 8v4"></path><circle cx="12" cy="15" r="1" fill="currentColor"></circle></g></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Warning - </strong> A simple warning alert—check
                            it out!</div>
                    </div>
                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <iconify-icon icon="solar:info-circle-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10" opacity=".5"></path><path fill="currentColor" d="M12 17.75a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75M12 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Info - </strong> A simple info alert—check it out!
                        </div>
                    </div>
                    <div class="alert alert-light d-flex align-items-center" role="alert">
                        <iconify-icon icon="solar:atom-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16.471 16.471c4.939-4.939 6.94-10.944 4.471-13.413c-2.469-2.47-8.474-.468-13.413 4.47c-4.939 4.94-6.94 10.945-4.471 13.414c2.47 2.47 8.475.468 13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M7.529 16.471C2.59 11.533.589 5.527 3.058 3.058c2.469-2.47 8.474-.468 13.413 4.47c4.939 4.94 6.94 10.945 4.471 13.414c-2.47 2.47-8.475.468-13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M14.5 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Light - </strong> A simple light alert—check it
                            out!</div>
                    </div>
                    <div class="alert alert-dark d-flex align-items-center mb-0" role="alert">
                        <iconify-icon icon="solar:balloon-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 18c4.142.034 7.594-3.92 7.56-8.196C19.527 5.53 16.142 2.034 12 2S4.527 5.404 4.56 9.68C4.595 13.954 7.859 17.964 12 18" opacity=".5"></path><path fill="currentColor" fill-rule="evenodd" d="M11.75 5.994a.75.75 0 0 1 .756-.744a3.785 3.785 0 0 1 3.744 3.744a.75.75 0 0 1-1.5.012a2.285 2.285 0 0 0-2.256-2.256a.75.75 0 0 1-.744-.756" clip-rule="evenodd"></path><path fill="currentColor" d="M13.18 17.901a6.5 6.5 0 0 1-2.352-.019l-.018.04c-.152.274-.228.41-.261.516c-.193.617.204 1.262.858 1.39c.111.022.272.022.593.022s.482 0 .593-.022c.654-.128 1.051-.773.858-1.39c-.033-.105-.109-.242-.261-.515z"></path><path fill="currentColor" d="M11.25 19.786q.076.026.157.042c.111.022.272.022.593.022s.482 0 .593-.022q.081-.015.157-.042v1.464a.75.75 0 0 1-1.5 0z" opacity=".5"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Dark - </strong> A simple dark alert—check it out!
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dismissing Alert</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Add a dismiss button and the <code>.alert-dismissible</code> class, which adds
                        extra padding to the right of the alert
                        and positions the <code>.btn-close</code> button.
                    </p>

                    <div class="alert alert-primary text-bg-primary alert-dismissible d-flex align-items-center" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.75 9v.704c0 .845.24 1.671.692 2.374l1.108 1.723c1.011 1.574.239 3.713-1.52 4.21a25.8 25.8 0 0 1-14.06 0c-1.759-.497-2.531-2.636-1.52-4.21l1.108-1.723a4.4 4.4 0 0 0 .693-2.374V9c0-3.866 3.022-7 6.749-7s6.75 3.134 6.75 7" opacity=".5"></path><path fill="currentColor" d="M12.75 6a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM7.243 18.545a5.002 5.002 0 0 0 9.513 0c-3.145.59-6.367.59-9.513 0"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Primary - </strong> A simple primary alert — check
                            it out!</div>
                    </div>

                    <div class="alert alert-secondary text-bg-secondary alert-dismissible d-flex align-items-center" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:bicycling-round-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0"></path><path fill="currentColor" fill-rule="evenodd" d="M10.919 8.506a1.888 1.888 0 1 0-1.93 3.207l3.09 1.349a2.64 2.64 0 0 1 1.37 3.46l-.76 1.773a.75.75 0 0 1-1.379-.59l.76-1.775a1.14 1.14 0 0 0-.591-1.494l-3.09-1.348a3.388 3.388 0 1 1 3.464-5.756l2.158 1.719a.92.92 0 0 0 .571.199H18.5a.75.75 0 0 1 0 1.5h-3.918a2.4 2.4 0 0 1-1.505-.526z" clip-rule="evenodd"></path><path fill="currentColor" fill-rule="evenodd" d="M18 14.25a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m0 1.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5m-12-1.5a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m0 1.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5" clip-rule="evenodd" opacity=".5"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Secondary - </strong> A simple secondary alert —
                            check it out!</div>
                    </div>

                    <div class="alert alert-success text-bg-success alert-dismissible d-flex align-items-center" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:check-read-line-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m4 12.9l3.143 3.6L15 7.5" opacity=".5"></path><path d="m20 7.563l-8.571 9L11 16"></path></g></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Success - </strong> A simple success alert — check
                            it out!</div>
                    </div>

                    <div class="alert alert-danger text-bg-danger alert-dismissible d-flex align-items-center" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3c-2.31 0-3.77 2.587-6.688 7.762l-.364.644c-2.425 4.3-3.638 6.45-2.542 8.022S6.214 21 11.636 21h.728c5.422 0 8.134 0 9.23-1.572s-.117-3.722-2.542-8.022l-.364-.645C15.77 5.587 14.311 3 12 3" opacity=".5"></path><path fill="currentColor" d="M12 7.25a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 .75-.75M12 17a1 1 0 1 0 0-2a1 1 0 0 0 0 2"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Error - </strong> A simple danger alert — check it
                            out!</div>
                    </div>

                    <div class="alert alert-warning text-bg-warning alert-dismissible d-flex align-items-center" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:shield-warning-line-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path stroke="currentColor" stroke-width="1.5" d="M3 10.417c0-3.198 0-4.797.378-5.335c.377-.537 1.88-1.052 4.887-2.081l.573-.196C10.405 2.268 11.188 2 12 2s1.595.268 3.162.805l.573.196c3.007 1.029 4.51 1.544 4.887 2.081C21 5.62 21 7.22 21 10.417v1.574c0 5.638-4.239 8.375-6.899 9.536C13.38 21.842 13.02 22 12 22s-1.38-.158-2.101-.473C7.239 20.365 3 17.63 3 11.991z" opacity=".5"></path><path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M12 8v4"></path><circle cx="12" cy="15" r="1" fill="currentColor"></circle></g></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Warning - </strong> A simple warning alert—check
                            it out!</div>
                    </div>

                    <div class="alert alert-info text-bg-info alert-dismissible d-flex align-items-center" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:info-circle-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10" opacity=".5"></path><path fill="currentColor" d="M12 17.75a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75M12 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Info - </strong> A simple info alert—check it out!
                        </div>
                    </div>

                    <div class="alert alert-light text-bg-light alert-dismissible d-flex align-items-center" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:atom-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16.471 16.471c4.939-4.939 6.94-10.944 4.471-13.413c-2.469-2.47-8.474-.468-13.413 4.47c-4.939 4.94-6.94 10.945-4.471 13.414c2.47 2.47 8.475.468 13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M7.529 16.471C2.59 11.533.589 5.527 3.058 3.058c2.469-2.47 8.474-.468 13.413 4.47c4.939 4.94 6.94 10.945 4.471 13.414c-2.47 2.47-8.475.468-13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M14.5 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Light - </strong> A simple light alert—check it
                            out!</div>
                    </div>

                    <div class="alert alert-dark text-bg-dark alert-dismissible d-flex align-items-center mb-0" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:balloon-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 18c4.142.034 7.594-3.92 7.56-8.196C19.527 5.53 16.142 2.034 12 2S4.527 5.404 4.56 9.68C4.595 13.954 7.859 17.964 12 18" opacity=".5"></path><path fill="currentColor" fill-rule="evenodd" d="M11.75 5.994a.75.75 0 0 1 .756-.744a3.785 3.785 0 0 1 3.744 3.744a.75.75 0 0 1-1.5.012a2.285 2.285 0 0 0-2.256-2.256a.75.75 0 0 1-.744-.756" clip-rule="evenodd"></path><path fill="currentColor" d="M13.18 17.901a6.5 6.5 0 0 1-2.352-.019l-.018.04c-.152.274-.228.41-.261.516c-.193.617.204 1.262.858 1.39c.111.022.272.022.593.022s.482 0 .593-.022c.654-.128 1.051-.773.858-1.39c-.033-.105-.109-.242-.261-.515z"></path><path fill="currentColor" d="M11.25 19.786q.076.026.157.042c.111.022.272.022.593.022s.482 0 .593-.022q.081-.015.157-.042v1.464a.75.75 0 0 1-1.5 0z" opacity=".5"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Dark - </strong> A simple dark alert—check it out!
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Link Color</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Use the <code>.alert-link</code> utility class to quickly provide matching
                        colored links within any alert.
                    </p>

                    <div class="alert alert-primary" role="alert">
                        A simple primary alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-dark" role="alert">
                        A simple dark alert with <a href="https://coderthemes.com/boron/layouts/ui-alerts.html#" class="alert-link">an example
                            link</a>. Give it a click if you like.
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Custom Alerts</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Display alert with transparent background and with contextual text color. Use
                        classes
                        <code>.bg-white</code>, and <code>.text-*</code>. E.g. <code>bg-white
                            text-primary</code>.
                    </p>

                    <div class="alert alert-primary alert-dismissible d-flex align-items-center border-2 border border-primary" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.75 9v.704c0 .845.24 1.671.692 2.374l1.108 1.723c1.011 1.574.239 3.713-1.52 4.21a25.8 25.8 0 0 1-14.06 0c-1.759-.497-2.531-2.636-1.52-4.21l1.108-1.723a4.4 4.4 0 0 0 .693-2.374V9c0-3.866 3.022-7 6.749-7s6.75 3.134 6.75 7" opacity=".5"></path><path fill="currentColor" d="M12.75 6a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM7.243 18.545a5.002 5.002 0 0 0 9.513 0c-3.145.59-6.367.59-9.513 0"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Primary - </strong> A simple primary alert — check
                            it out!</div>
                    </div>
                    <div class="alert alert-secondary alert-dismissible d-flex align-items-center border-2 border border-secondary" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:bicycling-round-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0"></path><path fill="currentColor" fill-rule="evenodd" d="M10.919 8.506a1.888 1.888 0 1 0-1.93 3.207l3.09 1.349a2.64 2.64 0 0 1 1.37 3.46l-.76 1.773a.75.75 0 0 1-1.379-.59l.76-1.775a1.14 1.14 0 0 0-.591-1.494l-3.09-1.348a3.388 3.388 0 1 1 3.464-5.756l2.158 1.719a.92.92 0 0 0 .571.199H18.5a.75.75 0 0 1 0 1.5h-3.918a2.4 2.4 0 0 1-1.505-.526z" clip-rule="evenodd"></path><path fill="currentColor" fill-rule="evenodd" d="M18 14.25a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m0 1.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5m-12-1.5a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m0 1.5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5" clip-rule="evenodd" opacity=".5"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Secondary - </strong> A simple secondary alert —
                            check it out!</div>
                    </div>
                    <div class="alert alert-success alert-dismissible d-flex align-items-center border-2 border border-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:check-read-line-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m4 12.9l3.143 3.6L15 7.5" opacity=".5"></path><path d="m20 7.563l-8.571 9L11 16"></path></g></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Success - </strong> A simple success alert — check
                            it out!</div>
                    </div>
                    <div class="alert alert-danger alert-dismissible d-flex align-items-center border-2 border border-danger" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3c-2.31 0-3.77 2.587-6.688 7.762l-.364.644c-2.425 4.3-3.638 6.45-2.542 8.022S6.214 21 11.636 21h.728c5.422 0 8.134 0 9.23-1.572s-.117-3.722-2.542-8.022l-.364-.645C15.77 5.587 14.311 3 12 3" opacity=".5"></path><path fill="currentColor" d="M12 7.25a.75.75 0 0 1 .75.75v5a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 .75-.75M12 17a1 1 0 1 0 0-2a1 1 0 0 0 0 2"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Error - </strong> A simple danger alert — check it
                            out!</div>
                    </div>
                    <div class="alert alert-warning alert-dismissible d-flex align-items-center border border-warning" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:shield-warning-line-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path stroke="currentColor" stroke-width="1.5" d="M3 10.417c0-3.198 0-4.797.378-5.335c.377-.537 1.88-1.052 4.887-2.081l.573-.196C10.405 2.268 11.188 2 12 2s1.595.268 3.162.805l.573.196c3.007 1.029 4.51 1.544 4.887 2.081C21 5.62 21 7.22 21 10.417v1.574c0 5.638-4.239 8.375-6.899 9.536C13.38 21.842 13.02 22 12 22s-1.38-.158-2.101-.473C7.239 20.365 3 17.63 3 11.991z" opacity=".5"></path><path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M12 8v4"></path><circle cx="12" cy="15" r="1" fill="currentColor"></circle></g></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Warning - </strong> A simple warning alert—check
                            it out!</div>
                    </div>
                    <div class="alert alert-info alert-dismissible d-flex align-items-center border border-info" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:info-circle-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10" opacity=".5"></path><path fill="currentColor" d="M12 17.75a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75M12 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Info - </strong> A simple info alert—check it out!
                        </div>
                    </div>
                    <div class="alert alert-light alert-dismissible d-flex align-items-center border border-light" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:atom-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16.471 16.471c4.939-4.939 6.94-10.944 4.471-13.413c-2.469-2.47-8.474-.468-13.413 4.47c-4.939 4.94-6.94 10.945-4.471 13.414c2.47 2.47 8.475.468 13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M7.529 16.471C2.59 11.533.589 5.527 3.058 3.058c2.469-2.47 8.474-.468 13.413 4.47c4.939 4.94 6.94 10.945 4.471 13.414c-2.47 2.47-8.475.468-13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M14.5 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Light - </strong> A simple light alert—check it
                            out!</div>
                    </div>
                    <div class="alert alert-dark alert-dismissible d-flex align-items-center border border-dark mb-0" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <iconify-icon icon="solar:balloon-bold-duotone" class="fs-20 me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 18c4.142.034 7.594-3.92 7.56-8.196C19.527 5.53 16.142 2.034 12 2S4.527 5.404 4.56 9.68C4.595 13.954 7.859 17.964 12 18" opacity=".5"></path><path fill="currentColor" fill-rule="evenodd" d="M11.75 5.994a.75.75 0 0 1 .756-.744a3.785 3.785 0 0 1 3.744 3.744a.75.75 0 0 1-1.5.012a2.285 2.285 0 0 0-2.256-2.256a.75.75 0 0 1-.744-.756" clip-rule="evenodd"></path><path fill="currentColor" d="M13.18 17.901a6.5 6.5 0 0 1-2.352-.019l-.018.04c-.152.274-.228.41-.261.516c-.193.617.204 1.262.858 1.39c.111.022.272.022.593.022s.482 0 .593-.022c.654-.128 1.051-.773.858-1.39c-.033-.105-.109-.242-.261-.515z"></path><path fill="currentColor" d="M11.25 19.786q.076.026.157.042c.111.022.272.022.593.022s.482 0 .593-.022q.081-.015.157-.042v1.464a.75.75 0 0 1-1.5 0z" opacity=".5"></path></svg></template></iconify-icon>
                        <div class="lh-1"><strong>Dark - </strong> A simple dark alert—check it out!
                        </div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Additional Content</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Alerts can also contain additional HTML elements like headings, paragraphs and
                        dividers.
                    </p>

                    <div class="alert alert-success p-3" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This
                            example text is going to run a bit longer so that you can see how
                            spacing within an alert works with this kind of content.</p>
                        <hr class="border-success border-opacity-25">
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                            keep things nice and tidy.</p>
                    </div>

                    <div class="alert alert-secondary p-3 d-flex" role="alert">
                        <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-1 me-2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.75 9v.704c0 .845.24 1.671.692 2.374l1.108 1.723c1.011 1.574.239 3.713-1.52 4.21a25.8 25.8 0 0 1-14.06 0c-1.759-.497-2.531-2.636-1.52-4.21l1.108-1.723a4.4 4.4 0 0 0 .693-2.374V9c0-3.866 3.022-7 6.749-7s6.75 3.134 6.75 7" opacity=".5"></path><path fill="currentColor" d="M12.75 6a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM7.243 18.545a5.002 5.002 0 0 0 9.513 0c-3.145.59-6.367.59-9.513 0"></path></svg></template></iconify-icon>
                        <div>
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This
                                example text is going to run a bit longer so that you can see how
                                spacing within an alert works with this kind of content.</p>
                            <hr class="border-secondary border-opacity-25">
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                keep things nice and tidy.</p>
                        </div>
                    </div>

                    <div class="alert alert-primary d-flex p-3 mb-0" role="alert">
                        <iconify-icon icon="solar:atom-bold-duotone" class="fs-1 me-2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16.471 16.471c4.939-4.939 6.94-10.944 4.471-13.413c-2.469-2.47-8.474-.468-13.413 4.47c-4.939 4.94-6.94 10.945-4.471 13.414c2.47 2.47 8.475.468 13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M7.529 16.471C2.59 11.533.589 5.527 3.058 3.058c2.469-2.47 8.474-.468 13.413 4.47c4.939 4.94 6.94 10.945 4.471 13.414c-2.47 2.47-8.475.468-13.413-4.47" opacity=".3"></path><path fill="currentColor" d="M14.5 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0"></path></svg></template></iconify-icon>
                        <div>
                            <h4 class="alert-heading">Thank you!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This
                                example text is going to run a bit longer so that you can see how
                                spacing within an alert works with this kind of content.</p>
                            <button type="button" class="btn btn-primary btn-sm">Close</button>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Live Alert</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Click the button below to show an alert (hidden with inline styles
                        to start), then dismiss (and destroy) it with the built-in close button.</p>
                    <div id="liveAlertPlaceholder"></div>
                    <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                </div>
            </div>
        </div>
    </div> <!-- end row-->

</div> <!-- container -->
@endsection



@push('script')

@endpush
