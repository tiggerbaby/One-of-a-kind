<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
   public function index(){
    	return view('contact.contact');
    }

     public function store(Request $request)
    {
        // Validate and store the blog post...
         $this->validate($request, [
        'name' => 'required|max:50',
        'email' => 'required|max:100',
        'subject'=>'max:100',
        'image' => 'image',
        'message'=>'required|max:350',
    ]);  
         $contact = new contact();
         $contact->name = $request->name;
         $contact->email = $request->name;
         $contact->subject=$request->subject;
         $contact->image = $request->image;
         $contact->message= $request->message;
     
         $contact->save();
         return view('contact.contact');
    }
}

