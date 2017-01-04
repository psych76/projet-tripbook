<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecompensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('recompenses', function (Blueprint $table) {
            $table->increments('id_recompense');
            $table->string('nom_recompense');
            $table->unsignedInteger('id_parcours');
            $table->foreign('id_parcours')->references('id_parcours')->on('parcours')->onDelete('cascade')->onUpdate('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recompenses', function(Blueprint $table) {
            $table->dropForeign('recompense_id_parcours_foreign');
        });
        Schema::drop('recompenses');

    }
}