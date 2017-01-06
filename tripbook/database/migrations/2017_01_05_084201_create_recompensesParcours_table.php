<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecompensesParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('recompensesParcours', function(Blueprint $table){
        $table->increments('id_recompense');
        $table->string('nom_recompense');
        $table->integer('id_parcours')->unsigned();
        $table->foreign('id_parcours')
      ->references('id_parcours')
      ->on('parcours')
      ->onDelete('restrict')
      ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recompensesParcours', function(Blueprint $table) {

            $table->dropForeign('recompensesParcours_id_parcours_foreign');
            $table->dropForeign(['id_parcours']);

        });
        Schema::drop('recompensesParcours');
        Schema::enableForeignKeyConstraints();
        Schema::disableForeignKeyConstraints();

    }
}
