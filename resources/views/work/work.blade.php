@extends('master')

@section('title', 'Work')
@section('meta-description','One of a Kind work gallery')

@section('content')
<div class="container">
<div class="row">
<h1>Our Work</h1>
<p>Our latest work form Instagram.</p>
<!--   <div id="profile"></div> -->
<div id="recentWork"></div>
	

</div>
</div>
<script type="text/javascript">
 var id = '{{ env('INSTAGRAM_ID') }}';
 var token = '{{ env('INSTAGRAM_TOKEN') }}'


 
</script>
@endsection