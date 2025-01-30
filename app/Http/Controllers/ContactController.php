<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contact3d() {
        return view('contact3d');
    }
    public function contactwebdev() {
        return view('contactwebdev');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Store in the database
        $contact = Contact::create($request->only('name', 'email', 'message'));

        // Send email
        Mail::to('jsodabas@gmail.com')->send(new ContactFormMail($request->all()));

        return redirect()->route('contact')->with('success', 'Your message has been sent and stored!');
    }

}
