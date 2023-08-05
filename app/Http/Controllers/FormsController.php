<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->input('yourname'));
        // dd($request->yourname);
        $request->validate([
            'yourname' => 'required | string | min:2'
        ]);

        $name = $request->yourname;
        return "Welcome $name ";
    }

    function form2()
    {
        return view('forms.form2');
    }

    function form2_data(Request $request)
    {
        $request->validate([
            'yourname' => 'required',
            'yourage' => 'required'
        ]);
        $request->all();

        $name = $request->yourname;
        $email = $request->youremail;
        $gender = $request->yourgender;
        $age = $request->yourage;

        return view('forms.form2_data', compact('name', 'email', 'gender', 'age'));
    }

    function form3()
    {
        return view('forms.form3');
    }

    function form3_data(Request $request)
    {
        $request->validate([
            'youremail' => 'required | email',
            'yourpassword' => 'required | min:4'
        ]);

        dd($request->all());
    }
}
