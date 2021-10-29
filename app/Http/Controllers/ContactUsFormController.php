<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;


class ContactUsFormController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
      return view('/index');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'Name' => 'required',
            'Email' => 'required|email',
            'Subject'=>'required',
            'Message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        //
        \Mail::send('mail', array(
            'Name' => $request->get('Name'),
            'Email' => $request->get('Email'),
            'Subject' => $request->get('Subject'),
            'User_query' => $request->get('Message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('nawrasbukhari@hotmail.com', 'Admin')->subject($request->get('Subject'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}
