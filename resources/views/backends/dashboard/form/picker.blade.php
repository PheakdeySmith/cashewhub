@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Form Picker</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>

                    <li class="breadcrumb-item active">Form Picker</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Flatpickr - Datepicker</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="https://coderthemes.com/boron/layouts/form-picker.html#">
                            <div class="row gy-3">
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label mb-0">Basic</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr"
                                                data-date-format="d M, Y"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d M, Y" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label mb-0">DateTime</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr" data-date-format="d.m.y"
                                                data-enable-time</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d.m.y" data-enable-time="" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Human-Friendly Dates</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr"
                                                data-altFormat="F j, Y"</code> attribute.</p>
                                        <input type="hidden" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-altformat="F j, Y"><input
                                            class="form-control flatpickr-input form-control input" placeholder=""
                                            tabindex="0" type="text" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">MinDate and MaxDate</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr" data-date-format="d M, Y"
                                                data-minDate="Your Min. Date" data-maxDate="Your Max. date"</code>
                                            attribute.
                                        </p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-mindate="25 12, 2021" data-maxdate="29 12,2021"
                                            readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Default Date</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr" data-date-format="d M, Y"
                                                data-deafult-date="Your Default Date"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-deafult-date="25 12,2021" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Disabling Dates</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr" data-disable="true"</code>
                                            attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-disable-date="15 12,2021" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Selecting Multiple Dates</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr"
                                                data-date-format="d M, Y" data-multiple-date="true"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-multiple-date="true" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Range</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr"
                                                data-date-format="d M, Y" data-range-date="true"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-range-date="true" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Inline</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr"
                                                data-date-format="d M, Y" data-deafult-date="today"
                                                data-inline-date="true"</code> attribute.</p>
                                        <input type="text" class="form-control d-none flatpickr-input"
                                            data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today"
                                            data-inline-date="true" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Week Numbers</label>
                                        <p class="text-muted">Set <code>data-provider="flatpickr"
                                                data-date-format="d M, Y" data-week-number</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-week-number="" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                        </form><!-- end form -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Flatpickr - Timepicker</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="https://coderthemes.com/boron/layouts/form-picker.html#">
                            <div class="row gy-3">
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label mb-0">Timepicker</label>
                                        <p class="text-muted">Set <code>data-provider="timepickr"
                                                data-time-basic="true"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="timepickr"
                                            data-time-basic="true" id="timepicker-example" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div>
                                        <label class="form-label mb-0">24-hour Time Picker</label>
                                        <p class="text-muted">Set <code>data-provider="timepickr"
                                                data-time-hrs="true"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="timepickr"
                                            data-time-hrs="true" id="timepicker-24hrs" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Time Picker w/ Limits</label>
                                        <p class="text-muted">Set <code>data-provider="timepickr"
                                                data-min-time="Min.Time" data-max-time="Max.Time"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="timepickr"
                                            data-min-time="13:00" data-max-time="16:00" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Preloading Time</label>
                                        <p class="text-muted">Set <code>data-provider="timepickr"
                                                data-default-time="Your Default Time"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="timepickr"
                                            data-default-time="16:45" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3">
                                        <label class="form-label mb-0">Inline</label>
                                        <p class="text-muted">Set <code>data-provider="timepickr"
                                                data-time-inline="Your Default Time"</code> attribute.</p>
                                        <input type="text" class="form-control flatpickr-input" data-provider="timepickr"
                                            data-time-inline="11:42" readonly="readonly">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </form><!-- end form -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection


