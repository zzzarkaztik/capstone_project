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

        \DB::table('bus_routes')->insert(array(
            0 =>
            array(
                'bus_route_id' => 1,
                'origin' => 'PITX',
                'destination' => 'Calatagan, Batangas',
                'kilometers' => 114,
                'price' => '303.85',
            ),
            1 =>
            array(
                'bus_route_id' => 2,
                'origin' => 'PITX',
                'destination' => 'Mariveles, Bataan',
                'kilometers' => 184,
                'price' => '489.35',
            ),
            2 =>
            array(
                'bus_route_id' => 3,
                'origin' => 'PITX',
                'destination' => 'Baguio City',
                'kilometers' => 266,
                'price' => '706.65',
            ),
            3 =>
            array(
                'bus_route_id' => 4,
                'origin' => 'PITX',
                'destination' => 'Sorsogon',
                'kilometers' => 514,
                'price' => '1363.85',
            ),
            4 =>
            array(
                'bus_route_id' => 5,
                'origin' => 'PITX',
                'destination' => 'Tanay, Rizal',
                'kilometers' => 62,
                'price' => '166.05',
            ),
            5 =>
            array(
                'bus_route_id' => 10,
                'origin' => 'PITX',
                'destination' => 'Santa Ana, Cagayan',
                'kilometers' => 644,
                'price' => '1708.35',
            ),
            6 =>
            array(
                'bus_route_id' => 11,
                'origin' => 'PITX',
                'destination' => 'Alaminos, Pangasinan',
                'kilometers' => 125,
                'price' => '333.00',
            ),
            7 =>
            array(
                'bus_route_id' => 12,
                'origin' => 'PITX',
                'destination' => 'Gotham City, DCU',
                'kilometers' => 500,
                'price' => '1326.75',
            ),
            8 =>
            array(
                'bus_route_id' => 13,
                'origin' => 'PITX',
                'destination' => 'Star City, DCU',
                'kilometers' => 650,
                'price' => '1724.25',
            ),
            9 =>
            array(
                'bus_route_id' => 14,
                'origin' => 'PITX',
                'destination' => 'Central City, DCU',
                'kilometers' => 498,
                'price' => '1321.45',
            ),
            10 =>
            array(
                'bus_route_id' => 15,
                'origin' => 'PITX',
                'destination' => 'Metropolis, DCU',
                'kilometers' => 680,
                'price' => '1803.75',
            ),
        ));
    }
}
