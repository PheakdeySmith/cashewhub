<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice()
    {
        return view('backends.dashboard.invoice.invoice');
    }

    public function invoice_detail()
    {
        return view('backends.dashboard.invoice.invoice_detail');
    }

    public function create()
    {
        return view('backends.dashboard.invoice.add_invoice');
    }
}
