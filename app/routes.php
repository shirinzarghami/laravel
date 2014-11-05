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
//Route::get('/', 'PagesController@home');
//Route::get('/about', 'PagesController@about');
Route::get('/', function(){
	//$user=Album::orderby("artist")->where('id','!=','1')->take(2)->get();
	//return $user;
	/*
	$user=Album::all();
	$users=Album::where('id','!=','1')->get();
	$userid=Album::find(1);
	$album= new Album;
	$album-> title="title";
	$album-> artist= Hash::make("art");
	$album->save();
	return Album::all();
	*/

	/*Album::create([
		'title'=> 'title',
		'artist'=> Hash::make("art"),

	]);
	*/
/*
	$album=Album::find(2);
	$album-> artist='shirin';
	$album->save();
*/
	//$album=Album::find(2);
	//$album->delete();
	//return Album::orderby('abs(number)rtist','asc')->take(3)->get();
	$albums=Album::all();
	return View::make('album/index',['album'=>$albums]);

		
});

Route::get('album/{artist}',function($artist){
	$album=Album::whereArtist($artist)->first();
	return View::make('album.show',['album'=>$album]);
});
