@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Form Wizard</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>

                    <li class="breadcrumb-item active">Form Wizard</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">A Basic Wizard</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div id="basicwizard">
                                <ul class="nav nav-pills nav-justified form-wizard-header mb-4" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#basictab1"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2 active"
                                            aria-selected="true" role="tab">
                                            <i class="bi bi-person-circle fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#basictab2"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                            aria-selected="false" tabindex="-1" role="tab">
                                            <i class="bi bi-emoji-smile fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#basictab3"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                            aria-selected="false" tabindex="-1" role="tab">
                                            <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Finish</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0">
                                    <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName">User name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="userName"
                                                            name="userName" value="johne">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password"> Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password" name="password"
                                                            class="form-control" value="123456789">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="confirm">Re
                                                        Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="confirm" name="confirm"
                                                            class="form-control" value="123456789">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="basictab2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name"> First
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" value="Francis">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname"> Last
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="surname" name="surname"
                                                            class="form-control" value="Brinkman">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="email">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="email" name="email"
                                                            class="form-control" value="cory1979@hotmail.com">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="basictab3" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <h2 class="mt-0"><i class="bi bi-check2-all"></i></h2>
                                                    <h3 class="mt-0">Thank you !</h3>

                                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus.
                                                        Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                                        dui. Aliquam
                                                        mattis dictum aliquet.</p>

                                                    <div class="mb-3">
                                                        <div class="form-check d-inline-block">
                                                            <input type="checkbox" class="form-check-input fs-15"
                                                                id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">I agree
                                                                with the Terms and Conditions</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                                        <div class="first">
                                            <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                First
                                            </a>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="previous">
                                                <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                    <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                                </a>
                                            </div>
                                            <div class="next">
                                                <a href="javascript:void(0);" class="btn btn-primary mt-3 mt-md-0">
                                                    Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="last">
                                            <a href="javascript:void(0);" class="btn btn-primary mt-3 mt-md-0">
                                                Finish
                                            </a>
                                        </div>
                                    </div>
                                </div> <!-- tab-content -->

                            </div> <!-- end #basicwizard-->
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Wizard With Progress Bar</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div id="progressbarwizard">

                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#account-2"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2 active"
                                            aria-selected="true" role="tab">
                                            <i class="bi bi-person-circle fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#profile-tab-2"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                            aria-selected="false" tabindex="-1" role="tab">
                                            <i class="bi bi-emoji-smile fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#finish-2"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                            aria-selected="false" tabindex="-1" role="tab">
                                            <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Finish</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0">

                                    <div id="bar" class="progress mb-3" style="height: 7px;">
                                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                                            style="width: 33.3333%;"></div>
                                    </div>

                                    <div class="tab-pane active show" id="account-2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName1">User
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="userName1"
                                                            name="userName1" value="johne">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password1">
                                                        Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password1" name="password1"
                                                            class="form-control" value="123456789">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="confirm1">Re
                                                        Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="confirm1" name="confirm1"
                                                            class="form-control" value="123456789">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="profile-tab-2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name1"> First
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name1" name="name1"
                                                            class="form-control" value="Francis">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname1"> Last
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="surname1" name="surname1"
                                                            class="form-control" value="Brinkman">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="email1">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="email1" name="email1"
                                                            class="form-control" value="cory1979@hotmail.com">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="finish-2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <h2 class="mt-0"><i class="bi bi-check2-all"></i></h2>
                                                    <h3 class="mt-0">Thank you !</h3>

                                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus.
                                                        Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                                        dui. Aliquam
                                                        mattis dictum aliquet.</p>

                                                    <div class="mb-3">
                                                        <div class="form-check d-inline-block">
                                                            <input type="checkbox" class="form-check-input fs-15"
                                                                id="customCheck3">
                                                            <label class="form-check-label" for="customCheck3">I agree
                                                                with the Terms and Conditions</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                                        <div class="first">
                                            <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                First
                                            </a>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="previous">
                                                <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                    <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                                </a>
                                            </div>
                                            <div class="next">
                                                <a href="javascript:void(0);" class="btn btn-primary mt-3 mt-md-0">
                                                    Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="last">
                                            <a href="javascript:void(0);" class="btn btn-primary mt-3 mt-md-0">
                                                Finish
                                            </a>
                                        </div>
                                    </div>

                                </div> <!-- tab-content -->
                            </div> <!-- end #progressbarwizard-->
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Wizard With Form Validation</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div id="validation-wizard">
                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3" role="tablist">
                                    <li class="nav-item" data-target-form="#accountForm" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#first"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2 active"
                                            aria-selected="true" role="tab">
                                            <i class="bi bi-person-circle fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-target-form="#profileForm" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#second"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                            aria-selected="false" tabindex="-1" role="tab">
                                            <i class="bi bi-emoji-smile fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-target-form="#otherForm" role="presentation">
                                        <a href="https://coderthemes.com/boron/layouts/form-wizard.html#third"
                                            data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                            aria-selected="false" tabindex="-1" role="tab">
                                            <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                            <span class="d-none d-sm-inline">Finish</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active show" id="first" role="tabpanel">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName3">User
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="userName3"
                                                            name="userName3" required="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password3">
                                                        Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password3" name="password3"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="confirm3">Re
                                                        Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="confirm3" name="confirm3"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                    </div>

                                    <div class="tab-pane fade" id="second" role="tabpanel">
                                        <form id="profileForm" method="post"
                                            action="https://coderthemes.com/boron/layouts/form-wizard.html#"
                                            class="form-horizontal">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name3"> First
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="name3" name="name3"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname3"> Last
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="surname3" name="surname3"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label"
                                                            for="email3">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="email3" name="email3"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="third" role="tabpanel">
                                        <form id="otherForm" method="post"
                                            action="https://coderthemes.com/boron/layouts/form-wizard.html#"
                                            class="form-horizontal">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0">
                                                            <i class="bi bi-check2-all"></i>
                                                        </h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum
                                                            luctus. Suspendisse convallis dignissim eros at volutpat. In
                                                            egestas mattis
                                                            dui. Aliquam mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="form-check d-inline-block">
                                                                <input type="checkbox" class="form-check-input fs-15"
                                                                    id="customCheck4" required="">
                                                                <label class="form-check-label" for="customCheck4">I agree
                                                                    with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </form>
                                    </div>

                                    <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                                        <div class="first">
                                            <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                First
                                            </a>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="previous">
                                                <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                    <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                                </a>
                                            </div>
                                            <div class="next">
                                                <a href="javascript:void(0);" class="btn btn-primary mt-3 mt-md-0">
                                                    Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="last">
                                            <a href="javascript:void(0);" class="btn btn-primary mt-3 mt-md-0">
                                                Finish
                                            </a>
                                        </div>
                                    </div>

                                </div> <!-- tab-content -->
                            </div>
                        </form> <!-- end #validation-wizard-->

                    </div>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->
@endsection


@push('script')
    <!-- Bootstrap Wizard Form js -->
    <script src="{{ asset('assets') }}/js/wizard.min.js"></script>

    <!-- Wizard Form Demo js -->
    <script src="{{ asset('assets') }}/js/form-wizard.js"></script>
@endpush
