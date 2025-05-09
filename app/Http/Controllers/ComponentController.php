<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function accordion()
    {
        return view('backends.dashboard.components.accordion');
    }

    public function alert()
    {
        return view('backends.dashboard.components.alert');
    }

    public function avatar()
    {
        return view('backends.dashboard.components.avatar');
    }

    public function badge()
    {
        return view('backends.dashboard.components.badge');
    }

    public function breadcrumb()
    {
        return view('backends.dashboard.components.breadcrumb');
    }

    public function button()
    {
        return view('backends.dashboard.components.button');
    }

    public function card()
    {
        return view('backends.dashboard.components.card');
    }

    public function carousel()
    {
        return view('backends.dashboard.components.carousel');
    }

    public function collapse()
    {
        return view('backends.dashboard.components.collapse');
    }

    public function dropdown()
    {
        return view('backends.dashboard.components.dropdown');
    }

    public function ratio()
    {
        return view('backends.dashboard.components.ratio');
    }

    public function grid()
    {
        return view('backends.dashboard.components.grid');
    }

    public function link()
    {
        return view('backends.dashboard.components.link');
    }

    public function list_group()
    {
        return view('backends.dashboard.components.list-group');
    }

    public function modal()
    {
        return view('backends.dashboard.components.modal');
    }

    public function notification()
    {
        return view('backends.dashboard.components.notification');
    }

    public function offcanvas()
    {
        return view('backends.dashboard.components.offcanvas');
    }

    public function placeholder()
    {
        return view('backends.dashboard.components.placeholder');
    }

    public function pagination()
    {
        return view('backends.dashboard.components.pagination');
    }

    public function popover()
    {
        return view('backends.dashboard.components.popover');
    }

    public function progress()
    {
        return view('backends.dashboard.components.progress');
    }

    public function scrollspy()
    {
        return view('backends.dashboard.components.scrollspy');
    }

    public function spinner()
    {
        return view('backends.dashboard.components.spinner');
    }

    public function tab()
    {
        return view('backends.dashboard.components.tab');
    }

    public function tooltip()
    {
        return view('backends.dashboard.components.tooltip');
    }

    public function typography()
    {
        return view('backends.dashboard.components.typography');
    }

    public function utilities()
    {
        return view('backends.dashboard.components.utilities');
    }

}
