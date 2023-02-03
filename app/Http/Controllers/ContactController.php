<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' =>    'required|min:3|max:50',
            'email' =>   'required|email',
            'subject' => 'required|min:2|max:255',
            'message' => 'required|min:3|max:5000',
        ]);


        $contanct = new \App\Models\Contact();
        $contanct->name = strip_tags($request->title);
        $contanct->email = strip_tags($request->email);
        $contanct->subject = strip_tags($request->subject);
        $contanct->message = strip_tags($request->message);
        $contanct->is_seen = 0;
        $contanct->save();

        return Redirect::back()->with('success' , 'Message Sent Successfully!');

    }

}
