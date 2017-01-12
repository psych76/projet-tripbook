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
                'name' => 'julie54',
                'password' => 'julie54', 
               
                'email' => 'juliecalay@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'name' => 'thibault54',
                'password' => 'thibault54', 
                
                'email' => 'thibaultlimare@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'name' => 'matthieu54',
                'password' => 'matthieu54', 
                
                'email' => 'matthieuburtin@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'name' => 'thierry54',
                'password' => 'thierry54', 
               
                'email' => 'thierrytran@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        DB::table('users')->insert(
            [
                'name' => 'hossam54',
                'password' => 'hossam54', 
                
                'email' => 'hossamchikhali@gmail.com',
                
                'created_at' => $now,
                'updated_at' => $now,
            ]);
    }
}