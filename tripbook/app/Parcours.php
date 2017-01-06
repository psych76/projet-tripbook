<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcours extends Model
{
   protected $fillable = ['id_parcours','nom_parcours','longueur_parcours', 'description_parcours'];


    public function recompense() 

    {

        return $this->belongsTo('App\Recompense');
    }
}
