<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $this->call(CompteTableSeeder::class);
         $this->call(ParcoursTableSeeder::class);
         $this->call(LieuTableSeeder::class);
         $this->call(RecompensesParcoursTableSeeder::class);
         $this->call(UsersTableSeeder::class);
     }
    
}
