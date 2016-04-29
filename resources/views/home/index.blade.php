@extends('master')

@section('title', 'Home')
@section('meta-description','One of A Kind is a laser cutting desgin company')


@section('content')
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <div class="text-center" id="title">
   <h1> One of a Kind New Zealand</h1>
   <p> made unique and customisable objects  </p>
   <a href="story"><input type="button" value="Know Us More"></input></a>
   <!-- <h1>New Zealand</h1> -->
 </div>
   <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner fullScreen" role="listbox">
      <div class="item active">
         <img src="/img/Brushes.png" alt="Brushes image">
         <!-- <div class="carousel-caption">
            <h1>One of A Kind</h1>
            <h1> New Zealand</h1>
            <p> made unique and customisable objects </p>
         </div> -->
      </div>
      <div class="item">
         <img src="/img/harcourt2.jpg" alt="Laser cutting image">
         <!-- <div class="carousel-caption">
            ...
         </div> -->
      </div>
      <div class="item">
         <img src="/img/combs.jpg" alt="Laser cutting combs image">
         <!-- <div class="carousel-caption">
            ...
         </div> -->
      </div>
   </div>
   <!-- Controls -->
   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>


<br><br>
<hr>
<div class="container frontPage">
   <h1 class="text-center">What make us one of a kind?</h1>
   <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4">
         <object id="svg1" src="/img/unique.svg"></object>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
         <object id="svg2" src="/img/custome.svg"></object>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
         <object id="svg3" src="/img/nz.svg"></object>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2"> </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
         <object id="svg4" src="/img/ideas.svg"></object>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4">  
         <object id="svg5" src="/img/friendly.svg"></object>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2"> </div>
   </div>
</div>


<hr>
<div class="container frontPage workWrapper text-center">
      <h1 class="text-center foo">Our Latest Work</h1>
      <br><br>
      <div id="selector"></div>
      <br><br>
     <a href="/work"><input class="submit-button" type="button" value="Discover More"></a>
   </div>
</div>
<hr>
<div class="container frontPage">
  <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <div class="panel-body">
          <h1 class="text-center">Contact Form</h1>
          <p class="text-center">What's on your mind? Tell us about your idea. Or say hi :) </p>
          <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/contact') }}">
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
              @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
               @endif     
           </div>
            <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
             <label for="subject">Subject</label>
             <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
              @if ($errors->has('subject'))
                    <span class="help-block">
                    <strong>{{ $errors->first('subject') }}</strong>
                    </span>
               @endif     
           </div>
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
             <label for="Message">Message</label>
             <textarea row="8" class="form-control" name="message" value="{{ old('message') }}"></textarea> 
              @if ($errors->has('message'))
                    <span class="help-block">
                    <strong>{{ $errors->first('message') }}</strong>
                    </span>
               @endif     
           </div>
 
  <button type="submit" class="btn btn-default">Send</button>
</form>
       </div>
     </div>
    

   
  </div>
   
</div>

 <script type="text/javascript">
 var id = '{{ env('INSTAGRAM_ID') }}';
 var token = '{{ env('INSTAGRAM_TOKEN') }}';

</script>
 

@endsection



