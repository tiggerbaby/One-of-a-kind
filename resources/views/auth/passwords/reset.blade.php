@extends('master')

@section('title', 'Reset Passowrd')
@section('meta-description','Reset Password')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <div class="panel-body">
            <form class="form-horizontal formwidth" role="form" method="POST" action="{{ url('/password/reset') }}">
               {!! csrf_field() !!}
               <div class="form-group">
                  <h3>Reset Password</h3>
               </div>
               <input type="hidden" name="token" value="{{ $token }}">
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>E-Mail Address</label>
                  <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
                  @if ($errors->has('email'))
                  <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password">
                  @if ($errors->has('password'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" name="password_confirmation">
                  @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group">
                  <input type="submit" class="form-control submit-button" value="Reset Password">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
