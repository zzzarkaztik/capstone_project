<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'first_name' => 'Yuri',
                'last_name' => 'Boyja',
                'email' => 'yuriboyka@tridentbuslines.com',
                'password' => '12345678',
                'role' => 'admin',
                'user_created' => '2024-02-05',
                'type' => 'admin',
            ),
            1 => 
            array (
                'user_id' => 2,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'johndoe@admin.com',
                'password' => '$2y$12$osZ5ojmEZt/pO4r0XkbuEO5L2hGCV4q0b8STC0GKHl/0qIAdY8w7O',
                'role' => 'admin',
                'user_created' => '2024-02-06',
                'type' => 'admin',
            ),
            2 => 
            array (
                'user_id' => 4,
                'first_name' => 'Betong',
                'last_name' => 'Butanding',
                'email' => 'bb@bb.cc',
                'password' => '$2y$12$D4cX.8SD.spl6qxm7l0bQe6Jo2x7TzYwvLFAZxSypfq.bN8xCZwMK',
                'role' => 'user',
                'user_created' => '2024-02-06',
                'type' => 'senior_citizen',
            ),
            3 => 
            array (
                'user_id' => 5,
                'first_name' => 'Maynard Arvin',
                'last_name' => 'Villalobos',
                'email' => 'arvsvillalobos@gmail.com',
                'password' => '$2y$12$Y6iSPt1qwJ5sz9uSJPnPNORlK1Og4jPfrix5cqn7Ds1bYQjOV.m9y',
                'role' => 'user',
                'user_created' => '2024-02-07',
                'type' => 'regular',
            ),
        ));
        
        
    }
}