<?php

namespace App\Http\Controllers;

use App\Mail\contactUsMail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::to('amjadesleem@gmail.com')->send(new TestMail);
    }

    public function contact_us()
    {
        return view('forms.contact_us');
    }

    public function contact_us_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required'
        ]);
        $image_name = rand() . '_' . time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $image_name);


        Mail::to('admail@gmail.com')->send(new contactUsMail($request->except('_token'), $image_name));
    }
}
