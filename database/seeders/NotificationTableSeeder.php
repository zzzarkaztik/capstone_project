<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification')->delete();
        
        
        
    }
}