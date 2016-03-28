@extends('master')

@section('title', 'Shop')
@section('meta-description','One of a Kind Online Shop')

@section('content')
<div class="container">
  <div id="catalogueMenu">
	<ol class="breadcrumb">
	  <li><a href="#">Catalogue1</a></li>
	  <li><a href="#">Catalogues2</a></li>
	  <li><a href="#">Catalogues3</a></li>
	  <li><a href="#">Catalogues4</a></li>
	</ol>
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
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/sample3.jpg" alt="Sample image">
      <div class="caption">
        <h3>Sample 1</h3>
        <p>$45</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/sample4.jpg" alt="Sample image">
      <div class="caption">
        <h3>Sample 1</h3>
        <p>$45</p>
      </div>
    </div>
  </div>

 

</div>
</div>
@endsection