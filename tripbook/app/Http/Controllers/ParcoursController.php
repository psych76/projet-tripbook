<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcoursController extends Controller
{
    public function show($id)
{
    $parcours = Parcours::findOrFail($id);
 
    return view('Parcours.show', compact('parcours'));
}
}
