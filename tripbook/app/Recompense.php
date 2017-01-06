<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recompense extends Model
{
	 protected $fillable = ['id_recompense','nom_recompense','id_parcours'];

    public function parcours() 

{

    return $this->hasMany('App\Parcours');

}
}
