@extends('master')

@section('title', 'Shop')
@section('meta-description','One of a Kind Online Shop')

@section('content')
<div class="container">
 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <h1>Catalogue</h1>
          <ul class="nav nav-sidebar">
            <li><a href="#">Catalogue1</a></li>
		 	<li><a href="#">Catalogue2</a></li>
		 	<li><a href="#">Catalogue3</a></li>
		 	<li><a href="#">Catalogue4</a></li>
		 	<li><a href="#">Catalogue5</a></li>
		 	<li><a href="#">Catalogue6</a></li>
          </ul>
        </div>

<div class="row">
  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="img/sample1.jpg" alt="Sample image">
      <div class="caption">
        <h3>Sample 1</h3>
        <p>$45</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/sample2.jpg" alt="Sample image">
      <div class="caption">
        <h3>Sample 1</h3>
        <p>$45</p>
      </div>
    </div>
  </div>
  
 
</div>
</div>
</div>
</div>
@endsection