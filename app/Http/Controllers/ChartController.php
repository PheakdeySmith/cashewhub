<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function area()
    {
        return view('backends.dashboard.chart.area');
    }

    public function bar()
    {
        return view('backends.dashboard.chart.bar');
    }

    public function bubble()
    {
        return view('backends.dashboard.chart.bubble');
    }

    public function candlestick()
    {
        return view('backends.dashboard.chart.candlestick');
    }
}
