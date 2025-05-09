<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\BaseUIController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ExtendedUIController;
use App\Http\Controllers\AuthenticationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Dashboard Tabs
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/chat', [DashboardController::class, 'chat'])->name('dashboard.chat');
Route::get('/calendar', [DashboardController::class, 'calendar'])->name('dashboard.calendar');
Route::get('/email', [DashboardController::class, 'email'])->name('dashboard.email');
Route::get('/file_manager', [DashboardController::class, 'file_manager'])->name('dashboard.file_manager');

// Ecommerce
Route::get('/products', [EcommerceController::class, 'product'])->name('ecommerce.index');
Route::get('/products_grid', [EcommerceController::class, 'product_grid'])->name('ecommerce.grid');
Route::get('/products/detail', [EcommerceController::class, 'product_detail'])->name('ecommerce.productDetail');
Route::get('/products/create', [EcommerceController::class, 'create'])->name('ecommerce.create');
Route::get('/categories', [EcommerceController::class, 'category'])->name('ecommerce.categories');
Route::get('/orders', [EcommerceController::class, 'order'])->name('ecommerce.order');
Route::get('/orders/detail', [EcommerceController::class, 'order_detail'])->name('ecommerce.orderDetail');
Route::get('/customers', [EcommerceController::class, 'customer'])->name('ecommerce.customer');
Route::get('/sellers', [EcommerceController::class, 'seller'])->name('ecommerce.seller');

// Invoice
Route::get('/invoices', [InvoiceController::class, 'invoice'])->name('invoice.index');
Route::get('/invoices/detail', [InvoiceController::class, 'invoice_detail'])->name('invoice.invoiceDetail');
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoice.create');

// Pages
Route::get('/starter_page', [PageController::class, 'starter_page'])->name('page.starter_page');
Route::get('/faq', [PageController::class, 'faq'])->name('page.faq');
Route::get('/maintenance', [PageController::class, 'maintenance'])->name('page.maintenance');
Route::get('/timeline', [PageController::class, 'timeline'])->name('page.timeline');
Route::get('/coming_soon', [PageController::class, 'coming_soon'])->name('page.coming_soon');
Route::get('/pricing', [PageController::class, 'pricing'])->name('page.pricing');
Route::get('/term', [PageController::class, 'term'])->name('page.term');

// Authentication
Route::get('/login', [AuthenticationController::class, 'login'])->name('auth.login');
Route::get('/signup', [AuthenticationController::class, 'signup'])->name('auth.signup');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('auth.logout');
Route::get('/recoverpw', [AuthenticationController::class, 'recoverpw'])->name('auth.recoverpw');
Route::get('/createpw', [AuthenticationController::class, 'createpw'])->name('auth.createpw');
Route::get('/lockscreen', [AuthenticationController::class, 'lockscreen'])->name('auth.lockscreen');
Route::get('/confirm-mail', [AuthenticationController::class, 'confirm_mail'])->name('auth.confirmMail');
Route::get('/login-pin', [AuthenticationController::class, 'login_pin'])->name('auth.loginPin');
Route::get('/2fa', [AuthenticationController::class, 'fa'])->name('auth.2fa');
Route::get('/deactivation', [AuthenticationController::class, 'deactivation'])->name('auth.deactivation');

// Error Pages
Route::get('/error_400', [ErrorController::class, 'error_400'])->name('error.400');
Route::get('/error_401', [ErrorController::class, 'error_401'])->name('error.401');
Route::get('/error_403', [ErrorController::class, 'error_403'])->name('error.403');
Route::get('/error_404', [ErrorController::class, 'error_404'])->name('error.404');
Route::get('/error_408', [ErrorController::class, 'error_408'])->name('error.408');
Route::get('/error_500', [ErrorController::class, 'error_500'])->name('error.500');
Route::get('/error_501', [ErrorController::class, 'error_501'])->name('error.501');
Route::get('/error_502', [ErrorController::class, 'error_502'])->name('error.502');
Route::get('/error_503', [ErrorController::class, 'error_503'])->name('error.503');
Route::get('/error_503', [ErrorController::class, 'error_503'])->name('error.503');
Route::get('/error_404-alt', [ErrorController::class, 'alt_404'])->name('error.404-alt');

