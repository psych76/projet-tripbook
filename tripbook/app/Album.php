<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['id_album','nom_album', 'description', 'date_creation', 'id_compte', 'id_parcours'];
}
