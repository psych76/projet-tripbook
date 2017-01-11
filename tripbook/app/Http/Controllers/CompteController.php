<?php
	namespace App\Http\Controllers;
	use View;
	use Illuminate\Support\Facades\DB;
	use App\Http\Controllers\Controller;
	class CompteController{
	

		 public function show($id)

    {

        $comptes = $this->compteRepository->getById($id);


        return view('compte_view',  compact('comptes'));

    }

    public function home(){
    	return view('home');
    }
}