@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush


@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Tabs</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                <li class="breadcrumb-item active">Tabs</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Default Tabs</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Simple widget of tabbable panes of local content.</p>

                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                Home
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" aria-selected="true" role="tab">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                Settings
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#" data-bs-toggle="tab" aria-expanded="false" class="nav-link disabled" aria-selected="false" tabindex="-1" role="tab">
                                Disabled
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane" id="home" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies.</p>
                        </div>
                        <div class="tab-pane show active" id="profile" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span> "Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally.</p>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Tabs Justified</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">Using class <code>.nav-justified</code>, you can force your <code>tab menu items</code> to use the full available width.</p>

                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0" aria-selected="false" tabindex="-1" role="tab">
                                Home
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active" aria-selected="true" role="tab">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0" aria-selected="false" tabindex="-1" role="tab">
                                Settings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane" id="home1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies.</p>
                        </div>
                        <div class="tab-pane show active" id="profile1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span> "Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally.</p>
                        </div>
                        <div class="tab-pane" id="settings1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Tabs Vertical Left</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        You can stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                    </p>
                    <div class="row">
                        <div class="col-sm-3 mb-2 mb-sm-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="https://coderthemes.com/boron/layouts/ui-tabs.html#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <i class="ti ti-home fs-18 me-1"></i> Home
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="https://coderthemes.com/boron/layouts/ui-tabs.html#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                                    <i class="ti ti-user-circle fs-18 me-1"></i> Profile
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="https://coderthemes.com/boron/layouts/ui-tabs.html#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">
                                    <i class="ti ti-settings fs-18 me-1"></i> Settings
                                </a>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies. Explore our wide variety of products and find exactly what you need to make your house feel like a home. With our affordable prices and high-quality items.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span>Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally. Outside of my pursuits, you can often find me immersed in a good book, exploring the outdoors, or experimenting in the kitchen.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                                </div>
                            </div> <!-- end tab-content-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Tabs Vertical Right</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        You can stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                    </p>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="tab-content" id="v-pills-tabContent-right">
                                <div class="tab-pane fade active show" id="v-pills-home2" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies. Explore our wide variety of products and find exactly what you need to make your house feel like a home. With our affordable prices and high-quality items.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span>Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally. Outside of my pursuits, you can often find me immersed in a good book, exploring the outdoors, or experimenting in the kitchen.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                                </div>
                            </div> <!-- end tabcontent-->
                        </div> <!-- end col-->

                        <div class="col-sm-3 mt-2 mt-sm-0">
                            <div class="nav flex-column nav-pills nav-pills-secondary" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show" id="v-pills-home-tab2" data-bs-toggle="pill" href="https://coderthemes.com/boron/layouts/ui-tabs.html#v-pills-home2" role="tab" aria-controls="v-pills-home2" aria-selected="true">
                                    <i class="ti ti-home fs-18 me-1"></i>
                                    <span class="d-none d-md-inline-block">Home</span>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab2" data-bs-toggle="pill" href="https://coderthemes.com/boron/layouts/ui-tabs.html#v-pills-profile2" role="tab" aria-controls="v-pills-profile2" aria-selected="false" tabindex="-1">
                                    <i class="ti ti-user-circle fs-18 me-1"></i>
                                    <span class="d-none d-md-inline-block">Profile</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab2" data-bs-toggle="pill" href="https://coderthemes.com/boron/layouts/ui-tabs.html#v-pills-settings2" role="tab" aria-controls="v-pills-settings2" aria-selected="false" tabindex="-1">
                                    <i class="ti ti-settings fs-18 me-1"></i>
                                    <span class="d-none d-md-inline-block">Settings</span>
                                </a>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Tabs Bordered</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        The navigation item can have a simple bottom border as well. Just specify the class <code>.nav-bordered</code>.
                    </p>
                    <ul class="nav nav-tabs nav-bordered mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <i class="ti ti-home fs-18 me-md-1"></i>
                                <span class="d-none d-md-inline-block">Home</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#profile-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" aria-selected="true" role="tab">
                                <i class="ti ti-user-circle fs-18 me-md-1"></i>
                                <span class="d-none d-md-inline-block">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#settings-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <i class="ti ti-settings fs-18 me-md-1"></i>
                                <span class="d-none d-md-inline-block">Settings</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane" id="home-b1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies.</p>
                        </div>
                        <div class="tab-pane show active" id="profile-b1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span> "Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally.</p>
                        </div>
                        <div class="tab-pane" id="settings-b1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Tabs Bordered Justified</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        The navigation item with a simple bottom border and justified
                    </p>
                    <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-danger mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <i class="ti ti-home fs-18 me-md-1"></i>
                                <span class="d-none d-md-inline-block">Home</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" aria-selected="true" role="tab">
                                <i class="ti ti-user-circle fs-18 me-md-1"></i>
                                <span class="d-none d-md-inline-block">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#settings-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <i class="ti ti-settings fs-18 me-md-1"></i>
                                <span class="d-none d-md-inline-block">Settings</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane" id="home-b2" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies.</p>
                        </div>
                        <div class="tab-pane show active" id="profile-b2" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span> "Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally.</p>
                        </div>
                        <div class="tab-pane" id="settings-b2" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Icons Tabs</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        The navigation item can have a simple bottom border as well. Just specify the class <code>.nav-bordered</code>.
                    </p>
                    <ul class="nav nav-tabs nav-bordered nav-bordered-success mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#home-i1" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <iconify-icon icon="solar:home-2-bold-duotone" class="fs-24 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12.204c0-2.289 0-3.433.52-4.381c.518-.949 1.467-1.537 3.364-2.715l2-1.241C9.889 2.622 10.892 2 12 2s2.11.622 4.116 1.867l2 1.241c1.897 1.178 2.846 1.766 3.365 2.715S22 9.915 22 12.203v1.522c0 3.9 0 5.851-1.172 7.063S17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.212S2 17.626 2 13.725z" opacity=".5"></path><path fill="currentColor" d="M11.25 18a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0z"></path></svg></template></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#profile-i1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" aria-selected="true" role="tab">
                                <iconify-icon icon="solar:user-id-bold-duotone" class="fs-24 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M14 4h-4C6.229 4 4.343 4 3.172 5.172S2 8.229 2 12s0 5.657 1.172 6.828S6.229 20 10 20h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12s0-5.657-1.172-6.828S17.771 4 14 4" opacity=".5"></path><path fill="currentColor" d="M13.25 9a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75m1 3a.75.75 0 0 1 .75-.75h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75m1 3a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5h-3a.75.75 0 0 1-.75-.75M9 11a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 6c4 0 4-.895 4-2s-1.79-2-4-2s-4 .895-4 2s0 2 4 2"></path></svg></template></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#settings-i1" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <iconify-icon icon="solar:settings-bold-duotone" class="fs-24 align-middle"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M14.279 2.152C13.909 2 13.439 2 12.5 2s-1.408 0-1.779.152a2 2 0 0 0-1.09 1.083c-.094.223-.13.484-.145.863a1.62 1.62 0 0 1-.796 1.353a1.64 1.64 0 0 1-1.579.008c-.338-.178-.583-.276-.825-.308a2.03 2.03 0 0 0-1.49.396c-.318.242-.553.646-1.022 1.453c-.47.807-.704 1.21-.757 1.605c-.07.526.074 1.058.4 1.479c.148.192.357.353.68.555c.477.297.783.803.783 1.361s-.306 1.064-.782 1.36c-.324.203-.533.364-.682.556a2 2 0 0 0-.399 1.479c.053.394.287.798.757 1.605s.704 1.21 1.022 1.453c.424.323.96.465 1.49.396c.242-.032.487-.13.825-.308a1.64 1.64 0 0 1 1.58.008c.486.28.774.795.795 1.353c.015.38.051.64.145.863c.204.49.596.88 1.09 1.083c.37.152.84.152 1.779.152s1.409 0 1.779-.152a2 2 0 0 0 1.09-1.083c.094-.223.13-.483.145-.863c.02-.558.309-1.074.796-1.353a1.64 1.64 0 0 1 1.579-.008c.338.178.583.276.825.308c.53.07 1.066-.073 1.49-.396c.318-.242.553-.646 1.022-1.453c.47-.807.704-1.21.757-1.605a2 2 0 0 0-.4-1.479c-.148-.192-.357-.353-.68-.555c-.477-.297-.783-.803-.783-1.361s.306-1.064.782-1.36c.324-.203.533-.364.682-.556a2 2 0 0 0 .399-1.479c-.053-.394-.287-.798-.757-1.605s-.704-1.21-1.022-1.453a2.03 2.03 0 0 0-1.49-.396c-.242.032-.487.13-.825.308a1.64 1.64 0 0 1-1.58-.008a1.62 1.62 0 0 1-.795-1.353c-.015-.38-.051-.64-.145-.863a2 2 0 0 0-1.09-1.083" clip-rule="evenodd" opacity=".5"></path><path fill="currentColor" d="M15.523 12c0 1.657-1.354 3-3.023 3s-3.023-1.343-3.023-3S10.83 9 12.5 9s3.023 1.343 3.023 3"></path></svg></template></iconify-icon>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane" id="home-i1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies.</p>
                        </div>
                        <div class="tab-pane show active" id="profile-i1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span> "Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally.</p>
                        </div>
                        <div class="tab-pane" id="settings-i1" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header card-tabs d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h4 class="header-title">Card with Tabs</h4>
                    </div>
                    <ul class="nav nav-tabs nav-justified card-header-tabs nav-bordered" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#home-ct" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <i class="ti ti-home d-md-none d-block"></i>
                                <span class="d-none d-md-block">Home</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#profile-ct" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" aria-selected="true" role="tab">
                                <i class="ti ti-user-circle d-md-none d-block"></i>
                                <span class="d-none d-md-block">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="https://coderthemes.com/boron/layouts/ui-tabs.html#settings-ct" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                                <i class="ti ti-settings d-md-none d-block"></i>
                                <span class="d-none d-md-block">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="home-ct" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-info-subtle text-info float-start">H</span>Welcome to our website! We are dedicated to providing you with the best products and services to enhance your home. Whether you're looking to spruce up your living space with stylish furniture, create a cozy atmosphere with our selection of home decor, or tackle those DIY projects with our range of tools and supplies.</p>
                        </div>
                        <div class="tab-pane show active" id="profile-ct" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-danger-subtle text-danger float-start">P</span> "Hi there! I'm a passionate individual who loves to explore new ideas and connect with like-minded people. My interests span a wide range of topics including technology, literature, travel, and fitness. I believe in the power of continuous learning and enjoy challenging myself to grow both personally and professionally.</p>
                        </div>
                        <div class="tab-pane" id="settings-ct" role="tabpanel">
                            <p class="mb-0"><span class="px-1 rounded me-1 fw-semibold d-inline-block bg-secondary-subtle text-secondary float-start">S</span>In the heart of a bustling city lies a quaint little cafe, nestled between towering skyscrapers and historic buildings. Its cozy interior boasts warm, earthy tones accented with splashes of vibrant colors, creating a welcoming atmosphere that beckons passersby to step inside.</p>
                        </div>
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
