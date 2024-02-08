<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buses')->delete();
        
        \DB::table('buses')->insert(array (
            0 => 
            array (
                'bus_id' => 2,
                'plate_number' => 'XYZ 456',
                'bus_route_id' => 2,
                'driver_id' => 2,
                'bus_service_start' => NULL,
                'service_status' => 'in_service',
            ),
            1 => 
            array (
                'bus_id' => 3,
                'plate_number' => 'MNO 789',
                'bus_route_id' => 3,
                'driver_id' => 3,
                'bus_service_start' => NULL,
                'service_status' => 'in_service',
            ),
            2 => 
            array (
                'bus_id' => 4,
                'plate_number' => 'PQR 567',
                'bus_route_id' => 4,
                'driver_id' => 4,
                'bus_service_start' => NULL,
                'service_status' => 'in_service',
            ),
            3 => 
            array (
                'bus_id' => 10,
                'plate_number' => 'ZZZ 4521',
                'bus_route_id' => 3,
                'driver_id' => 3,
                'bus_service_start' => NULL,
                'service_status' => 'in_service',
            ),
            4 => 
            array (
                'bus_id' => 29,
                'plate_number' => 'BAT 4561',
                'bus_route_id' => 5,
                'driver_id' => NULL,
                'bus_service_start' => '2024-02-10',
                'service_status' => 'not_in_service',
            ),
        ));
        
        
    }
}