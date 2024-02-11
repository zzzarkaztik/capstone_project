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
        Schema::create('buses', function (Blueprint $table) {
            $table->integer('bus_id', true);
            $table->string('plate_number', 8)->nullable();
            $table->integer('bus_route_id')->nullable();
            $table->integer('driver_id')->nullable();
            $table->date('bus_service_start')->nullable()->useCurrent();
            $table->string('service_status', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
};
