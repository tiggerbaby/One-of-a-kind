<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function index(){
    	return view('shop.shop');
    }
    public function add(){
    	return view('shop.add');
    }
}
