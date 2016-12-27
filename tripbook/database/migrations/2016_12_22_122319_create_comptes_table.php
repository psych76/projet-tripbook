<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id_compte');
            $table->string('pseudo');
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');         
            $table->string('avatar'); // hemin de l'avatar
            $table->string('email')->unique();
            /* Clé étrangère 
            $table->string('id_parcours');
            $table->string('id_commentaire');
            $table->string('id_livre');
            */
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comptes');
    }
}
