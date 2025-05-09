@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
@endpush


@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Solar Icons</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>

                <li class="breadcrumb-item active">Solar Icons</li>
            </ol>
        </div>
    </div>




    <div class="row d-none">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 mb-2 fw-semibold">Overview</h4>
                    <p class="mb-4 text-muted">Our cutting-edge Solar Iconset boasts an extensive collection of over
                        7,477 glyphs, encompassing a diverse range of design variants, all conveniently packed into a
                        single font file</p>


                    <h4 class="mt-0 mb-2 fw-semibold">Usage</h4>
                    <div class="d-flex align-items-center gap-2">
                        <iconify-icon icon="solar:4k-bold" class="fs-2"><template shadowrootmode="open">
                                <style data-style="data-style">
                                    :host {
                                        display: inline-block;
                                        vertical-align: 0
                                    }

                                    span,
                                    svg {
                                        display: block
                                    }
                                </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12m4.25-4a.75.75 0 0 0-1.5 0v2a2.75 2.75 0 0 0 2.75 2.75h2.25V16a.75.75 0 0 0 1.5 0V8a.75.75 0 0 0-1.5 0v3.25H7.5c-.69 0-1.25-.56-1.25-1.25zm12.77-.54a.75.75 0 0 1 .02 1.06l-2.666 2.773l2.757 4.302a.75.75 0 1 1-1.262.81l-2.564-4l-1.055 1.097V16a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 1.5 0v3.338l3.71-3.858a.75.75 0 0 1 1.06-.02"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </template></iconify-icon>
                        <iconify-icon icon="solar:4k-bold-duotone" class="fs-2 text-primary"><template
                                shadowrootmode="open">
                                <style data-style="data-style">
                                    :host {
                                        display: inline-block;
                                        vertical-align: 0
                                    }

                                    span,
                                    svg {
                                        display: block
                                    }
                                </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 22c-4.714 0-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22"
                                        opacity=".5"></path>
                                    <path fill="currentColor"
                                        d="M19.02 7.46a.75.75 0 0 1 .02 1.06l-2.666 2.773l2.757 4.302a.75.75 0 1 1-1.262.81l-2.564-4l-1.055 1.097V16a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 1.5 0v3.338l3.71-3.858a.75.75 0 0 1 1.06-.02M5.5 7.25a.75.75 0 0 1 .75.75v2c0 .69.56 1.25 1.25 1.25h2.25V8a.75.75 0 0 1 1.5 0v8a.75.75 0 0 1-1.5 0v-3.25H7.5A2.75 2.75 0 0 1 4.75 10V8a.75.75 0 0 1 .75-.75">
                                    </path>
                                </svg>
                            </template></iconify-icon>
                        <iconify-icon icon="solar:4k-broken" class="fs-2 text-danger"><template shadowrootmode="open">
                                <style data-style="data-style">
                                    :host {
                                        display: inline-block;
                                        vertical-align: 0
                                    }

                                    span,
                                    svg {
                                        display: block
                                    }
                                </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                        <path
                                            d="M5.5 8v2a2 2 0 0 0 2 2h3m0-4v4m0 0v4m3-8v5.2m0 0V16m0-2.8l1.923-2m0 0L18.5 8m-3.077 3.2L18.5 16">
                                        </path>
                                        <path
                                            d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536">
                                        </path>
                                    </g>
                                </svg>
                            </template></iconify-icon>
                        <iconify-icon icon="solar:4k-line-duotone" class="fs-2 text-info"><template
                                shadowrootmode="open">
                                <style data-style="data-style">
                                    :host {
                                        display: inline-block;
                                        vertical-align: 0
                                    }

                                    span,
                                    svg {
                                        display: block
                                    }
                                </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path
                                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"
                                            opacity=".5"></path>
                                        <path stroke-linecap="round"
                                            d="M5.5 8v2a2 2 0 0 0 2 2h3m0-4v4m0 0v4m3-8v5.2m0 0V16m0-2.8l1.923-2m0 0L18.5 8m-3.077 3.2L18.5 16">
                                        </path>
                                    </g>
                                </svg>
                            </template></iconify-icon>
                        <iconify-icon icon="solar:4k-linear" class="fs-2 text-warning"><template shadowrootmode="open">
                                <style data-style="data-style">
                                    :host {
                                        display: inline-block;
                                        vertical-align: 0
                                    }

                                    span,
                                    svg {
                                        display: block
                                    }
                                </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path
                                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z">
                                        </path>
                                        <path stroke-linecap="round"
                                            d="M5.5 8v2a2 2 0 0 0 2 2h3m0-4v4m0 0v4m3-8v5.2m0 0V16m0-2.8l1.923-2m0 0L18.5 8m-3.077 3.2L18.5 16">
                                        </path>
                                    </g>
                                </svg>
                            </template></iconify-icon>
                        <iconify-icon icon="solar:4k-outline" class="fs-2 text-secondary"><template
                                shadowrootmode="open">
                                <style data-style="data-style">
                                    :host {
                                        display: inline-block;
                                        vertical-align: 0
                                    }

                                    span,
                                    svg {
                                        display: block
                                    }
                                </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M11.943 1.25h.114c2.309 0 4.118 0 5.53.19c1.444.194 2.584.6 3.479 1.494c.895.895 1.3 2.035 1.494 3.48c.19 1.411.19 3.22.19 5.529v.114c0 2.309 0 4.118-.19 5.53c-.194 1.444-.6 2.584-1.494 3.479c-.895.895-2.035 1.3-3.48 1.494c-1.411.19-3.22.19-5.529.19h-.114c-2.309 0-4.118 0-5.53-.19c-1.444-.194-2.584-.6-3.479-1.494c-.895-.895-1.3-2.035-1.494-3.48c-.19-1.411-.19-3.22-.19-5.529v-.114c0-2.309 0-4.118.19-5.53c.194-1.444.6-2.584 1.494-3.479c.895-.895 2.035-1.3 3.48-1.494c1.411-.19 3.22-.19 5.529-.19m-5.33 1.676c-1.278.172-2.049.5-2.618 1.069c-.57.57-.897 1.34-1.069 2.619c-.174 1.3-.176 3.008-.176 5.386s.002 4.086.176 5.386c.172 1.279.5 2.05 1.069 2.62c.57.569 1.34.896 2.619 1.068c1.3.174 3.008.176 5.386.176s4.086-.002 5.386-.176c1.279-.172 2.05-.5 2.62-1.069c.569-.57.896-1.34 1.068-2.619c.174-1.3.176-3.008.176-5.386s-.002-4.086-.176-5.386c-.172-1.279-.5-2.05-1.069-2.62c-.57-.569-1.34-.896-2.619-1.068c-1.3-.174-3.008-.176-5.386-.176s-4.086.002-5.386.176">
                                        </path>
                                        <path
                                            d="M19.02 7.46a.75.75 0 0 1 .02 1.06l-2.666 2.773l2.757 4.302a.75.75 0 1 1-1.262.81l-2.564-4l-1.055 1.097V16a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 1.5 0v3.338l3.71-3.858a.75.75 0 0 1 1.06-.02M5.5 7.25a.75.75 0 0 1 .75.75v2c0 .69.56 1.25 1.25 1.25h2.25V8a.75.75 0 0 1 1.5 0v8a.75.75 0 0 1-1.5 0v-3.25H7.5A2.75 2.75 0 0 1 4.75 10V8a.75.75 0 0 1 .75-.75">
                                        </path>
                                    </g>
                                </svg>
                            </template></iconify-icon>
                    </div>


                    <div class="card shadow-none border rounded-3 mt-4 mb-0">
                        <div class="card-header border-bottom border-dashed">
                            <h4 class="header-title fs-14">HTML</h4>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup p-0">                                                <code>
                                            &lt;iconify-icon icon="solar:4k-bold"&gt;&lt;/iconify-icon&gt;
                                        </code>
                                        <code>
                                            &lt;iconify-icon icon="solar:4k-bold-duotone"&gt;&lt;/iconify-icon&gt;
                                        </code>
                                        <code>
                                            &lt;iconify-icon icon="solar:4k-broken"&gt;&lt;/iconify-icon&gt;
                                        </code>
                                        <code>
                                            &lt;iconify-icon icon="solar:4k-line-duotone"&gt;&lt;/iconify-icon&gt;
                                        </code>
                                        <code>
                                            &lt;iconify-icon icon="solar:4k-linear"&gt;&lt;/iconify-icon&gt;
                                        </code>
                                        <code>
                                            &lt;iconify-icon icon="solar:4k-outline"&gt;&lt;/iconify-icon&gt;
                                        </code>
                                    </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="d-flex flex-wrap gap-3 justify-content-center icon-box">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="4k">
                <iconify-icon icon="solar:4k-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12m4.25-4a.75.75 0 0 0-1.5 0v2a2.75 2.75 0 0 0 2.75 2.75h2.25V16a.75.75 0 0 0 1.5 0V8a.75.75 0 0 0-1.5 0v3.25H7.5c-.69 0-1.25-.56-1.25-1.25zm12.77-.54a.75.75 0 0 1 .02 1.06l-2.666 2.773l2.757 4.302a.75.75 0 1 1-1.262.81l-2.564-4l-1.055 1.097V16a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 1.5 0v3.338l3.71-3.858a.75.75 0 0 1 1.06-.02"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>

        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Accessibility">
                <iconify-icon icon="solar:accessibility-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10"
                                opacity=".5"></path>
                            <path fill="currentColor"
                                d="M12 9a2 2 0 1 0 0-4a2 2 0 0 0 0 4m-5.707.31a.75.75 0 0 0-.586 1.38l.002.001l.002.001l.01.004l.032.014a15 15 0 0 0 .572.225c.38.145.914.338 1.527.53c.988.312 2.236.64 3.398.748v1.24c0 .43-.124.853-.357 1.216l-2.524 3.925a.75.75 0 0 0 1.262.812l2.37-3.686l2.368 3.686a.75.75 0 0 0 1.262-.812l-2.524-3.925a2.25 2.25 0 0 1-.357-1.217v-1.239c1.162-.108 2.41-.436 3.399-.748a28 28 0 0 0 2.098-.755l.033-.014l.01-.004l.002-.001a.75.75 0 0 0-.585-1.381l-.007.003l-.027.011l-.11.045q-.148.061-.42.164c-.36.137-.865.32-1.444.502c-1.178.37-2.588.715-3.699.715s-2.52-.345-3.698-.715a27 27 0 0 1-1.974-.711L6.3 9.313z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Accumulator">
                <iconify-icon icon="solar:accumulator-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                <path
                                    d="M10 20H8c-2.828 0-4.243 0-5.121-.879C2 18.243 2 16.828 2 14v-2.025c0-1.846 0-2.768.392-3.458a3 3 0 0 1 1.125-1.125C4.207 7 5.129 7 6.975 7h.28c.123 0 .184 0 .24-.006a1 1 0 0 0 .725-.448c.03-.048.058-.103.113-.213c.11-.22.165-.33.228-.425a2 2 0 0 1 1.447-.895C10.123 5 10.246 5 10.492 5h3.018c.246 0 .37 0 .482.013a2 2 0 0 1 1.448.895c.063.095.118.205.228.425c.055.11.082.165.113.213a1 1 0 0 0 .724.447c.057.007.118.007.241.007h.28c1.846 0 2.768 0 3.458.392a3 3 0 0 1 1.125 1.125c.392.69.392 1.612.392 3.458V14c0 2.828 0 4.243-.879 5.121S18.828 20 16 20h-2">
                                </path>
                                <path
                                    d="M7 7V6c0-.943 0-1.414-.293-1.707S5.943 4 5 4M3 7.5V6m18 0v2m-4-1V6c0-.943 0-1.414.293-1.707S18.057 4 19 4M9 13.5H6m12 0h-1.5m0 0H15m1.5 0V12m0 1.5V15">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Add Circle">
                <iconify-icon icon="solar:add-circle-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" opacity=".5"></circle>
                                <path stroke-linecap="round" d="M15 12h-3m0 0H9m3 0V9m0 3v3"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Archive">
                <iconify-icon icon="solar:archive-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M11.5 21h1c3.771 0 5.657 0 6.828-1.172S20.5 16.771 20.5 13V6.998C20.355 7 20.15 7 20 7H4c-.15 0-.355 0-.5-.002V13c0 3.771 0 5.657 1.172 6.828S7.729 21 11.5 21m-2.424-9.883C9 11.301 9 11.534 9 12s0 .699.076.883a1 1 0 0 0 .541.54c.184.077.417.077.883.077h3c.466 0 .699 0 .883-.076a1 1 0 0 0 .54-.541C15 12.699 15 12.466 15 12s0-.699-.076-.883a1 1 0 0 0-.541-.54c-.184-.077-.417-.077-.883-.077h-3c-.466 0-.699 0-.883.076a1 1 0 0 0-.54.541"
                                clip-rule="evenodd"></path>
                            <path fill="currentColor"
                                d="M2 5c0-.943 0-1.414.293-1.707S3.057 3 4 3h16c.943 0 1.414 0 1.707.293S22 4.057 22 5s0 1.414-.293 1.707S20.943 7 20 7H4c-.943 0-1.414 0-1.707-.293S2 5.943 2 5"
                                opacity=".5"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Armchair">
                <iconify-icon icon="solar:armchair-2-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.533 18H6.75v2a.75.75 0 1 1-1.5 0v-2.324c-.829-.362-1.49-1.005-1.808-1.817l-.039-.102L2.1 12.264C1.685 11.15 2.613 10 3.927 10c.81 0 1.534.453 1.81 1.134l1.098 2.706c.1.246.15.37.222.47a1.2 1.2 0 0 0 .74.463c.13.027.277.027.57.027h6.98c.569 0 .853 0 1.091-.098q.196-.082.349-.219c.184-.166.281-.405.475-.883l1.001-2.466c.276-.68 1-1.134 1.81-1.134c1.314 0 2.242 1.15 1.827 2.264l-1.12 3c-.195.524-.292.785-.421 1.008a3.43 3.43 0 0 1-1.609 1.404V20a.75.75 0 1 1-1.5 0v-2.005c-.187.005-.415.005-.717.005">
                            </path>
                            <path fill="currentColor"
                                d="M13.236 3.5h-2.472c-1.1 0-1.976 0-2.66.088c-.706.09-1.285.28-1.746.72c-.464.441-.669 1.003-.765 1.685c-.093.658-.093 1.495-.093 2.54v2.195q.147.186.237.406l1.098 2.706c.1.246.15.37.222.47a1.2 1.2 0 0 0 .74.463c.13.027.277.027.57.027h6.98c.569 0 .853 0 1.091-.098q.196-.082.349-.219c.184-.166.281-.405.475-.883l1.001-2.466q.09-.221.237-.406V8.533c0-1.045 0-1.882-.093-2.54c-.096-.682-.301-1.244-.765-1.686c-.46-.438-1.04-.629-1.745-.72c-.685-.087-1.56-.087-2.661-.087"
                                opacity=".5"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Asteroid">
                <iconify-icon icon="solar:asteroid-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2c2.127 0 4.098.664 5.719 1.796a6.752 6.752 0 0 0 3.936 10.82C20.505 18.87 16.618 22 12 22q-.96-.002-1.868-.174a6.75 6.75 0 0 0-8.117-9.279A10 10 0 0 1 2 12m14 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5.5-5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5"
                                clip-rule="evenodd"></path>
                            <path fill="currentColor"
                                d="M17.75 8c0-1.231.423-2.361 1.131-3.256a9.97 9.97 0 0 1 3.055 8.398A5.25 5.25 0 0 1 17.75 8M8.658 21.428a10.02 10.02 0 0 1-6.445-7.368l.111-.037a5.25 5.25 0 0 1 6.386 7.299z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Atom">
                <iconify-icon icon="solar:atom-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.471 16.471c4.939-4.939 6.94-10.944 4.471-13.413c-2.469-2.47-8.474-.468-13.413 4.47c-4.939 4.94-6.94 10.945-4.471 13.414c2.47 2.47 8.475.468 13.413-4.47"
                                opacity=".3"></path>
                            <path fill="currentColor"
                                d="M7.529 16.471C2.59 11.533.589 5.527 3.058 3.058c2.469-2.47 8.474-.468 13.413 4.47c4.939 4.94 6.94 10.945 4.471 13.414c-2.47 2.47-8.475.468-13.413-4.47"
                                opacity=".3"></path>
                            <path fill="currentColor" d="M14.5 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Backpack">
                <iconify-icon icon="solar:backpack-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                <path
                                    d="M21 10.73v5.645a4.52 4.52 0 0 1-3.538 4.411c-3.598.8-7.326.8-10.923 0A4.52 4.52 0 0 1 3 16.376V10.73a6 6 0 0 1 4.618-5.757l.176-.04l.167-.036a19 19 0 0 1 8.078 0l.167.037l.176.04A6 6 0 0 1 19.632 7M17.5 15.5V17">
                                </path>
                                <path
                                    d="M15.959 4.5A3 3 0 0 0 13 2h-2a3 3 0 0 0-2.959 2.5M3 14a22.2 22.2 0 0 0 5 1.546M21 14a22.15 22.15 0 0 1-9 1.91M10 13h4">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Backspace">
                <iconify-icon icon="solar:backspace-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M11.142 20c-2.227 0-3.341 0-4.27-.501c-.93-.502-1.52-1.42-2.701-3.259l-.681-1.06C2.497 13.634 2 12.86 2 12s.497-1.634 1.49-3.18l.68-1.06c1.181-1.838 1.771-2.757 2.701-3.259S8.915 4 11.142 4h2.637c3.875 0 5.813 0 7.017 1.172S22 8.229 22 12s0 5.657-1.204 6.828S17.654 20 13.78 20z"
                                    opacity=".5"></path>
                                <path stroke-linecap="round" d="m15.5 9.5l-5 5m0-5l5 5"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bacteria">
                <iconify-icon icon="solar:bacteria-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12Z">
                                </path>
                                <path d="M6 15a3 3 0 1 1 6 0a3 3 0 0 1-6 0Z"></path>
                                <path stroke-linecap="round"
                                    d="m4.5 11.5l.414-1m9.551-3.329s1.243-.171 2.121.707c.879.879.707 2.122.707 2.122M9 9.293s-1.243.171-2.121-.707C6 7.707 6.172 6.464 6.172 6.464M19 13.136s-1.162.473-1.483 1.673s.448 2.19.448 2.19m-4.545.773L15 19m-.5-5v-2M12 5h-2m2.5 4.5l-1-1">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bag 2">
                <iconify-icon icon="solar:bag-2-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M8.25 6.015V5a3.75 3.75 0 1 1 7.5 0v1.015c1.287.039 2.075.177 2.676.676c.833.692 1.053 1.862 1.492 4.203l.75 4c.617 3.292.925 4.938.026 6.022C19.794 22 18.119 22 14.77 22H9.23c-3.35 0-5.024 0-5.924-1.084s-.59-2.73.026-6.022l.75-4c.44-2.34.659-3.511 1.492-4.203c.601-.499 1.389-.637 2.676-.676M9.75 5a2.25 2.25 0 0 1 4.5 0v1h-4.5zm5.99 5.877a.75.75 0 1 0-1.48.246l1 6a.75.75 0 1 0 1.48-.246zm-6.617-.617a.75.75 0 0 0-.863.617l-1 6a.75.75 0 1 0 1.48.246l1-6a.75.75 0 0 0-.617-.863"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Balloon">
                <iconify-icon icon="solar:balloon-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                <path
                                    d="M8 16.607c1.15.86 2.518 1.38 4 1.393c4.142.034 7.594-3.92 7.56-8.196C19.527 5.53 16.142 2.034 12 2S4.527 5.404 4.56 9.68A8.9 8.9 0 0 0 5.244 13">
                                </path>
                                <path
                                    d="M15.5 9a3.035 3.035 0 0 0-3-3M12 20.35c.321 0 .482 0 .593-.022c.654-.128 1.051-.772.858-1.39c-.033-.105-.109-.242-.261-.515M12 20.35c-.321 0-.482 0-.593-.022c-.654-.128-1.051-.772-.858-1.39c.033-.105.109-.242.261-.515M12 20.35v2.15">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Balls">
                <iconify-icon icon="solar:balls-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round"
                                    d="M16.02 8.077c-2.018.194-4.163.8-5.653 2.29s-2.096 3.635-2.29 5.653m7.943-7.943a19 19 0 0 1 3.228-.016a2.895 2.895 0 0 1 2.69 2.691c.072.932.098 2.059-.015 3.228M16.02 8.077l5.903 5.903m0 0c-.194 2.018-.8 4.163-2.29 5.654s-3.635 2.095-5.653 2.29m0 0a19 19 0 0 1-3.228.015a2.895 2.895 0 0 1-2.69-2.691a19 19 0 0 1 .015-3.228m5.903 5.903L8.077 16.02">
                                </path>
                                <path
                                    d="M14.996 8.252a6.5 6.5 0 0 0-.868-3.001a6.49 6.49 0 0 0-4.85-3.204a6.499 6.499 0 1 0-1.12 12.943M9.215 2s-.138 2.356 1.357 5.19c.457.869.956 1.569 1.428 2.123M3 5.928s1.933 1.047 3.428 3.881C7.923 12.644 7.785 15 7.785 15"
                                    opacity=".5"></path>
                                <path stroke-linecap="round" d="m12.5 17.5l5-5m-2 0l2 2m-5 1l2 2M14 14l2 2"
                                    opacity=".5"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Banknote">
                <iconify-icon icon="solar:banknote-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M9 19c-2.809 0-4.213 0-5.222-.674a4 4 0 0 1-1.104-1.104C2 16.213 2 14.81 2 12s0-4.213.674-5.222a4 4 0 0 1 1.104-1.104C4.787 5 6.19 5 9 5h6c2.809 0 4.213 0 5.222.674a4 4 0 0 1 1.104 1.104C22 7.787 22 9.19 22 12s0 4.213-.674 5.222a4 4 0 0 1-1.104 1.104C19.213 19 17.81 19 15 19z">
                                </path>
                                <path d="M12 9a3 3 0 1 1 0 6a3 3 0 0 1 0-6Z"></path>
                                <path stroke-linecap="round" d="M5.5 15V9m13 6V9"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bar Chair">
                <iconify-icon icon="solar:bar-chair-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M5.032 6.938c-.275-2.21 1.27-4.24 3.51-4.616l.398-.067c2.025-.34 4.095-.34 6.12 0l.398.067c2.24.376 3.785 2.407 3.51 4.616l-.017.145A1.06 1.06 0 0 1 17.893 8H6.107c-.539 0-.992-.394-1.057-.917z">
                                </path>
                                <path stroke-linecap="round" d="M9 8L6 22m9-14l3 14m-1-5H7"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Basketball">
                <iconify-icon icon="solar:basketball-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M13.453 8.397c1.728-1.469 3.087-3.21 3.672-4.949l.01-.031A9.96 9.96 0 0 1 20.66 7A9.95 9.95 0 0 1 22 11.842c-1.995-.431-4.186-.1-6.256.68c-.32-.864-.685-1.688-1.094-2.397a14 14 0 0 0-1.197-1.728">
                            </path>
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M3.34 17a9.95 9.95 0 0 0 3.525 3.583v-.002c.818-2.468 3.2-4.945 5.992-6.644q.73-.445 1.508-.822c-.302-.823-.64-1.593-1.014-2.24a13 13 0 0 0-1.082-1.556q-.519.372-1.064.706c-2.757 1.693-6.112 2.743-9.061 2.162l-.145-.028a9.96 9.96 0 0 0 1.34 4.84"
                                clip-rule="evenodd"></path>
                            <path fill="currentColor"
                                d="M16.226 13.943c1.887-.72 3.811-.996 5.477-.63l.204.045a10 10 0 0 1-.71 2.57a9.95 9.95 0 0 1-3.538 4.317l-.013-.079a52 52 0 0 0-.687-3.494a40 40 0 0 0-.733-2.73M8.319 3.454a35 35 0 0 0-.6-.465l-.023-.016a9.95 9.95 0 0 1 5.5-.902c.887.107 1.757.333 2.584.67l-.077.229c-.477 1.418-1.65 2.95-3.228 4.29a32 32 0 0 0-2.203-2.16A42 42 0 0 0 8.32 3.453m2.1 5.294c-2.586 1.588-5.55 2.449-7.987 1.969l-.342-.068a10 10 0 0 1 4.19-6.853l.328.239l.002.001l.01.007l.039.029l.154.115a40 40 0 0 1 2.456 2.03c.66.592 1.358 1.26 2.013 1.965q-.42.293-.863.566m5.785 11.916l.002.012v.004l.053.369a10 10 0 0 1-8.04.21l.069-.204c.663-2.002 2.72-4.237 5.348-5.836q.592-.36 1.206-.667c.252.83.471 1.671.655 2.462a51 51 0 0 1 .699 3.597z"
                                opacity=".5"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bath">
                <iconify-icon icon="solar:bath-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                    d="M12 20.5c.65 0 1.364-.017 2.098-.044c.258-.01.386-.015.607-.037c3.278-.332 6.072-3.234 6.28-6.521c.015-.222.015-.42.015-.815c0-.077 0-.116-.002-.148a1 1 0 0 0-.933-.933c-.033-.002-.07-.002-.148-.002M4.083 12c-.077 0-.115 0-.148.002a1 1 0 0 0-.933.933c-.002.032-.002.07-.002.148c0 .395 0 .593.014.815c.18 2.844 2.296 5.4 4.986 6.252M6 20l-1 2m13-2l1 2M2 12h12m8 0h-4">
                                </path>
                                <path fill="currentColor"
                                    d="M2.25 13a.75.75 0 0 0 1.5 0zM7.6 3.5l.696-.28zm.379.947l.328.674zM6.362 6.192l.695.283zm4.215-1.814l-.295.69zM6.346 8.742l-.698.275a.75.75 0 0 0 .994.413zm5.96-2.567l.297.69a.75.75 0 0 0 .401-.964zM3.75 13V4.385h-1.5V13zM5.385 2.75c.669 0 1.27.407 1.518 1.028l1.393-.557a3.135 3.135 0 0 0-2.91-1.971zM3.75 4.385c0-.903.732-1.635 1.635-1.635v-1.5A3.135 3.135 0 0 0 2.25 4.385zm3.153-.607l.38.948l1.392-.557l-.379-.948zm.14 4.689a2.68 2.68 0 0 1 .014-1.992l-1.39-.565a4.18 4.18 0 0 0-.02 3.107zm4.967-2.98L6.049 8.053l.593 1.377l5.96-2.566zm-1.728-.42c.622.266 1.085.77 1.327 1.383l1.395-.55a3.97 3.97 0 0 0-2.132-2.212zM7.057 6.476a2.57 2.57 0 0 1 1.25-1.354l-.656-1.348A4.07 4.07 0 0 0 5.667 5.91zm1.25-1.354a2.36 2.36 0 0 1 1.975-.053l.59-1.38a3.86 3.86 0 0 0-3.221.085z">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bed">
                <iconify-icon icon="solar:bed-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" d="M19 20v-1.5M5 20v-1.5"></path>
                                <path
                                    d="M2 15c0-.932 0-1.398.152-1.765a2 2 0 0 1 1.083-1.083C3.602 12 4.068 12 5 12h14c.932 0 1.398 0 1.765.152a2 2 0 0 1 1.083 1.083C22 13.602 22 14.068 22 15s0 1.398-.152 1.765a2 2 0 0 1-1.083 1.083C20.398 18 19.932 18 19 18H5c-.932 0-1.398 0-1.765-.152a2 2 0 0 1-1.083-1.083C2 16.398 2 15.932 2 15Zm19-3c0-3.771 0-5.657-1.172-6.828S16.771 4 13 4h-2C7.229 4 5.343 4 4.172 5.172S3 8.229 3 12">
                                </path>
                                <path
                                    d="M18.5 12v-1.5c0-1.886 0-2.828-.586-3.414S16.386 6.5 14.5 6.5h-5c-1.886 0-2.828 0-3.414.586S5.5 8.614 5.5 10.5V12M12 7v5">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bell Bing">
                <iconify-icon icon="solar:bell-bing-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M8.352 20.242A4.63 4.63 0 0 0 12 22a4.63 4.63 0 0 0 3.648-1.758a27.2 27.2 0 0 1-7.296 0">
                            </path>
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M18.75 9.704V9c0-3.866-3.023-7-6.75-7S5.25 5.134 5.25 9v.704c0 .845-.24 1.671-.692 2.374L3.45 13.801c-1.011 1.574-.239 3.713 1.52 4.21a25.8 25.8 0 0 0 14.06 0c1.759-.497 2.531-2.636 1.52-4.21l-1.108-1.723a4.4 4.4 0 0 1-.693-2.374M12 5.25a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0V6a.75.75 0 0 1 .75-.75"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bill">
                <iconify-icon icon="solar:bill-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                d="M2 2h20M8.049 18.53C9.932 20.178 10.873 21 12 21s2.069-.823 3.951-2.47l2-1.748c1.008-.882 1.513-1.322 1.78-1.913c.269-.59.269-1.26.269-2.599V9.702M20 6V2H4v10.27c0 1.34 0 2.009.268 2.6c.175.385.451.707.903 1.13M8.5 13h7m-7-5h7">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bill Check">
                <iconify-icon icon="solar:bill-check-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M16.755 2h-9.51c-1.159 0-1.738 0-2.206.163a3.05 3.05 0 0 0-1.881 1.936C3 4.581 3 5.177 3 6.37v14.004c0 .858.985 1.314 1.608.744a.946.946 0 0 1 1.284 0l.483.442a1.657 1.657 0 0 0 2.25 0a1.657 1.657 0 0 1 2.25 0a1.657 1.657 0 0 0 2.25 0a1.657 1.657 0 0 1 2.25 0a1.657 1.657 0 0 0 2.25 0l.483-.442a.946.946 0 0 1 1.284 0c.623.57 1.608.114 1.608-.744V6.37c0-1.193 0-1.79-.158-2.27a3.05 3.05 0 0 0-1.881-1.937C18.493 2 17.914 2 16.755 2Z"
                                    opacity=".5"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.5 10.4l1.429 1.6L14.5 8">
                                </path>
                                <path stroke-linecap="round" d="M7.5 15.5h9"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bolt">
                <iconify-icon icon="solar:bolt-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-width="1.5"
                                d="m5.67 9.914l3.062-4.143c1.979-2.678 2.969-4.017 3.892-3.734s.923 1.925.923 5.21v.31c0 1.185 0 1.777.379 2.148l.02.02c.387.363 1.003.363 2.236.363c2.22 0 3.329 0 3.704.673l.018.034c.354.683-.289 1.553-1.574 3.29l-3.062 4.144c-1.98 2.678-2.969 4.017-3.892 3.734s-.923-1.925-.923-5.21v-.31c0-1.185 0-1.777-.379-2.148l-.02-.02c-.387-.363-1.003-.363-2.236-.363c-2.22 0-3.329 0-3.703-.673l-.019-.034c-.354-.683.289-1.552 1.574-3.29Z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bomb">
                <iconify-icon icon="solar:bomb-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M17 14.5a7.5 7.5 0 1 1-15 0a7.5 7.5 0 0 1 15 0m.981-12.147a.558.558 0 0 1 1.038 0l.654 1.66c.057.143.17.257.315.314l1.659.654c.47.186.47.852 0 1.038l-1.66.654a.56.56 0 0 0-.314.315l-.654 1.659a.558.558 0 0 1-1.038 0l-.654-1.66a.56.56 0 0 0-.315-.314l-1.659-.654a.558.558 0 0 1 0-1.038l1.66-.654a.56.56 0 0 0 .314-.315zm-1.964 6.69l.75-.75l-.3-.76l-.76-.3l-.75.75q.577.483 1.06 1.06">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Book 2">
                <iconify-icon icon="solar:book-2-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4.727 2.733c.306-.308.734-.508 1.544-.618C7.105 2.002 8.209 2 9.793 2h4.414c1.584 0 2.688.002 3.522.115c.81.11 1.238.31 1.544.618c.305.308.504.74.613 1.557c.112.84.114 1.955.114 3.552V18H7.426c-1.084 0-1.462.006-1.753.068c-.513.11-.96.347-1.285.667c-.11.108-.164.161-.291.505A1.3 1.3 0 0 0 4 19.7V7.842c0-1.597.002-2.711.114-3.552c.109-.816.308-1.249.613-1.557"
                                opacity=".5"></path>
                            <path fill="currentColor"
                                d="M20 18H7.426c-1.084 0-1.462.006-1.753.068c-.513.11-.96.347-1.285.667c-.11.108-.164.161-.291.505s-.107.489-.066.78l.022.15c.11.653.31.998.616 1.244c.307.246.737.407 1.55.494c.837.09 1.946.092 3.536.092h4.43c1.59 0 2.7-.001 3.536-.092c.813-.087 1.243-.248 1.55-.494c.2-.16.354-.362.467-.664H8a.75.75 0 0 1 0-1.5h11.975c.018-.363.023-.776.025-1.25M7.25 7A.75.75 0 0 1 8 6.25h8a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 7M8 9.75a.75.75 0 0 0 0 1.5h5a.75.75 0 0 0 0-1.5z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bookmark">
                <iconify-icon icon="solar:bookmark-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                d="M3 11.098v4.993c0 3.096 0 4.645.734 5.321c.35.323.792.526 1.263.58c.987.113 2.14-.907 4.445-2.946c1.02-.901 1.529-1.352 2.118-1.47c.29-.06.59-.06.88 0c.59.118 1.099.569 2.118 1.47c2.305 2.039 3.458 3.059 4.445 2.945c.47-.053.913-.256 1.263-.579c.734-.676.734-2.224.734-5.321v-4.994c0-4.288 0-6.432-1.318-7.765S16.242 2 12 2S5.636 2 4.318 3.332C3.511 4.148 3.198 5.27 3.077 7M15 6H9">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Boombox">
                <iconify-icon icon="solar:boombox-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9.5h12" opacity=".5">
                                </path>
                                <path
                                    d="M2 14c0-3.771 0-5.657 1.172-6.828S6.229 6 10 6h4c3.771 0 5.657 0 6.828 1.172S22 10.229 22 14s0 5.657-1.172 6.828S17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172S2 17.771 2 14Zm14-8c0-1.886 0-2.828-.586-3.414S13.886 2 12 2s-2.828 0-3.414.586S8 4.114 8 6">
                                </path>
                                <path
                                    d="M11 16a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm7.121 2.122a3 3 0 1 1-4.242-4.243a3 3 0 0 1 4.242 4.243Z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 13v2m10.121-1.121l-1.414 1.414" opacity=".5"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bottle">
                <iconify-icon icon="solar:bottle-outline" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m16.877 2.598l-.025.046l-.076.138l.866.522l.078-.142l.024-.042l-.041-.025l-.781-.47zm1.054.64h-.001m-.726 1.554l-1.472-.887l-2.665 1.31a4.43 4.43 0 0 0-2.26 2.472l.059-.03a3.45 3.45 0 0 1 3.703.393c.517.414 1.21.537 1.839.328l1.055-.352l-.01-.133zm1.757 3.998a.75.75 0 0 0 .014-.423q0-.197-.012-.394l-.015-.193l-.262-3.267l.355-.642a4 4 0 0 0 .166-.317c.053-.116.111-.274.12-.467a1.25 1.25 0 0 0-.195-.73a1.3 1.3 0 0 0-.337-.344a4 4 0 0 0-.303-.192l-.016-.01l-.799-.482a5 5 0 0 0-.33-.188a1.3 1.3 0 0 0-.489-.139a1.25 1.25 0 0 0-.763.205a1.3 1.3 0 0 0-.354.364c-.065.098-.131.218-.192.328l-.323.583l-2.827 1.39l-.168.083C10.606 4.79 9.46 6.36 9.116 8.188c-.01.05-.019.103-.034.19l-.001.007l-.03.174a7.24 7.24 0 0 1-2.095 3.926l-.804.791c-.504.496-.91.895-1.214 1.24c-.31.35-.56.693-.71 1.087a3.49 3.49 0 0 0 .363 3.18c.236.35.558.626.939.894c.373.263.859.555 1.46.918l.713.43c.601.361 1.087.654 1.492.86c.412.21.806.366 1.225.405a3.23 3.23 0 0 0 2.88-1.284c.254-.334.413-.731.548-1.183c.133-.445.261-1.011.42-1.715l.255-1.122l.039-.17a7.2 7.2 0 0 1 2.297-3.799l.006-.005l.141-.125a6.1 6.1 0 0 0 1.956-4.097m-1.666.873l-.413.138a3.45 3.45 0 0 1-3.25-.58a1.95 1.95 0 0 0-2.095-.222l-1.186.593a8.7 8.7 0 0 1-2.21 3.83l-.13.13l-.789.774c-.528.52-.897.883-1.161 1.182c-.263.298-.377.482-.433.63c-.228.6-.15 1.28.205 1.807c.087.128.237.28.559.505c.324.229.764.494 1.395.874l.665.4c.631.381 1.071.645 1.422.824c.35.178.546.236.685.249c.586.055 1.168-.2 1.544-.696c.094-.123.19-.319.307-.708c.116-.39.234-.906.4-1.643l.25-1.1l.042-.182a8.7 8.7 0 0 1 2.624-4.452l.137-.121l.004-.004l.128-.113a4.54 4.54 0 0 0 1.3-2.115"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bowling">
                <iconify-icon icon="solar:bowling-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10m1.5-10a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0M12 5.5a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m-2.5 4a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Box">
                <iconify-icon icon="solar:box-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M8.422 20.618C10.178 21.54 11.056 22 12 22V12L2.638 7.073l-.04.067C2 8.154 2 9.417 2 11.942v.117c0 2.524 0 3.787.597 4.801c.598 1.015 1.674 1.58 3.825 2.709z">
                            </path>
                            <path fill="currentColor"
                                d="m17.577 4.432l-2-1.05C13.822 2.461 12.944 2 12 2c-.945 0-1.822.46-3.578 1.382l-2 1.05C4.318 5.536 3.242 6.1 2.638 7.072L12 12l9.362-4.927c-.606-.973-1.68-1.537-3.785-2.641"
                                opacity=".7"></path>
                            <path fill="currentColor"
                                d="m21.403 7.14l-.041-.067L12 12v10c.944 0 1.822-.46 3.578-1.382l2-1.05c2.151-1.129 3.227-1.693 3.825-2.708c.597-1.014.597-2.277.597-4.8v-.117c0-2.525 0-3.788-.597-4.802"
                                opacity=".5"></path>
                            <path fill="currentColor"
                                d="m6.323 4.484l.1-.052l1.493-.784l9.1 5.005l4.025-2.011q.205.232.362.498c.15.254.262.524.346.825L17.75 9.964V13a.75.75 0 0 1-1.5 0v-2.286l-3.5 1.75v9.44A3 3 0 0 1 12 22c-.248 0-.493-.032-.75-.096v-9.44l-8.998-4.5c.084-.3.196-.57.346-.824q.156-.266.362-.498l9.04 4.52l3.387-1.693z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Broom">
                <iconify-icon icon="solar:broom-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21.036 3.944a.75.75 0 0 0-1.06-1.06zm-8.838 1.061a.75.75 0 1 0 1.06 1.06zm6.187 6.187l-.53.53a.75.75 0 0 0 1.06 0zM3.58 12.98l.64-.39zm-.667-1.096l-.668.34l.012.026l.015.024zM4.408 7.01l.35.663zm2.761-1.15l.206.721zm5.366-.518l.53-.53l-.183-.184l-.258-.03zM10.94 20.34l.39-.64zm1.096.667l-.39.641l.024.015l.025.012zm4.872-1.495l-.663-.35zm1.151-2.761l.721.206zm.924-.585a.75.75 0 1 0-1.463-.332zm.992-13.282l-2.122 2.121l1.061 1.06l2.121-2.12zm-6.718 3.182a3.25 3.25 0 0 1 4.596 0l1.061-1.061a4.75 4.75 0 0 0-6.717 0zm4.596 0a3.25 3.25 0 0 1 0 4.596l1.061 1.06a4.75 4.75 0 0 0 0-6.717zM4.22 12.589l-.667-1.096l-1.281.78l.667 1.096zm.538-4.915c.827-.436 1.734-.84 2.617-1.093l-.412-1.442c-1.018.29-2.025.744-2.905 1.209zm2.617-1.093a14.6 14.6 0 0 1 4.98-.503l.091.009l.089-.745l.088-.745h-.004l-.008-.001l-.123-.012q-.124-.013-.348-.025a16.1 16.1 0 0 0-5.176.58zm-3.794 4.96c-.701-1.373-.238-3.12 1.177-3.867l-.7-1.326c-2.2 1.16-2.856 3.833-1.813 5.876zm6.97 9.44l1.097.667l.78-1.281l-1.097-.667zm7.021-1.119c.465-.88.918-1.887 1.21-2.905l-1.443-.412c-.253.883-.656 1.79-1.093 2.617zm-5.876 1.813c2.044 1.043 4.715.387 5.876-1.812l-1.326-.7c-.747 1.414-2.494 1.878-3.868 1.176zm.308-15.803l5.85 5.85l1.061-1.06l-5.85-5.85zM2.94 13.37a22.75 22.75 0 0 0 7.612 7.612l.78-1.281a21.25 21.25 0 0 1-7.11-7.11zm15.842 3.588q.115-.402.203-.791l-1.463-.332q-.079.351-.182.71z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bug">
                <iconify-icon icon="solar:bug-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M19 15v-3.062A3.94 3.94 0 0 0 15.063 8H8.936A3.94 3.94 0 0 0 5 11.938V15a7 7 0 1 0 14 0Z">
                                </path>
                                <path d="M16.5 8.5v-1a4.5 4.5 0 1 0-9 0v1"></path>
                                <path stroke-linecap="round"
                                    d="M19 14h3M5 14H2M14.5 3.5L17 2M9.5 3.5L7 2m13.5 18l-2-.8m2-11.2l-2 .8M3.5 20l2-.8M3.5 8l2 .8M12 21.5V15"
                                    opacity=".5"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Bus">
                <iconify-icon icon="solar:bus-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M4 10c0-3.771 0-5.657 1.172-6.828S8.229 2 12 2s5.657 0 6.828 1.172S20 6.229 20 10v2c0 3.771 0 5.657-1.172 6.828S15.771 20 12 20s-5.657 0-6.828-1.172S4 15.771 4 12z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 13h16m-4.5 3H17M7 16h1.5M6 19.5V21a1 1 0 0 0 1 1h1.5a1 1 0 0 0 1-1v-1m8.5-.5V21a1 1 0 0 1-1 1h-1.5a1 1 0 0 1-1-1v-1M20 9h1a1 1 0 0 1 1 1v1a1 1 0 0 1-.4.8L20 13M4 9H3a1 1 0 0 0-1 1v1a1 1 0 0 0 .4.8L4 13">
                                </path>
                                <path stroke-linecap="round" d="M19.5 5h-15"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Calculator">
                <iconify-icon icon="solar:calculator-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 22c-4.243 0-6.364 0-7.682-1.465C3 19.072 3 16.714 3 12s0-7.071 1.318-8.536S7.758 2 12 2s6.364 0 7.682 1.464C21 4.93 21 7.286 21 12s0 7.071-1.318 8.535S16.242 22 12 22m3-16H9c-.465 0-.697 0-.888.051a1.5 1.5 0 0 0-1.06 1.06C7 7.304 7 7.536 7 8s0 .697.051.888a1.5 1.5 0 0 0 1.06 1.06C8.304 10 8.536 10 9 10h6c.465 0 .697 0 .888-.051a1.5 1.5 0 0 0 1.06-1.06C17 8.696 17 8.464 17 8s0-.697-.051-.888a1.5 1.5 0 0 0-1.06-1.06C15.697 6 15.464 6 15 6m-6 7a1 1 0 1 1-2 0a1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2m5-1a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-1 5a1 1 0 1 0 0-2a1 1 0 0 0 0 2m-3-1a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Camera">
                <iconify-icon icon="solar:camera-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M9.778 21h4.444c3.121 0 4.682 0 5.803-.735a4.4 4.4 0 0 0 1.226-1.204c.749-1.1.749-2.633.749-5.697s0-4.597-.749-5.697a4.4 4.4 0 0 0-1.226-1.204c-.72-.473-1.622-.642-3.003-.702c-.659 0-1.226-.49-1.355-1.125A2.064 2.064 0 0 0 13.634 3h-3.268c-.988 0-1.839.685-2.033 1.636c-.129.635-.696 1.125-1.355 1.125c-1.38.06-2.282.23-3.003.702A4.4 4.4 0 0 0 2.75 7.667C2 8.767 2 10.299 2 13.364s0 4.596.749 5.697c.324.476.74.885 1.226 1.204C5.096 21 6.657 21 9.778 21"
                                opacity=".5"></path>
                            <path fill="currentColor"
                                d="M17.556 9.272a.826.826 0 0 0-.833.819c0 .452.373.818.833.818h1.111c.46 0 .834-.367.834-.818a.826.826 0 0 0-.834-.819z">
                            </path>
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 9.272c-2.3 0-4.166 1.832-4.166 4.091s1.865 4.091 4.167 4.091c2.3 0 4.166-1.831 4.166-4.09s-1.865-4.092-4.166-4.092m0 1.637c-1.38 0-2.5 1.099-2.5 2.454s1.12 2.455 2.5 2.455c1.381 0 2.5-1.099 2.5-2.455c0-1.355-1.119-2.454-2.5-2.454"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Card">
                <iconify-icon icon="solar:card-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                d="M22 12c0-3.771 0-5.657-1.172-6.828S17.771 4 14 4h-4C6.229 4 4.343 4 3.172 5.172S2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172c.654-.653.943-1.528 1.07-2.828M10 16H6m8 0h-1.5M2 10h5m15 0H11">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cardholder">
                <iconify-icon icon="solar:cardholder-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z">
                                </path>
                                <path
                                    d="M17 11v-1c0-1.886 0-2.828-.586-3.414S14.886 6 13 6h-2c-1.886 0-2.828 0-3.414.586S7 8.114 7 10v1">
                                </path>
                                <path stroke-linecap="round" d="M5 11h14M8 16h8"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cart 2">
                <iconify-icon icon="solar:cart-2-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M8.418 3.25c.28-.59.884-1 1.582-1h4c.698 0 1.301.41 1.582 1c.683.006 1.216.037 1.692.223a3.25 3.25 0 0 1 1.426 1.09c.367.494.54 1.127.776 1.998l.037.136l.002.007l.874 3.324l.012-.017q.063.068.121.143c.901 1.154.472 2.87-.386 6.301q-.116.469-.22.873l-2.477-2.973l1.83-2.685l-.505-1.922l-2.324 3.409L12.976 9h1.34c1.893 0 3.28 0 4.298.177l-.549-2.088c-.29-1.064-.393-1.395-.57-1.632a1.75 1.75 0 0 0-.767-.587c-.22-.086-.486-.111-1.148-.118A1.75 1.75 0 0 1 14 5.75h-4a1.75 1.75 0 0 1-1.58-.998c-.662.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.176.237-.279.568-.57 1.632l-.548 2.088C6.404 9 7.791 9 9.685 9h1.339L7.56 13.157L5.236 9.748L4.73 11.67l1.83 2.685l-2.477 2.973q-.104-.404-.22-.873c-.858-3.431-1.287-5.147-.386-6.301q.059-.075.121-.143l.012.017l.874-3.324l.002-.007l.037-.136c.237-.871.41-1.505.776-1.999a3.25 3.25 0 0 1 1.426-1.089c.476-.186 1.008-.217 1.692-.222">
                            </path>
                            <path fill="currentColor"
                                d="M4.602 19.05c.233.593.5 1.007.894 1.315C6.31 21 7.435 21 9.685 21h1.407L7.44 15.644zM12.908 21h1.407c2.25 0 3.375 0 4.189-.635c.394-.308.661-.722.894-1.316l-2.838-3.405zM12 19.669l-3.561-5.224L12 10.172l3.561 4.273z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Case">
                <iconify-icon icon="solar:case-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10.561 2.25c-.113 0-.201 0-.285.005a2.75 2.75 0 0 0-2.385 1.72c-.032.079-.06.164-.099.278c-.083.224-.274.479-.542.683q-.045.034-.09.064h1.942q.044-.09.08-.182l.001-.003l.004-.01l.005-.012l.005-.012l.004-.01l.001-.005l.005-.012l.003-.012l.003-.006l.002-.008l.002-.007l.002-.006c.04-.116.052-.153.063-.181a1.25 1.25 0 0 1 1.085-.782c.032-.002.071-.002.215-.002h2.837c.144 0 .183 0 .216.002c.482.03.904.334 1.084.782c.011.028.023.063.063.181l.002.006l.002.007l.003.008l.002.006l.003.012l.005.012l.001.005l.004.01l.005.012l.004.012l.005.01l.001.003q.036.093.08.182h1.942q-.045-.03-.09-.064c-.268-.204-.459-.46-.542-.683l-.003-.01c-.036-.107-.064-.191-.095-.269a2.75 2.75 0 0 0-2.386-1.719a5 5 0 0 0-.285-.005z"
                                opacity=".5"></path>
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M17.192 5H6.808c-1.688 0-2.531 0-3.175.33A3 3 0 0 0 2.33 6.633C2 7.277 2 8.12 2 9.808c0 .429 0 .643.073.824a1 1 0 0 0 .3.404c.153.122.358.183.77.307L8.5 12.95v1.213c0 .765.46 1.471 1.187 1.767l.56.227a4.65 4.65 0 0 0 3.506 0l.56-.227a1.91 1.91 0 0 0 1.187-1.767V12.95l5.358-1.607c.41-.124.616-.185.768-.307a1 1 0 0 0 .3-.404c.074-.18.074-.395.074-.824c0-1.688 0-2.531-.33-3.175a3 3 0 0 0-1.303-1.303C19.723 5 18.88 5 17.192 5M13.6 12h-3.2c-.22 0-.4.182-.4.406v1.757c0 .166.1.315.251.377l.56.228c.764.31 1.614.31 2.377 0l.56-.228a.41.41 0 0 0 .252-.377v-1.757a.403.403 0 0 0-.4-.406"
                                clip-rule="evenodd"></path>
                            <path fill="currentColor"
                                d="m3 11.3l.142.043L8.5 12.95v1.213c0 .765.46 1.471 1.187 1.767l.56.227a4.65 4.65 0 0 0 3.506 0l.56-.227a1.91 1.91 0 0 0 1.187-1.767V12.95l5.358-1.607L21 11.3v1c0 3.675-.035 7.388-1.318 8.528C18.364 22 16.242 22 12 22s-6.364 0-7.682-1.172C3.035 19.688 3.001 15.975 3 12.3z"
                                opacity=".5"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cassette">
                <iconify-icon icon="solar:cassette-2-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round"
                                    d="M22 12c0 3.771 0 5.657-1.172 6.828S17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172S2 15.771 2 12s0-5.657 1.172-6.828S6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172c.654.653.943 1.528 1.07 2.828">
                                </path>
                                <path
                                    d="M13.5 13.75a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0Zm-7.5 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0Z">
                                </path>
                                <path stroke-linecap="round" d="M8.5 11.5H16M8.5 16H16"></path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.228 8.5c1.34 0 2.011 0 2.525-.356s.75-.984 1.22-2.24L17.5 4.5m-11 0l.527 1.404c.47 1.256.706 1.884 1.22 2.24c.212.147.451.233.753.284">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cat">
                <iconify-icon icon="solar:cat-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round"
                                    d="M19.1 10.66c1.111 1.314.88 2.922.88 4.34c0 3.906-5.267 5-7.98 5s-7.98-1.094-7.98-5c0-1.418-.231-3.026.88-4.34m14.2 0c-.195-.23-.43-.45-.716-.66m.715.66c.7.403.88-1.105.881-1.598V7.188C19.98 5.563 18.863 5 17.905 5c-.957 0-2.873 1.563-3.511 1.563c-.766 0-.914-.157-2.394-.157s-1.628.157-2.394.157C8.968 6.563 7.052 5 6.095 5S4.02 5.563 4.02 7.188v1.875c.002.492.18 2 .88 1.597m0 0c.195-.23.43-.45.716-.66">
                                </path>
                                <path
                                    d="M12.826 16c0 .173-.361.313-.806.313s-.807-.14-.807-.313s.361-.312.807-.312c.445 0 .806.14.806.312Zm2.674-2.406c0 .431-.217.781-.484.781s-.484-.35-.484-.781s.217-.781.484-.781s.484.35.484.78Zm-6 0c0 .431-.217.781-.484.781s-.484-.35-.484-.781s.217-.781.484-.781s.484.35.484.78Z"
                                    opacity=".5"></path>
                                <path stroke-linecap="round"
                                    d="M22 15.469c-.483-.313-2.58-1.094-3.387-1.094m1.774 3.594c-.484-.313-1.613-1.094-2.42-1.094M2 15.469c.484-.313 2.58-1.094 3.387-1.094m-1.774 3.594c.484-.313 1.613-1.094 2.42-1.094"
                                    opacity=".5"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Chair 2">
                <iconify-icon icon="solar:chair-2-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M6 15.5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2Zm.628-8.734c.242-2.012.362-3.017.944-3.704a3 3 0 0 1 .638-.566C8.96 2 9.974 2 12 2s3.039 0 3.79.496a3 3 0 0 1 .638.566c.582.687.703 1.692.944 3.704l.091.757c.25 2.088.376 3.132-.221 3.804c-.597.673-1.648.673-3.75.673h-2.983c-2.103 0-3.154 0-3.75-.673c-.597-.672-.472-1.716-.222-3.804zM12 12v2">
                                </path>
                                <path stroke-linecap="round"
                                    d="M12 22v-2m0 0v-2.5m0 2.5l.466.116A2.88 2.88 0 0 1 14.5 22M12 20l-.466.116A2.88 2.88 0 0 0 9.5 22M6 16l-.865-2.595c-.073-.22-.11-.33-.18-.482a2.4 2.4 0 0 0-.16-.297C4.34 11.876 3.734 11.5 2 11.5M18 16l.865-2.595c.073-.22.11-.33.18-.482c.072-.153.1-.201.16-.297c.456-.75 1.063-1.126 2.795-1.126">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Chart 2">
                <iconify-icon icon="solar:chart-2-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M17.293 2.293C17 2.586 17 3.057 17 4v13c0 .943 0 1.414.293 1.707S18.057 19 19 19s1.414 0 1.707-.293S21 17.943 21 17V4c0-.943 0-1.414-.293-1.707S19.943 2 19 2s-1.414 0-1.707.293M10 7c0-.943 0-1.414.293-1.707S11.057 5 12 5s1.414 0 1.707.293S14 6.057 14 7v10c0 .943 0 1.414-.293 1.707S12.943 19 12 19s-1.414 0-1.707-.293S10 17.943 10 17zM3.293 9.293C3 9.586 3 10.057 3 11v6c0 .943 0 1.414.293 1.707S4.057 19 5 19s1.414 0 1.707-.293S7 17.943 7 17v-6c0-.943 0-1.414-.293-1.707S5.943 9 5 9s-1.414 0-1.707.293M3 21.25a.75.75 0 0 0 0 1.5h18a.75.75 0 0 0 0-1.5z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Chat Dots">
                <iconify-icon icon="solar:chat-dots-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m13.629 20.472l-.542.916c-.483.816-1.69.816-2.174 0l-.542-.916c-.42-.71-.63-1.066-.968-1.262c-.338-.197-.763-.204-1.613-.219c-1.256-.021-2.043-.098-2.703-.372a5 5 0 0 1-2.706-2.706C2 14.995 2 13.83 2 11.5v-1c0-3.273 0-4.91.737-6.112a5 5 0 0 1 1.65-1.651C5.59 2 7.228 2 10.5 2h3c3.273 0 4.91 0 6.113.737a5 5 0 0 1 1.65 1.65C22 5.59 22 7.228 22 10.5v1c0 2.33 0 3.495-.38 4.413a5 5 0 0 1-2.707 2.706c-.66.274-1.447.35-2.703.372c-.85.015-1.275.022-1.613.219c-.338.196-.548.551-.968 1.262"
                                opacity=".5"></path>
                            <path fill="currentColor"
                                d="M17 11a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-4 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-4 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Checklist">
                <iconify-icon icon="solar:checklist-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                <path stroke-linejoin="round"
                                    d="M2 5.5L3.214 7L7.5 3M2 12.5L3.214 14L7.5 10M2 19.5L3.214 21L7.5 17"></path>
                                <path d="M22 12h-5m-5 0h1.5M12 19h5m3.5 0H22m0-14H12"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="City">
                <iconify-icon icon="solar:city-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M3 22V12c0-1.886 0-2.828.586-3.414S5.114 8 7 8s2.828 0 3.414.586S11 10.114 11 12">
                                </path>
                                <path
                                    d="M17 22v-6c0-1.886 0-2.828-.586-3.414S14.886 12 13 12h-2c-1.886 0-2.828 0-3.414.586S7 14.114 7 16v6">
                                </path>
                                <path
                                    d="M21 22V7.772c0-1.34 0-2.011-.356-2.525s-.984-.75-2.24-1.22c-2.455-.921-3.682-1.381-4.543-.785C13 3.84 13 5.15 13 7.772V12">
                                </path>
                                <path stroke-linecap="round"
                                    d="M4 8V6.5c0-.943 0-1.414.293-1.707S5.057 4.5 6 4.5h2c.943 0 1.414 0 1.707.293S10 5.557 10 6.5V8M7 4V2m15 20H2m8-7h4m-4 3h4">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cloud">
                <iconify-icon icon="solar:cloud-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.286 20C19.442 20 22 17.472 22 14.353c0-2.472-1.607-4.573-3.845-5.338C17.837 6.194 15.415 4 12.476 4C9.32 4 6.762 6.528 6.762 9.647c0 .69.125 1.35.354 1.962a4.4 4.4 0 0 0-.83-.08C3.919 11.53 2 13.426 2 15.765S3.919 20 6.286 20z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Code File">
                <iconify-icon icon="solar:code-file-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M10 22h4c3.771 0 5.657 0 6.828-1.172S22 17.771 22 14v-.437c0-.873 0-1.529-.043-2.063h-4.052c-1.097 0-2.067 0-2.848-.105c-.847-.114-1.694-.375-2.385-1.066c-.692-.692-.953-1.539-1.067-2.386c-.105-.781-.105-1.75-.105-2.848l.01-2.834q0-.124.02-.244C11.121 2 10.636 2 10.03 2C6.239 2 4.343 2 3.172 3.172C2 4.343 2 6.229 2 10v4c0 3.771 0 5.657 1.172 6.828S6.229 22 10 22"
                                clip-rule="evenodd" opacity=".5"></path>
                            <path fill="currentColor"
                                d="M10.702 14.264a.75.75 0 1 0-1.404-.527l-1.5 4a.75.75 0 1 0 1.404.527zm-3.172.266a.75.75 0 1 0-1.06-1.06l-1 1a.75.75 0 0 0 0 1.06l1 1a.75.75 0 0 0 1.06-1.06L7.06 15zm4.5.94a.75.75 0 1 0-1.06 1.06l.47.47l-.47.47a.75.75 0 1 0 1.06 1.06l1-1a.75.75 0 0 0 0-1.06zm-.52-13.21l-.01 2.835c0 1.097 0 2.066.105 2.848c.114.847.375 1.694 1.067 2.385c.69.691 1.538.953 2.385 1.067c.781.105 1.751.105 2.848.105h4.052q.02.232.028.5H22c0-.268 0-.402-.01-.56a5.3 5.3 0 0 0-.958-2.641c-.094-.128-.158-.204-.285-.357C19.954 7.494 18.91 6.312 18 5.5c-.81-.724-1.921-1.515-2.89-2.161c-.832-.556-1.248-.834-1.819-1.04a6 6 0 0 0-.506-.154c-.384-.095-.758-.128-1.285-.14z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Command">
                <iconify-icon icon="solar:command-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" d="M8 13v3h8V8H8v1"></path>
                                <path
                                    d="M16 16.001h3a3 3 0 1 1-3 3zm-7.999 0h-3a3 3 0 1 0 3 3zM16 8h3a3 3 0 1 0-3-3zM8.001 8h-3a3 3 0 1 1 3-3z">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Compass">
                <iconify-icon icon="solar:compass-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" opacity=".5"></circle>
                                <path
                                    d="M13.024 14.56c-2.31.924-3.465 1.386-4.124.938a1.5 1.5 0 0 1-.398-.398c-.448-.66.014-1.814.938-4.124c.197-.493.295-.74.465-.933q.065-.074.139-.138c.193-.17.44-.268.932-.465c2.31-.924 3.464-1.386 4.124-.938a1.5 1.5 0 0 1 .398.398c.448.66-.014 1.814-.938 4.124c-.197.493-.296.739-.465.932a2 2 0 0 1-.139.139c-.193.17-.44.268-.932.465Z">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Condicioner">
                <iconify-icon icon="solar:condicioner-2-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M2 11c0-2.828 0-4.243.879-5.121C3.757 5 5.172 5 8 5h8c2.828 0 4.243 0 5.121.879C22 6.757 22 8.172 22 11c0 3.771 0 5.657-1.172 6.828S17.771 19 14 19h-4c-3.771 0-5.657 0-6.828-1.172S2 14.771 2 11Z">
                                </path>
                                <path stroke-linecap="round"
                                    d="M18 18.5c0-1.404 0-2.107-.337-2.611a2 2 0 0 0-.552-.552C16.607 15 15.904 15 14.5 15h-5c-1.404 0-2.107 0-2.611.337a2 2 0 0 0-.552.552C6 16.393 6 17.096 6 18.5m0-7h12M6 9h12">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Confetti">
                <iconify-icon icon="solar:confetti-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10.186 2.139a.75.75 0 0 1 .249 1.031a.65.65 0 0 0 .095.8l.098.097c.588.589.805 1.454.565 2.25a.75.75 0 0 1-1.436-.433a.76.76 0 0 0-.19-.756L9.47 5.03a2.15 2.15 0 0 1-.314-2.642a.75.75 0 0 1 1.031-.25m7.503 2.583a.75.75 0 0 1 .587.883l-.144.72c-.198.99-.912 1.8-1.87 2.119c-.448.15-.782.527-.874.99l-.144.72a.75.75 0 1 1-1.471-.294l.144-.72c.198-.991.912-1.8 1.87-2.12c.448-.148.782-.526.875-.99l.143-.72a.75.75 0 0 1 .883-.588m3.72 8.839a1.01 1.01 0 0 0-1.078.17a2.51 2.51 0 0 1-2.924.295l-.213-.122a.75.75 0 0 1 .75-1.3l.213.123c.378.218.852.17 1.179-.119a2.51 2.51 0 0 1 2.673-.422l.292.127a.75.75 0 0 1-.601 1.375zM6.928 3.94a.536.536 0 1 1 .758.76a.536.536 0 0 1-.758-.76m5.988 3.217a.536.536 0 1 0-.759.759a.536.536 0 0 0 .759-.76m4.241 3.001a.536.536 0 1 1 .759.758a.536.536 0 0 1-.759-.758m2.66 5.156a.536.536 0 1 0-.759.759a.536.536 0 0 0 .759-.759M7.472 20.241c-2.262.746-3.454 1.058-4.113.399c-.73-.73-.269-2.113.653-4.878l1.69-5.069c.632-1.896 1.003-3.01 1.622-3.462l-.005.026a26 26 0 0 0-.138.73a51 51 0 0 0-.31 1.939c-.216 1.533-.415 3.492-.312 5.057c.062.947.259 2.122.435 3.04a51 51 0 0 0 .312 1.503l.02.093zm5.567-1.855l.267-.089c2.298-.766 3.447-1.149 3.66-2.055c.215-.906-.642-1.763-2.355-3.476l-1.689-1.689l-.005.015l-.082.267c-.068.23-.16.55-.251.916c-.187.749-.357 1.622-.357 2.28s.17 1.531.357 2.28a21 21 0 0 0 .356 1.253l.005.017l.002.004zM8.8 7.504l.05-.245c.613.36 1.339 1.085 2.382 2.129l.503.502l-.212.64l-.01.028l-.025.08l-.09.291c-.073.246-.171.59-.27.983c-.192.769-.401 1.791-.401 2.643s.21 1.874.401 2.643a22 22 0 0 0 .385 1.354l.103.309l-2.715.905l-.107-.46l-.005-.022l-.02-.087l-.073-.33c-.06-.282-.143-.676-.23-1.126c-.173-.907-.355-2.006-.41-2.856c-.093-1.404.087-3.236.3-4.75a50 50 0 0 1 .434-2.582l.007-.037l.002-.01zm6.154-5.294c.151-.02.428-.03.647.19s.21.496.19.648a4 4 0 0 1-.114.479l-.036.126l.065.102c.087.139.181.288.239.42c.065.15.139.402 0 .666c-.137.26-.382.346-.537.381c-.142.032-.319.046-.487.06l-.127.01h-.011l-.092.112c-.11.133-.223.271-.33.37c-.114.103-.328.263-.625.223c-.307-.042-.467-.265-.544-.404a3.4 3.4 0 0 1-.188-.446l-.04-.11l-.11-.04a3.4 3.4 0 0 1-.445-.187c-.14-.078-.362-.237-.404-.544c-.04-.298.12-.511.223-.625c.098-.107.237-.22.37-.33l.112-.092v-.01l.01-.128c.013-.169.027-.346.06-.487c.035-.156.12-.4.38-.537c.265-.14.517-.065.666 0c.133.057.282.151.42.239l.103.064l.126-.035c.164-.047.335-.096.479-.115m7.186 8.282c.467-.467.64-1.096.384-1.65c-.195-.42-.587-.693-1.07-.796c-.102-.483-.376-.875-.796-1.07c-.554-.255-1.183-.083-1.65.385c-.27.27-.393.633-.45.957c-.06.33-.06.68-.041.986a7 7 0 0 0 .163 1.115c.045.18.192.35.372.394h.002l.027.007a5 5 0 0 0 .317.065c.205.036.489.079.798.098c.306.02.656.019.986-.04c.324-.057.687-.18.958-.45">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Copyright">
                <iconify-icon icon="solar:copyright-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12" opacity=".5">
                            </path>
                            <path fill="currentColor"
                                d="M12.286 8.75c-2.003 0-3.536 1.503-3.536 3.25s1.533 3.25 3.536 3.25c.511 0 .995-.1 1.43-.277a.75.75 0 0 1 .567 1.389a5.3 5.3 0 0 1-1.997.388c-2.732 0-5.036-2.079-5.036-4.75s2.304-4.75 5.036-4.75a5.3 5.3 0 0 1 1.997.388a.75.75 0 0 1-.566 1.39a3.8 3.8 0 0 0-1.431-.278">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Corkscrew">
                <iconify-icon icon="solar:corkscrew-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none">
                                <path fill="currentColor"
                                    d="m18.261 13.482l-.53.53zM10.518 5.74l.53-.53zm3.097-3.098l-.53.53l.001.002zm7.743 7.744l-.532.528l.002.002zM1.47 21.47a.75.75 0 1 0 1.06 1.06zm3.082-2.022l-.53-.53zm.215-1.243l-.678.321zm-.95-2.004l-.677.321zm.79-.696l-.403.633zm6.706 4.259l.402-.633zm.743-.775l-.615.428zm-5.593-8.024l-.615.428zm.763-.763l.429-.615zm5.548 3.867l-.43.615zm.779-.736l-.639.393zm-.646-1.05l.639-.393zm2.013-2.142a.75.75 0 1 0-1.06-1.06zm-6.96 7.493l-.402.633zm.684-2.229a.75.75 0 0 0 1.231-.857zm3.338 2.166a.75.75 0 1 0-1.23.858zm-3.423-3.6l.615-.428zm9.973-7.5a.75.75 0 0 0-1.064 1.057zm-4.06-1.921a.75.75 0 1 0 1.057-1.064zM9.986 6.27l7.744 7.743l1.06-1.061l-7.743-7.743zm7.744 7.743a2.94 2.94 0 0 0 4.158 0l-1.06-1.061a1.44 1.44 0 0 1-2.038 0zM9.987 2.11a2.94 2.94 0 0 0 0 4.158l1.061-1.06a1.44 1.44 0 0 1 0-2.037zm4.158 0a2.94 2.94 0 0 0-4.158 0l1.061 1.06a1.44 1.44 0 0 1 2.037 0zm6.683 8.804a1.44 1.44 0 0 1 0 2.037l1.06 1.06a2.94 2.94 0 0 0 0-4.157zM2.53 22.53l2.553-2.552l-1.061-1.06L1.47 21.47zm2.915-4.646l-.95-2.004l-1.355.642l.95 2.004zm1.352-7.066l5.548 3.866l.857-1.23l-5.547-3.867zm7.395 2.122l-.646-1.05l-1.278.786l.646 1.05zm-.597-1.475l1.325-1.324l-1.06-1.06l-1.325 1.324zm-.05.425a.345.345 0 0 1 .05-.425l-1.06-1.06a1.845 1.845 0 0 0-.267 2.271zm-1.2 2.794c1.154.805 2.584-.546 1.847-1.744l-1.278.786a.22.22 0 0 1-.022-.144a.2.2 0 0 1 .056-.11a.2.2 0 0 1 .112-.049a.22.22 0 0 1 .142.03zm-5.266-4.148a.22.22 0 0 1 .03.146a.2.2 0 0 1-.053.113a.2.2 0 0 1-.113.052a.22.22 0 0 1-.146-.03l.858-1.23c-1.189-.828-2.635.618-1.807 1.806zm3.832 9.861c1.197.76 2.57-.675 1.76-1.837l-1.23.857a.22.22 0 0 1-.03-.143a.2.2 0 0 1 .05-.112a.2.2 0 0 1 .11-.055a.22.22 0 0 1 .144.024zM4.496 15.88a.21.21 0 0 1-.05.239a.21.21 0 0 1-.243.02l.805-1.267c-1.098-.698-2.425.475-1.868 1.65zm.587 4.098c.551-.552.695-1.39.362-2.094l-1.356.642a.34.34 0 0 1-.067.391zm-.879-3.84l3.354 2.13L8.362 17l-3.354-2.13zm3.354 2.13l3.353 2.129l.804-1.266L8.362 17zm5.113.292l-.689-.989l-1.23.858l.689.988zm-2.796-4.012l-.7-1.005l-1.231.857l.7 1.005zm-.7-1.005l-2.096-3.007l-1.23.857L7.943 14.4zM21.89 9.857l-3.359-3.385l-1.064 1.056l3.358 3.385zm-6.362-6.37L14.144 2.11l-1.058 1.063l1.385 1.377z">
                                </path>
                                <path stroke="currentColor" stroke-width="1.5"
                                    d="M22 12a2.15 2.15 0 1 1-4.3 0a2.15 2.15 0 0 1 4.3 0Z"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cosmetic">
                <iconify-icon icon="solar:cosmetic-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none">
                                <path stroke="currentColor" stroke-width="1.5"
                                    d="M11 10.5a5.5 5.5 0 1 1 11 0a5.5 5.5 0 0 1-11 0Z"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M16.5 20v-4m0 4h3m-3 0h-3" opacity=".5"></path>
                                <path fill="currentColor"
                                    d="M2 11v-.75a.75.75 0 0 0-.75.75zm6 0h.75a.75.75 0 0 0-.75-.75zm-6 .75h6v-1.5H2zM7.25 11v6h1.5v-6zm-4.5 6v-6h-1.5v6zM5 19.25A2.25 2.25 0 0 1 2.75 17h-1.5A3.75 3.75 0 0 0 5 20.75zM7.25 17A2.25 2.25 0 0 1 5 19.25v1.5A3.75 3.75 0 0 0 8.75 17z">
                                </path>
                                <path stroke="currentColor" stroke-width="1.5"
                                    d="M3 11h4V5.618a1 1 0 0 0-1.447-.894l-2 1A1 1 0 0 0 3 6.618z" opacity=".5">
                                </path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Course Up">
                <iconify-icon icon="solar:course-up-linear" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="m22 7l-7.38 7.335c-.997.991-1.496 1.487-2.115 1.487s-1.117-.496-2.115-1.488l-.24-.238c-.997-.992-1.497-1.489-2.116-1.489s-1.118.497-2.115 1.49L2 18M22 7v5.546M22 7h-5.582">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="CPU">
                <iconify-icon icon="solar:cpu-bold" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M9.181 10.181c.053-.053.148-.119.45-.16c.323-.043.761-.044 1.439-.044h1.86c.678 0 1.116.001 1.438.045c.303.04.398.106.45.16c.054.052.12.147.16.45c.044.322.045.76.045 1.438v1.86c0 .678-.001 1.116-.045 1.438c-.04.303-.106.398-.16.45c-.052.054-.147.12-.45.16c-.322.044-.76.045-1.438.045h-1.86c-.678 0-1.116-.001-1.438-.045c-.303-.04-.398-.106-.45-.16c-.054-.052-.12-.147-.16-.45c-.044-.322-.045-.76-.045-1.438v-1.86c0-.678.001-1.116.045-1.438c.04-.303.106-.398.16-.45">
                            </path>
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 3c.385 0 .698.312.698.698v2.79q.764.001 1.395.017V3.698a.698.698 0 0 1 1.395 0v2.79a1 1 0 0 1-.008.108c.936.115 1.585.353 2.078.846s.731 1.142.846 2.078a1 1 0 0 1 .108-.008h2.79a.698.698 0 0 1 0 1.395h-2.807q.017.63.017 1.395h2.79a.698.698 0 0 1 0 1.396h-2.79q-.001.764-.017 1.395h2.807a.698.698 0 0 1 0 1.395h-2.79a1 1 0 0 1-.108-.008c-.115.936-.353 1.585-.846 2.078s-1.142.731-2.078.846q.009.053.008.108v2.79a.698.698 0 0 1-1.395 0v-2.807q-.63.017-1.395.017v2.79a.698.698 0 0 1-1.396 0v-2.79a56 56 0 0 1-1.395-.017v2.807a.698.698 0 0 1-1.395 0v-2.79q0-.056.008-.108c-.936-.115-1.585-.353-2.078-.846s-.731-1.142-.846-2.078a1 1 0 0 1-.108.008h-2.79a.698.698 0 0 1 0-1.395h2.807a56 56 0 0 1-.017-1.395h-2.79a.698.698 0 0 1 0-1.396h2.79q.001-.764.017-1.395H2.698a.698.698 0 0 1 0-1.395h2.79q.056 0 .108.008c.115-.936.353-1.585.846-2.078s1.142-.731 2.078-.846a1 1 0 0 1-.008-.108v-2.79a.698.698 0 0 1 1.395 0v2.807q.63-.017 1.395-.017v-2.79c0-.386.313-.698.698-.698m-.976 5.581c-.619 0-1.152 0-1.578.058c-.458.061-.896.2-1.252.555c-.355.356-.494.794-.555 1.252c-.058.427-.058.96-.058 1.578v1.952c0 .619 0 1.151.058 1.578c.061.458.2.896.555 1.252c.356.355.794.494 1.252.555c.426.058.96.058 1.578.058h1.952c.619 0 1.151 0 1.578-.058c.458-.061.896-.2 1.252-.555c.355-.356.494-.794.555-1.252c.058-.427.058-.96.058-1.578v-1.952c0-.619 0-1.151-.058-1.578c-.061-.458-.2-.896-.555-1.252c-.356-.355-.794-.494-1.252-.555c-.427-.058-.96-.058-1.578-.058z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Crop">
                <iconify-icon icon="solar:crop-bold-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M5 1.25a.75.75 0 0 1 .75.75v9c0 1.907.002 3.262.14 4.29c.135 1.005.389 1.585.812 2.008s1.003.677 2.009.812c1.028.138 2.382.14 4.289.14h9a.75.75 0 0 1 0 1.5h-9.056c-1.838 0-3.294 0-4.433-.153c-1.172-.158-2.121-.49-2.87-1.238c-.748-.749-1.08-1.698-1.238-2.87c-.153-1.14-.153-2.595-.153-4.433V2A.75.75 0 0 1 5 1.25"
                                clip-rule="evenodd"></path>
                            <path fill="currentColor"
                                d="M2 5.75h2.25v-1.5H2a.75.75 0 0 0 0 1.5M19.75 22v-2.25h-1.5V22a.75.75 0 0 0 1.5 0M15.29 5.89c-1.028-.138-2.383-.14-4.29-.14H8a.75.75 0 0 1 0-1.5h3.056c1.838 0 3.294 0 4.433.153c1.172.158 2.121.49 2.87 1.238c.748.749 1.08 1.698 1.238 2.87c.153 1.14.153 2.595.153 4.433V16a.75.75 0 0 1-1.5 0v-3c0-1.907-.002-3.261-.14-4.29c-.135-1.005-.389-1.585-.812-2.008s-1.003-.677-2.009-.812"
                                opacity=".5"></path>
                            <path fill="currentColor"
                                d="M8.5 11.5c0-1.414 0-2.121.44-2.56c.439-.44 1.146-.44 2.56-.44h1c1.414 0 2.121 0 2.56.44c.44.439.44 1.146.44 2.56v1c0 1.414 0 2.121-.44 2.56c-.439.44-1.146.44-2.56.44h-1c-1.414 0-2.121 0-2.56-.44c-.44-.439-.44-1.146-.44-2.56z">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Crown">
                <iconify-icon icon="solar:crown-line-broken" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                d="M21.838 11.126c.18-1.912.27-2.869-.057-3.264a1 1 0 0 0-.675-.367c-.476-.042-1.073.638-2.268 1.998c-.618.704-.927 1.055-1.271 1.11a.92.92 0 0 1-.562-.09c-.319-.16-.53-.595-.955-1.464l-2.237-4.584C13.011 2.822 12.61 2 12 2s-1.011.822-1.813 2.465L7.95 9.049c-.424.87-.636 1.304-.955 1.464a.93.93 0 0 1-.562.09c-.344-.055-.653-.406-1.271-1.11c-1.195-1.36-1.792-2.04-2.268-1.998a1 1 0 0 0-.675.367c-.327.395-.237 1.352-.057 3.264l.229 2.436c.378 4.012.566 6.019 1.75 7.228C5.322 22 7.094 22 10.64 22h2.719c3.545 0 5.317 0 6.5-1.21c.914-.935 1.234-2.345 1.507-4.79M9 18h6">
                            </path>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cup First">
                <iconify-icon icon="solar:cup-first-line-duotone" class="fs-2"><template shadowrootmode="open">
                        <style data-style="data-style">
                            :host {
                                display: inline-block;
                                vertical-align: 0
                            }

                            span,
                            svg {
                                display: block
                            }
                        </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <path
                                    d="M12 16c-5.76 0-6.78-5.74-6.96-10.294c-.051-1.266-.076-1.9.4-2.485c.475-.586 1.044-.682 2.183-.874A26.4 26.4 0 0 1 12 2c1.784 0 3.253.157 4.377.347c1.139.192 1.708.288 2.184.874s.45 1.219.4 2.485C18.781 10.26 17.761 16 12.001 16Z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11 8l1.5-1.5v4"></path>
                                <path
                                    d="m19 5l.949.316c.99.33 1.485.495 1.768.888S22 7.12 22 8.162v.073c0 .86 0 1.291-.207 1.643s-.584.561-1.336.98L17.5 12.5M5 5l-.949.316c-.99.33-1.485.495-1.768.888S2 7.12 2 8.162v.073c0 .86 0 1.291.207 1.643s.584.561 1.336.98L6.5 12.5"
                                    opacity=".5"></path>
                                <path stroke-linecap="round" d="M12 16v3" opacity=".5"></path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.5 22h-7l.34-1.696a1 1 0 0 1 .98-.804h4.36a1 1 0 0 1 .98.804z"></path>
                                <path stroke-linecap="round" d="M18 22H6" opacity=".5"></path>
                            </g>
                        </svg>
                    </template></iconify-icon>
            </div>
        </div>
    </div>

    <div class="my-3 text-center">
        <a href="https://icon-sets.iconify.design/solar/" target="_blank" class="btn btn-danger">View All
            Icons</a>
    </div>

</div> <!-- container -->
@endsection


@push('script')

@endpush
