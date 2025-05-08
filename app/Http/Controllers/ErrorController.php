<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error_400()
    {
        return view('backends.dashboard.error.400');
    }

    public function error_401()
    {
        return view('backends.dashboard.error.401');
    }

    public function error_403()
    {
        return view('backends.dashboard.error.403');
    }

    public function error_404()
    {
        return view('backends.dashboard.error.404');
    }

    public function error_408()
    {
        return view('backends.dashboard.error.408');
    }

    public function error_500()
    {
        return view('backends.dashboard.error.500');
    }

    public function error_501()
    {
        return view('backends.dashboard.error.501');
    }

    public function error_502()
    {
        return view('backends.dashboard.error.502');
    }

    public function error_503()
    {
        return view('backends.dashboard.error.503');
    }

    public function alt_404()
    {
        return view('backends.dashboard.error.404-alt');
    }

}
