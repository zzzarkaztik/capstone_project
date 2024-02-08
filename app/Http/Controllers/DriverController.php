<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Bus;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    // Maynard
    public function edit_driver(Request $r, string $id)
    {
        $driver = Driver::where('driver_id', '=', $id)
            ->update([
                'first_name' => $r->input('first_name'),
                'last_name' => $r->input('last_name'),
                'birthdate' => $r->input('birthdate'),
                'bus_id' => $r->input('bus_id'),
                'gender' => $r->input('gender'),
            ]);

        Bus::where('bus_id', '=', $r->input('bus_id'))
            ->update([
                'driver_id' => $id
            ]);

        return redirect('/admin/drivers')
            ->with('success', 'Successfully edited driver.');
    }
    public function edit_driver_form(string $id)
    {
        $driver = Driver::query()
            ->select('drivers.*')
            ->leftJoin('buses AS b', 'b.driver_id', '=', 'drivers.driver_id')
            ->where('drivers.driver_id', '=', $id)
            ->first();

        $bus = Bus::query()
            ->select('bus_id', 'plate_number')
            ->where('driver_id', '=', null)
            ->get();


        return view('edit_driver', compact('driver', 'bus'));
    }
    public function delete_driver(string $id)
    {
        Driver::where('driver_id', '=', $id)
            ->delete();

        Bus::where('driver_id', '=', $id)
            ->update([
                'driver_id' => null
            ]);

        return redirect('/admin/drivers')
            ->with('success', 'Successfully deleted driver.');
    }
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

        $d = Driver::query()
            ->select('*')
            ->orderBy('driver_id', 'DESC')
            ->get()
            ->first();


        $bus = Bus::where('bus_id', '=', $r->input('bus_id'))
            ->update([
                'driver_id' => $d->driver_id
            ]);


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
        $bus = Bus::query()
            ->select('bus_id', 'plate_number')
            ->where('driver_id', '=', null)
            ->get();

        $driver = Driver::query()
            ->select('*')
            ->get();

        return view('drivers', compact('driver', 'bus'));
    }
    // -end Maynard
}
