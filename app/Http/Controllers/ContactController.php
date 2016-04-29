<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;
use Intervention\Image\ImageManager;

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
        'image'=>'image',
        'message'=>'required|max:350',
    ]);  
         $contact = new contact();
         $contact->name = $request->name;
         $contact->email = $request->name;
         $contact->subject=$request->subject;
         $contact->message= $request->message;
         

          //Create Instance of Image Intervention
          if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
           

    
         } else {
            $manager = new ImageManager();
            $img = $manager->make($request->image);
            
            $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
              });  

             $imageFilename = 'contactImg/' . $contact->id . '.jpg';
            $img->save($imageFilename, 60);

            $contact->image = $contact->id . '.jpg';



        };

// var_dump($contact);
        $contact->save();


         

         // $contact->save();
         return view('contact.success');
    }
}

