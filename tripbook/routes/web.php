<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|

*/
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', ['as'=>'home', 'uses'=> 'PagesController@home']);

Route::resource('name-recommender', 'NameComparisonController');*/

/*
Route::get('/name-comparison', 'NameComparisonController@action_index');
*/
/*Route::get('/name-comparison', function(){
	return View::make('name-comparison', array('nom1' => 'Eric', 'nom2' => 'Jimmy'));
}); */


/*  
http://localhost/name-recommender/public/name-comparison*/