<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    function index()
    {
        $name = "Amjad Isleem";
        $desc = "This My Website And Profile";
        return view('site1.index')->with([
            'name' => $name,
            'desc' => $desc
        ]);
    }

    function about()
    {
        return view('site1.about');
    }

    function post()
    {
        return view('site1.post');
    }

    function contact()
    {
        return view('site1.contact');
    }
}
