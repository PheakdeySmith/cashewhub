<!DOCTYPE html>
<!-- saved from url=(0056)https://coderthemes.com/boron/layouts/tables-gridjs.html -->
<html lang="en" data-sidenav-size="default" data-bs-theme="light" data-menu-color="light" data-topbar-color="light"
    data-layout-mode="fluid">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Boron</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="https://coderthemes.com/boron/layouts/assets/images/favicon.ico">

    @stack('style')

    <!-- Theme Config Js -->
    <script src="{{ asset('assets') }}/js/config.js"></script>

    <!-- Vendor css -->
    <link href="{{ asset('assets') }}/css/vendor.min.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ asset('assets') }}/css/app.min.css" rel="stylesheet" type="text/css" id="app-style">

    <!-- Icons css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- Sidenav Menu Start -->
        @include('backends.partials.sidebar')
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        @include('backends.partials.navbar')
        <!-- Topbar End -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <div class="card mb-0 shadow-none">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                            <i class="ti ti-search fs-22"></i>
                            <input type="search" class="form-control border-0" id="search-modal-input"
                                placeholder="Search for actions, people,">
                            <button type="button" class="btn p-0" data-bs-dismiss="modal"
                                aria-label="Close">[esc]</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

             @yield('content')


            <!-- Footer Start -->
            @include('backends.partials.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    @include('backends.partials.theme-settings')


    <!-- Vendor js -->
    <script src="{{ asset('assets') }}/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('assets') }}/js/app.js"></script>

    <!-- Extented Js -->
    @stack('script')


</body>

</html>
