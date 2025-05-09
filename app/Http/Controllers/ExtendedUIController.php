<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtendedUIController extends Controller
{
    public function dragula()
    {
        return view('backends.dashboard.extended_ui.dragula');
    }

    public function sweetAlert()
    {
        return view('backends.dashboard.extended_ui.sweet-alert');
    }


    public function rating()
    {
        return view('backends.dashboard.extended_ui.rating');
    }

    public function scrollBar()
    {
        return view('backends.dashboard.extended_ui.scrollbar');
    }
}
