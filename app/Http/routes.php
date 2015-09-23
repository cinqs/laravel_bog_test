<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('index');
});

Route::get('posts/{id}', function($id){
	//return "nihao: ".$id;
	return view('post');
});

Route::get('names/{name?}', function($name = 'SONG'){
	return "name: ".$name;
});

Route::get('picture/{id}', function($id){
	return "this is confined number of pictures: ".$id;
})->where('id', '[0-9]+');

Route::pattern('id_com', '[0-9]+');
Route::get('computers/{id_com}', function($id){
	return "this is confined computer numbers: ".$id;
});

Route::get('about', ['as' => 'about.index', function(){
	return view('about');
}]);

Route::get('contact', ['as' => 'contact.index', function(){
	return view('contact');
}]);
