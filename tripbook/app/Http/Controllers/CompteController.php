<?php
	namespace App\Http\Controllers;
	use View;
	use Illuminate\Support\Facades\DB;
	use App\Http\Controllers\Controller;
	class CompteController{
	public function showCompte(){
		$nom1 = DB::select('SELECT `pseudo` FROM `comptes` WHERE `id_compte` = 1');
		//$nom2 = DB::select('SELECT `pseudo` FROM `comptes` WHERE `id_compte` = 2 ');
			  return View::make('compte_view', array('nom1' => $nom1));
		}
}