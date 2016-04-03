@extends('master')

@section('title', 'Reset Password')
@section('meta-description','Enter your email address, we will send you an email to reset your password.')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <div class="panel-body">
            <form class="form-horizontal formwidth" role="form" method="POST" action="{{ url('/password/email') }}">
               {!! csrf_field() !!}
               <div class="form-group">
                  <h3>Reset Password</h3>
                  <p>We will send you an email to reset your password.</p>
               </div>
               @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
               </div>
               @endif
               <br>
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>E-Mail Address</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                  <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif       
               </div>
               <div class="form-group">
                  <input type="submit" class="form-control submit-button">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
