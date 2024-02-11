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

        \DB::table('buses')->insert(array(
            0 =>
            array(
                'bus_id' => 44,
                'plate_number' => 'AAA 1111',
                'bus_route_id' => 1,
                'driver_id' => 3,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            1 =>
            array(
                'bus_id' => 45,
                'plate_number' => 'AAA 1112',
                'bus_route_id' => 1,
                'driver_id' => 4,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            2 =>
            array(
                'bus_id' => 46,
                'plate_number' => 'AAB 1113',
                'bus_route_id' => 2,
                'driver_id' => 10,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            3 =>
            array(
                'bus_id' => 47,
                'plate_number' => 'ASC 1233',
                'bus_route_id' => 2,
                'driver_id' => 11,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            4 =>
            array(
                'bus_id' => 48,
                'plate_number' => 'SOZ 0509',
                'bus_route_id' => 2,
                'driver_id' => 12,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            5 =>
            array(
                'bus_id' => 49,
                'plate_number' => 'ARK 2019',
                'bus_route_id' => 2,
                'driver_id' => 13,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            6 =>
            array(
                'bus_id' => 50,
                'plate_number' => 'DAN 2612',
                'bus_route_id' => 3,
                'driver_id' => 14,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            7 =>
            array(
                'bus_id' => 51,
                'plate_number' => 'ZZZ 4322',
                'bus_route_id' => 3,
                'driver_id' => 15,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            8 =>
            array(
                'bus_id' => 52,
                'plate_number' => 'YYY 7893',
                'bus_route_id' => 3,
                'driver_id' => 16,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            9 =>
            array(
                'bus_id' => 53,
                'plate_number' => 'ZZZ 4555',
                'bus_route_id' => 3,
                'driver_id' => 17,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            10 =>
            array(
                'bus_id' => 54,
                'plate_number' => 'BBB 1231',
                'bus_route_id' => 4,
                'driver_id' => 18,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            11 =>
            array(
                'bus_id' => 55,
                'plate_number' => 'QWW 1122',
                'bus_route_id' => 4,
                'driver_id' => 20,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            12 =>
            array(
                'bus_id' => 56,
                'plate_number' => 'WWW 5542',
                'bus_route_id' => 5,
                'driver_id' => 22,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            13 =>
            array(
                'bus_id' => 57,
                'plate_number' => 'EEE 1123',
                'bus_route_id' => 5,
                'driver_id' => 21,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            14 =>
            array(
                'bus_id' => 58,
                'plate_number' => 'RRR 5555',
                'bus_route_id' => 5,
                'driver_id' => 23,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            15 =>
            array(
                'bus_id' => 59,
                'plate_number' => 'TTT 2235',
                'bus_route_id' => 5,
                'driver_id' => 24,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            16 =>
            array(
                'bus_id' => 60,
                'plate_number' => 'FLA 5412',
                'bus_route_id' => 14,
                'driver_id' => 25,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            17 =>
            array(
                'bus_id' => 61,
                'plate_number' => 'BAT 1939',
                'bus_route_id' => 12,
                'driver_id' => 26,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            18 =>
            array(
                'bus_id' => 62,
                'plate_number' => 'GRN 4552',
                'bus_route_id' => 13,
                'driver_id' => 27,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            19 =>
            array(
                'bus_id' => 63,
                'plate_number' => 'SUP 3590',
                'bus_route_id' => 15,
                'driver_id' => 28,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            20 =>
            array(
                'bus_id' => 64,
                'plate_number' => 'THG 4521',
                'bus_route_id' => 10,
                'driver_id' => 29,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            21 =>
            array(
                'bus_id' => 65,
                'plate_number' => 'ZZZ 6642',
                'bus_route_id' => 10,
                'driver_id' => 31,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            22 =>
            array(
                'bus_id' => 66,
                'plate_number' => 'YTE 5123',
                'bus_route_id' => 11,
                'driver_id' => 32,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
            23 =>
            array(
                'bus_id' => 67,
                'plate_number' => 'AFK 6342',
                'bus_route_id' => 11,
                'driver_id' => 30,
                'bus_service_start' => '2024-02-11',
                'service_status' => 'in_service',
            ),
        ));
    }
}
