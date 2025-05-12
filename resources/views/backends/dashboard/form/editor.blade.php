@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
    <!-- Quill css -->
    <link href="{{ asset('assets') }}/css/quill.core.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/quill.snow.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/quill.bubble.css" rel="stylesheet" type="text/css">
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Editors</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>

                    <li class="breadcrumb-item active">Editors</li>
                </ol>
            </div>
        </div>




        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Quill Editor</h4>
            </div>

            <div class="card-body">
                <p class="text-muted">Snow is a clean, flat toolbar theme.</p>

                <div id="snow-editor" style="height: 300px;" class="ql-container ql-snow">
                    <div class="ql-editor" contenteditable="true">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is an simple editable area.</h3>
                        <p><br></p>
                        <ol>
                            <li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Select a text
                                to reveal the toolbar.</li>
                            <li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Edit rich
                                document on-the-fly, so elastic!</li>
                        </ol>
                        <p><br></p>
                        <p>End of simple area</p>
                    </div>
                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank"
                            href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com"
                            data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                </div><!-- end Snow-editor-->
            </div>
        </div> <!-- end card-->

        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h5 class="mb-0">Bubble Editor</h5>
            </div>

            <div class="card-body">
                <p class="text-muted">Bubble is a simple tooltip based theme.</p>

                <div id="bubble-editor" style="height: 300px;" class="ql-container ql-bubble">
                    <div class="ql-editor" contenteditable="true">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is an simple editable area.</h3>
                        <p><br></p>
                        <ol>
                            <li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Select a text
                                to reveal the toolbar.</li>
                            <li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Edit rich
                                document on-the-fly, so elastic!</li>
                        </ol>
                        <p><br></p>
                        <p>End of simple area</p>
                    </div>
                    <div class="ql-tooltip ql-hidden"><span class="ql-tooltip-arrow"></span>
                        <div class="ql-tooltip-editor"><input type="text" data-formula="e=mc^2"
                                data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-close"></a></div>
                        <div role="toolbar" class="ql-toolbar"><span class="ql-formats"><button type="button"
                                    class="ql-bold" aria-pressed="false" aria-label="bold"><svg viewBox="0 0 18 18">
                                        <path class="ql-stroke"
                                            d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                        </path>
                                        <path class="ql-stroke"
                                            d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                        </path>
                                    </svg></button><button type="button" class="ql-italic" aria-pressed="false"
                                    aria-label="italic"><svg viewBox="0 0 18 18">
                                        <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                        <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                        <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                    </svg></button><button type="button" class="ql-link" aria-pressed="false"
                                    aria-label="link"><svg viewBox="0 0 18 18">
                                        <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                        <path class="ql-even ql-stroke"
                                            d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z">
                                        </path>
                                        <path class="ql-even ql-stroke"
                                            d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z">
                                        </path>
                                    </svg></button></span><span class="ql-formats"><button type="button" class="ql-header"
                                    aria-pressed="false" value="1" aria-label="header: 1"><svg viewBox="0 0 18 18">
                                        <path class="ql-fill"
                                            d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm6.06787,9.209H14.98975V7.59863a.54085.54085,0,0,0-.605-.60547h-.62744a1.01119,1.01119,0,0,0-.748.29688L11.645,8.56641a.5435.5435,0,0,0-.022.8584l.28613.30762a.53861.53861,0,0,0,.84717.0332l.09912-.08789a1.2137,1.2137,0,0,0,.2417-.35254h.02246s-.01123.30859-.01123.60547V13.209H12.041a.54085.54085,0,0,0-.605.60547v.43945a.54085.54085,0,0,0,.605.60547h4.02686a.54085.54085,0,0,0,.605-.60547v-.43945A.54085.54085,0,0,0,16.06787,13.209Z">
                                        </path>
                                    </svg></button><button type="button" class="ql-header" aria-pressed="false" value="2"
                                    aria-label="header: 2"><svg viewBox="0 0 18 18">
                                        <path class="ql-fill"
                                            d="M16.73975,13.81445v.43945a.54085.54085,0,0,1-.605.60547H11.855a.58392.58392,0,0,1-.64893-.60547V14.0127c0-2.90527,3.39941-3.42187,3.39941-4.55469a.77675.77675,0,0,0-.84717-.78125,1.17684,1.17684,0,0,0-.83594.38477c-.2749.26367-.561.374-.85791.13184l-.4292-.34082c-.30811-.24219-.38525-.51758-.1543-.81445a2.97155,2.97155,0,0,1,2.45361-1.17676,2.45393,2.45393,0,0,1,2.68408,2.40918c0,2.45312-3.1792,2.92676-3.27832,3.93848h2.79443A.54085.54085,0,0,1,16.73975,13.81445ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z">
                                        </path>
                                    </svg></button><button type="button" class="ql-blockquote" aria-pressed="false"
                                    aria-label="blockquote"><svg viewBox="0 0 18 18">
                                        <rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5">
                                        </rect>
                                        <rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5">
                                        </rect>
                                        <path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path>
                                        <path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path>
                                    </svg></button></span></div>
                    </div>
                </div> <!-- end Snow-editor-->
            </div>
        </div> <!-- end card-->

    </div> <!-- container -->
@endsection


@push('script')
    <!-- Quill Editor js -->
    <script src="{{ asset('assets') }}/js/quill.min.js"></script>

    <!-- Quill Demo js -->
    <script src="{{ asset('assets') }}/js/form-quilljs.js"></script>
@endpush
