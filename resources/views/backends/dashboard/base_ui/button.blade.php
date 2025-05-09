@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Buttons</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Buttons</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Default Buttons</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Button Outline</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success"> Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-light">Light</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Button-Rounded</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Add <code>.rounded-pill</code> to default button to get rounded corners.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary rounded-pill">Primary</button>
                        <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                        <button type="button" class="btn btn-success rounded-pill">Success</button>
                        <button type="button" class="btn btn-danger rounded-pill">Danger</button>
                        <button type="button" class="btn btn-warning rounded-pill">Warning</button>
                        <button type="button" class="btn btn-info rounded-pill">Info</button>
                        <button type="button" class="btn btn-light rounded-pill">Light</button>
                        <button type="button" class="btn btn-dark rounded-pill">Dark</button>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Button Outline Rounded</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-outline-primary rounded-pill">Primary</button>
                        <button type="button" class="btn btn-outline-secondary rounded-pill">Secondary</button>
                        <button type="button" class="btn btn-outline-success rounded-pill">Success</button>
                        <button type="button" class="btn btn-outline-danger rounded-pill">Danger</button>
                        <button type="button" class="btn btn-outline-warning rounded-pill">Warning</button>
                        <button type="button" class="btn btn-outline-info rounded-pill">Info</button>
                        <button type="button" class="btn btn-outline-dark rounded-pill">Dark</button>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Soft Buttons</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use a classes <code>.btn-soft-**</code> to quickly create a soft background color buttons.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-soft-primary">Primary</button>
                        <button type="button" class="btn btn-soft-secondary">Secondary</button>
                        <button type="button" class="btn btn-soft-success">Success</button>
                        <button type="button" class="btn btn-soft-danger">Danger</button>
                        <button type="button" class="btn btn-soft-warning">Warning</button>
                        <button type="button" class="btn btn-soft-info">Info</button>
                        <button type="button" class="btn btn-soft-dark">Dark</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Soft Rounded Buttons</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use a classes <code>.btn-soft-**</code> <code>.rounded-pill</code> to quickly create a soft background color buttons with rounded.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-soft-primary rounded-pill">Primary</button>
                        <button type="button" class="btn btn-soft-secondary rounded-pill">Secondary</button>
                        <button type="button" class="btn btn-soft-success rounded-pill">Success</button>
                        <button type="button" class="btn btn-soft-danger rounded-pill">Danger</button>
                        <button type="button" class="btn btn-soft-warning rounded-pill">Warning</button>
                        <button type="button" class="btn btn-soft-info rounded-pill">Info</button>
                        <button type="button" class="btn btn-soft-dark rounded-pill">Dark</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Gradient Buttons</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary bg-gradient">Primary</button>
                        <button type="button" class="btn btn-secondary bg-gradient">Secondary</button>
                        <button type="button" class="btn btn-success bg-gradient">Success</button>
                        <button type="button" class="btn btn-danger bg-gradient">Danger</button>
                        <button type="button" class="btn btn-soft-warning bg-gradient">Warning</button>
                        <button type="button" class="btn btn-soft-info bg-gradient">Info</button>
                        <button type="button" class="btn btn-soft-dark bg-gradient">Dark</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Gradient Rounded Buttons</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary bg-gradient rounded-pill">Primary</button>
                        <button type="button" class="btn btn-secondary bg-gradient rounded-pill">Secondary</button>
                        <button type="button" class="btn btn-soft-success bg-gradient rounded-pill">Success</button>
                        <button type="button" class="btn btn-soft-danger bg-gradient rounded-pill">Danger</button>
                        <button type="button" class="btn btn-soft-warning bg-gradient rounded-pill">Warning</button>
                        <button type="button" class="btn btn-info bg-gradient rounded-pill">Info</button>
                        <button type="button" class="btn btn-dark bg-gradient rounded-pill">Dark</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Button-Sizes</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional sizes.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-2">
                        <button type="button" class="btn btn-primary btn-lg">Large</button>
                        <button type="button" class="btn btn-info">Normal</button>
                        <button type="button" class="btn btn-success btn-sm">Small</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Button-Disabled</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-info" disabled="">Info</button>
                        <button type="button" class="btn btn-success" disabled="">Success</button>
                        <button type="button" class="btn btn-danger" disabled="">Danger</button>
                        <button type="button" class="btn btn-dark" disabled="">Dark</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Icon Buttons</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Icon only button.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-light btn-icon"><i class="ti ti-heart fs-16"></i> </button>
                        <button type="button" class="btn btn-danger btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="apple" class="lucide lucide-apple avatar-xxs"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"></path><path d="M10 2c1 .5 2 2 2 5"></path></svg> </button>
                        <button type="button" class="btn btn-dark btn-icon"><i class="ti ti-adjustments-alt fs-18"></i> </button>
                        <button type="button" class="btn btn-soft-primary btn-icon"><iconify-icon icon="solar:add-circle-bold-duotone" class="fs-20"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10" opacity=".5"></path><path fill="currentColor" d="M12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25z"></path></svg></template></iconify-icon> </button>
                        <button type="button" class="btn btn-soft-success btn-icon"><i class="ti ti-alert-hexagon fs-20"></i> </button>
                        <button type="button" class="btn btn-info btn-icon"><i class="ti ti-ambulance fs-18"></i> </button>
                        <button type="button" class="btn btn-soft-warning btn-icon"><i class="ti ti-music fs-18"></i> </button>

                        <button type="button" class="btn btn-light"><i class="ti ti-thumb-up align-middle me-1 fs-18"></i> Like </button>
                        <button type="button" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity avatar-xxs me-1"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg> Launch </button>

                        <button type="button" class="btn btn-outline-success"><i class="ti ti-pig-money align-middle me-1 fs-18"></i> Money</button>
                        <button type="button" class="btn btn-outline-primary"><i class="ti ti-brand-paypal align-middle me-1 fs-18"></i> PayPal</button>
                        <button type="button" class="btn btn-soft-danger"><iconify-icon icon="solar:settings-bold-duotone" class="fs-18 align-middle me-1"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M14.279 2.152C13.909 2 13.439 2 12.5 2s-1.408 0-1.779.152a2 2 0 0 0-1.09 1.083c-.094.223-.13.484-.145.863a1.62 1.62 0 0 1-.796 1.353a1.64 1.64 0 0 1-1.579.008c-.338-.178-.583-.276-.825-.308a2.03 2.03 0 0 0-1.49.396c-.318.242-.553.646-1.022 1.453c-.47.807-.704 1.21-.757 1.605c-.07.526.074 1.058.4 1.479c.148.192.357.353.68.555c.477.297.783.803.783 1.361s-.306 1.064-.782 1.36c-.324.203-.533.364-.682.556a2 2 0 0 0-.399 1.479c.053.394.287.798.757 1.605s.704 1.21 1.022 1.453c.424.323.96.465 1.49.396c.242-.032.487-.13.825-.308a1.64 1.64 0 0 1 1.58.008c.486.28.774.795.795 1.353c.015.38.051.64.145.863c.204.49.596.88 1.09 1.083c.37.152.84.152 1.779.152s1.409 0 1.779-.152a2 2 0 0 0 1.09-1.083c.094-.223.13-.483.145-.863c.02-.558.309-1.074.796-1.353a1.64 1.64 0 0 1 1.579-.008c.338.178.583.276.825.308c.53.07 1.066-.073 1.49-.396c.318-.242.553-.646 1.022-1.453c.47-.807.704-1.21.757-1.605a2 2 0 0 0-.4-1.479c-.148-.192-.357-.353-.68-.555c-.477-.297-.783-.803-.783-1.361s.306-1.064.782-1.36c.324-.203.533-.364.682-.556a2 2 0 0 0 .399-1.479c-.053-.394-.287-.798-.757-1.605s-.704-1.21-1.022-1.453a2.03 2.03 0 0 0-1.49-.396c-.242.032-.487.13-.825.308a1.64 1.64 0 0 1-1.58-.008a1.62 1.62 0 0 1-.795-1.353c-.015-.38-.051-.64-.145-.863a2 2 0 0 0-1.09-1.083" clip-rule="evenodd" opacity=".5"></path><path fill="currentColor" d="M15.523 12c0 1.657-1.354 3-3.023 3s-3.023-1.343-3.023-3S10.83 9 12.5 9s3.023 1.343 3.023 3"></path></svg></template></iconify-icon> <span>Settings</span></button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Block Button</h4>
                </div>

                <div class="card-body">

                    <p class="text-muted">
                        Create block level buttons by adding class <code>.d-grid</code> to parent div.
                    </p>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-sm btn-primary">Block Button</button>
                        <button type="button" class="btn btn-lg btn-success">Block Button</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Button Group</h4>
                </div>

                <div class="card-body">

                    <p class="text-muted">
                        Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                    </p>

                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light">Left</button>
                        <button type="button" class="btn btn-light">Middle</button>
                        <button type="button" class="btn btn-light">Right</button>
                    </div>

                    <br>

                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light">1</button>
                        <button type="button" class="btn btn-light">2</button>
                        <button type="button" class="btn btn-light">3</button>
                        <button type="button" class="btn btn-light">4</button>
                    </div>

                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light">5</button>
                        <button type="button" class="btn btn-light">6</button>
                        <button type="button" class="btn btn-light">7</button>
                    </div>

                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light">8</button>
                    </div>

                    <br>

                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-light">3</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-buttons.html#">Dropdown link</a>
                                <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-buttons.html#">Dropdown link</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="btn-group-vertical mb-2">
                                <button type="button" class="btn btn-light">Top</button>
                                <button type="button" class="btn btn-light">Middle</button>
                                <button type="button" class="btn btn-light">Bottom</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-group-vertical mb-2">
                                <button type="button" class="btn btn-light">Button 1</button>
                                <button type="button" class="btn btn-light">Button 2</button>
                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-buttons.html#">Dropdown link</a>
                                    <a class="dropdown-item" href="https://coderthemes.com/boron/layouts/ui-buttons.html#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center">
                            <h4 class="header-title">Toggle Button</h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">Add <code>data-bs-toggle="button"</code> to toggle a button’s <code>active</code> state. If you’re pre-toggling a button, you must manually add the <code>.active</code> class <strong>and</strong> <code>aria-pressed="true"</code> to ensure that it is conveyed appropriately to assistive technologies.</p>

                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
                                <button type="button" class="btn btn-primary" disabled="" data-bs-toggle="button">Disabled toggle button</button>
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div><!--end col-->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center">
                            <h4 class="header-title">Button tags</h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element. However, you can also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>

                            <div class="d-flex flex-wrap gap-2">
                                <a class="btn btn-primary" href="https://coderthemes.com/boron/layouts/ui-buttons.html#" role="button">Link</a>
                                <button class="btn btn-primary" type="submit">Button</button>
                                <input class="btn btn-primary" type="button" value="Input">
                                <input class="btn btn-primary" type="submit" value="Submit">
                                <input class="btn btn-primary" type="reset" value="Reset">
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div>
            </div><!--end row-->
        </div> <!-- end col -->

    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Basic Button</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Bootstrap has a base <code>.btn</code> class that sets up basic styles such as padding and content alignment. By default, <code>.btn</code> controls have a transparent border and background color, and lack any explicit focus and hover styles.</p>
                    <button type="button" class="btn">Base class</button>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div><!--end row-->

</div> <!-- container -->
@endsection



@push('script')

@endpush
