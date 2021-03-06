@extends('master')

@section('title', 'Shop')
@section('meta-description','One of a Kind Online Shop')

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
<h1 class="foo">Shop</h1>
</div>
</div>
<div class="container">
 @if(\Auth::check())
    @if(\Auth::user()->role === 'admin')
 <div class="row">
    <a href="/shop/add"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Add Object</button></a>
  </div>
@endif()
   @endif()
 <!-- <div id="catalogueMenu">
  <ol class="breadcrumb">
    <li><a href="#">Catalogue1</a></li>
    <li><a href="#">Catalogues2</a></li>
    <li><a href="#">Catalogues3</a></li>
    <li><a href="#">Catalogues4</a></li>
  </ol>
</div> -->
 
<div class="row">
  @foreach($allProducts as $product)
  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
    <div>
    <a href="/shop/view/{{$product->id}}"><img src="/productImg/thumb/{{ $product->image }}" alt="{{$product->object_name}} image"></a>
    </div>

      <div class="caption">
        <h4><a href="/shop/view/{{$product->id}}">{{$product->object_name}}</a></h4>
        <p> <a href="/shop/view/{{$product->id}}">${{$product->price}}</a></p>
      </div>
    </div>
  </div>
  @endforeach
 
</div>

</div> 



 </div>
 
    <!-- @if( ! (\Auth::check() && \Auth::user()->role === 'admin') ) -->

    <!-- <div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2 text-center">
    <h1 class="foo">Coming Soon!</h1> 
      <br><br> -->
  
    <!-- <div class="clock-builder-output" id="clock"></div>
    </div>  -->

   <!-- </div> -->
      

   <!-- @endif() -->

   </div> 
   </div>

    

     
             

  
@endsection