<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index()
    {
        return view('site2.index');
    }

    public function features()
    {
        return view('site2.features');
    }

    public function download()
    {
        return view('site2.download');
    }

    public function contact()
    {
        return view('site2.contact');
    }

    public function contact_data()
    {
        return view('site2.contact_data');
    }
}
