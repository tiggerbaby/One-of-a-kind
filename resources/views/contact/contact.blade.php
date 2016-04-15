@extends('master')

@section('title', 'Contact')
@section('meta-description','Contact Us')

@section('content')



    
<div id="map"></div>

<br><br>

<div class="container contactPage">
 <div class="row">

 <div class="col-sm-4 col-md-5">      
         <address><span class="glyphicon glyphicon-home"></span>&nbspBoutique
Level 1, 104 The Terrace
Wellington, New Zealand</address>
        <address><span class="glyphicon glyphicon-earphone"></span>&nbsp +64 &nbsp 276818188</address>
        <address><a href="mailto:ozosil@hotmail.com?subject=Hello"><span class="glyphicon glyphicon-envelope"></span>&nbsp ozosil@hotmail.com</a></address>
</div>
 	
<div class="hidden-xs col-sm-1 divider"></div>

   <div class="col-sm-4 col-md-5">
         <p> 
            There is no big idea or small idea.  We love to hear form you. 
        </p>
        <br>
    <p>
        For object design or information,
        please do not hesitate to drop me an email or message.
   </p>
   </div>
      </div>
<hr>

<div class="container">
	<div class="container frontPage">
  <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <div class="panel-body">
          <h1 class="text-center">Contact Form</h1>
          <p class="text-center">What's on your mind? Tell us about your idea. Or say hi :) </p>
          <form role="form" method="POST" action="{{ url('/contact') }}">
           {!! csrf_field() !!}
           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <label for="name">Your Name</label>
             <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
               @endif       
           </div>
           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
               @endif     
           </div>
            <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
             <label for="subject">Subject</label>
             <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
              @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
               @endif     
           </div>
           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="file"> Image</label>
              <input type="file" class="form-control" name="image" value="{{ old('image') }}">
               @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
               @endif     
            </div>
            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
             <label for="Message">Message</label>
             <textarea row="8" class="form-control" name="message" value="{{ old('message') }}"></textarea> 
              @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
               @endif     
           </div>
 
  <button type="submit" class="btn btn-default">Send</button>
</form>
       </div>
     </div>
    

   
  </div>
   
</div>
 
          </div>      
</div>
@endsection