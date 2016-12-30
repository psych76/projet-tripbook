<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Modèle du compte pour le MVC
class Compte extends Eloquent
{
     protected $table = 'comptes';

    

    public $timestamps = false;
}
