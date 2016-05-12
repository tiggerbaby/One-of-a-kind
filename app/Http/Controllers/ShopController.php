<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreatObjectRequest;

use App\Http\Requests\EditImageRequest;

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


     public function store(CreatObjectRequest $request)
    {
         mustbeAdmin();
         $product = new Product();

         $product->object_name = $request->object_name;
         $product->price = $request->price;
         $product->description=$request->description;
          $product->image = $request->file('image');
        
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

   public function view($id){
        // mustbeAdmin();

        $singleProduct = Product::where('id', "=", $id)->firstOrFail();

        $productInfo = $singleProduct->all();

        // var_dump($productInfo);
        return view('shop.view', compact('singleProduct'));
   }


   public function deleteObject($id){

     mustbeAdmin();

     $object = Product::findOrFail($id);
     $imagePath = $object->image_path.'productImg/thumb/';

     unlink('productImg/thumb/'.$object->id.'.jpg');;

           
     $object->delete();
     // $imageFilename->destroy();
     
        return redirect('shop');
   }    

    public function edit($id){
         
         mustbeAdmin();
         $editProduct = Product::findOrFail($id);

        $productInfo = $editProduct->all();
        
      return view('shop.edit',compact('editProduct'));
   }

   public function update($id, EditImageRequest $request){
        mustbeAdmin();
        $product = Product::where('id', '=', $id)->findOrFail($id);
        $product->object_name = $request->object_name;
        $product->price = $request->price;
        $product->description=$request->description;;

         //When you dont want to change the image
         if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
    
         } else {
            //When you do change the image
            $manager = new ImageManager();
            $thumb = $manager->make($request->image);
            
            $thumb->fit(400, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imageFilename = 'productImg/thumb/' . $product->id . '.jpg';
            $thumb->save($imageFilename, 60);        
         }


        

        // if(! empty($_FILES['image'])){
        // $imageFilename = 'productImg/thumb/' . $product->id . '.jpg';
        // $thumb->save($imageFilename, 60);
        // $product->image = $product->id . '.jpg';
        //  } ;

           $product->save();
           return redirect('shop');
   }

    public function shoppingCart(){
        return view('shop.cart');
    }
}


