@extends('master')

@section('title', 'Home')
@section('meta-description','One of A Kind is a laser cutting desgin company')

@section('content')

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/img/Brushes.png" alt="Brushes image">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="/img/sample4.jpg" alt="Laser cutting image">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="/img/combs.jpg" alt="Laser cutting combs image">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>
<div class="containe frontPage">
	<h1 class="text-center">What make us one of a kind?</h1>
  <div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4">
    <!-- <img src="/img/unique.svg">  -->
    <object id="svg1" src="/img/unique.svg"></object>
  </div>
 
    <div class="col-xs-4 col-sm-4 col-md-4">  
  <!-- <img src="/img/custome.svg"> -->
  <object id="svg2" src="/img/custome.svg"></object>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4">  
    <!-- <img src="/img/nz.svg"> -->
    <object id="svg3" src="/img/nz.svg"></object>
   </div>
    <div class="col-xs-2 col-sm-2 col-md-2"> </div>
   <div class="col-xs-4 col-sm-4 col-md-4">  
  <!-- <img src="/img/ideas.svg"> -->
  <object id="svg4" src="/img/ideas.svg"></object>
  </div>
    <div class="col-xs-4 col-sm-4 col-md-4">  
 <object id="svg5" src="/img/friendly.svg"></object>
   </div>
   <div class="col-xs-2 col-sm-2 col-md-2"> </div>

  </div>
 
</div>

<div class="container frontPage workWrapper">
<div class="row">
	<h1 class="text-center">Our Latest Work</h1>
  <br><br>
  <div id="selector"></div>
</div>
    
</div>
 
<div class="jumbotron frontPage">
	<h1>Contact Form</h1>
</div>
 

 

@endsection


