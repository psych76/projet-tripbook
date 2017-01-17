<?php

use Illuminate\Database\Seeder;

class RealiserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         $table->date('date_commentaire_parcours', 40);
            $table->longtext('commentaire_parcours');
            $table->enum('note_parcours', array('0', '1', '2', '3', '4', '5'));
            $table->integer('id_parcours');
            $table->integer('id_compte');

        */
            $now = date('Y-m-d H:i:s');
        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Parcours très sympa !! ',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '4',
                'id_compte' => '5',
                'id_parcours' => '1', 
            ]);

        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Très joli coin de Nancy ! ',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '3',
                'id_compte' => '4',
                'id_parcours' => '2', 
            ]);

        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Balade sympathique pour les amoureux de Nancy',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '4',
                'id_compte' => '3',
                'id_parcours' => '3', 
            ]);

        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Sympathique en amoureux ! ',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '2',
                'id_compte' => '2',
                'id_parcours' => '4', 
            ]);

        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'A refaire !! ',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '5',
                'id_compte' => '1',
                'id_parcours' => '5', 
            ]);

        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Conseillé si vous passez une après-midi en famille et que vous navez pas didée de sortie ! ',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '4',
                'id_compte' => '1',
                'id_parcours' => '1', 
            ]);

        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Formidable ! ',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '4',
                'id_compte' => '2',
                'id_parcours' => '2', 
            ]);
        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Pas trop mal pour ceux qui ont du temps à tuer',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '3',
                'id_compte' => '3',
                'id_parcours' => '3', 
            ]);
        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Très sympathique de découvrir la ville autrement !',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '4',
                'id_compte' => '4',
                'id_parcours' => '4', 
            ]);
        DB::table('realiser')->insert(
            [
                'commentaire_parcours' => 'Bonne idée de parcours',
                'date_commentaire_parcours' => $now, 
                'note_parcours' => '5',
                'id_compte' => '5',
                'id_parcours' => '5', 
            ]);
    }
}
