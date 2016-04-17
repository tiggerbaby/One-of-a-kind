@extends('master')

@section('title', 'Shop')
@section('meta-description','Add Object')

@section('content')
 @if(\Auth::check())
    @if(\Auth::user()->role === 'admin')
<div class="container">
	<div class="container frontPage">
  <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <div class="panel-body">
          <h1 class="text-center">Add Object</h1>
          <p class="text-center"></p>
          <form role="form" method="POST" action="{{ url('/edit') }}">
           {!! csrf_field() !!}
           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <label for="name">Object Name</label>
             <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
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
            <label for="file"> Image</label>
              <input type="file" class="form-control" name="image" value="{{ old('image') }}">
               @if ($errors->has('image'))
                    <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                    </span>
               @endif     
            </div>
            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
             <label for="description">Description</label>
             <textarea row="10" class="form-control" name="description" value="{{ old('description') }}"></textarea> 
              @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                    </span>
               @endif     
           </div>
 
  <button type="submit" class="btn btn-default">Add</button>
</form>
       </div>
     </div>
    

   
  </div>
   
</div>
 
          </div>  
          @endif()
   @endif()
@endsection          