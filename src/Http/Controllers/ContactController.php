<?php

namespace Akshay\Contact\Http\Controllers;

use Akshay\Contact\Mail\ContactMailable;
use Akshay\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
class ContactController extends Controller
{
    public function index() {
        return view('contact::contact');

    }

    public function send(Request $request) {
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'))->with('status', 'Contact Inserted successfully');
    }
}
