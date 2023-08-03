<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home()
    {
        return ('home page');
    }

    function about()
    {
        return ('about page');
    }

    function contact($name)
    {
        return route('contact', [$name]);
    }

    function service()
    {
        return ('service page');
    }
}
