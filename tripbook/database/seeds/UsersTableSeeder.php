<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = date('Y-m-d H:i:s');
        DB::table('users')->insert(
            [
                'pseudo' => 'julie54',
                'password' => 'julie54', 
                'nom' => 'calay',
                'prenom' => 'julie',
                'avatar' => 'baba', // prendre le chemin de l'avatar si possible
                'email' => 'juliecalay@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'pseudo' => 'thibault54',
                'password' => 'thibault54', 
                'nom' => 'limare',
                'prenom' => 'thibault',
                'avatar' => 'baba', // prendre le chemin de l'avatar si possible
                'email' => 'thibaultlimare@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'pseudo' => 'matthieu54',
                'password' => 'matthieu54', 
                'nom' => 'burtin',
                'prenom' => 'matthieu',
                'avatar' => 'baba', // prendre le chemin de l'avatar si possible
                'email' => 'matthieuburtin@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'pseudo' => 'thierry54',
                'password' => 'thierry54', 
                'nom' => 'tran',
                'prenom' => 'thierry',
                'avatar' => 'baba', // prendre le chemin de l'avatar si possible
                'email' => 'thierrytran@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'pseudo' => 'hossam54',
                'password' => 'hossam54', 
                'nom' => 'chikhali',
                'prenom' => 'hossam',
                'avatar' => 'baba', // prendre le chemin de l'avatar si possible
                'email' => 'hossamchikhali@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
    }
}