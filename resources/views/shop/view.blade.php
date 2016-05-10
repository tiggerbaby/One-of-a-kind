@extends('master')

@section('title', 'Shop')
@section('meta-description','View Object')

@section('content')
<div class="container">
@if(\Auth::check())
    @if(\Auth::user()->role === 'admin')
    <button type="submit" class="btn btn-default" value="{!! csrf_token() !!}"><a href="/shop/view/{{$singleProduct->id}}/edit"><span class="glyphicon glyphicon-pencil"></span>Edit Object</a></button>
     <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-trash"></span>Delete Object</button>
 @endif()
 @endif()     
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Are you sure?</h4>
      </div>
      <div class="modal-body">
        <p>You are about to <em>permanently</em> delete this object.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default"><a href="/shop/view/{{ $singleProduct->id }}/delete_confirm"><span class="glyphicon glyphicon-trash"></span>Delete object</a></button>
      </div>
    </div>
  </div>
</div>
    

</div>
<br>
<div class="container" id="objectPage">
	<div class="row">
	  <div class="col-md-5">
		<img src="/productImg/thumb/{{$singleProduct->image}}" alt="{{$singleProduct->object_name}} image">
	  </div>
	  <div class="col-md-6">
	  		<h2>{{$singleProduct->object_name}}</h2>
	  	<div id="price">
			<p>${{$singleProduct->price}}</p>
        </div>
        <div id="btn">
        	<a href="/shop/cart"><input type="button" value="Add to Cart" class="add-button"></input></a>
        </div>
        <div id="description">
			<h4>Description:</h4>
			<p>{{$singleProduct->description}}</p>
		</div>	
	  </div>

	</div>
</div>


@endsection