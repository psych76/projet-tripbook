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
	$parcours_decrit = DB::table('parcours')->where('nom_parcours', '=', $id)->get();
	return view('parcours_description', ['parcours_decrit' => $parcours_decrit]);



 

}
}
