<?php

namespace saiful\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use saiful\contact\Mail\ContactMailable;
use saiful\contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
