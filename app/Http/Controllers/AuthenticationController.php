<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('backends.dashboard.auth.login');
    }

    public function signup()
    {
        return view('backends.dashboard.auth.signup');
    }

    public function logout()
    {
        return view('backends.dashboard.auth.logout');
    }

    public function recoverpw()
    {
        return view('backends.dashboard.auth.recoverpw');
    }

    public function createpw()
    {
        return view('backends.dashboard.auth.createpw');
    }

    public function lockscreen()
    {
        return view('backends.dashboard.auth.lockscreen');
    }

    public function confirm_mail()
    {
        return view('backends.dashboard.auth.confirm-mail');
    }

    public function login_pin()
    {
        return view('backends.dashboard.auth.login-pin');
    }

    public function fa()
    {
        return view('backends.dashboard.auth.2fa');
    }

    public function deactivation()
    {
        return view('backends.dashboard.auth.deactivation');
    }
}
