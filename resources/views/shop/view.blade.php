@extends('master')

@section('title', 'Shop')
@section('meta-description','View Object')

@section('content')

<h1>View</h1>
<img src="/productImg/thumb/{{$singleProduct->image}}">
<h3>{{$singleProduct->object_name}}</h3>
<p>${{$singleProduct->price}}</p>
<p>{{$singleProduct->description}}</p>

@endsection