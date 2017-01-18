<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotos extends Migration
{  /**
 * Run the migrations.
 *
 * @return void
 */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id_photo');
            $table->date('date_photo');
            $table->string('nom_photo');
            $table->string('description_photo');
            $table->string('src_photo');
            $table->string('commentaire_photo')->NULL();
            $table->integer('note_photo') ->NULL();
            $table->date('date_commentaire_photo')->NULL();
            $table->integer('id_album');
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
        Schema::drop('photos');
    }
}