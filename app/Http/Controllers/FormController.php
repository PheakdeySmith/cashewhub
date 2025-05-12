<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function basic()
    {
        return view('backends.dashboard.form.basic');
    }

    public function inputmask()
    {
        return view('backends.dashboard.form.inputmask');
    }

    public function picker()
    {
        return view('backends.dashboard.form.picker');
    }

    public function select()
    {
        return view('backends.dashboard.form.select');
    }

    public function slider()
    {
        return view('backends.dashboard.form.slider');
    }

    public function validation()
    {
        return view('backends.dashboard.form.validation');
    }

    public function wizard()
    {
        return view('backends.dashboard.form.wizard');
    }

    public function file_upload()
    {
        return view('backends.dashboard.form.file_upload');
    }

    public function editor()
    {
        return view('backends.dashboard.form.editor');
    }

    public function layout()
    {
        return view('backends.dashboard.form.layout');
    }
}
