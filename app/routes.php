<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	
	$albums=Album::all();
	return View::make('album/index',['album'=>$albums]);

		
});

Route::get('album/{artist}',function($artist){
	$album=Album::whereArtist($artist)->first();
	return View::make('album.show',['album'=>$album]);
});
