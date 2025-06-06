@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush


@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Tooltips</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Tooltips</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Examples</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Hover over the links below to see tooltips.</p>

                    <p class="muted mb-0">
                        Tight pants next level keffiyeh <a href="https://coderthemes.com/boron/layouts/ui-tooltips.html#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">you probably</a> haven't heard
                        of them. Photo booth beard raw denim letterpress vegan messenger bag
                        stumptown. Farm-to-table Photo booth beard seitan, mcsweeney's fixie
                        sustainable quinoa
                        8-bit american apparel <a href="https://coderthemes.com/boron/layouts/ui-tooltips.html#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">have a</a> terry richardson
                        vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.
                        Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan
                        chambray. A really ironic artisan <a href="https://coderthemes.com/boron/layouts/ui-tooltips.html#" data-bs-toggle="tooltip" data-bs-title="Another one here too">whatever
                        </a> keytar, scenester farm-to-table banksy Austin <a href="https://coderthemes.com/boron/layouts/ui-tooltips.html#" data-bs-toggle="tooltip" data-bs-title="The last tip!">twitter
                            handle</a> freegan cred
                        raw denim single-origin coffee viral.
                    </p>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Disabled Elements</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Elements with the <code>disabled</code> attribute
                        aren’t interactive, meaning users cannot focus, hover, or click them to trigger
                        a tooltip (or popover). As a workaround, you’ll want to trigger the tooltip from
                        a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made
                        keyboard-focusable using <code>tabindex="0"</code>, and override the
                        <code>pointer-events</code> on the disabled element.
                    </p>
                    <div>
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-title="Disabled tooltip">
                            <button class="btn btn-primary pe-none" type="button" disabled="">Disabled
                                button</button>
                        </span>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Hover Elements</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Elements with the <code>disabled</code> attribute
                        aren’t interactive, meaning users cannot focus, hover, or click them to trigger
                        a tooltip (or popover). As a workaround, you’ll want to trigger the tooltip from
                        a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made
                        keyboard-focusable using <code>tabindex="0"</code>, and override the
                        <code>pointer-events</code> on the disabled element.
                    </p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Hover Only, Not a Focus">Hover</button>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Four Directions</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Hover over the buttons below to see the four tooltips
                        directions: top, right, bottom, and left.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">Tooltip on
                            top</button>
                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">Tooltip on
                            bottom</button>
                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">Tooltip on
                            left</button>
                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">Tooltip on
                            right</button>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">HTML Tags</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">And with custom HTML added:</p>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;">
                        Tooltip with HTML
                    </button>

                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Color Tooltips</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">We set a custom class with ex.
                        <code>data-bs-custom-class="primary-tooltip"</code> to scope our background-color
                        primary appearance and use
                        it to override a local CSS
                        variable.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-primary" data-bs-title="This top tooltip is themed via CSS variables.">
                            Primary tooltip
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-danger" data-bs-title="This top tooltip is themed via CSS variables.">
                            Danger tooltip
                        </button>
                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-info" data-bs-title="This top tooltip is themed via CSS variables." aria-describedby="tooltip695036">
                            Info tooltip
                        </button>
                        <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-title="This top tooltip is themed via CSS variables.">
                            Success tooltip
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-secondary" data-bs-title="This top tooltip is themed via CSS variables.">
                            Secondary tooltip
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-warning" data-bs-title="This top tooltip is themed via CSS variables.">
                            Warning tooltip
                        </button>
                        <button type="button" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-dark" data-bs-title="This top tooltip is themed via CSS variables.">
                            Dark tooltip
                        </button>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection


@push('script')

@endpush
