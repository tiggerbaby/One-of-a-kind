<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
     protected $table = 'products';

     protected $fillable = [
           'object_name','price','description','image',                              
    ];
}
