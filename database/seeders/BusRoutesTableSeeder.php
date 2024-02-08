<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusRoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bus_routes')->delete();
        
        \DB::table('bus_routes')->insert(array (
            0 => 
            array (
                'bus_route_id' => 1,
                'origin' => 'PITX',
                'destination' => 'Calatagan, Batangas',
                'kilometers' => 114,
                'price' => '303.85',
            ),
            1 => 
            array (
                'bus_route_id' => 2,
                'origin' => 'PITX',
                'destination' => 'Mariveles, Bataan',
                'kilometers' => 184,
                'price' => '489.35',
            ),
            2 => 
            array (
                'bus_route_id' => 3,
                'origin' => 'PITX',
                'destination' => 'Baguio City',
                'kilometers' => 266,
                'price' => '706.65',
            ),
            3 => 
            array (
                'bus_route_id' => 4,
                'origin' => 'PITX',
                'destination' => 'Sorsogon',
                'kilometers' => 514,
                'price' => '1363.85',
            ),
            4 => 
            array (
                'bus_route_id' => 5,
                'origin' => 'PITX',
                'destination' => 'Tanay, Rizal',
                'kilometers' => 62,
                'price' => '166.05',
            ),
        ));
        
        
    }
}