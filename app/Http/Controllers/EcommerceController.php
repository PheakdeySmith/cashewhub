<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function product()
    {
        return view('backends.dashboard.ecommerce.product');
    }

    public function product_grid()
    {
        return view('backends.dashboard.ecommerce.product_grid');
    }

    public function product_detail()
    {
        return view('backends.dashboard.ecommerce.product_detail');
    }

    public function create()
    {
        return view('backends.dashboard.ecommerce.create');
    }

    public function category()
    {
        return view('backends.dashboard.ecommerce.categories');
    }

    public function order()
    {
        return view('backends.dashboard.ecommerce.order');
    }

    public function order_detail()
    {
        return view('backends.dashboard.ecommerce.order_detail');
    }

    public function customer()
    {
        return view('backends.dashboard.ecommerce.customer');
    }

    public function seller()
    {
        return view('backends.dashboard.ecommerce.seller');
    }
}
