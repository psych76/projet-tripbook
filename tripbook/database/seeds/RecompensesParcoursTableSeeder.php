<?php

use Illuminate\Database\Seeder;

class RecompensesParcoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('recompensesParcours')->insert(
            [
                'nom_recompense' => '2€ réduction',
                'id_parcours' => '1', 
            ]);

       DB::table('recompensesParcours')->insert(
            [
                'nom_recompense' => '3€ réduction',
                'id_parcours' => '1', 
            ]);

       DB::table('recompensesParcours')->insert(
            [
                'nom_recompense' => 'entrée gratuite',
                'id_parcours' => '2', 
            ]);
    }
}
