<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
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
