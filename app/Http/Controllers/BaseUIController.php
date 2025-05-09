<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseUIController extends Controller
{
    public function accordion()
    {
        return view('backends.dashboard.base_ui.accordion');
    }

    public function alert()
    {
        return view('backends.dashboard.base_ui.alert');
    }

    public function avatar()
    {
        return view('backends.dashboard.base_ui.avatar');
    }

    public function badge()
    {
        return view('backends.dashboard.base_ui.badge');
    }

    public function breadcrumb()
    {
        return view('backends.dashboard.base_ui.breadcrumb');
    }

    public function button()
    {
        return view('backends.dashboard.base_ui.button');
    }

    public function card()
    {
        return view('backends.dashboard.base_ui.card');
    }

    public function carousel()
    {
        return view('backends.dashboard.base_ui.carousel');
    }

    public function collapse()
    {
        return view('backends.dashboard.base_ui.collapse');
    }

    public function dropdown()
    {
        return view('backends.dashboard.base_ui.dropdown');
    }

    public function ratio()
    {
        return view('backends.dashboard.base_ui.ratio');
    }

    public function grid()
    {
        return view('backends.dashboard.base_ui.grid');
    }

    public function link()
    {
        return view('backends.dashboard.base_ui.link');
    }

    public function list_group()
    {
        return view('backends.dashboard.base_ui.list-group');
    }

    public function modal()
    {
        return view('backends.dashboard.base_ui.modal');
    }

    public function notification()
    {
        return view('backends.dashboard.base_ui.notification');
    }

    public function offcanvas()
    {
        return view('backends.dashboard.base_ui.offcanvas');
    }

    public function placeholder()
    {
        return view('backends.dashboard.base_ui.placeholder');
    }

    public function pagination()
    {
        return view('backends.dashboard.base_ui.pagination');
    }

    public function popover()
    {
        return view('backends.dashboard.base_ui.popover');
    }

    public function progress()
    {
        return view('backends.dashboard.base_ui.progress');
    }

    public function scrollspy()
    {
        return view('backends.dashboard.base_ui.scrollspy');
    }

    public function spinner()
    {
        return view('backends.dashboard.base_ui.spinner');
    }

    public function tab()
    {
        return view('backends.dashboard.base_ui.tab');
    }

    public function tooltip()
    {
        return view('backends.dashboard.base_ui.tooltip');
    }

    public function typography()
    {
        return view('backends.dashboard.base_ui.typography');
    }

    public function utilities()
    {
        return view('backends.dashboard.base_ui.utilities');
    }

}
