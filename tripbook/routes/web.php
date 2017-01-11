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
Route::get('/', function () {
    return view('welcome');
});
/*
Création de la vue des parcours ! 
*/
Route::get('/parcours', function() {
	 $parcours = DB::table('parcours')->get();

    return view('parcours', [
        'parcours' => $parcours
    ]);
});

Route::get('/home', function() {
	return view('home');
});
Route::get('/livre', function() {
	return view('livre');
});

Route::resource('parcour', 'ParcoursController@show');