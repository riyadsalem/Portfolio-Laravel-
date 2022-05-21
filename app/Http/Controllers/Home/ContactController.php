<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;


class ContactController extends Controller
{
    public function Contact(){
        return view('frontend.contact');
    } // End Method


    public function StoreMessage(Request $request){

        /*
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Contact Message Name is Required',
            'email.required' => 'Contact Message Email is Required',
            'subject.required' => 'Contact Message Subject is Required',
            'phone.required' => 'Contact Message Phone is Required',
            'message.required' => 'Contact Message Message is Required',
        ]);
        */
        
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Your Message Submited Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);

    } // End method





}
