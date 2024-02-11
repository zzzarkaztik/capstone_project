<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->call(BusesTableSeeder::class);
        $this->call(BusRoutesTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(BusSchedulesTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
    }
}
