@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Form Elements</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>

                    <li class="breadcrumb-item active">Form Elements</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Input Types</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Most common form control, text-based input fields. Includes support for all HTML5 types:
                            <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>,
                            <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>,
                            <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>,
                            <code>tel</code>, and <code>color</code>.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Text</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-email" class="form-label">Email</label>
                                        <input type="email" id="example-email" name="example-email" class="form-control"
                                            placeholder="Email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-password" class="form-label">Password</label>
                                        <input type="password" id="example-password" class="form-control" value="password">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-palaceholder" class="form-label">Placeholder</label>
                                        <input type="text" id="example-palaceholder" class="form-control"
                                            placeholder="placeholder">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Text area</label>
                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-readonly" class="form-label">Readonly</label>
                                        <input type="text" id="example-readonly" class="form-control" readonly=""
                                            value="Readonly value">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-disable" class="form-label">Disabled</label>
                                        <input type="text" class="form-control" id="example-disable" disabled=""
                                            value="Disabled value">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-static" class="form-label">Static control</label>
                                        <input type="text" readonly="" class="form-control-plaintext"
                                            id="example-static" value="email@example.com">
                                    </div>

                                    <div class="mb-0">
                                        <label for="example-helping" class="form-label">Helping text</label>
                                        <input type="text" id="example-helping" class="form-control mb-1"
                                            placeholder="Helping text">
                                        <span class="help-block"><small>A block of help text that breaks onto a new line and
                                                may extend beyond one line.</small></span>
                                    </div>

                                </form>
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <form>

                                    <div class="mb-3">
                                        <label for="example-select" class="form-label">Input Select</label>
                                        <select class="form-select" id="example-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-multiselect" class="form-label">Multiple Select</label>
                                        <select id="example-multiselect" multiple="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Default file input</label>
                                        <input type="file" id="example-fileinput" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-date" class="form-label">Date</label>
                                        <input class="form-control" id="example-date" type="date" name="date">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-month" class="form-label">Month</label>
                                        <input class="form-control" id="example-month" type="month" name="month">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-time" class="form-label">Time</label>
                                        <input class="form-control" id="example-time" type="time" name="time">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-week" class="form-label">Week</label>
                                        <input class="form-control" id="example-week" type="week" name="week">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-number" class="form-label">Number</label>
                                        <input class="form-control" id="example-number" type="number" name="number">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-color" class="form-label">Color</label>
                                        <input class="form-control" id="example-color" type="color" name="color"
                                            value="#ce7e7e">
                                    </div>

                                    <div class="mb-0">
                                        <label for="example-range" class="form-label">Range</label>
                                        <input class="form-range" id="example-range" type="range" name="range"
                                            min="0" max="100">
                                    </div>

                                </form>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Floating Labels</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and <code>&lt;label&gt;</code>
                            elements in <code>.form-floating</code> to enable floating labels with Bootstrap’s textual form
                            fields. A <code>placeholder</code> is required on each <code>&lt;input&gt;</code> as our method
                            of CSS-only floating labels uses the <code>:placeholder-shown</code> pseudo-element. Also note
                            that the <code>&lt;input&gt;</code> must come first so we can utilize a sibling selector (e.g.,
                            <code>~</code>).
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="mb-3">Example</h5>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <h5 class="mb-3 mt-4">Textareas</h5>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <h5 class="mb-3">Selects</h5>
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>

                                <h5 class="mb-3 mt-4">Layout</h5>
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" value="mdo@example.com">
                                            <label for="floatingInputGrid">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelectGrid"
                                                aria-label="Floating label select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label for="floatingSelectGrid">Works with selects</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Select</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to trigger
                            the custom styles.
                        </p>

                        <select class="form-select mb-3">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-lg mb-3">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-sm mb-3">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect04"
                                aria-label="Example select with button addon">
                                <option selected="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Switches</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to
                            render a toggle switch. Switches also support the <code>disabled</code> attribute.
                        </p>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="customSwitch1">
                            <label class="form-check-label" for="customSwitch1">Toggle this switch element</label>
                        </div>
                        <div class="form-check form-switch mt-1">
                            <input type="checkbox" class="form-check-input" disabled="" id="customSwitch2">
                            <label class="form-check-label" for="customSwitch2">Disabled switch element</label>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Checkboxes</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Each checkbox and radio <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code> pairing is
                            wrapped in a <code>&lt;div&gt;</code> to create our custom control. Structurally, this is the
                            same approach as our default <code>.form-check</code>.
                        </p>
                        <div class="mt-3">
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                <label class="form-check-label" for="customCheck2">Check this custom checkbox</label>
                            </div>
                        </div>

                        <h6 class="fs-15 mt-3">Inline</h6>

                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                <label class="form-check-label" for="customCheck3">Check this custom checkbox</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                <label class="form-check-label" for="customCheck4">Check this custom checkbox</label>
                            </div>
                        </div>

                        <h6 class="fs-15 mt-3">Disabled</h6>

                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="customCheck5" checked=""
                                    disabled="">
                                <label class="form-check-label" for="customCheck5">Check this custom checkbox</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="customCheck6" disabled="">
                                <label class="form-check-label" for="customCheck6">Check this custom checkbox</label>
                            </div>
                        </div>

                        <h6 class="fs-15 mt-3">Colors</h6>

                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                            <label class="form-check-label" for="customCheckcolor1">Default Checkbox</label>
                        </div>
                        <div class="form-check form-checkbox-success mb-2">
                            <input type="checkbox" class="form-check-input" id="customCheckcolor2" checked="">
                            <label class="form-check-label" for="customCheckcolor2">Success Checkbox</label>
                        </div>
                        <div class="form-check form-checkbox-info mb-2">
                            <input type="checkbox" class="form-check-input" id="customCheckcolor3" checked="">
                            <label class="form-check-label" for="customCheckcolor3">Info Checkbox</label>
                        </div>
                        <div class="form-check form-checkbox-secondary mb-2">
                            <input type="checkbox" class="form-check-input" id="customCheckcolor6" checked="">
                            <label class="form-check-label" for="customCheckcolor6">Secondary Checkbox</label>
                        </div>
                        <div class="form-check  form-checkbox-warning mb-2">
                            <input type="checkbox" class="form-check-input" id="customCheckcolor4" checked="">
                            <label class="form-check-label" for="customCheckcolor4">Warning Checkbox</label>
                        </div>
                        <div class="form-check form-checkbox-danger mb-2">
                            <input type="checkbox" class="form-check-input" id="customCheckcolor5" checked="">
                            <label class="form-check-label" for="customCheckcolor5">Danger Checkbox</label>
                        </div>
                        <div class="form-check form-checkbox-dark">
                            <input type="checkbox" class="form-check-input" id="customCheckcolor7" checked="">
                            <label class="form-check-label" for="customCheckcolor7">Dark Checkbox</label>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Radios</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Each checkbox and radio <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code> pairing is
                            wrapped in a <code>&lt;div&gt;</code> to create our custom control. Structurally, this is the
                            same approach as our default <code>.form-check</code>.
                        </p>

                        <div class="mt-3">
                            <div class="form-check mb-1">
                                <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                <label class="form-check-label" for="customRadio1">Toggle this custom radio</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                <label class="form-check-label" for="customRadio2">Or toggle this other custom
                                    radio</label>
                            </div>
                        </div>

                        <h6 class="fs-15 mt-3">Inline</h6>

                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio3" name="customRadio1" class="form-check-input">
                                <label class="form-check-label" for="customRadio3">Toggle this custom radio</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio4" name="customRadio1" class="form-check-input">
                                <label class="form-check-label" for="customRadio4">Or toggle this other custom
                                    radio</label>
                            </div>
                        </div>

                        <h6 class="fs-15 mt-3">Disabled</h6>

                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio5" name="customRadio2" class="form-check-input"
                                    disabled="">
                                <label class="form-check-label" for="customRadio5">Toggle this custom radio</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio6" name="customRadio2" class="form-check-input"
                                    checked="" disabled="">
                                <label class="form-check-label" for="customRadio6">Or toggle this other custom
                                    radio</label>
                            </div>
                        </div>

                        <h6 class="fs-15 mt-3">Colors</h6>

                        <div class="form-check mb-2">
                            <input type="radio" id="customRadiocolor1" name="customRadiocolor1"
                                class="form-check-input" checked="">
                            <label class="form-check-label" for="customRadiocolor1">Default Radio</label>
                        </div>
                        <div class="form-check form-radio-success mb-2">
                            <input type="radio" id="customRadiocolor2" name="customRadiocolor2"
                                class="form-check-input" checked="">
                            <label class="form-check-label" for="customRadiocolor2">Success Radio</label>
                        </div>
                        <div class="form-check form-radio-info mb-2">
                            <input type="radio" id="customRadiocolor3" name="customRadiocolor3"
                                class="form-check-input" checked="">
                            <label class="form-check-label" for="customRadiocolor3">Info Radio</label>
                        </div>
                        <div class="form-check form-radio-secondary mb-2">
                            <input type="radio" id="customRadiocolor6" name="customRadiocolor6"
                                class="form-check-input" checked="">
                            <label class="form-check-label" for="customRadiocolor6">Secondary Radio</label>
                        </div>
                        <div class="form-check form-radio-warning mb-2">
                            <input type="radio" id="customRadiocolor4" name="customRadiocolor4"
                                class="form-check-input" checked="">
                            <label class="form-check-label" for="customRadiocolor4">Warning Radio</label>
                        </div>
                        <div class="form-check form-radio-danger mb-2">
                            <input type="radio" id="customRadiocolor5" name="customRadiocolor5"
                                class="form-check-input" checked="">
                            <label class="form-check-label" for="customRadiocolor5">Danger Radio</label>
                        </div>
                        <div class="form-check form-radio-dark">
                            <input type="radio" id="customRadiocolor7" name="customRadiocolor7"
                                class="form-check-input" checked="">
                            <label class="form-check-label" for="customRadiocolor7">Dark Radio</label>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Input Sizes</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes
                            like <code>.col-lg-*</code>.
                        </p>
                        <form>
                            <div class="mb-3">
                                <label for="example-input-small" class="form-label">Small</label>
                                <input type="text" id="example-input-small" name="example-input-small"
                                    class="form-control form-control-sm" placeholder=".input-sm">
                            </div>

                            <div class="mb-3">
                                <label for="example-input-normal" class="form-label">Normal</label>
                                <input type="text" id="example-input-normal" name="example-input-normal"
                                    class="form-control" placeholder="Normal">
                            </div>

                            <div class="mb-3">
                                <label for="example-input-large" class="form-label">Large</label>
                                <input type="text" id="example-input-large" name="example-input-large"
                                    class="form-control form-control-lg" placeholder=".input-lg">
                            </div>

                            <div class="mb-2">
                                <label for="example-gridsize" class="form-label">Grid Sizes</label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" id="example-gridsize" class="form-control"
                                            placeholder=".col-sm-4">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Input Group</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Easily extend form controls by adding text, buttons, or button groups on either side of textual
                            inputs, custom selects, and custom file inputs
                        </p>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Static</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Dropdowns</label>
                                <div class="input-group">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="https://coderthemes.com/boron/layouts/form-elements.html#">Action</a>
                                        <a class="dropdown-item"
                                            href="https://coderthemes.com/boron/layouts/form-elements.html#">Another
                                            action</a>
                                        <a class="dropdown-item"
                                            href="https://coderthemes.com/boron/layouts/form-elements.html#">Something else
                                            here</a>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Buttons</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient&#39;s username"
                                        aria-label="Recipient&#39;s username">
                                    <button class="btn btn-dark" type="button">Button</button>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <label class="form-label">File input</label>
                                    <input class="form-control" type="file" id="inputGroupFile04">
                                </div>
                                <div class="col-sm-6">
                                    <label for="formFileMultiple01" class="form-label">Multiple files input</label>
                                    <input class="form-control" type="file" id="formFileMultiple01" multiple="">
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Custom Switch</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Here are a few types of switches.
                        </p>
                        <!-- without label-->
                        <input type="checkbox" id="switch0" data-switch="none">
                        <label for="switch0" data-on-label="" data-off-label=""></label>

                        <!-- Bool Switch-->
                        <input type="checkbox" id="switch1" checked="" data-switch="bool">
                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>

                        <!-- Primary Switch-->
                        <input type="checkbox" id="switch2" checked="" data-switch="primary">
                        <label for="switch2" data-on-label="On" data-off-label="Off"></label>

                        <!-- Success Switch-->
                        <input type="checkbox" id="switch3" checked="" data-switch="success">
                        <label for="switch3" data-on-label="Yes" data-off-label="No"></label>

                        <!-- Info Switch-->
                        <input type="checkbox" id="switch4" checked="" data-switch="info">
                        <label for="switch4" data-on-label="On" data-off-label="Off"></label>

                        <!-- Warning Switch-->
                        <input type="checkbox" id="switch5" checked="" data-switch="warning">
                        <label for="switch5" data-on-label="Yes" data-off-label="No"></label>

                        <!-- Danger Switch-->
                        <input type="checkbox" id="switch6" checked="" data-switch="danger">
                        <label for="switch6" data-on-label="On" data-off-label="Off"></label>

                        <!-- Dark Switch-->
                        <input type="checkbox" id="switch7" checked="" data-switch="secondary">
                        <label for="switch7" data-on-label="Yes" data-off-label="No"></label>

                        <!-- Disabled Switch-->
                        <input type="checkbox" id="switchdis" data-switch="primary" checked="" disabled="">
                        <label for="switchdis" data-on-label="On" data-off-label="Off"></label>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection


@push('script')
@endpush
