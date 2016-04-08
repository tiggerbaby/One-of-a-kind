@extends('master')

@section('title', 'Contact')
@section('meta-description','Contact Us')

@section('content')
<div class="container">
 <div class="row">
 	<div class="col-sm-4 col-md-5 contactPage">
      <br>
 		 <p> Thank you for your interest. For object design or information, please do not hesitate to drop me an email or message. </p>

         <br><br>
         <address><span class="glyphicon glyphicon-home"></span>&nbspBoutique
Level 1, 104 The Terrace
Wellington, New Zealand</address>
        <address><span class="glyphicon glyphicon-earphone"></span>&nbsp +64 &nbsp 276818188</address>
        <address><span class="glyphicon glyphicon-envelope"></span>&nbsp ozosil@hotmail.com </address>
 	</div>
    <div class="col-sm-5 col-md-6">
       
     <div id="map"></div>
    </div>

        </div>


<div class="container">
	<div class="col-md-6">   
                <div class="panel-body">
                    <form class="formwidth"role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <h3> Contact Us</h3>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                 
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>E-Mail Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label>Subject</label>

                                <input type="text" class="form-control" name="subject" value="{{old('subject')}}">

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label>Message</label>
                                <textarea row="5"class="form-control" name="message"></textarea> 

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <input class="form-control submit-button" type="submit">                   
                            </input>
                        </div>
                    </form>
                </div>
          </div>      
</div>
@endsection