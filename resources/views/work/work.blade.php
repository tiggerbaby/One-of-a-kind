@extends('master')

@section('title', 'Work')
@section('meta-description','One of a Kind work gallery')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
<h1 class="foo">Our Work</h1>
<p>Our latest work form Instagram.</p>
</div>
<!--   <div id="profile"></div> -->
<div id="recentWork"></div>
	

</div>
</div>
<script type="text/javascript">
 var id = '{{ env('INSTAGRAM_ID') }}';
 var token = '{{ env('INSTAGRAM_TOKEN') }}'


 
</script>
@endsection