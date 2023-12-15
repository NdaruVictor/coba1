<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.contact.index');
    }



    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ];

        Mail::to('febri12@gmail.com')->send(new ContactEmail($data));
        return to_route('contact.index');

    }
}
