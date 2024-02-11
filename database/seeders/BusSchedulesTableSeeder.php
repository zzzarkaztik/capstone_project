<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusSchedulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bus_schedules')->delete();
        
        \DB::table('bus_schedules')->insert(array (
            0 => 
            array (
                'bus_schedule_id' => 1,
                'bus_id' => 44,
                'arrival_time' => '05:00:00',
                'departure_time' => '05:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            1 => 
            array (
                'bus_schedule_id' => 2,
                'bus_id' => 45,
                'arrival_time' => '05:30:00',
                'departure_time' => '06:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            2 => 
            array (
                'bus_schedule_id' => 3,
                'bus_id' => 44,
                'arrival_time' => '15:00:00',
                'departure_time' => '15:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            3 => 
            array (
                'bus_schedule_id' => 4,
                'bus_id' => 45,
                'arrival_time' => '15:30:00',
                'departure_time' => '16:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            4 => 
            array (
                'bus_schedule_id' => 5,
                'bus_id' => 46,
                'arrival_time' => '05:00:00',
                'departure_time' => '05:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            5 => 
            array (
                'bus_schedule_id' => 6,
                'bus_id' => 47,
                'arrival_time' => '05:30:00',
                'departure_time' => '06:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            6 => 
            array (
                'bus_schedule_id' => 7,
                'bus_id' => 48,
                'arrival_time' => '06:00:00',
                'departure_time' => '06:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            7 => 
            array (
                'bus_schedule_id' => 8,
                'bus_id' => 49,
                'arrival_time' => '06:30:00',
                'departure_time' => '07:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            8 => 
            array (
                'bus_schedule_id' => 9,
                'bus_id' => 50,
                'arrival_time' => '03:00:00',
                'departure_time' => '03:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            9 => 
            array (
                'bus_schedule_id' => 10,
                'bus_id' => 51,
                'arrival_time' => '03:30:00',
                'departure_time' => '04:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            10 => 
            array (
                'bus_schedule_id' => 11,
                'bus_id' => 52,
                'arrival_time' => '04:00:00',
                'departure_time' => '04:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            11 => 
            array (
                'bus_schedule_id' => 12,
                'bus_id' => 53,
                'arrival_time' => '04:30:00',
                'departure_time' => '05:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            12 => 
            array (
                'bus_schedule_id' => 13,
                'bus_id' => 46,
                'arrival_time' => '15:00:00',
                'departure_time' => '15:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            13 => 
            array (
                'bus_schedule_id' => 14,
                'bus_id' => 47,
                'arrival_time' => '15:30:00',
                'departure_time' => '16:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            14 => 
            array (
                'bus_schedule_id' => 15,
                'bus_id' => 48,
                'arrival_time' => '16:30:00',
                'departure_time' => '17:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            15 => 
            array (
                'bus_schedule_id' => 16,
                'bus_id' => 49,
                'arrival_time' => '17:00:00',
                'departure_time' => '17:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            16 => 
            array (
                'bus_schedule_id' => 17,
                'bus_id' => 50,
                'arrival_time' => '15:00:00',
                'departure_time' => '15:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            17 => 
            array (
                'bus_schedule_id' => 18,
                'bus_id' => 51,
                'arrival_time' => '15:30:00',
                'departure_time' => '16:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            18 => 
            array (
                'bus_schedule_id' => 19,
                'bus_id' => 44,
                'arrival_time' => '16:00:00',
                'departure_time' => '16:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            19 => 
            array (
                'bus_schedule_id' => 20,
                'bus_id' => 44,
                'arrival_time' => '16:30:00',
                'departure_time' => '17:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            20 => 
            array (
                'bus_schedule_id' => 21,
                'bus_id' => 54,
                'arrival_time' => '17:00:00',
                'departure_time' => '17:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            21 => 
            array (
                'bus_schedule_id' => 22,
                'bus_id' => 55,
                'arrival_time' => '05:30:00',
                'departure_time' => '06:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            22 => 
            array (
                'bus_schedule_id' => 23,
                'bus_id' => 56,
                'arrival_time' => '05:00:00',
                'departure_time' => '05:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            23 => 
            array (
                'bus_schedule_id' => 24,
                'bus_id' => 57,
                'arrival_time' => '05:30:00',
                'departure_time' => '06:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            24 => 
            array (
                'bus_schedule_id' => 25,
                'bus_id' => 58,
                'arrival_time' => '06:00:00',
                'departure_time' => '06:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            25 => 
            array (
                'bus_schedule_id' => 26,
                'bus_id' => 59,
                'arrival_time' => '06:30:00',
                'departure_time' => '07:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            26 => 
            array (
                'bus_schedule_id' => 27,
                'bus_id' => 56,
                'arrival_time' => '18:00:00',
                'departure_time' => '18:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            27 => 
            array (
                'bus_schedule_id' => 28,
                'bus_id' => 57,
                'arrival_time' => '06:30:00',
                'departure_time' => '07:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            28 => 
            array (
                'bus_schedule_id' => 29,
                'bus_id' => 58,
                'arrival_time' => '19:00:00',
                'departure_time' => '19:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            29 => 
            array (
                'bus_schedule_id' => 30,
                'bus_id' => 59,
                'arrival_time' => '19:30:00',
                'departure_time' => '20:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            30 => 
            array (
                'bus_schedule_id' => 31,
                'bus_id' => 64,
                'arrival_time' => '05:00:00',
                'departure_time' => '05:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            31 => 
            array (
                'bus_schedule_id' => 32,
                'bus_id' => 65,
                'arrival_time' => '17:00:00',
                'departure_time' => '17:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            32 => 
            array (
                'bus_schedule_id' => 33,
                'bus_id' => 66,
                'arrival_time' => '05:00:00',
                'departure_time' => '05:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            33 => 
            array (
                'bus_schedule_id' => 34,
                'bus_id' => 67,
                'arrival_time' => '05:30:00',
                'departure_time' => '06:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            34 => 
            array (
                'bus_schedule_id' => 35,
                'bus_id' => 66,
                'arrival_time' => '17:00:00',
                'departure_time' => '17:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            35 => 
            array (
                'bus_schedule_id' => 36,
                'bus_id' => 67,
                'arrival_time' => '17:30:00',
                'departure_time' => '18:00:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            36 => 
            array (
                'bus_schedule_id' => 37,
                'bus_id' => 60,
                'arrival_time' => '06:00:00',
                'departure_time' => '06:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            37 => 
            array (
                'bus_schedule_id' => 38,
                'bus_id' => 61,
                'arrival_time' => '06:00:00',
                'departure_time' => '06:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            38 => 
            array (
                'bus_schedule_id' => 39,
                'bus_id' => 62,
                'arrival_time' => '06:00:00',
                'departure_time' => '06:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
            39 => 
            array (
                'bus_schedule_id' => 40,
                'bus_id' => 63,
                'arrival_time' => '06:00:00',
                'departure_time' => '06:30:00',
                'status' => 'pending',
                'date_posted' => '2024-02-11',
                'available_seats' => 50,
            ),
        ));
        
        
    }
}