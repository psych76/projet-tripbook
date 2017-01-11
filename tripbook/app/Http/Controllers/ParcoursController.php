<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ParcoursController extends Controller
{
    public function show()
{
    /*$parcours = Parcours::findOrFail($id);
 
    return view('parcours.blade', compact('parcours'));*/


    $parcours = DB::table('parcours')->get();

        return view('parcours.blade', ['parcours' => $parcours]);
}
}
