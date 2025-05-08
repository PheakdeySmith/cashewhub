<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backends.dashboard.home.index');
    }

    public function chat()
    {
        return view('backends.dashboard.chat.index');
    }

    public function calendar()
    {
        return view('backends.dashboard.calendar.index');
    }

    public function email()
    {
        return view('backends.dashboard.email.index');
    }

    public function file_manager()
    {
        return view('backends.dashboard.file_manager.index');
    }
}
