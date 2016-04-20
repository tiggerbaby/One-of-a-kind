<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use Intervention\Image\ImageManager;

class ShopController extends Controller
{
    public function index(){
        $allProducts = Product::all();
    	return view('shop.shop', compact('allProducts'));
    }
    public function add(){
        mustbeAdmin();
    	return view('shop.add');
    }


     public function store(Request $request)
    {
        // Validate and store the blog post...
         $this->validate($request, [
        'object_name' => 'required|max:50',
        'price' => 'required|Numeric|',
        'description'=>'required|max:1000',
        'image' => 'required|image',
        ]);  
         
         $product = new Product();

         $product->object_name = $request->object_name;
         $product->price = $request->price;
         $product->description=$request->description;
         $product->image = $request->image;
        
        
         //Create Instance of Image Intervention
        $manager = new ImageManager();
        $thumb = $manager->make($request->image);
        
        $thumb->fit(400, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $product->save();


        $imageFilename = 'productImg/thumb/' . $product->id . '.jpg';
        $thumb->save($imageFilename, 60);

        $product->image = $product->id . '.jpg';

        
         $product->save();

         $allProducts = $product->all();
         // var_dump($allProducts);

         return view('shop.shop',compact('allProducts'));

    }
     
     // public function view(){

     //    mustbeAdmin();
     //    return view ('shop.view');
     // }


}