// Base UI
Route::get('/base_ui/accordion', [BaseUIController::class, 'accordion'])->name('base_ui.accordion');
Route::get('/base_ui/alert', [BaseUIController::class, 'alert'])->name('base_ui.alert');
Route::get('/base_ui/avatar', [BaseUIController::class, 'avatar'])->name('base_ui.avatar');
Route::get('/base_ui/badge', [BaseUIController::class, 'badge'])->name('base_ui.badge');
Route::get('/base_ui/breadcrumb', [BaseUIController::class, 'breadcrumb'])->name('base_ui.breadcrumb');
Route::get('/base_ui/button', [BaseUIController::class, 'button'])->name('base_ui.button');
Route::get('/base_ui/card', [BaseUIController::class, 'card'])->name('base_ui.card');
Route::get('/base_ui/carousel', [BaseUIController::class, 'carousel'])->name('base_ui.carousel');
Route::get('/base_ui/collapse', [BaseUIController::class, 'collapse'])->name('base_ui.collapse');
Route::get('/base_ui/dropdown', [BaseUIController::class, 'dropdown'])->name('base_ui.dropdown');
Route::get('/base_ui/ratio', [BaseUIController::class, 'ratio'])->name('base_ui.ratio');
Route::get('/base_ui/grid', [BaseUIController::class, 'grid'])->name('base_ui.grid');
Route::get('/base_ui/link', [BaseUIController::class, 'link'])->name('base_ui.link');
Route::get('/base_ui/list-group', [BaseUIController::class, 'list_group'])->name('base_ui.list_group');
Route::get('/base_ui/modal', [BaseUIController::class, 'modal'])->name('base_ui.modal');
Route::get('/base_ui/notification', [BaseUIController::class, 'notification'])->name('base_ui.notification');
Route::get('/base_ui/offcanvas', [BaseUIController::class, 'offcanvas'])->name('base_ui.offcanvas');
Route::get('/base_ui/placeholder', [BaseUIController::class, 'placeholder'])->name('base_ui.placeholder');
Route::get('/base_ui/pagination', [BaseUIController::class, 'pagination'])->name('base_ui.pagination');
Route::get('/base_ui/popover', [BaseUIController::class, 'popover'])->name('base_ui.popover');
Route::get('/base_ui/progress', [BaseUIController::class, 'progress'])->name('base_ui.progress');
Route::get('/base_ui/scrollspy', [BaseUIController::class, 'scrollspy'])->name('base_ui.scrollspy');
Route::get('/base_ui/spinner', [BaseUIController::class, 'spinner'])->name('base_ui.spinner');
Route::get('/base_ui/tab', [BaseUIController::class, 'tab'])->name('base_ui.tab');
Route::get('/base_ui/tooltip', [BaseUIController::class, 'tooltip'])->name('base_ui.tooltip');
Route::get('/base_ui/typography', [BaseUIController::class, 'typography'])->name('base_ui.typography');
Route::get('/base_ui/utilities', [BaseUIController::class, 'utilities'])->name('base_ui.utilities');

// Extended UI
Route::get('/extended_ui/dragula', [ExtendedUIController::class, 'dragula'])->name('extended_ui.dragula');
Route::get('/extended_ui/sweet-alert', [ExtendedUIController::class, 'sweetAlert'])->name('extended_ui.sweetAlert');
Route::get('/extended_ui/rating', [ExtendedUIController::class, 'rating'])->name('extended_ui.rating');
Route::get('/extended_ui/scroll-bar', [ExtendedUIController::class, 'scrollBar'])->name('extended_ui.scroll-bar');

// Icon
Route::get('/icon/tabler', [IconController::class, 'tabler'])->name('icon.tabler');
Route::get('/icon/solar', [IconController::class, 'solar'])->name('icon.solar');

// Chart
Route::get('/chart/area', [ChartController::class, 'area'])->name('chart.area');
Route::get('/chart/bar', [ChartController::class, 'bar'])->name('chart.bar');
Route::get('/chart/bubble', [ChartController::class, 'bubble'])->name('chart.bubble');
Route::get('/chart/candlestick', [ChartController::class, 'candlestick'])->name('chart.candlestick');