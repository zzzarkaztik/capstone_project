<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->integer('bus_schedule_id', true);
            $table->integer('bus_id');
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->string('status', 25);
            $table->date('date_posted')->useCurrent();
            $table->integer('available_seats')->default(50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedules');
    }
};
