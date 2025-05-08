<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="{{ route('dashboard.index') }}" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{ asset('assets') }}/images/logo.png" alt="logo"></span>
            <span class="logo-sm text-center"><img src="{{ asset('assets') }}/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{ asset('assets') }}/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm text-center"><img src="{{ asset('assets') }}/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar="init" class="simplebar-scrollable-y">
        <div class="simplebar-content-wrapper active" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%;">
            <div class="simplebar-content">

                <!--- Sidenav Menu -->
                <ul class="side-nav">

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.index') }}" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                            <span class="menu-text"> Dashboard </span>
                            <span class="badge bg-success rounded-pill">5</span>
                        </a>
                    </li>

                    <li class="side-nav-title mt-2">Apps &amp; Pages</li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.chat') }}" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-message-filled"></i></span>
                            <span class="menu-text"> Chat </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.calendar') }}" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-calendar-filled"></i></span>
                            <span class="menu-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.email') }}" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-inbox"></i></span>
                            <span class="menu-text"> Email </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.file_manager') }}" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-folder-filled"></i></span>
                            <span class="menu-text"> File Manager </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-basket-filled"></i></span>
                            <span class="menu-text"> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.index') }}" class="side-nav-link">
                                        <span class="menu-text">Products</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.grid') }}" class="side-nav-link">
                                        <span class="menu-text">Products Grid</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.productDetail') }}" class="side-nav-link">
                                        <span class="menu-text">Product Details</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.create') }}" class="side-nav-link">
                                        <span class="menu-text">Add Products</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.categories') }}" class="side-nav-link">
                                        <span class="menu-text">Categories</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.order') }}" class="side-nav-link">
                                        <span class="menu-text">Orders</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.orderDetail') }}" class="side-nav-link">
                                        <span class="menu-text">Order Details</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.customer') }}" class="side-nav-link">
                                        <span class="menu-text">Customers</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('ecommerce.seller') }}" class="side-nav-link">
                                        <span class="menu-text">Sellers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-file-invoice"></i></span>
                            <span class="menu-text"> Invoice</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarInvoice">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ route('invoice.index') }}" class="side-nav-link">
                                        <span class="menu-text">Invoices</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('invoice.invoiceDetail') }}" class="side-nav-link">
                                        <span class="menu-text">View Invoice</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('invoice.create') }}" class="side-nav-link">
                                        <span class="menu-text">Create Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-files"></i></span>
                            <span class="menu-text"> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ route('page.starter_page') }}" class="side-nav-link">
                                        <span class="menu-text">Starter Page</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('page.faq') }}" class="side-nav-link">
                                        <span class="menu-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('page.maintenance') }}" class="side-nav-link">
                                        <span class="menu-text">Maintenance</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('page.timeline') }}" class="side-nav-link">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('page.coming_soon') }}" class="side-nav-link">
                                        <span class="menu-text">Coming Soon</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('page.pricing') }}" class="side-nav-link">
                                        <span class="menu-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('page.term') }}" class="side-nav-link">
                                        <span class="menu-text">Terms &amp; Conditions</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-lock-filled"></i></span>
                            <span class="menu-text"> Auth Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesAuth">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.login') }}" class="side-nav-link">
                                        <span class="menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.signup') }}" class="side-nav-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.logout') }}" class="side-nav-link">
                                        <span class="menu-text">Logout</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.recoverpw') }}" class="side-nav-link">
                                        <span class="menu-text">Recover Password</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.createpw') }}" class="side-nav-link">
                                        <span class="menu-text">Create Password</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.lockscreen') }}" class="side-nav-link">
                                        <span class="menu-text">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.confirmMail') }}" class="side-nav-link">
                                        <span class="menu-text">Confirm Mail</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.loginPin') }}" class="side-nav-link">
                                        <span class="menu-text">Login with PIN</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.2fa') }}" class="side-nav-link">
                                        <span class="menu-text">2FA</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('auth.deactivation') }}" class="side-nav-link">
                                        <span class="menu-text">Account Deactivation</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-server-2"></i></span>
                            <span class="menu-text"> Error Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesError">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ route('error.400') }}" class="side-nav-link">
                                        <span class="menu-text">400 Bad Request</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.401') }}" class="side-nav-link">
                                        <span class="menu-text">401 Unauthorized</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.403') }}" class="side-nav-link">
                                        <span class="menu-text">403 Forbidden</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.404') }}" class="side-nav-link">
                                        <span class="menu-text">404 Not Found</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.408') }}" class="side-nav-link">
                                        <span class="menu-text">408 Request Timeout</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.500') }}" class="side-nav-link">
                                        <span class="menu-text">500 Internal Server</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.501') }}" class="side-nav-link">
                                        <span class="menu-text">501 Not Implemented</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.502') }}" class="side-nav-link">
                                        <span class="menu-text">502 Service Overloaded</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.503') }}" class="side-nav-link">
                                        <span class="menu-text">Service Unavailable</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ route('error.404-alt') }}" class="side-nav-link">
                                        <span class="menu-text">Error 404 Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
