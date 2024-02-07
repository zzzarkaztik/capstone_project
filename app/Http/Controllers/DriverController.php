<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Bus;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    // Maynard
    public function add_driver()
    {
    }
    public function add_driver_form()
    {
        $bus = Bus::query()
            ->select('bus_id', 'plate_number')
            ->where('driver_id', '=', null)
            ->get();

        return view('add_drivers', compact('bus'));
    }
    public function show_drivers()
    {
        $driver = Driver::query()
            ->select('*')
            ->get();

        return view('drivers', compact('driver'));
    }
    // -end Maynard
}
