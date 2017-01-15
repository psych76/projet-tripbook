<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function show()
    {    $album = DB::table('album')->orderBy('nom_album')->get();
        return view('album', ['album' => $album]);
    }

    public function showAlbum($id)
    {

        $album_decrit = DB::table('album')->where('id_album', '=', $id)->get();
        $lieux = DB::table('contenir')->where('id_album', '=', $id)->join('lieux', 'contenir.id_lieu', '=', 'lieux.id_lieu')->get();


        return view('album_description', ['album_decrit' => $album_decrit, 'lieux' => $lieux]);
    }

//controller de création de parcours
    public function createAlbum()
    {
        return view ('albumcreation');
    }
}
