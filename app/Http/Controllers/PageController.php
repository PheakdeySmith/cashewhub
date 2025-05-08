<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function starter_page()
    {
        return view('backends.dashboard.pages.starter_page');
    }

    public function faq()
    {
        return view('backends.dashboard.pages.faq');
    }

    public function maintenance()
    {
        return view('backends.dashboard.pages.maintenance');
    }

    public function timeline()
    {
        return view('backends.dashboard.pages.timeline');
    }

    public function coming_soon()
    {
        return view('backends.dashboard.pages.coming_soon');
    }

    public function pricing()
    {
        return view('backends.dashboard.pages.pricing');
    }

    public function term()
    {
        return view('backends.dashboard.pages.term');
    }
}
