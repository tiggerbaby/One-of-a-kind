<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use Intervention\Image\ImageManager;

class ShopController extends Controller
{
    public function index(){
    	return view('shop.shop');
    }
    public function add(){

    	if( ! (\Auth::check() && \Auth::user()->role === 'admin') ) {
    		return('Error 401
Unauthorised Access! You must have the right privileges to view this page.');
    	};
    	return view('shop.add');
    }


     public function store(Request $request)
    {
        // Validate and store the blog post...
         $this->validate($request, [
        'object_name' => 'required|max:50',
        'price' => 'required|Numeric|',
        'description'=>'required|max:350',
        'image' => 'required|image',
    ]);  
         $product = new Product();
         $product->object_name = $request->object_name;
         $product->price = $request->price;
         $product->description=$request->description;
         $product->image = $request->image;
         

        
         $product->save();
         return view('shop.shop');
    }

}