@push('script')
    <div class="flatpickr-calendar animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day today" aria-label="May 10, 2025"
                            aria-current="date" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                            tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar hasTime animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day today" aria-label="May 10, 2025"
                            aria-current="date" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                            tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
        <div class="flatpickr-time" tabindex="-1">
            <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                    tabindex="-1" step="1" min="1" max="12" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-time-separator">:</span>
            <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                    tabindex="-1" step="5" min="0" max="59" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-am-pm" title="Click to toggle"
                tabindex="-1">PM</span>
        </div>
    </div>
    <div class="flatpickr-calendar animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day today" aria-label="May 10, 2025"
                            aria-current="date" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                            tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month flatpickr-disabled"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year" min="2025" max="2025" disabled=""><span class="arrowUp"></span><span
                            class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month flatpickr-disabled"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay flatpickr-disabled"
                            aria-label="December 29, 2024">29</span><span
                            class="flatpickr-day prevMonthDay flatpickr-disabled"
                            aria-label="December 30, 2024">30</span><span
                            class="flatpickr-day prevMonthDay flatpickr-disabled"
                            aria-label="December 31, 2024">31</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 1, 2025">1</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 2, 2025">2</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 3, 2025">3</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 4, 2025">4</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 5, 2025">5</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 6, 2025">6</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 7, 2025">7</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 8, 2025">8</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 9, 2025">9</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 10, 2025">10</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 11, 2025">11</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 12, 2025">12</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 13, 2025">13</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 14, 2025">14</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 15, 2025">15</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 16, 2025">16</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 17, 2025">17</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 18, 2025">18</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 19, 2025">19</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 20, 2025">20</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 21, 2025">21</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 22, 2025">22</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 23, 2025">23</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 24, 2025">24</span><span class="flatpickr-day" aria-label="January 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="January 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="January 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="January 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="January 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 30, 2025">30</span><span class="flatpickr-day flatpickr-disabled"
                            aria-label="January 31, 2025">31</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled"
                            aria-label="February 1, 2025">1</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled"
                            aria-label="February 2, 2025">2</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled"
                            aria-label="February 3, 2025">3</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled"
                            aria-label="February 4, 2025">4</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled"
                            aria-label="February 5, 2025">5</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled"
                            aria-label="February 6, 2025">6</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled"
                            aria-label="February 7, 2025">7</span><span
                            class="flatpickr-day nextMonthDay flatpickr-disabled" aria-label="February 8, 2025">8</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="December 29, 2024"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="December 30, 2024"
                            tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="December 31, 2024"
                            tabindex="-1">31</span><span class="flatpickr-day" aria-label="January 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="January 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="January 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="January 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="January 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="January 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="January 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="January 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="January 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day" aria-label="January 10, 2025"
                            tabindex="-1">10</span><span class="flatpickr-day" aria-label="January 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="January 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="January 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="January 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="January 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="January 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="January 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="January 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="January 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="January 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="January 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="January 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="January 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="January 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day selected" aria-label="January 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="January 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="January 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="January 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="January 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="January 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="January 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="February 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="February 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="February 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="February 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="February 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="February 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="February 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="February 8, 2025"
                            tabindex="-1">8</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day today" aria-label="May 10, 2025"
                            aria-current="date" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                            tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day today" aria-label="May 10, 2025"
                            aria-current="date" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                            tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar rangeMode animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day today" aria-label="May 10, 2025"
                            aria-current="date" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                            tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar hasWeeks animate" tabindex="-1" style="width: 349px;">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                        tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-weekwrapper"><span class="flatpickr-weekday">Wk</span>
                <div class="flatpickr-weeks"><span class="flatpickr-day">18</span><span class="flatpickr-day">19</span><span
                        class="flatpickr-day">20</span><span class="flatpickr-day">21</span><span
                        class="flatpickr-day">22</span><span class="flatpickr-day">23</span></div>
            </div>
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1" style="width: 309px;">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025"
                            tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025"
                            tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025"
                            tabindex="-1">9</span><span class="flatpickr-day today" aria-label="May 10, 2025"
                            aria-current="date" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025"
                            tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025"
                            tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025"
                            tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025"
                            tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025"
                            tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025"
                            tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025"
                            tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025"
                            tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025"
                            tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025"
                            tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025"
                            tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025"
                            tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025"
                            tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025"
                            tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025"
                            tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025"
                            tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025"
                            tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025"
                            tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025"
                            tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025"
                            tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025"
                            tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025"
                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025"
                            tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025"
                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025"
                            tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025"
                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025"
                            tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025"
                            tabindex="-1">7</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatpickr-calendar hasTime noCalendar animate" tabindex="-1">
        <div class="flatpickr-time" tabindex="-1">
            <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                    tabindex="-1" step="1" min="1" max="12" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-time-separator">:</span>
            <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                    tabindex="-1" step="5" min="0" max="59" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-am-pm" title="Click to toggle"
                tabindex="-1">PM</span>
        </div>
    </div>
    <div class="flatpickr-calendar hasTime noCalendar animate" tabindex="-1">
        <div class="flatpickr-time time24hr" tabindex="-1">
            <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                    tabindex="-1" step="1" min="0" max="23" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-time-separator">:</span>
            <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                    tabindex="-1" step="5" min="0" max="59" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div>
        </div>
    </div>
    <div class="flatpickr-calendar hasTime noCalendar animate" tabindex="-1">
        <div class="flatpickr-time" tabindex="-1">
            <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                    tabindex="-1" step="1" min="1" max="12" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-time-separator">:</span>
            <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                    tabindex="-1" step="5" min="0" max="59" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-am-pm" title="Click to toggle"
                tabindex="-1">PM</span>
        </div>
    </div>
    <div class="flatpickr-calendar hasTime noCalendar animate" tabindex="-1">
        <div class="flatpickr-time" tabindex="-1">
            <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                    tabindex="-1" step="1" min="1" max="12" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-time-separator">:</span>
            <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                    tabindex="-1" step="5" min="0" max="59" maxlength="2"><span class="arrowUp"></span><span
                    class="arrowDown"></span></div><span class="flatpickr-am-pm" title="Click to toggle"
                tabindex="-1">PM</span>
        </div>
    </div>
@endpush
