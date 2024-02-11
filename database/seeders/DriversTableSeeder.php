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
                'driver_id' => 3,
                'first_name' => 'Jardani',
                'last_name' => 'Jovonovich',
                'bus_id' => 44,
                'gender' => 'male',
                'birthdate' => '1980-10-10',
            ),
            1 => 
            array (
                'driver_id' => 4,
                'first_name' => 'Haffaz',
                'last_name' => 'Aladeen',
                'bus_id' => 45,
                'gender' => 'male',
                'birthdate' => '2000-06-27',
            ),
            2 => 
            array (
                'driver_id' => 10,
                'first_name' => 'Animal',
                'last_name' => 'Wayne',
                'bus_id' => 46,
                'gender' => 'male',
                'birthdate' => '1998-06-08',
            ),
            3 => 
            array (
                'driver_id' => 11,
                'first_name' => 'Maynard Arvin',
                'last_name' => 'Villalobos',
                'bus_id' => 47,
                'gender' => 'male',
                'birthdate' => '1990-07-12',
            ),
            4 => 
            array (
                'driver_id' => 12,
                'first_name' => 'Wanda',
                'last_name' => 'Beast',
                'bus_id' => 48,
                'gender' => 'female',
                'birthdate' => '1999-02-08',
            ),
            5 => 
            array (
                'driver_id' => 13,
                'first_name' => 'Maynard Arvin',
                'last_name' => 'Washerum',
                'bus_id' => 49,
                'gender' => 'female',
                'birthdate' => '2024-02-15',
            ),
            6 => 
            array (
                'driver_id' => 14,
                'first_name' => 'Arvs',
                'last_name' => 'Beast',
                'bus_id' => 50,
                'gender' => 'male',
                'birthdate' => '2024-02-02',
            ),
            7 => 
            array (
                'driver_id' => 15,
                'first_name' => 'Jotaro',
                'last_name' => 'Kujo',
                'bus_id' => 51,
                'gender' => 'male',
                'birthdate' => '1988-02-26',
            ),
            8 => 
            array (
                'driver_id' => 16,
                'first_name' => 'Bruce',
                'last_name' => 'Banner',
                'bus_id' => 52,
                'gender' => 'male',
                'birthdate' => '1969-06-03',
            ),
            9 => 
            array (
                'driver_id' => 17,
                'first_name' => 'Diego',
                'last_name' => 'Dimagiba',
                'bus_id' => 53,
                'gender' => 'other',
                'birthdate' => '1998-11-17',
            ),
            10 => 
            array (
                'driver_id' => 18,
                'first_name' => 'Wanda',
                'last_name' => 'Washer',
                'bus_id' => 54,
                'gender' => 'female',
                'birthdate' => '2002-02-09',
            ),
            11 => 
            array (
                'driver_id' => 20,
                'first_name' => 'Animal',
                'last_name' => 'Washer',
                'bus_id' => 55,
                'gender' => 'female',
                'birthdate' => '1991-02-09',
            ),
            12 => 
            array (
                'driver_id' => 21,
                'first_name' => 'Maynard',
                'last_name' => 'Beast',
                'bus_id' => 57,
                'gender' => 'other',
                'birthdate' => '1918-02-28',
            ),
            13 => 
            array (
                'driver_id' => 22,
                'first_name' => 'Jin',
                'last_name' => 'Kazama',
                'bus_id' => 56,
                'gender' => 'male',
                'birthdate' => '2010-06-09',
            ),
            14 => 
            array (
                'driver_id' => 23,
                'first_name' => 'Kazuya',
                'last_name' => 'Mishima',
                'bus_id' => 58,
                'gender' => 'male',
                'birthdate' => '2000-05-09',
            ),
            15 => 
            array (
                'driver_id' => 24,
                'first_name' => 'Do-San',
                'last_name' => 'Baek',
                'bus_id' => 59,
                'gender' => 'male',
                'birthdate' => '1987-10-10',
            ),
            16 => 
            array (
                'driver_id' => 25,
                'first_name' => 'Bartholomew',
                'last_name' => 'Allen',
                'bus_id' => 60,
                'gender' => 'male',
                'birthdate' => '1993-06-10',
            ),
            17 => 
            array (
                'driver_id' => 26,
                'first_name' => 'Bruce',
                'last_name' => 'Wayne',
                'bus_id' => 61,
                'gender' => 'male',
                'birthdate' => '1998-06-27',
            ),
            18 => 
            array (
                'driver_id' => 27,
                'first_name' => 'Oliver',
                'last_name' => 'Queen',
                'bus_id' => 62,
                'gender' => 'male',
                'birthdate' => '1996-06-06',
            ),
            19 => 
            array (
                'driver_id' => 28,
                'first_name' => 'Clark',
                'last_name' => 'Kent',
                'bus_id' => 63,
                'gender' => 'male',
                'birthdate' => '2000-05-09',
            ),
            20 => 
            array (
                'driver_id' => 29,
                'first_name' => 'Marx',
                'last_name' => 'Alamano',
                'bus_id' => 64,
                'gender' => 'male',
                'birthdate' => '1988-10-07',
            ),
            21 => 
            array (
                'driver_id' => 30,
                'first_name' => 'Democracy',
                'last_name' => 'Aladeen',
                'bus_id' => 67,
                'gender' => 'female',
                'birthdate' => '2001-02-22',
            ),
            22 => 
            array (
                'driver_id' => 31,
                'first_name' => 'Coke',
                'last_name' => 'Masters',
                'bus_id' => 65,
                'gender' => 'male',
                'birthdate' => '1998-12-03',
            ),
            23 => 
            array (
                'driver_id' => 32,
                'first_name' => 'Max',
                'last_name' => 'Imumcapicity',
                'bus_id' => 66,
                'gender' => 'male',
                'birthdate' => '1956-02-18',
            ),
        ));
        
        
    }
}