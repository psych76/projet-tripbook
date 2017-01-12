<?php
use App\Parcours;
use Illuminate\Http\Request;
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
Route::get('/', function()
{
    return View::make('connexion');
});
/*
Création de la vue des parcours ! 
*/
Route::get('/parcours', 'ParcoursController@show');


Route::get('/home', function() {
	return view('home');
});


Route::get('/parcours_description/{id}', 'ParcoursController@showParcours');




Route::get('/livre', function() {
	return view('livre');
});


