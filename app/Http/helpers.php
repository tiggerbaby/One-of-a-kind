<?php 

function mustbeAdmin(){
	if(\Auth::user()->role !== 'admin'){
		return abort(401);
	}
}