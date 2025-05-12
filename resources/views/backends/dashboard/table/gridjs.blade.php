@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/mermaid.min.css">
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Grid Js Tables</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                    <li class="breadcrumb-item active">Grid Js Tables</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title">Base Example</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-gridjs">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-head">
                                    <div class="gridjs-search"><input type="search" placeholder="Type a keyword..."
                                            aria-label="Type a keyword..." class="gridjs-input gridjs-search-input"
                                            value=""></div>
                                </div>
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="id" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 80px;">
                                                    <div class="gridjs-th-content">ID</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 150px;">
                                                    <div class="gridjs-th-content">Name</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 220px;">
                                                    <div class="gridjs-th-content">Email</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Position</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 180px;">
                                                    <div class="gridjs-th-content">Company</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 180px;">
                                                    <div class="gridjs-th-content">Country</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">11</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">John</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">john@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Developer</td>
                                                <td data-column-id="company" class="gridjs-td">ABC Corp</td>
                                                <td data-column-id="country" class="gridjs-td">USA</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">12</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Jane</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">jane@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Designer</td>
                                                <td data-column-id="company" class="gridjs-td">XYZ Inc</td>
                                                <td data-column-id="country" class="gridjs-td">Canada</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">13</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Alice</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">alice@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Manager</td>
                                                <td data-column-id="company" class="gridjs-td">123 Company</td>
                                                <td data-column-id="country" class="gridjs-td">Australia</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">14</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Bob</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">bob@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Engineer</td>
                                                <td data-column-id="company" class="gridjs-td">456 Ltd</td>
                                                <td data-column-id="country" class="gridjs-td">UK</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">15</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Eve</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">eve@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Analyst</td>
                                                <td data-column-id="company" class="gridjs-td">789 Enterprises</td>
                                                <td data-column-id="country" class="gridjs-td">France</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 2">Showing <b>1</b> to <b>5</b> of <b>10</b> results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                                title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="" title="Page 2" aria-label="Page 2">2</button><button
                                                tabindex="0" role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title">Pagination</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-pagination">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="id" class="gridjs-th" style="width: 80px;">
                                                    <div class="gridjs-th-content">ID</div>
                                                </th>
                                                <th data-column-id="name" class="gridjs-th" style="width: 150px;">
                                                    <div class="gridjs-th-content">Name</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th" style="width: 220px;">
                                                    <div class="gridjs-th-content">Email</div>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th" style="width: 250px;">
                                                    <div class="gridjs-th-content">Position</div>
                                                </th>
                                                <th data-column-id="company" class="gridjs-th" style="width: 180px;">
                                                    <div class="gridjs-th-content">Company</div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th" style="width: 180px;">
                                                    <div class="gridjs-th-content">Country</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">11</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">John</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">john@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Developer</td>
                                                <td data-column-id="company" class="gridjs-td">ABC Corp</td>
                                                <td data-column-id="country" class="gridjs-td">USA</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">12</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Jane</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">jane@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Designer</td>
                                                <td data-column-id="company" class="gridjs-td">XYZ Inc</td>
                                                <td data-column-id="country" class="gridjs-td">Canada</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">13</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Alice</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="https://coderthemes.com/boron/layouts/tables-gridjs.html">alice@example.com</a></span>
                                                </td>
                                                <td data-column-id="position" class="gridjs-td">Manager</td>
                                                <td data-column-id="company" class="gridjs-td">123 Company</td>
                                                <td data-column-id="country" class="gridjs-td">Australia</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 4">Showing <b>1</b> to <b>3</b> of <b>10</b> results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                                title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="" title="Page 2" aria-label="Page 2">2</button><button
                                                tabindex="0" role="button" class="" title="Page 3"
                                                aria-label="Page 3">3</button><button tabindex="-1"
                                                class="gridjs-spread">...</button><button tabindex="0" role="button"
                                                title="Page 4" aria-label="Page 4">4</button><button tabindex="0"
                                                role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title">Search</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-search">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-head">
                                    <div class="gridjs-search"><input type="search" placeholder="Type a keyword..."
                                            aria-label="Type a keyword..." class="gridjs-input gridjs-search-input"
                                            value=""></div>
                                </div>
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th" style="width: 150px;">
                                                    <div class="gridjs-th-content">Name</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th" style="width: 250px;">
                                                    <div class="gridjs-th-content">Email</div>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th" style="width: 250px;">
                                                    <div class="gridjs-th-content">Position</div>
                                                </th>
                                                <th data-column-id="company" class="gridjs-th" style="width: 250px;">
                                                    <div class="gridjs-th-content">Company</div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th" style="width: 150px;">
                                                    <div class="gridjs-th-content">Country</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">John</td>
                                                <td data-column-id="email" class="gridjs-td">john@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Developer</td>
                                                <td data-column-id="company" class="gridjs-td">ABC Corp</td>
                                                <td data-column-id="country" class="gridjs-td">USA</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Jane</td>
                                                <td data-column-id="email" class="gridjs-td">jane@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Designer</td>
                                                <td data-column-id="company" class="gridjs-td">XYZ Inc</td>
                                                <td data-column-id="country" class="gridjs-td">Canada</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Alice</td>
                                                <td data-column-id="email" class="gridjs-td">alice@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Manager</td>
                                                <td data-column-id="company" class="gridjs-td">123 Company</td>
                                                <td data-column-id="country" class="gridjs-td">Australia</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Bob</td>
                                                <td data-column-id="email" class="gridjs-td">bob@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Engineer</td>
                                                <td data-column-id="company" class="gridjs-td">456 Ltd</td>
                                                <td data-column-id="country" class="gridjs-td">UK</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Eve</td>
                                                <td data-column-id="email" class="gridjs-td">eve@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Analyst</td>
                                                <td data-column-id="company" class="gridjs-td">789 Enterprises</td>
                                                <td data-column-id="country" class="gridjs-td">France</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 2">Showing <b>1</b> to <b>5</b> of <b>10</b> results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                                title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="" title="Page 2" aria-label="Page 2">2</button><button
                                                tabindex="0" role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title">Sorting</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-sorting">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 150px;">
                                                    <div class="gridjs-th-content">Name</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Email</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Position</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="company" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Company</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 150px;">
                                                    <div class="gridjs-th-content">Country</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">John</td>
                                                <td data-column-id="email" class="gridjs-td">john@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Developer</td>
                                                <td data-column-id="company" class="gridjs-td">ABC Corp</td>
                                                <td data-column-id="country" class="gridjs-td">USA</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Jane</td>
                                                <td data-column-id="email" class="gridjs-td">jane@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Designer</td>
                                                <td data-column-id="company" class="gridjs-td">XYZ Inc</td>
                                                <td data-column-id="country" class="gridjs-td">Canada</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Alice</td>
                                                <td data-column-id="email" class="gridjs-td">alice@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Manager</td>
                                                <td data-column-id="company" class="gridjs-td">123 Company</td>
                                                <td data-column-id="country" class="gridjs-td">Australia</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Bob</td>
                                                <td data-column-id="email" class="gridjs-td">bob@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Engineer</td>
                                                <td data-column-id="company" class="gridjs-td">456 Ltd</td>
                                                <td data-column-id="country" class="gridjs-td">UK</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Eve</td>
                                                <td data-column-id="email" class="gridjs-td">eve@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Analyst</td>
                                                <td data-column-id="company" class="gridjs-td">789 Enterprises</td>
                                                <td data-column-id="country" class="gridjs-td">France</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 2">Showing <b>1</b> to <b>5</b> of <b>10</b> results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                                title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="" title="Page 2" aria-label="Page 2">2</button><button
                                                tabindex="0" role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title">Loading State</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-loading-state">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 150px;">
                                                    <div class="gridjs-th-content">Name</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Email</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Position</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="company" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Company</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 150px;">
                                                    <div class="gridjs-th-content">Country</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">John</td>
                                                <td data-column-id="email" class="gridjs-td">john@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Developer</td>
                                                <td data-column-id="company" class="gridjs-td">ABC Corp</td>
                                                <td data-column-id="country" class="gridjs-td">USA</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Jane</td>
                                                <td data-column-id="email" class="gridjs-td">jane@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Designer</td>
                                                <td data-column-id="company" class="gridjs-td">XYZ Inc</td>
                                                <td data-column-id="country" class="gridjs-td">Canada</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Alice</td>
                                                <td data-column-id="email" class="gridjs-td">alice@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Manager</td>
                                                <td data-column-id="company" class="gridjs-td">123 Company</td>
                                                <td data-column-id="country" class="gridjs-td">Australia</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Bob</td>
                                                <td data-column-id="email" class="gridjs-td">bob@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Engineer</td>
                                                <td data-column-id="company" class="gridjs-td">456 Ltd</td>
                                                <td data-column-id="country" class="gridjs-td">UK</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Eve</td>
                                                <td data-column-id="email" class="gridjs-td">eve@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Analyst</td>
                                                <td data-column-id="company" class="gridjs-td">789 Enterprises</td>
                                                <td data-column-id="country" class="gridjs-td">France</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 2">Showing <b>1</b> to <b>5</b> of <b>10</b> results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                                title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="" title="Page 2" aria-label="Page 2">2</button><button
                                                tabindex="0" role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title">Fixed Header</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-fixed-header">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: 400px;">
                                    <table role="grid" class="gridjs-table" style="height: 400px;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort gridjs-th-fixed"
                                                    tabindex="0" style="width: 150px; top: 0px;">
                                                    <div class="gridjs-th-content">Name</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="email"
                                                    class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0"
                                                    style="width: 250px; top: 0px;">
                                                    <div class="gridjs-th-content">Email</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position"
                                                    class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0"
                                                    style="width: 250px; top: 0px;">
                                                    <div class="gridjs-th-content">Position</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="company"
                                                    class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0"
                                                    style="width: 250px; top: 0px;">
                                                    <div class="gridjs-th-content">Company</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="country"
                                                    class="gridjs-th gridjs-th-sort gridjs-th-fixed" tabindex="0"
                                                    style="width: 150px; top: 0px;">
                                                    <div class="gridjs-th-content">Country</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">John</td>
                                                <td data-column-id="email" class="gridjs-td">john@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Developer</td>
                                                <td data-column-id="company" class="gridjs-td">ABC Corp</td>
                                                <td data-column-id="country" class="gridjs-td">USA</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Jane</td>
                                                <td data-column-id="email" class="gridjs-td">jane@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Designer</td>
                                                <td data-column-id="company" class="gridjs-td">XYZ Inc</td>
                                                <td data-column-id="country" class="gridjs-td">Canada</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Alice</td>
                                                <td data-column-id="email" class="gridjs-td">alice@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Manager</td>
                                                <td data-column-id="company" class="gridjs-td">123 Company</td>
                                                <td data-column-id="country" class="gridjs-td">Australia</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Bob</td>
                                                <td data-column-id="email" class="gridjs-td">bob@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Engineer</td>
                                                <td data-column-id="company" class="gridjs-td">456 Ltd</td>
                                                <td data-column-id="country" class="gridjs-td">UK</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Eve</td>
                                                <td data-column-id="email" class="gridjs-td">eve@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Analyst</td>
                                                <td data-column-id="company" class="gridjs-td">789 Enterprises</td>
                                                <td data-column-id="country" class="gridjs-td">France</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Charlie</td>
                                                <td data-column-id="email" class="gridjs-td">charlie@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Consultant</td>
                                                <td data-column-id="company" class="gridjs-td">Hello World</td>
                                                <td data-column-id="country" class="gridjs-td">Germany</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">David</td>
                                                <td data-column-id="email" class="gridjs-td">david@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Architect</td>
                                                <td data-column-id="company" class="gridjs-td">Goodbye World</td>
                                                <td data-column-id="country" class="gridjs-td">Japan</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Grace</td>
                                                <td data-column-id="email" class="gridjs-td">grace@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Programmer</td>
                                                <td data-column-id="company" class="gridjs-td">Foo Bar</td>
                                                <td data-column-id="country" class="gridjs-td">China</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Heather</td>
                                                <td data-column-id="email" class="gridjs-td">heather@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Supervisor</td>
                                                <td data-column-id="company" class="gridjs-td">Baz Qux</td>
                                                <td data-column-id="country" class="gridjs-td">Brazil</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Isaac</td>
                                                <td data-column-id="email" class="gridjs-td">isaac@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Administrator</td>
                                                <td data-column-id="company" class="gridjs-td">Fizz Buzz</td>
                                                <td data-column-id="country" class="gridjs-td">India</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 1">Showing <b>1</b> to <b>10</b> of <b>10</b> results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                                title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                disabled="" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title">Hidden Columns</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-hidden-column">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 120px;">
                                                    <div class="gridjs-th-content">Name</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Email</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Position</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="company" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Company</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">John</td>
                                                <td data-column-id="email" class="gridjs-td">john@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Developer</td>
                                                <td data-column-id="company" class="gridjs-td">ABC Corp</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Jane</td>
                                                <td data-column-id="email" class="gridjs-td">jane@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Designer</td>
                                                <td data-column-id="company" class="gridjs-td">XYZ Inc</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Alice</td>
                                                <td data-column-id="email" class="gridjs-td">alice@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Manager</td>
                                                <td data-column-id="company" class="gridjs-td">123 Company</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Bob</td>
                                                <td data-column-id="email" class="gridjs-td">bob@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Engineer</td>
                                                <td data-column-id="company" class="gridjs-td">456 Ltd</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Eve</td>
                                                <td data-column-id="email" class="gridjs-td">eve@example.com</td>
                                                <td data-column-id="position" class="gridjs-td">Analyst</td>
                                                <td data-column-id="company" class="gridjs-td">789 Enterprises</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 2">Showing <b>1</b> to <b>5</b> of <b>10</b> results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button"
                                                disabled="" title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="" title="Page 2" aria-label="Page 2">2</button><button
                                                tabindex="0" role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection


@push('script')
    <!-- gridjs js -->
    <script src="{{ asset('assets') }}/js/gridjs.umd.js"></script>

    <script src="{{ asset('assets') }}/js/table-gridjs.js"></script>
@endpush
