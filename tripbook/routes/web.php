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
    return view('auth/login');
});
/*
Création de la vue des parcours ! 
*/
Route::get('/parcours', 'ParcoursController@show');


Route::get('/home', function() {
    return view('home');
});

Route::get('/livre', function() {
    return redirect('/album');
    //return view('livre');
});

Route::get('/album', 'AlbumController@show');

Route::get('/album_description/{id}', 'AlbumController@showAlbum');


Route::get('/parcours_description/{id}', 'ParcoursController@showParcours');

Route::get('/register', function(){
    return view('home');
});


// 1 : l'url de la page actuelle 2 : méthode du controller appellé
Route::get('/parcours/creation', 'ParcoursController@createParcours');

//Route::get('/parcours/creation', 'ParcoursController@endParcours');



Auth::routes();

Route::get('/home', 'HomeController@index');