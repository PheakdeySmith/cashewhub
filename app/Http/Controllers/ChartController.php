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

    public function column()
    {
        return view('backends.dashboard.chart.column');
    }

    public function heatmap()
    {
        return view('backends.dashboard.chart.heatmap');
    }

    public function line()
    {
        return view('backends.dashboard.chart.line');
    }

    public function mixed()
    {
        return view('backends.dashboard.chart.mixed');
    }

    public function timeline()
    {
        return view('backends.dashboard.chart.timeline');
    }

    public function boxplot()
    {
        return view('backends.dashboard.chart.boxplot');
    }

    public function treemap()
    {
        return view('backends.dashboard.chart.treemap');
    }

    public function pie()
    {
        return view('backends.dashboard.chart.pie');
    }

    public function radar()
    {
        return view('backends.dashboard.chart.radar');
    }

    public function radiabar()
    {
        return view('backends.dashboard.chart.radiabar');
    }

    public function scatter()
    {
        return view('backends.dashboard.chart.scatter');
    }

    public function polar()
    {
        return view('backends.dashboard.chart.polar');
    }

    public function sparklines()
    {
        return view('backends.dashboard.chart.sparklines');
    }
}
