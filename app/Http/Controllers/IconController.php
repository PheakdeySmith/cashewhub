<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconController extends Controller
{
    public function tabler()
    {
        return view('backends.dashboard.icon.tabler');
    }

    public function solar()
    {
        return view('backends.dashboard.icon.solar');
    }
}
