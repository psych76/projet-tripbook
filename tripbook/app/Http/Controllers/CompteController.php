<?php

class CompteController extends BaseController {
	public function showCompte(){
		$data = arrray();
		$menu = compte::all();
		$data["compte"] = array(); // $data va prendre toutes les données de la table "compte"

		// compte

		foreach($compte as $key -> $value){
			$data["compte"][] = $value-> pseudo."<br>"; // on affiche tous les pseudos de la table "compte"
		}
		return View::make('affiche_compte')-> with('data', $data); // on veut afficher ces données dans la page accueil
	}
}