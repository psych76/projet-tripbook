<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealiserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('realiser', function (Blueprint $table) {
            $table->increments('id_commentaire_parcours');
            $table->date('date_commentaire_parcours', 40);
            $table->longtext('commentaire_parcours');
            $table->enum('note_parcours', array('0', '1', '2', '3', '4', '5'));
            $table->integer('id_parcours');
            $table->integer('id_compte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('realiser');
    }
}
