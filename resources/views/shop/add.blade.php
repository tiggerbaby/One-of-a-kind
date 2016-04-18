@extends('master')

@section('title', 'Shop')
@section('meta-description','Add Object')

@section('content')
<div class="container">
	<div class="container frontPage">
  <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <div class="panel-body">
          <h1 class="text-center">Add Object</h1>
          <p class="text-center"></p>
          <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/shop/add') }}">
           {!! csrf_field() !!}
           <div class="form-group{{ $errors->has('object_name') ? ' has-error' : '' }}">
             <label for="object_name">Object Name</label>
             <input type="text" class="form-control" name="object_name" value="{{ old('object_name') }}">
              @if ($errors->has('object_name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('object_name') }}</strong>
                    </span>
               @endif       
           </div>
           <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} ">
             <label for="price">Price</label>
             <input type="text" class="form-control" name="price" value="{{ old('price') }}">
              @if ($errors->has('price'))
                    <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                    </span>
               @endif     
           </div>
       <!--      <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
             <label for="subject">Subject</label>
             <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
              @if ($errors->has('subject'))
                    <span class="help-block">
                    <strong>{{ $errors->first('subject') }}</strong>
                    </span>
               @endif     
           </div> -->
           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="image"> Image</label>
              <input type="file" class="form-control" name="image"  value="{{ old('image') }}">
               @if ($errors->has('image'))
                    <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                    </span>
               @endif     
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
             <label for="description">Description</label>
             <textarea row="10" class="form-control" name="description" value="{{ old('description') }}"></textarea> 
              @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                    </span>
               @endif     
           </div>
 
  <button type="submit" class="btn btn-default">Add Object</button>
</form>
       </div>
     </div>
    

   
  </div>
   
</div>
 
          </div>  

   
@endsection          