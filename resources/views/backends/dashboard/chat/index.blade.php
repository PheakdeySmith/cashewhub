@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Chat</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item active">Chat</li>
            </ol>
        </div>
    </div>




    <div class="card">
        <div class="chat d-flex">
            <div class="offcanvas-xxl offcanvas-start" tabindex="-1" id="chatUserList" aria-labelledby="chatUserListLabel">
                <div id="chat-user-list" class="collapse collapse-horizontal show">
                    <div class="chat-user-list border-end">
                        <div class="card-body py-2 px-3 border-bottom">
                            <div class="d-flex align-items-center gap-2 py-1">
                                <div class="chat-users">
                                    <div class="avatar-lg chat-avatar-online">
                                        <img src="{{ asset('assets') }}/images/avatar-1.jpg" class="img-fluid rounded-circle" alt="Chris Keller">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0">
                                        <a href="https://coderthemes.com/boron/layouts/apps-chat.html#!" class="text-reset lh-base">Dhanoo K.</a>
                                    </h5>
                                    <p class="mb-0 text-muted">Admin</p>
                                </div>
                                <div class="dropdown lh-1">
                                    <a href="https://coderthemes.com/boron/layouts/apps-chat.html#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <iconify-icon icon="solar:settings-outline" class="align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 8.25a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5M9.75 12a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"></path><path d="M11.975 1.25c-.445 0-.816 0-1.12.02a2.8 2.8 0 0 0-.907.19a2.75 2.75 0 0 0-1.489 1.488c-.145.35-.184.72-.2 1.122a.87.87 0 0 1-.415.731a.87.87 0 0 1-.841-.005c-.356-.188-.696-.339-1.072-.389a2.75 2.75 0 0 0-2.033.545a2.8 2.8 0 0 0-.617.691c-.17.254-.356.575-.578.96l-.025.044c-.223.385-.408.706-.542.98c-.14.286-.25.568-.29.88a2.75 2.75 0 0 0 .544 2.033c.231.301.532.52.872.734a.87.87 0 0 1 .426.726a.87.87 0 0 1-.426.726c-.34.214-.64.433-.872.734a2.75 2.75 0 0 0-.545 2.033c.041.312.15.594.29.88c.135.274.32.595.543.98l.025.044c.222.385.408.706.578.96c.177.263.367.5.617.69a2.75 2.75 0 0 0 2.033.546c.376-.05.716-.2 1.072-.389a.87.87 0 0 1 .84-.005a.86.86 0 0 1 .417.731c.015.402.054.772.2 1.122a2.75 2.75 0 0 0 1.488 1.489c.29.12.59.167.907.188c.304.021.675.021 1.12.021h.05c.445 0 .816 0 1.12-.02c.318-.022.617-.069.907-.19a2.75 2.75 0 0 0 1.489-1.488c.145-.35.184-.72.2-1.122a.87.87 0 0 1 .415-.732a.87.87 0 0 1 .841.006c.356.188.696.339 1.072.388a2.75 2.75 0 0 0 2.033-.544c.25-.192.44-.428.617-.691c.17-.254.356-.575.578-.96l.025-.044c.223-.385.408-.706.542-.98c.14-.286.25-.569.29-.88a2.75 2.75 0 0 0-.544-2.033c-.231-.301-.532-.52-.872-.734a.87.87 0 0 1-.426-.726c0-.278.152-.554.426-.726c.34-.214.64-.433.872-.734a2.75 2.75 0 0 0 .545-2.033a2.8 2.8 0 0 0-.29-.88a18 18 0 0 0-.543-.98l-.025-.044a18 18 0 0 0-.578-.96a2.8 2.8 0 0 0-.617-.69a2.75 2.75 0 0 0-2.033-.546c-.376.05-.716.2-1.072.389a.87.87 0 0 1-.84.005a.87.87 0 0 1-.417-.731c-.015-.402-.054-.772-.2-1.122a2.75 2.75 0 0 0-1.488-1.489c-.29-.12-.59-.167-.907-.188c-.304-.021-.675-.021-1.12-.021zm-1.453 1.595c.077-.032.194-.061.435-.078c.247-.017.567-.017 1.043-.017s.796 0 1.043.017c.241.017.358.046.435.078c.307.127.55.37.677.677c.04.096.073.247.086.604c.03.792.439 1.555 1.165 1.974s1.591.392 2.292.022c.316-.167.463-.214.567-.227a1.25 1.25 0 0 1 .924.247c.066.051.15.138.285.338c.139.206.299.483.537.895s.397.69.506.912c.107.217.14.333.15.416a1.25 1.25 0 0 1-.247.924c-.064.083-.178.187-.48.377c-.672.422-1.128 1.158-1.128 1.996s.456 1.574 1.128 1.996c.302.19.416.294.48.377c.202.263.29.595.247.924c-.01.083-.044.2-.15.416c-.109.223-.268.5-.506.912s-.399.689-.537.895c-.135.2-.219.287-.285.338a1.25 1.25 0 0 1-.924.247c-.104-.013-.25-.06-.567-.227c-.7-.37-1.566-.398-2.292.021s-1.135 1.183-1.165 1.975c-.013.357-.046.508-.086.604a1.25 1.25 0 0 1-.677.677c-.077.032-.194.061-.435.078c-.247.017-.567.017-1.043.017s-.796 0-1.043-.017c-.241-.017-.358-.046-.435-.078a1.25 1.25 0 0 1-.677-.677c-.04-.096-.073-.247-.086-.604c-.03-.792-.439-1.555-1.165-1.974s-1.591-.392-2.292-.022c-.316.167-.463.214-.567.227a1.25 1.25 0 0 1-.924-.247c-.066-.051-.15-.138-.285-.338a17 17 0 0 1-.537-.895c-.238-.412-.397-.69-.506-.912c-.107-.217-.14-.333-.15-.416a1.25 1.25 0 0 1 .247-.924c.064-.083.178-.187.48-.377c.672-.422 1.128-1.158 1.128-1.996s-.456-1.574-1.128-1.996c-.302-.19-.416-.294-.48-.377a1.25 1.25 0 0 1-.247-.924c.01-.083.044-.2.15-.416c.109-.223.268-.5.506-.912s.399-.689.537-.895c.135-.2.219-.287.285-.338a1.25 1.25 0 0 1 .924-.247c.104.013.25.06.567.227c.7.37 1.566.398 2.292-.022c.726-.419 1.135-1.182 1.165-1.974c.013-.357.046-.508.086-.604c.127-.307.37-.55.677-.677"></path></g></svg></template></iconify-icon>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="ti ti-user-plus me-1 fs-17 align-middle"></i>
                                            <span class="align-middle">New Contact</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="ti ti-users-plus me-1 fs-17 align-middle"></i>
                                            <span class="align-middle">New Group</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="ti ti-star me-1 fs-17 align-middle"></i>
                                            <span class="align-middle">Favorites</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="ti ti-archive me-1 fs-17 align-middle"></i>
                                            <span class="align-middle">Archive Contacts</span>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="flex-grow-0 btn btn-sm btn-icon btn-soft-danger d-xl-none" data-bs-dismiss="offcanvas" data-bs-target="#chatUserList" aria-label="Close">
                                    <i class="ti ti-x fs-20"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Contact list -->
                        <div class="d-flex flex-column">
                            <div class="users-list position-relative list-scroll simplebar-scrollable-y" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">

                                <div class="px-3 py-2">
                                    <div class="app-search py-1">
                                        <input type="text" class="form-control border-light bg-light bg-opacity-50 rounded-2" placeholder="Search something here...">
                                        <i class="app-search-icon ti ti-search text-muted fs-16"></i>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center px-3 py-2 bg-body-secondary position-sticky top-0 z-1">
                                    <iconify-icon icon="solar:pin-bold-duotone" class="fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="m16.219 4.838l2.964 2.967c2.012 2.014 3.018 3.021 2.784 4.107c-.235 1.085-1.567 1.585-4.23 2.586l-1.845.693c-.713.268-1.07.402-1.345.64q-.181.158-.322.352c-.212.297-.313.664-.515 1.4c-.46 1.672-.69 2.508-1.239 2.821c-.23.132-.492.2-.758.2c-.63 0-1.243-.614-2.469-1.84l-1.466-1.468l-1.079-1.08L5.285 14.8c-1.218-1.219-1.827-1.828-1.83-2.455a1.53 1.53 0 0 1 .203-.773c.313-.543 1.143-.772 2.803-1.23c.737-.203 1.105-.304 1.402-.517q.199-.144.36-.332c.236-.278.368-.637.63-1.355l.669-1.823c.987-2.693 1.48-4.04 2.568-4.28s2.102.774 4.129 2.803" clip-rule="evenodd" opacity=".5"></path><path fill="currentColor" d="m3.302 21.776l4.476-4.48l-1.079-1.08l-4.476 4.48a.764.764 0 0 0 1.08 1.08"></path></svg></template></iconify-icon>
                                    <h5 class="mb-0 ms-1 fw-semibold fs-14">Pinned</h5>
                                </div><!-- end chat-title -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-offline">
                                            <img src="{{ asset('assets') }}/images/avatar-2.jpg" class="img-fluid rounded-circle" alt="Brandon Smith">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">5:45am</span>
                                                Brandon Smith
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 float-end text-end"><span class="badge bg-danger-subtle text-danger">3</span></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">How are you today?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users active">
                                        <div class="avatar-md chat-avatar-online">
                                            <img src="{{ asset('assets') }}/images/avatar-5.jpg" class="img-fluid rounded-circle" alt="James Zavel">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">4:30am</span>
                                                James Zavel
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 text-end float-end text-success"><i class="ti ti-checks"></i></span>
                                                <span class="w-75 d-inline-block text-primary fs-12 fw-semibold">typing...</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-online">
                                            <img src="{{ asset('assets') }}/images/avatar-8.jpg" class="img-fluid rounded-circle" alt="Maria Lopez">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">6:12pm</span>
                                                Maria Lopez
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 float-end text-end"><span class="badge bg-danger-subtle text-danger">1</span></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">How are you today?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-offline">
                                            <div class="h-100 w-100 rounded-circle bg-info text-white d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold">OD</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">6:12pm</span>
                                                Boron Discussion
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">JS Developer's Come in office?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <div class="d-flex align-items-center px-3 py-2 bg-body-secondary position-sticky top-0 z-1">
                                    <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-18 text-muted"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m13.629 20.472l-.542.916c-.483.816-1.69.816-2.174 0l-.542-.916c-.42-.71-.63-1.066-.968-1.262c-.338-.197-.763-.204-1.613-.219c-1.256-.021-2.043-.098-2.703-.372a5 5 0 0 1-2.706-2.706C2 14.995 2 13.83 2 11.5v-1c0-3.273 0-4.91.737-6.112a5 5 0 0 1 1.65-1.651C5.59 2 7.228 2 10.5 2h3c3.273 0 4.91 0 6.113.737a5 5 0 0 1 1.65 1.65C22 5.59 22 7.228 22 10.5v1c0 2.33 0 3.495-.38 4.413a5 5 0 0 1-2.707 2.706c-.66.274-1.447.35-2.703.372c-.85.015-1.275.022-1.613.219c-.338.196-.548.551-.968 1.262" opacity=".5"></path><path fill="currentColor" d="M7.25 9A.75.75 0 0 1 8 8.25h8a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 9m0 3.5a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75"></path></svg></template></iconify-icon>
                                    <h5 class="mb-0 ms-1 fw-semibold fs-14">All Messages</h5>
                                </div><!-- end chat-title -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-online">
                                            <img src="{{ asset('assets') }}/images/avatar-3.jpg" class="img-fluid rounded-circle" alt="Brandon Smith">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">3:40am</span>
                                                Eunice Bennett
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">Please check these design assets</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-offline">
                                            <div class="h-100 w-100 rounded-circle bg-warning text-white d-flex align-items-center justify-content-center">
                                                <i class="ti ti-brand-javascript fs-20"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">3:30am</span>
                                                Javascript Team
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 text-end float-end text-muted"><i class="ti ti-check"></i></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">New Project?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-offline">
                                            <div class="h-100 w-100 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">
                                                <i class="ti ti-brand-figma fs-20"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">3:30am</span>
                                                UI Team
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 text-end float-end text-muted"><i class="ti ti-checks"></i></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">Project Completed</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-offline">
                                            <img src="{{ asset('assets') }}/images/avatar-4.jpg" class="img-fluid rounded-circle" alt="Brandon Smith">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">2:33am</span>
                                                Hoyt Bahe
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 text-end float-end text-success"><i class="ti ti-checks"></i></span>
                                                <span class="w-75 d-inline-block text-primary fs-12 fw-semibold"><i class="ti ti-microphone"></i> Voice Message</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users active">
                                        <div class="avatar-md chat-avatar-online">
                                            <img src="{{ asset('assets') }}/images/avatar-9.jpg" class="img-fluid rounded-circle" alt="James Zavel">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">4:35am</span>
                                                John Otta
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 text-end float-end text-success"><i class="ti ti-checks"></i></span>
                                                <span class="w-75 d-inline-block fs-12">What next plan ?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-online">
                                            <img src="{{ asset('assets') }}/images/avatar-6.jpg" class="img-fluid rounded-circle" alt="Brandon Smith">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">Tue</span>
                                                Louis Moller
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 float-end text-end"><span class="badge bg-danger-subtle text-danger">1</span></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">Are you free for 15 min?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-offline">
                                            <img src="{{ asset('assets') }}/images/avatar-7.jpg" class="img-fluid rounded-circle" alt="Brandon Smith">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">Tue</span>
                                                David Callan
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 float-end text-end"><span class="badge bg-danger-subtle text-danger">3</span></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">Are you interested in learning?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-online">
                                            <img src="{{ asset('assets') }}/images/avatar-9.jpg" class="img-fluid rounded-circle" alt="Brandon Smith">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">Fri</span>
                                                Sean Lee
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 text-end float-end text-muted"><i class="ti ti-checks"></i></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">Howdy?</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->

                                <a href="javascript:void(0);" class="text-body d-block">
                                    <div class="chat-users">
                                        <div class="avatar-md chat-avatar-offline">
                                            <div class="h-100 w-100 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center">
                                                <i class="ti ti-brand-react fs-20"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="mt-0 mb-0 fs-13">
                                                <span class="float-end text-muted fs-12">Sat</span>
                                                React Team
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted lh-1">
                                                <span class="w-25 text-end float-end text-success"><i class="ti ti-checks"></i></span>
                                                <span class="w-75 d-inline-block text-truncate overflow-hidden">@jamesZavel Is new React employee</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!-- end chat-user -->
                            </div></div></div></div><div class="simplebar-placeholder" style="width: 339px; height: 1057px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 403px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                        </div>
                        <!-- End Contact list -->
                    </div>
                </div>
            </div>

            <div class="chat-content card border-0 rounded-0 shadow-none mb-0">
                <div class="card-header py-2 px-3 border-bottom">
                    <div class="d-flex align-items-center justify-content-between py-1">
                        <div class="d-flex align-items-center gap-2">

                            <a href="https://coderthemes.com/boron/layouts/apps-chat.html#" class="btn btn-sm btn-icon btn-soft-primary d-none d-xl-flex me-2" data-bs-toggle="collapse" data-bs-target="#chat-user-list" aria-expanded="true">
                                <i class="ti ti-chevrons-left fs-20"></i>
                            </a>

                            <button class="btn btn-sm btn-icon btn-ghost-light text-dark d-xl-none d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#chatUserList" aria-controls="chatUserList">
                                <i class="ti ti-menu-2 fs-20"></i>
                            </button>

                            <img src="{{ asset('assets') }}/images/avatar-5.jpg" class="avatar-lg rounded-circle" alt="">

                            <div>
                                <h5 class="my-0 lh-base">
                                    <a href="https://coderthemes.com/boron/layouts/apps-chat.html#" class="text-reset">James Zavel</a>
                                </h5>
                                <p class="mb-0 text-muted">
                                    <small class="ti ti-circle-filled text-success"></small> Active
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <a href="javascript: void(0);" class="btn btn-sm btn-icon btn-ghost-light d-none d-xl-flex" data-bs-toggle="modal" data-bs-target="#userCall" data-bs-placement="top" title="Voice Call">
                                <i class="ti ti-phone-call fs-20"></i>
                            </a>
                            <a href="javascript: void(0);" class="btn btn-sm btn-icon btn-ghost-light d-none d-xl-flex" data-bs-toggle="modal" data-bs-target="#userVideoCall" data-bs-placement="top" title="Video Call">
                                <i class="ti ti-video fs-20"></i>
                            </a>

                            <a href="javascript: void(0);" class="btn btn-sm btn-icon btn-ghost-light d-xl-flex">
                                <i class="ti ti-info-circle fs-20"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="chat-scroll p-3 simplebar-scrollable-y" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 24px;">
                        <ul class="chat-list" data-apps-chat="messages-list">
                            <li class="chat-group" id="even-1">
                                <img src="{{ asset('assets') }}/images/avatar-5.jpg" class="avatar-sm rounded-circle" alt="avatar-5">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">James.</h6>
                                        <h6 class="d-inline-flex text-muted">10:04pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>Hello! 👋</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#even-1"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="chat-group odd" id="odd-1">
                                <img src="{{ asset('assets') }}/images/avatar-1.jpg" class="avatar-sm rounded-circle" alt="avatar-1">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">You.</h6>
                                        <h6 class="d-inline-flex text-muted">10:05pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>Hey there, how are you doing? Any plans for our upcoming meeting?</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#odd-1"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="chat-group" id="even-2">
                                <img src="{{ asset('assets') }}/images/avatar-5.jpg" class="avatar-sm rounded-circle" alt="avatar-5">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">James.</h6>
                                        <h6 class="d-inline-flex text-muted">10:08pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>Sure, everything's good.</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#even-2"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="chat-group odd" id="odd-2">
                                <img src="{{ asset('assets') }}/images/avatar-1.jpg" class="avatar-sm rounded-circle" alt="avatar-1">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">You.</h6>
                                        <h6 class="d-inline-flex text-muted">10:10pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>Fantastic! 👍</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#odd-2"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="chat-group" id="even-3">
                                <img src="{{ asset('assets') }}/images/avatar-5.jpg" class="avatar-sm rounded-circle" alt="avatar-5">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">James.</h6>
                                        <h6 class="d-inline-flex text-muted">10:15pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>If you're available, let's schedule it for today.</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#even-3"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="chat-group odd" id="odd-3">
                                <img src="{{ asset('assets') }}/images/avatar-1.jpg" class="avatar-sm rounded-circle" alt="avatar-1">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">You.</h6>
                                        <h6 class="d-inline-flex text-muted">10:16pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>Absolutely! Just give me a heads up if 2pm suits you.</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#odd-3"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="chat-group" id="even-4">
                                <img src="{{ asset('assets') }}/images/avatar-5.jpg" class="avatar-sm rounded-circle" alt="avatar-5">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">James.</h6>
                                        <h6 class="d-inline-flex text-muted">10:18pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>Apologies 😔, I've got another meeting at 2pm. Could we possibly shift it to 3pm?</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#even-4"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-message" id="even-4-1">
                                        <p>If you have a few extra minutes, we could also go over the presentation talk format.</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link link-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#even-4-1"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="chat-group odd" id="odd-4">
                                <img src="{{ asset('assets') }}/images/avatar-1.jpg" class="avatar-sm rounded-circle" alt="avatar-1">

                                <div class="chat-body">
                                    <div>
                                        <h6 class="d-inline-flex">You.</h6>
                                        <h6 class="d-inline-flex text-muted">10:19pm</h6>
                                    </div>

                                    <div class="chat-message">
                                        <p>3pm works for me 👍. Absolutely, let's dive into the presentation format. It'd be fantastic to wrap that up today. I'm attaching last year's format and assets here for reference.</p>

                                        <div class="chat-actions dropdown">
                                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-copy fs-14 align-text-top me-1"></i> Copy Message</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#"><i class="ti ti-edit-circle fs-14 align-text-top me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/apps-chat.html#" data-dismissible="#odd-4"><i class="ti ti-trash fs-14 align-text-top me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div></div></div></div><div class="simplebar-placeholder" style="width: 1372px; height: 882px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 364px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

                    <div class="p-3 border-top position-sticky bottom-0 w-100 mb-0">
                        <form class="row align-items-center g-2" name="chat-form" id="chat-form">

                            <div class="col-auto">
                                <button type="button" class="btn btn-icon btn-soft-warning">
                                    <iconify-icon icon="solar:smile-circle-outline" class="fs-20"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12m7.147 3.553a.75.75 0 0 1 1.05-.155c.728.54 1.607.852 2.553.852s1.825-.313 2.553-.852a.75.75 0 1 1 .894 1.204A5.77 5.77 0 0 1 12 17.75a5.77 5.77 0 0 1-3.447-1.148a.75.75 0 0 1-.156-1.049" clip-rule="evenodd"></path><path fill="currentColor" d="M16 10.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5s.448-1.5 1-1.5s1 .672 1 1.5m-6 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S8.448 9 9 9s1 .672 1 1.5"></path></svg></template></iconify-icon>
                                </button>
                            </div>

                            <div class="col">
                                <input type="text" name="message" class="form-control" placeholder="Type Message..." required="">
                            </div>

                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center gap-1">
                                    <button type="submit" class="btn btn-icon btn-success"><i class="ti ti-send"></i></button>
                                    <a href="https://coderthemes.com/boron/layouts/apps-chat.html#" class="btn btn-icon btn-soft-primary"><i class="ti ti-microphone"></i> </a>
                                    <a href="https://coderthemes.com/boron/layouts/apps-chat.html#" class="btn btn-icon btn-soft-primary"><i class="ti ti-paperclip"></i></a>
                                </div>
                            </div> <!-- end col -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->
@endsection



@push('script')

@endpush
