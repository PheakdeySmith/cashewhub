<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function basic()
    {
        return view('backends.dashboard.table.basic');
    }

    public function gridjs()
    {
        return view('backends.dashboard.table.gridjs');
    }
}
