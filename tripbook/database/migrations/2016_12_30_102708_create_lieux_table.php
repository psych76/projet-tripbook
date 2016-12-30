<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

 public function up()
    {
            Schema::create('lieux', function (Blueprint $table) {
            $table->increments('id_lieu');
            $table->string('nom_lieu', 40)->unique();
            $table->longtext('description_lieu');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lieux');
    }
}