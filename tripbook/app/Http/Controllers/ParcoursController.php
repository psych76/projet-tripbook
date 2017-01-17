<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ParcoursController extends Controller


{
    public function show()
{    $parcours = DB::table('parcours')->orderBy('nom_parcours')->get();
        return view('parcours', ['parcours' => $parcours]);
}

public function showParcours($id)
{

	$parcours_decrit = DB::table('parcours')->where('id_parcours', '=', $id)->get();
	$lieux = DB::table('contenir')->where('id_parcours', '=', $id)->join('lieux', 'contenir.id_lieu', '=', 'lieux.id_lieu')->get();
   $commentaires = DB::table('realiser')->where('id_parcours', '=', $id)->join('comptes', 'comptes.id_compte', '=', 'realiser.id_compte')->get();

	return view('parcours_description', ['parcours_decrit' => $parcours_decrit, 'lieux' => $lieux, 'commentaires_parcours' =>$commentaires]);
}

//controller de création de parcours
public function createParcours()
{
	return view ('parcourscreation');
}


}
