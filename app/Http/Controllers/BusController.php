<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Driver;
use App\Models\BusSchedule;
use App\Models\Transaction;

class BusController extends Controller
{
    // Maynard 
    public function add_bus(Request $r)
    {
        $bus = new Bus;
        $bus->plate_number = $r->input('plate_number') ?? null;
        $bus->driver_id = $r->input('driver_id') ?? null;
        $bus->bus_route_id = $r->input('busroute_id') ?? null;
        $bus->service_status = $r->input('service_status') ?? null;
        $bus->bus_service_start = $r->input('bus_service_start') ?? null;
        $bus->save();

        return redirect('admin/buses')->with('success', 'new bus added');
    }
    public function add_bus_form()
    {
        $bus_route = BusRoute::query()
            ->select('bus_route_id', 'destination')
            ->get();

        $driver = Driver::query()
            ->select('driver_id', 'last_name', 'first_name')
            ->get();

        return view('add_buses', compact('driver', 'bus_route'));
    }

    public function show_buses()
    {
        $bus = Bus::query()
            ->select('*')
            ->join('drivers AS d', 'd.driver_id', '=', 'buses.driver_id')
            ->join('bus_routes AS br', 'br.bus_route_id', '=', 'buses.bus_route_id')
            ->get();

        return view('buses', compact('bus'));
    }
    // -end Maynard

    public function total_dashboard()
    {
        $total_routes = Bus::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();

        $total_buses = BusRoute::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();

        $total_schedules = BusSchedule::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();

        $total_bookings = Transaction::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();

        return view('dashboard', compact('total_buses', 'total_routes', 'total_schedules', 'total_bookings'));
    }
}
