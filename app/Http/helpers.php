<?php 

function mustbeAdmin(){
	if(\Auth::check()){
		if(\Auth::user()->role !== 'admin'){
			return abort(401);
		}		
	} else {
		return abort(401);
	}

}