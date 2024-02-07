<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Bus;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    // Maynard

    public function driver_profile(string $id)
    {
        $driver = Driver::query()
            ->select('*')
            ->where('driver_id', '=', $id)
            ->get()
            ->first();

        return view('driver_profile', compact('driver'));
    }
    public function add_driver(request $r)
    {
        $driver = new Driver;
        $driver->first_name = $r->input('first_name');
        $driver->last_name = $r->input('last_name');
        $driver->bus_id = $r->input('bus_id');
        $driver->gender = $r->input('gender');
        $driver->birthdate = $r->input('birthdate');
        $driver->save();

        return redirect('/admin/drivers')->with('success', 'New Driver Added');
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
