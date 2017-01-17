<?php

use Illuminate\Database\Seeder;

class ContenirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contenir')->insert(
            [
                'id_parcours' => '1',
                'id_lieu' => '1',               
            ]);

         DB::table('contenir')->insert(
            [
                'id_parcours' => '1',
                'id_lieu' => '2',               
            ]);

          DB::table('contenir')->insert(
            [
                'id_parcours' => '1',
                'id_lieu' => '3',               
            ]);

          DB::table('contenir')->insert(
            [
                'id_parcours' => '2',
                'id_lieu' => '4',               
            ]);
          DB::table('contenir')->insert(
            [
                'id_parcours' => '2',
                'id_lieu' => '5',               
            ]);
          DB::table('contenir')->insert(
            [
                'id_parcours' => '2',
                'id_lieu' => '6',               
            ]);
          DB::table('contenir')->insert(
            [
                'id_parcours' => '2',
                'id_lieu' => '7',               
            ]);
          DB::table('contenir')->insert(
            [
                'id_parcours' => '2',
                'id_lieu' => '8',               
            ]);
          DB::table('contenir')->insert(
            [
                'id_parcours' => '2',
                'id_lieu' => '9',               
            ]);
          DB::table('contenir')->insert(
            [
                'id_parcours' => '2',
                'id_lieu' => '10',               
            ]);
            DB::table('contenir')->insert(
            [
                'id_parcours' => '3',
                'id_lieu' => '6',               
            ]);
             DB::table('contenir')->insert(
            [
                'id_parcours' => '3',
                'id_lieu' => '7',               
            ]);
              DB::table('contenir')->insert(
            [
                'id_parcours' => '3',
                'id_lieu' => '8',               
            ]);
               DB::table('contenir')->insert(
            [
                'id_parcours' => '3',
                'id_lieu' => '9',               
            ]);
                DB::table('contenir')->insert(
            [
                'id_parcours' => '3',
                'id_lieu' => '10',               
            ]);
                DB::table('contenir')->insert(
            [
                'id_parcours' => '4',
                'id_lieu' => '8',               
            ]);
                DB::table('contenir')->insert(
            [
                'id_parcours' => '4',
                'id_lieu' => '5',               
            ]);
                DB::table('contenir')->insert(
            [
                'id_parcours' => '4',
                'id_lieu' => '2',               
            ]);
                DB::table('contenir')->insert(
            [
                'id_parcours' => '5',
                'id_lieu' => '1',               
            ]);
                DB::table('contenir')->insert(
            [
                'id_parcours' => '5',
                'id_lieu' => '6',               
            ]);
                DB::table('contenir')->insert(
            [
                'id_parcours' => '5',
                'id_lieu' => '4',               
            ]);
    }
}
