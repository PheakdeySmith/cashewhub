@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Accordions</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Accordions</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0 border-bottom border-dashed">
                    <h4 class="header-title">Default Accordions</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Click the accordions below to expand/collapse the accordion content.</p>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0 border-bottom border-dashed">
                    <h4 class="header-title mb-0">Flush Accordions</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Add <code>.accordion-flush</code> to remove the default <code>background-color</code>, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.</p>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                                    </p>
                                    <button type="button" class="btn btn-primary btn-sm">Click Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                                    filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                                    happening here in terms of content, but just filling up the space to make it look, at least at first
                                    glance, a bit more representative of how this would look in a real-world application.
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0 border-bottom border-dashed">
                    <h4 class="header-title">Bordered Accordions</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Using the card component, you can
                        extend the default collapse behavior to create an accordion. To properly achieve
                        the accordion style, be sure to use <code>.accordion</code> as a wrapper.
                    </p>
                    <div class="accordion accordion-bordered" id="BorderedaccordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="BorderedheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseOne" aria-expanded="true" aria-controls="BorderedcollapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="BorderedcollapseOne" class="accordion-collapse collapse show" aria-labelledby="BorderedheadingOne" data-bs-parent="#BorderedaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="BorderedheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseTwo" aria-expanded="false" aria-controls="BorderedcollapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="BorderedcollapseTwo" class="accordion-collapse collapse" aria-labelledby="BorderedheadingTwo" data-bs-parent="#BorderedaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="BorderedheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseThree" aria-expanded="false" aria-controls="BorderedcollapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="BorderedcollapseThree" class="accordion-collapse collapse" aria-labelledby="BorderedheadingThree" data-bs-parent="#BorderedaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0 border-bottom border-dashed">
                    <h4 class="header-title">Custom Icon Accordion</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Using the card component, you can
                        extend the default collapse behavior to create an accordion. To properly achieve
                        the accordion style, be sure to use <code>.accordion</code> as a wrapper.
                    </p>

                    <div class="accordion accordion-bordered accordion-custom-icon accordion-arrow-none" id="CustomIconaccordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="CustomIconheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#CustomIconcollapseOne" aria-expanded="true" aria-controls="CustomIconcollapseOne">
                                    Accordion item with tabler icons
                                    <i class="ti ti-plus accordion-icon accordion-icon-on"></i>
                                    <i class="ti ti-minus accordion-icon accordion-icon-off"></i>
                                </button>
                            </h2>
                            <div id="CustomIconcollapseOne" class="accordion-collapse collapse show" aria-labelledby="CustomIconheadingOne" data-bs-parent="#CustomIconaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="CustomIconheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CustomIconcollapseTwo" aria-expanded="false" aria-controls="CustomIconcollapseTwo">
                                    Accordion item with lucid icons
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus-circle" class="lucide lucide-plus-circle accordion-icon accordion-icon-on avatar-xxs me-n1"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path><path d="M12 8v8"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus-circle" class="lucide lucide-minus-circle accordion-icon accordion-icon-off avatar-xxs me-n1"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path></svg>
                                </button>
                            </h2>
                            <div id="CustomIconcollapseTwo" class="accordion-collapse collapse" aria-labelledby="CustomIconheadingTwo" data-bs-parent="#CustomIconaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="CustomIconheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CustomIconcollapseThree" aria-expanded="false" aria-controls="CustomIconcollapseThree">
                                    Accordion item with solar duotone icons
                                    <iconify-icon icon="solar:add-square-bold-duotone" class="accordion-icon text-secondary accordion-icon-on fs-24 me-n2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c-4.714 0-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22" opacity=".5"></path><path fill="currentColor" d="M12 8.25a.75.75 0 0 1 .75.75v2.25H15a.75.75 0 0 1 0 1.5h-2.25V15a.75.75 0 0 1-1.5 0v-2.25H9a.75.75 0 0 1 0-1.5h2.25V9a.75.75 0 0 1 .75-.75"></path></svg></template></iconify-icon>
                                    <iconify-icon icon="solar:minus-square-bold-duotone" class="accordion-icon text-danger accordion-icon-off fs-24 me-n2"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c-4.714 0-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22" opacity=".5"></path><path fill="currentColor" d="M15 12.75a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5z"></path></svg></template></iconify-icon>
                                </button>
                            </h2>
                            <div id="CustomIconcollapseThree" class="accordion-collapse collapse" aria-labelledby="CustomIconheadingThree" data-bs-parent="#CustomIconaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0 border-bottom border-dashed">
                    <h4 class="header-title">Always Open Accordions</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Omit the <code>data-bs-parent</code> attribute on each <code>.accordion-collapse</code> to make accordion items stay open when another item is opened.</p>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                    overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this with custom CSS or overriding our default variables. It's also worth noting that just about any
                                    HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0 border-bottom border-dashed">
                    <h4 class="header-title">Accordion Without Arrow </h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Using the card component, you can
                        extend the default collapse behavior to create an accordion. To properly achieve
                        the accordion style, be sure to use <code>.accordion</code> as a wrapper.
                    </p>

                    <div class="accordion accordion-arrow-none" id="withoutarrowaccordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="withoutarrowheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#withoutarrowcollapseOne" aria-expanded="true" aria-controls="withoutarrowcollapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="withoutarrowcollapseOne" class="accordion-collapse collapse show" aria-labelledby="withoutarrowheadingOne" data-bs-parent="#withoutarrowaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="withoutarrowheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#withoutarrowcollapseTwo" aria-expanded="false" aria-controls="withoutarrowcollapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="withoutarrowcollapseTwo" class="accordion-collapse collapse" aria-labelledby="withoutarrowheadingTwo" data-bs-parent="#withoutarrowaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="withoutarrowheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#withoutarrowcollapseThree" aria-expanded="false" aria-controls="withoutarrowcollapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="withoutarrowcollapseThree" class="accordion-collapse collapse" aria-labelledby="withoutarrowheadingThree" data-bs-parent="#withoutarrowaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
</div>
@endsection



@push('script')

@endpush
