<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResponseMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|unique:contacts,email',
            'comments' => 'nullable|string|max:200',
            'i' => 'required|integer',
            'j' => 'required|integer',
            'verify' => 'required|integer',
        ], [
            'name.required' => 'Hey, what’s your name?',
            'name.max' => 'Whoa, that’s a long name!',
            'email.required' => 'Come on, you gotta give me your email!',
            'email.email' => 'Oops, that email doesn’t look right!',
            'email.unique' => 'You’re already on my buddy list! just contact me :D',
            'comments.max' => 'Keep it under 200 characters, please!',
            'verify.required' => 'Hey, don’t forget to fill the reCAPTCHA!',
            'verify.integer' => 'Just a heads up, that needs to be a number!',
        ]);

        // if (($validatedData['i'] + $validatedData['j']) !== $validatedData['verify']) {
        //     return back()->with('error', 'Incorrect ReCAPTCHA')->withInput();
        // }

        $contact = Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'comments' => $validatedData['comments'],
        ]);

        Mail::to($contact->email)->send(new ResponseMail($contact->name));

        return redirect()->route('contact')->with('success', 'Yay! Thanks for reaching out! Ill get back to you soon! 🎉');
    }
}
