@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Dropdowns</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Dropdowns</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Single button dropdowns</h4>
                </div>
                <div class="card-body">

                    <p class="text-muted">
                        Any single <code>.btn</code> can be turned into a dropdown
                        toggle with some markup changes. Here’s how you can put them to work
                        with either <code>&lt;button&gt;</code>
                        elements:
                    </p>

                    <div class="row">
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Custom Dropdown Arrow</h4>
                </div>
                <div class="card-body">

                    <p class="text-muted">
                        Any single <code>.btn</code> can be turned into a dropdown
                        toggle with some markup changes. Here’s how you can put them to work
                        with either <code>&lt;button&gt;</code>
                        elements:
                    </p>

                    <div class="row">
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle drop-arrow-none" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Without Arrow
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn btn-outline-info dropdown-toggle drop-arrow-none" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tabler Icon <i class="ti ti-chevron-down align-middle ms-1"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn btn-secondary bg-gradient dropdown-toggle drop-arrow-none" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Lucid Icon <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="square-chevron-down" class="lucide lucide-square-chevron-down avatar-xxs ms-2"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="m16 10-4 4-4-4"></path></svg>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn btn-soft-success dropdown-toggle drop-arrow-none" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Solar Icon <iconify-icon icon="solar:album-bold-duotone" class="fs-20 ms-2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M17.29 11.968a1.33 1.33 0 0 1-1.322 1.338a1.33 1.33 0 0 1-1.323-1.338a1.33 1.33 0 0 1 1.323-1.337c.73 0 1.323.599 1.323 1.337"></path><path fill="currentColor" fill-rule="evenodd" d="M18.132 7.408c-.849-.12-1.942-.12-3.305-.12H9.173c-1.363 0-2.456 0-3.305.12c-.877.125-1.608.392-2.152 1.02c-.543.628-.71 1.396-.716 2.293c-.006.866.139 1.962.319 3.328l.365 2.772c.141 1.068.255 1.933.432 2.61c.185.704.457 1.288.968 1.74c.51.453 1.12.649 1.834.74c.687.089 1.55.089 2.615.089h4.934c1.065 0 1.928 0 2.615-.088c.715-.092 1.323-.288 1.834-.74c.511-.453.783-1.037.968-1.741c.177-.677.291-1.542.432-2.61l.365-2.772c.18-1.366.325-2.462.319-3.328c-.007-.897-.172-1.665-.716-2.293s-1.275-.895-2.152-1.02M6.052 8.732c-.726.104-1.094.292-1.34.577c-.248.285-.384.679-.39 1.421c-.005.761.126 1.764.315 3.195l.05.379l.371-.272c.96-.703 2.376-.668 3.288.095l3.384 2.833c.32.268.871.318 1.269.084l.235-.139c1.125-.662 2.634-.592 3.672.19l1.832 1.38c.09-.495.171-1.104.273-1.875l.352-2.675c.189-1.43.32-2.434.314-3.195c-.005-.742-.141-1.136-.388-1.42c-.247-.286-.615-.474-1.342-.578c-.745-.106-1.745-.107-3.172-.107h-5.55c-1.427 0-2.427.001-3.172.107" clip-rule="evenodd"></path><path fill="currentColor" d="M6.88 4.5c-1.252 0-2.279.84-2.621 1.954l-.02.07c.358-.12.73-.2 1.108-.253c.972-.139 2.201-.139 3.629-.139h6.202c1.428 0 2.657 0 3.63.139c.377.053.75.132 1.108.253l-.02-.07c-.343-1.114-1.37-1.954-2.62-1.954z" opacity=".7"></path><path fill="currentColor" d="M8.859 2h6.282c.209 0 .37 0 .51.015a2.62 2.62 0 0 1 2.159 1.672H6.19a2.62 2.62 0 0 1 2.159-1.672c.14-.015.3-.015.51-.015" opacity=".4"></path></svg></template></iconify-icon>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Variant</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">The best part is you can do this with any button variant, too:</p>

                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dropup variation</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Trigger dropdown menus above elements
                        by adding <code>.dropup</code> to the parent
                        element.</p>

                    <!-- Default dropup button -->
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>

                    <!-- Split dropup button -->
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-light">
                            Split dropup
                        </button>
                        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dropend variation</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Trigger dropdown menus at the right of the elements by adding
                        <code>.dropend</code> to the parent element.
                    </p>

                    <!-- Default dropend button -->
                    <div class="btn-group mb-2 dropend">
                        <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropend
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>

                    <!-- Split dropend button -->
                    <div class="btn-group mb-2 dropend">
                        <button type="button" class="btn btn-primary">
                            Split Dropend
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle-split dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropright</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Disabled Item</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Add <code>.disabled</code> to items in the dropdown to
                        <strong>style them as disabled</strong>.
                    </p>

                    <!-- Disabled -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Disabled
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Regular link</a>
                            <a class="dropdown-item disabled" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#" tabindex="-1" aria-disabled="true">Disabled link</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another link</a>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dark dropdowns</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Opt into darker dropdowns to match a dark navbar or custom style
                        by adding <code>.dropdown-menu-dark</code> onto an existing
                        <code>.dropdown-menu</code>. No changes are required to the dropdown items.
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" data-bs-theme="dark">
                            <li><a class="dropdown-item active" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a></li>
                            <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a></li>
                            <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a></li>
                        </ul>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dropdown options</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Use <code>data-bs-offset</code> or <code>data-bs-reference</code>
                        to change the location of the dropdown.</p>

                    <div class="d-flex">
                        <div class="dropdown me-1">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                Offset
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Reference</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Text</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Place any freeform text within a dropdown menu with text and use
                        spacing utilities. Note that you’ll likely need additional sizing styles to
                        constrain the menu width.</p>

                    <!-- Text Example -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Text Dropdown
                        </button>
                        <div class="dropdown-menu p-3 text-muted" style="max-width: 200px;">
                            <p>
                                Some example text that's free-flowing within the dropdown menu.
                            </p>
                            <p class="mb-0">
                                And this is more example text.
                            </p>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Menu alignment</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Add <code>.dropdown-menu-end</code>
                        to a <code>.dropdown-menu</code> to right
                        align the dropdown menu.
                    </p>

                    <div class="dropdown">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Right-aligned menu
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Split button dropdowns</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Similarly, create split button dropdowns with virtually the same markup as single
                        button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for
                        proper spacing around the dropdown caret.
                    </p>

                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split drop-arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-chevron-down align-middle"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light">Secondary</button>
                        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-soft-success">Success</button>
                        <button type="button" class="btn btn-soft-success dropdown-toggle dropdown-toggle-split drop-arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-chevron-down align-middle"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div><!-- /btn-group -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Sizing</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Button dropdowns work with buttons of all sizes, including default
                        and split dropdown buttons.</p>

                    <!-- Large button groups (default and split) -->
                    <div class="btn-group">
                        <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Large button
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-light btn-lg" type="button">
                            Large button
                        </button>
                        <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>

                    <!-- Small button groups (default and split) -->
                    <div class="btn-group">
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Small button
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-light btn-sm" type="button">
                            Small button
                        </button>
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Dropstart variation</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Trigger dropdown menus at the right of the elements by adding
                        <code>.dropleft</code> to the parent element.
                    </p>

                    <!-- Default dropstart button -->
                    <div class="btn-group dropstart ">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropstart
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                        </div>
                    </div>

                    <!-- Split dropstart button -->
                    <div class="btn-group">
                        <div class="btn-group dropstart" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-split dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropstart</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Separated link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary">
                            Split dropstart
                        </button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Active Item</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Add <code>.active</code> to item in the dropdown to <strong>style
                            them as active</strong>.</p>

                    <!-- Active Item -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Active Item
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Regular link</a>
                            <a class="dropdown-item active" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Active link</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another link</a>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Headers</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Add a header to label sections of actions in any dropdown menu.
                    </p>
                    <!-- Header Item -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Header
                        </button>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Another action</a>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Centered dropdowns</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Make the dropdown menu centered below the toggle with
                        <code>.dropdown-center</code> on the parent element.
                    </p>
                    <div class="hstack gap-2">
                        <div class="dropdown-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Centered dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action two</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action three</a></li>
                            </ul>
                        </div>

                        <div class="dropup-center dropup">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Centered dropup
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action two</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Action three</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Auto close behavior</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">By default, the dropdown menu is closed when clicking inside or
                        outside the dropdown menu. You can use the <code>autoClose</code> option to change
                        this behavior of the dropdown.</p>

                    <div class="hstack gap-2">
                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                Default dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                                Clickable inside
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Clickable outside
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                Manual close
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                                <li><a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Menu item</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Forms</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Put a form within a dropdown menu, or make it into a dropdown
                        menu, and use margin or padding utilities to give it the negative space you require.
                    </p>

                    <!-- Forms -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Form
                        </button>
                        <div class="dropdown-menu">
                            <form class="px-4 py-3">
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Email
                                        address</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                </div>
                                <div class="mb-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">New around here? Sign up</a>
                            <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-dropdowns.html#">Forgot password?</a>
                        </div>
                    </div>
                </div> <!-- end preview-->
            </div> <!-- end card-body -->
        </div> <!-- end card-->

    </div> <!-- end col -->
</div>
@endsection



@push('script')

@endpush
