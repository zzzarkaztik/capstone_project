<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drivers')->delete();
        
        \DB::table('drivers')->insert(array (
            0 => 
            array (
                'driver_id' => 2,
                'first_name' => 'Yuri',
                'last_name' => 'Boyka',
                'bus_id' => 2,
                'gender' => 'male',
                'birthdate' => '1970-05-27',
            ),
            1 => 
            array (
                'driver_id' => 3,
                'first_name' => 'Jardani',
                'last_name' => 'Jovonovich',
                'bus_id' => 3,
                'gender' => 'male',
                'birthdate' => '1980-10-10',
            ),
            2 => 
            array (
                'driver_id' => 4,
                'first_name' => 'Haffaz',
                'last_name' => 'Aladeen',
                'bus_id' => 4,
                'gender' => 'male',
                'birthdate' => '2000-06-27',
            ),
            3 => 
            array (
                'driver_id' => 8,
                'first_name' => 'Cecilio',
                'last_name' => 'Sasuman',
                'bus_id' => 11,
                'gender' => 'male',
                'birthdate' => '1980-06-07',
            ),
            4 => 
            array (
                'driver_id' => 10,
                'first_name' => 'Animal',
                'last_name' => 'Wayne',
                'bus_id' => NULL,
                'gender' => 'male',
                'birthdate' => '1998-06-08',
            ),
        ));
        
        
    }
}