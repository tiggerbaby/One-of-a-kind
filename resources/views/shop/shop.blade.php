@extends('master')

@section('title', 'Shop')
@section('meta-description','One of a Kind Online Shop')

@section('content')
<div class="container">
 @if(\Auth::check())
    @if(\Auth::user()->role === 'admin')
    <button type="submit" class="btn btn-default"><a href="/shop/add"><span class="glyphicon glyphicon-plus"></span>Add Object</a></button>
 <div id="catalogueMenu">
  <ol class="breadcrumb">
    <li><a href="#">Catalogue1</a></li>
    <li><a href="#">Catalogues2</a></li>
    <li><a href="#">Catalogues3</a></li>
    <li><a href="#">Catalogues4</a></li>
  </ol>
</div>
 

  @foreach($allProducts as $product)
  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="/productImg/thumb/{{ $product->image }}" alt="Sample image">


      <div class="caption">
        <h4>{{$product->object_name}}</h4>
        <p>${{$product->price}}</p>
      </div>
    </div>
  </div>
  @endforeach
 
</div>

</div> 

@endif()
   @endif()
 
    @if( ! (\Auth::check() && \Auth::user()->role === 'admin') )

    <div class="container">
   <div class="row">
      <h1>Coming Soon!</h1> 
      <br><br>
   <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
    <div class="clock-builder-output" id="clock"></div>

    </div> 

   @endif()

   </div> 
   </div>

    

     
             

  
@endsection