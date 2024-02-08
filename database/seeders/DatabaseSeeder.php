<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(BusesTableSeeder::class);
        $this->call(BusRoutesTableSeeder::class);
        $this->call(BusSchedulesTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
