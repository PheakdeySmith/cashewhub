@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush


@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Scrollbar</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>

                <li class="breadcrumb-item active">Scrollbar</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Default Scroll</h4>
                </div>

                <p class="text-muted m-3">Just use data attribute <code>data-simplebar</code>
                    and add <code>max-height: **px</code> oh fix height</p>

                <div class="card-body py-0 mb-3 simplebar-scrollable-y" data-simplebar="init" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 24px;">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong>does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong>native</strong>
                        <code>overflow: auto</code> scroll and <strong>only</strong> replace
                        the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                        Firefox,
                        Safari, Edge, IE11.</p>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 670px; height: 411px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 152px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">RTL Position</h4>
                </div>

                <div class="card-body pb-0">
                    <p class="text-muted">Just use data attribute
                        <code>data-simplebar data-simplebar-direction='rtl'</code>
                        and add <code>max-height: **px</code> oh fix height
                    </p>
                </div> <!-- end card-body -->

                <div class="card-body py-0 mb-3 simplebar-scrollable-y" data-simplebar="init" data-simplebar-direction="rtl" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 24px;">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong>does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong>native</strong>
                        <code>overflow: auto</code> scroll and <strong>only</strong> replace
                        the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                        Firefox,
                        Safari, Edge, IE11.</p>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 670px; height: 411px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 152px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Scroll Size</h4>
                </div>

                <div class="card-body pb-0">
                    <p class="text-muted">Just use data attribute <code>data-simplebar</code>
                        and add <code>max-height: **px</code> oh fix height</p>

                </div> <!-- end card-body -->

                <div class="card-body py-0 mb-3 simplebar-scrollable-y" data-simplebar="init" data-simplebar-lg="" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 24px;">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong>does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong>native</strong>
                        <code>overflow: auto</code> scroll and <strong>only</strong> replace
                        the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                        Firefox,
                        Safari, Edge, IE11.</p>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 670px; height: 411px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 152px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Scroll Color</h4>
                </div>

                <div class="card-body pb-0">
                    <p class="text-muted">Just use data attribute
                        <code>data-simplebar data-simplebar-primary</code>
                        and add <code>max-height: **px</code> oh fix height
                    </p>
                </div> <!-- end card-body -->

                <div class="card-body py-0 mb-3 simplebar-scrollable-y" data-simplebar="init" data-simplebar-primary="" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 24px;">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong>does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong>native</strong>
                        <code>overflow: auto</code> scroll and <strong>only</strong> replace
                        the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                        Firefox,
                        Safari, Edge, IE11.</p>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 670px; height: 411px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 152px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection


@push('script')

@endpush
