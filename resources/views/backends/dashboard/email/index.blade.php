@extends('backends.layouts.app')


@push('style')

<!-- Quill css -->
<link href="{{ asset('assets') }}/css/quill.core.css" rel="stylesheet" type="text/css">
<link href="{{ asset('assets') }}/css/quill.snow.css" rel="stylesheet" type="text/css">

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Inbox</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item active">Inbox</li>
            </ol>
        </div>
    </div>




    <div class="card">
        <div class="d-flex">
            <div class="email-sidebar">
                <div class="offcanvas-xxl offcanvas-start" tabindex="-1" id="email-sidebar" aria-labelledby="email-sidebarLabel">
                    <div class="card-body">
                        <div class="d-flex justify-content-between gap-2 align-items-center mb-2">
                            <button type="button" class="btn btn-danger fw-semibold w-100" data-bs-toggle="modal" data-bs-target="#email-compose-modal">Compose</button>

                            <button type="button" class="btn btn-sm btn-icon btn-soft-danger ms-auto d-xl-none" data-bs-dismiss="offcanvas" data-bs-target="#email-sidebar" aria-label="Close">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>

                        <div class="email-menu-list d-flex flex-column gap-1">
                            <a href="javascript: void(0);" class="active">
                                <iconify-icon icon="solar:inbox-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12c0-5.185 0-7.778 1.61-9.39C4.223 1 6.816 1 12 1s7.778 0 9.39 1.61C23 4.223 23 6.816 23 12s0 7.778-1.61 9.39C19.777 23 17.184 23 12 23s-7.778 0-9.39-1.61C1 19.777 1 17.184 1 12" opacity=".5"></path><path fill="currentColor" d="M2.61 21.389c1.612 1.61 4.205 1.61 9.39 1.61s7.778 0 9.39-1.61c1.492-1.493 1.601-3.829 1.61-8.29h-3.476c-.996 0-1.494 0-1.931.202c-.438.201-.762.58-1.41 1.335l-.666.777c-.648.756-.972 1.134-1.41 1.335s-.935.202-1.93.202h-.353c-.996 0-1.494 0-1.931-.202c-.438-.2-.762-.579-1.41-1.335l-.666-.777c-.648-.756-.972-1.134-1.41-1.335s-.935-.201-1.93-.201H1c.008 4.46.118 6.796 1.61 8.289"></path></svg></template></iconify-icon>
                                <span>Inbox</span>
                                <span class="badge bg-danger-subtle fs-12 text-danger ms-auto">21</span>
                            </a>

                            <a href="javascript: void(0);">
                                <iconify-icon icon="solar:map-arrow-right-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M14.143 15.962a.5.5 0 0 1-.244.68l-9.402 4.193c-1.495.667-3.047-.814-2.306-2.202l3.152-5.904c.245-.459.245-1 0-1.458L2.191 5.367c-.74-1.388.81-2.87 2.306-2.202l3.525 1.572a2 2 0 0 1 .974.932z"></path><path fill="currentColor" d="M15.533 15.39a.5.5 0 0 0 .651.233l4.823-2.15c1.323-.59 1.323-2.355 0-2.945L12.109 6.56a.5.5 0 0 0-.651.68z" opacity=".5"></path></svg></template></iconify-icon>
                                <span>Sent</span>
                            </a>

                            <a href="javascript: void(0);">
                                <iconify-icon icon="solar:star-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.483 16.767A8.5 8.5 0 0 1 8.118 7.081a1 1 0 0 1-.113.097c-.28.213-.63.292-1.33.45l-.635.144c-2.46.557-3.69.835-3.983 1.776c-.292.94.546 1.921 2.223 3.882l.434.507c.476.557.715.836.822 1.18c.107.345.071.717-.001 1.46l-.066.677c-.253 2.617-.38 3.925.386 4.506s1.918.052 4.22-1.009l.597-.274c.654-.302.981-.452 1.328-.452s.674.15 1.329.452l.595.274c2.303 1.06 3.455 1.59 4.22 1.01c.767-.582.64-1.89.387-4.507z"></path><path fill="currentColor" d="m9.153 5.408l-.328.588c-.36.646-.54.969-.82 1.182q.06-.045.113-.097a8.5 8.5 0 0 0 10.366 9.686l-.02-.19c-.071-.743-.107-1.115 0-1.46c.107-.344.345-.623.822-1.18l.434-.507c1.677-1.96 2.515-2.941 2.222-3.882c-.292-.941-1.522-1.22-3.982-1.776l-.636-.144c-.699-.158-1.049-.237-1.33-.45c-.28-.213-.46-.536-.82-1.182l-.327-.588C13.58 3.136 12.947 2 12 2s-1.58 1.136-2.847 3.408" opacity=".5"></path></svg></template></iconify-icon>
                                <span>Starred</span>
                            </a>

                            <a href="javascript: void(0);">
                                <iconify-icon icon="solar:clock-circle-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10" opacity=".5"></path><path fill="currentColor" fill-rule="evenodd" d="M12 7.25a.75.75 0 0 1 .75.75v3.69l2.28 2.28a.75.75 0 1 1-1.06 1.06l-2.5-2.5a.75.75 0 0 1-.22-.53V8a.75.75 0 0 1 .75-.75" clip-rule="evenodd"></path></svg></template></iconify-icon>
                                <span>Scheduled</span>
                            </a>

                            <a href="javascript: void(0);">
                                <iconify-icon icon="solar:clapperboard-edit-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2c1.845 0 3.33 0 4.54.088L13.1 7.25H8.402l3.5-5.25zM3.465 3.464c1.252-1.252 3.157-1.433 6.631-1.46L6.599 7.25H2.104c.148-1.764.503-2.928 1.36-3.786M21.896 7.25c-.147-1.764-.503-2.928-1.36-3.786c-.598-.597-1.343-.95-2.337-1.16L14.902 7.25z"></path><path fill="currentColor" fill-rule="evenodd" d="M17.5 22c-2.121 0-3.182 0-3.841-.659S13 19.621 13 17.5s0-3.182.659-3.841S15.379 13 17.5 13s3.182 0 3.841.659S22 15.379 22 17.5s0 3.182-.659 3.841S19.621 22 17.5 22m2.212-6.712a.983.983 0 0 1 0 1.39l-.058.058a.24.24 0 0 1-.211.067a1.6 1.6 0 0 1-.81-.436a1.6 1.6 0 0 1-.436-.81a.24.24 0 0 1 .067-.211l.058-.058a.983.983 0 0 1 1.39 0M17.35 19.04a3 3 0 0 1-.296.279a1.6 1.6 0 0 1-.303.187a3 3 0 0 1-.381.14l-1.021.34a.265.265 0 0 1-.335-.335l.34-1.02c.064-.194.097-.291.14-.382q.077-.163.187-.303c.062-.08.134-.152.279-.296l1.799-1.799c.043-.043.118-.023.138.035a1.98 1.98 0 0 0 1.217 1.217c.058.02.078.095.035.138z" clip-rule="evenodd"></path><path fill="currentColor" d="M2.026 8.75C2 9.689 2 10.763 2 12c0 4.714 0 7.071 1.464 8.535C4.93 22 7.286 22 12 22c1.358 0 2.52 0 3.522-.035c-.884-.058-1.452-.213-1.863-.624C13 20.682 13 19.621 13 17.5s0-3.182.659-3.841S15.379 13 17.5 13s3.182 0 3.841.659c.411.411.566.979.624 1.863C22 14.52 22 13.358 22 12c0-1.237 0-2.311-.026-3.25z" opacity=".5"></path></svg></template></iconify-icon>
                                <span>Draft</span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body border-top border-light">
                        <a href="https://coderthemes.com/boron/layouts/apps-email.html#" class="btn-link d-flex align-items-center text-muted fw-bold fs-12 text-uppercase mb-0" data-bs-toggle="collapse" data-bs-target="#other" aria-expanded="false" aria-controls="other">Other <i class="ti ti-chevron-down ms-auto"></i></a>
                        <div id="other" class="collapse show">
                            <div class="email-menu-list d-flex flex-column gap-1 mt-2">
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:mailbox-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 11.25C2 8.35 4.015 6 6.5 6S11 8.35 11 11.25V20H4.233C3 20 2 18.834 2 17.395z" opacity=".5"></path><path fill="currentColor" d="M11 11.25V20h8.793C21.012 20 22 18.847 22 17.425V11.25C22 8.35 19.985 6 17.5 6h-11C8.985 6 11 8.35 11 11.25" opacity=".8"></path><path fill="currentColor" d="M9.5 20v2a.75.75 0 0 0 1.5 0v-2zm5.5 0h-1.5v2a.75.75 0 0 0 1.5 0z"></path><path fill="currentColor" fill-rule="evenodd" d="M4.25 16a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75m13.135-9.415l.256-.052a2.2 2.2 0 0 1 1.24.115c.69.277 1.446.328 2.165.148l.061-.015c.524-.131.893-.618.893-1.178v-2.13c0-.738-.664-1.282-1.355-1.109c-.396.1-.812.071-1.193-.081l-.073-.03a3.5 3.5 0 0 0-2-.185l-.449.09c-.54.108-.93.6-.93 1.17v6.953c0 .397.31.719.692.719a.706.706 0 0 0 .693-.72z" clip-rule="evenodd"></path></svg></template></iconify-icon>
                                    <span>All Mail</span>
                                </a>

                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 6.386c0-.484.345-.877.771-.877h2.665c.529-.016.996-.399 1.176-.965l.03-.1l.115-.391c.07-.24.131-.45.217-.637c.338-.739.964-1.252 1.687-1.383c.184-.033.378-.033.6-.033h3.478c.223 0 .417 0 .6.033c.723.131 1.35.644 1.687 1.383c.086.187.147.396.218.637l.114.391l.03.1c.18.566.74.95 1.27.965h2.57c.427 0 .772.393.772.877s-.345.877-.771.877H3.77c-.425 0-.77-.393-.77-.877"></path><path fill="currentColor" fill-rule="evenodd" d="M9.425 11.482c.413-.044.78.273.821.707l.5 5.263c.041.433-.26.82-.671.864c-.412.043-.78-.273-.821-.707l-.5-5.263c-.041-.434.26-.821.671-.864m5.15 0c.412.043.713.43.671.864l-.5 5.263c-.04.434-.408.75-.82.707c-.413-.044-.713-.43-.672-.864l.5-5.264c.041-.433.409-.75.82-.707" clip-rule="evenodd"></path><path fill="currentColor" d="M11.596 22h.808c2.783 0 4.174 0 5.08-.886c.904-.886.996-2.339 1.181-5.245l.267-4.188c.1-1.577.15-2.366-.303-2.865c-.454-.5-1.22-.5-2.753-.5H8.124c-1.533 0-2.3 0-2.753.5s-.404 1.288-.303 2.865l.267 4.188c.185 2.906.277 4.36 1.182 5.245c.905.886 2.296.886 5.079.886" opacity=".5"></path></svg></template></iconify-icon>
                                    <span>Trash</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:info-square-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c-4.714 0-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22" opacity=".5"></path><path fill="currentColor" d="M12 17.75a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75M12 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2"></path></svg></template></iconify-icon>
                                    <span>Spam</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:chat-round-line-bold-duotone" class="me-2 fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12c0 1.6.376 3.112 1.043 4.453c.178.356.237.763.134 1.148l-.595 2.226a1.3 1.3 0 0 0 1.591 1.592l2.226-.596a1.63 1.63 0 0 1 1.149.133A9.96 9.96 0 0 0 12 22" opacity=".5"></path><path fill="currentColor" d="M7.825 12.85a.825.825 0 0 0 0 1.65h6.05a.825.825 0 0 0 0-1.65zm0-3.85a.825.825 0 0 0 0 1.65h8.8a.825.825 0 0 0 0-1.65z"></path></svg></template></iconify-icon>
                                    <span>Chats</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <a href="https://coderthemes.com/boron/layouts/apps-email.html#" class="btn-link d-flex align-items-center text-muted fw-bold fs-12 text-uppercase mb-0" data-bs-toggle="collapse" data-bs-target="#labels" aria-expanded="false" aria-controls="labels">Labels <i class="ti ti-chevron-down ms-auto"></i></a>
                        <div id="labels" class="collapse show">
                            <div class="email-menu-list d-flex flex-column gap-1 mt-2">
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-success fs-16 me-2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                    <span>Personal</span>
                                </a>

                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-danger fs-16 me-2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                    <span>Client</span>
                                </a>

                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-info fs-16 me-2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                    <span>Marketing</span>
                                </a>

                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-secondary fs-16 me-2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                    <span>Office</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-grow-1 card rounded-0 border-0 shadow-none mb-0">
                <div class="border-start border-light h-100">
                    <div class="card-body py-2">
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn btn-light d-xxl-none d-flex p-1" data-bs-toggle="offcanvas" data-bs-target="#email-sidebar" aria-controls="email-sidebar">
                                <i class="ti ti-menu-2 fs-17"></i>
                            </button>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-sm btn-icon btn-ghost-light text-dark rounded-circle" data-bs-toggle="tooltip" data-bs-html="true" data-bs-trigger="hover" data-bs-placement="top" data-bs-title="&lt;span class=&#39;fs-12&#39;&gt;Mark as read&lt;/span&gt;">
                                    <i class="ti ti-mail-opened fs-18"></i>
                                </button>

                                <button type="button" class="btn btn-sm btn-icon btn-ghost-light text-dark rounded-circle" data-bs-toggle="tooltip" data-bs-html="true" data-bs-trigger="hover" data-bs-placement="top" data-bs-title="&lt;span class=&#39;fs-12&#39;&gt;Archive&lt;/span&gt;">
                                    <i class="ti ti-archive fs-18"></i>
                                </button>

                                <button type="button" class="btn btn-sm btn-icon btn-ghost-light text-dark rounded-circle" data-bs-toggle="tooltip" data-bs-html="true" data-bs-trigger="hover" data-bs-placement="top" data-bs-title="&lt;span class=&#39;fs-12&#39;&gt;Delete&lt;/span&gt;">
                                    <i class="ti ti-trash fs-18"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-sm btn-ghost-light text-dark rounded-circle" data-bs-toggle="tooltip" data-bs-html="true" data-bs-trigger="hover" data-bs-placement="top" data-bs-title="&lt;span class=&#39;fs-12&#39;&gt;Report spam&lt;/span&gt;">
                                    <i class="ti ti-info-hexagon fs-18"></i>
                                </button>
                            </div>

                            <div class="ms-auto d-xl-flex d-none">
                                <div class="app-search">
                                    <input type="text" class="form-control rounded-pill" placeholder="Search mail...">
                                    <i class="ti ti-mail-search fs-18 app-search-icon text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top border-light">
                        <div class="table-responsive">
                            <table class="table table-hover mail-list mb-0">
                                <tbody>
                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-2.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">George Thomas</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Request For Information </a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> I hope you are doing well. I have a small request. Can you please...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Jan 5, 3:45 PM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-danger fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star-filled"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-3.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Robert C. Lane</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Invitation For Meeting </a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> Good Morning, I hope this email finds you well. I am writing to extra...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> <i class="ti ti-paperclip"></i> 2 </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Mar 23, 7:30 AM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-success fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/dribbble.svg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Dribbble</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Become a successful self-taught designer </a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> There's no one right way to learn design. In fa...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Apr 10, 1:15
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-info fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star-filled"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-5.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Darren C. Gallimore</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Holiday Notice</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> Good Evening, I hope you are doing well. I have a small request.</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">May 8, 9:45 PM</p>
                                        </td>

                                        <td class="pe-3">

                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-9.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Mike A. Bell</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Offer Letter</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> Thank you for applying. I hope you are doing well. I have a small.</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">Jun 16, 6:00 AM</p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-secondary fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star-filled"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-6.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Bennett C. Rice</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Apology Letter</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> I hope you are doing well. I have a small request. Can you please</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> <i class="ti ti-paperclip"></i> 4 </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Jun 16, 6:00 AM
                                            </p>
                                        </td>

                                        <td class="pe-3">

                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/gitlab.svg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">John J. Bowser</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">How to get started on Gitlab</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> We know setting off on a freelancing journey can feel intim...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> <i class="ti ti-paperclip"></i> 3 </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Aug 22, 2:35 AM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                        </td>
                                    </tr>


                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-8.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Jill N. Neal</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Apply For Executive Position</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> I am writing to express my keen interest in the Executive Po...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Aug 22, 2:35 AM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-success fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/instagram.svg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Instagram</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">You have received 2 new followers</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> 2 new followers, 1 new collected project, and more at...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Oct 31, 8:00 AM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-info fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/amazon.svg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Amazon</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Your order is shipped</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> Your order is on the way with tracking...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> <i class="ti ti-paperclip"></i> 1 </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Nov 19, 10:10 PM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-success fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>


                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star-filled"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-7.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Alfredo D. Rico</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Class schedule</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> Your online class will be held on Saturday at 2:30 pm Bangladesh.</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Dec 25, 12:30 PM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-secondary fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/avatar-4.jpg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Vernon B. Rutter</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Invitation to attend our Exclusive Webinar</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> An exclusive webinar will be held on 23 January...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Jan 30, 4:50 AM
                                            </p>
                                        </td>

                                        <td class="pe-3">

                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star-filled"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/digital-ocean.svg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Digital Ocean</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">Update to Discord's Policies</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> Hey! we wanted to let you know that we are updating our Te...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> &nbsp; </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                Feb 9, 9:05 PM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-danger fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>

                                    <tr class="position-relative">
                                        <td class="ps-3">
                                            <input class="form-check-input position-relative z-2" type="checkbox">
                                        </td>

                                        <td>
                                            <button class="btn p-0 text-warning fs-16 flex-shrink-0"><i class="ti ti-star-filled"></i></button>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets') }}/images/linkedin.svg" alt="user avatar" class="avatar-md rounded-circle">

                                                <h5 class="fs-14 mb-0 fw-medium">
                                                    <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate">Linkedin</a>
                                                </h5>
                                            </div>
                                        </td>

                                        <td>
                                            <a data-bs-toggle="modal" href="https://coderthemes.com/boron/layouts/apps-email.html#email-details-modal" role="button" aria-controls="email-details-modal" class="link-reset text-truncate fs-14 fw-semibold stretched-link">New job similar to UI/UX</a>
                                        </td>

                                        <td>
                                            <div>
                                                <span class="fs-14 text-muted text-truncate mb-0"> Jobs similar to UI/UX Designer at St Trinity Property group and s...</span>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="https://coderthemes.com/boron/layouts/apps-email.html#!" class="link-reset text-truncate text-nowrap"> <i class="ti ti-paperclip"></i> 4 </a>
                                        </td>

                                        <td>
                                            <p class="fs-12 text-muted mb-0 text-end text-truncate">
                                                May 17, 3:45 PM
                                            </p>
                                        </td>

                                        <td class="pe-3">
                                            <iconify-icon icon="solar:bolt-circle-bold-duotone" class="text-success fs-16 ms-2 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12" opacity=".5"></path><path fill="currentColor" d="m11.227 8.569l-2.015 1.605c-.845.673-1.268 1.01-1.185 1.385l.004.019c.094.373.63.517 1.702.804c.595.16.893.24 1.033.465l.007.012c.135.229.058.515-.095 1.087l-.04.15c-.426 1.586-.638 2.379-.229 2.635s1.06-.262 2.363-1.3l2.015-1.604c.846-.674 1.268-1.01 1.186-1.386l-.004-.019c-.095-.373-.63-.517-1.702-.804c-.595-.16-.893-.24-1.033-.465l-.007-.012c-.135-.228-.058-.514.095-1.086l.04-.15c.425-1.586.638-2.38.229-2.636s-1.061.263-2.364 1.3"></path></svg></template></iconify-icon>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Mail Details modal -->
    <div id="email-details-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="email-details-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header d-flex flex-wrap gap-2 align-items-start">
                    <img class="me-2 rounded-circle" src="{{ asset('assets') }}/images/avatar-2.jpg" alt="placeholder image" height="40">
                    <div class="flex-grow-1">
                        <h6 class="fs-16">Steven Smith</h6>
                        <p class="text-muted mb-0">From: jonathan@domain.com</p>
                    </div>

                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>

                <div class="modal-body">
                    <h5 class="fs-18">Your elite author Graphic Optimization reward is ready!</h5>

                    <hr>

                    <p>Hi Coderthemes!</p>
                    <p>Clicking ‘Order Service’ on the right-hand side of the above page will present you with an order page. This service has the following Briefing Guidelines that will need to be filled before placing your order:</p>
                    <ol>
                        <li>Your design preferences (Color, style, shapes, Fonts, others) </li>
                        <li>Tell me, why is your item different? </li>
                        <li>Do you want to bring up a specific feature of your item? If yes, please tell me </li>
                        <li>Do you have any preference or specific thing you would like to change or improve on your item page? </li>
                        <li>Do you want to include your item's or your provider's logo on the page? if yes, please send it to me in vector format (Ai or EPS) </li>
                        <li>Please provide me with the copy or text to display</li>
                    </ol>

                    <p>Filling in this form with the above information will ensure that they will be able to start work quickly.</p>
                    <p>You can complete your order by putting your coupon code into the Promotional code box and clicking ‘Apply Coupon’.</p>
                    <p><b>Best,</b> <br> Graphic Studio</p>
                    <hr>

                    <h5 class="mb-3">Attachments</h5>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-1 shadow-none border border-light">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-lg">
                                                <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    .ZIP
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold">Boron-admin-design.zip</a>
                                            <p class="mb-0">2.3 MB</p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                <i class="ti ti-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card mb-1 shadow-none border border-light">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img src="{{ asset('assets') }}/images/s-6.svg" class="avatar-lg rounded" alt="file-image">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                            <p class="mb-0">3.25 MB</p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                <i class="ti ti-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>

                <div class="modal-footer gap-1 py-2">
                    <button class="btn btn-primary" data-bs-target="#email-compose-modal" data-bs-toggle="modal"><i class="align-text-bottom me-1 ti ti-arrow-back-up"></i> Reply</button>
                    <button class="btn btn-primary" data-bs-target="#email-compose-modal" data-bs-toggle="modal"><i class="align-text-bottom me-1 ti ti-arrow-big-right"></i> Forward</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Mail Compose Modal -->
    <div id="email-compose-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="email-compose-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h4 class="modal-title" id="email-compose-modalLabel">New Message</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="mb-2">
                            <label for="msgto" class="form-label">To</label>
                            <input type="text" id="msgto" class="form-control" placeholder="Example@email.com">
                        </div>
                        <div class="mb-2">
                            <label for="mailsubject" class="form-label">Subject</label>
                            <input type="text" id="mailsubject" class="form-control" placeholder="Your subject">
                        </div>

                        <div>
                            <label class="form-label">Message</label>
                            <div role="toolbar" class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold" aria-pressed="false" aria-label="bold"><svg viewBox="0 0 18 18"><path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path><path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path></svg></button><button type="button" class="ql-italic" aria-pressed="false" aria-label="italic"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line><line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line><line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line></svg></button><button type="button" class="ql-underline" aria-pressed="false" aria-label="underline"><svg viewBox="0 0 18 18"><path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path><rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect></svg></button></span><span class="ql-formats"><button type="button" class="ql-image" aria-pressed="false" aria-label="image"><svg viewBox="0 0 18 18"><rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect><circle class="ql-fill" cx="6" cy="7" r="1"></circle><polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline></svg></button><button type="button" class="ql-code-block" aria-pressed="false" aria-label="code-block"><svg viewBox="0 0 18 18"><polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline><polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline><line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line></svg></button></span></div><div id="mail-compose" style="height: 150px;" class="ql-container ql-snow"><div class="ql-editor" contenteditable="true" data-placeholder="Compose an epic..."><p>Writing something...</p></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer py-2">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Send Message</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div> <!-- container -->
@endsection



@push('script')
<!-- Quill Editor js -->
<script src="{{ asset('assets') }}/js/quill.min.js"></script>

<!-- Quill Demo js -->
<script src="{{ asset('assets') }}/js/apps-email.js"></script>
@endpush
