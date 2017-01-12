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
	$lieux = DB::table('contenir')->where('id_parcours', '=', $id)->get();
	foreach ($lieux as $lieu) {
		$lieux_visit = DB::table('lieux')->where('id_lieu', '=', $lieu -> id_lieu)->get();

	}
	return view('parcours_description', ['parcours_decrit' => $parcours_decrit, 'lieux' => $lieux_visit]);
}
}
