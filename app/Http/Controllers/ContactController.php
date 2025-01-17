<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


   public function contact(){
    $contact = Contact::first();
    return view('front.contact',compact('contact'));
   }

    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
        ]);

        $details = [
            // 'greeting' => 'Hello!',
            // 'firstline' => 'You have received a new contact message.',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'subject' => $request->subject,
            // 'button' => 'Visit Website',
            // 'url' => url('/'),
            'lastline' => 'Thank you for getting in touch!',
        ];

        Mail::to(config('mail.from.address'))->send(new ContactMail($details));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
