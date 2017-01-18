<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function show()
    {
        $albums = DB::table('albums')->orderBy('nom_album')->get();
        $nb_albums = DB::table('albums')->count();
        $photos = DB::table('photos')->orderBy('id_album')->get();
        /*$photos = array();
        for($i=0;$i=$nb_albums-1;$i++){
            $photos[] = DB::table('photos')->where('id_album', $albums[$i]->id_album)->orderByRaw("RAND()")->take(1)->get();
        }*/

        return view('album', ['albums' => $albums, 'nb_albums' => $nb_albums, 'photos' => $photos]);
    }

    public function showAlbum($id)
    {
        $album_decrit = DB::table('albums')->where('id_album', '=', $id)->get();
        $parcours = DB::table('albums')->where('albums.id_parcours', '=', $id)->join('parcours', 'albums.id_parcours', '=', 'parcours.id_parcours')->get();
        $photos = DB::table('photos')->where('photos.id_album', '=', $id)->get();
        return view('album_description', ['album_decrit' => $album_decrit, 'parcours' => $parcours, 'photos' => $photos]);
    }

    public function createAlbum()
    {
        return view ('albumcreation');
    }
}
