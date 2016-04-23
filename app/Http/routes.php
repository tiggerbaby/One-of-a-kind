<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/', 'HomeController@index');
// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');


//Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('auth/logout', 'Auth\AuthController@logout'); 

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Route::get('adminpanel','Auth\AuthController@index'); 

Route::get('story','StoryController@index');
Route::get('work','WorkController@index');
Route::get('contact','ContactController@index');
Route::post('contact','ContactController@store');
Route::get('shop','ShopController@index');
Route::get('shop/add','ShopController@add');
Route::post('shop','ShopController@store');
Route::get('/shop/view/{id}','ShopController@view');
Route::get('/shop/view/{id}/delete_confirm','ShopController@deleteObject');
});
