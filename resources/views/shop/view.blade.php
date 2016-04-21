@extends('master')

@section('title', 'Shop')
@section('meta-description','View Object')

@section('content')

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
        	<input type="button" value="Add to Cart" class="add-button"></input>
        </div>
        <div id="description">
			<h4>Description:</h4>
			<p>{{$singleProduct->description}}</p>
		</div>	
	  </div>

	</div>
</div>


@endsection