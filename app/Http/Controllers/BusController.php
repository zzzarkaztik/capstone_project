<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Driver;
use App\Models\BusSchedule;
use App\Models\Transaction;
use App\Models\Ticket;
use Kyslik\ColumnSortable\Sortable;


class BusController extends Controller
{
    use Sortable;
    // Maynard
    public function profile_bus(string $id)
    {
        $bus = DB::table('buses')
            ->select(

                'buses.*', // Selecting plate_number from buses table
                'br.destination', // Selecting destination from bus_routes table alias br

                DB::raw('CONCAT(d.last_name, ", ", d.first_name) AS full_name') // Concatenating last_name and first_name from drivers table alias d
            )
            ->leftJoin('drivers AS d', 'd.driver_id', '=', 'buses.driver_id')
            ->leftJoin('bus_routes AS br', 'br.bus_route_id', '=', 'buses.bus_route_id')
            ->where('buses.bus_id', '=', $id)
            ->get()
            ->first();


        return view('bus_profile', compact('bus'));
    }
    // Maynard end
    // Keith
    public function edit_bus(Request $r, string $id)
    {
        $bus = Bus::where('bus_id', '=', $id)
            ->update(
                [
                    'plate_number' => $r->input('plate_number'),
                    'bus_route_id' => $r->input('bus_route_id'),
                    'driver_id' => $r->input('driver_id'),
                    'service_status' => $r->input('service_status'),
                    'bus_service_start' => $r->input('bus_service_start'),
                ]
            );

        $driver = Driver::where('driver_id', '=', $r->input('driver_id'))
            ->update([
                'bus_id' => $id
            ]);

        return redirect('/admin/buses')->with('success', 'Successfully edited bus!');
    }


    public function edit_bus_form(string $id)
    {
        $bus = Bus::query()
            ->select('buses.*', 'br.destination', 'd.first_name', 'd.last_name')
            ->leftJoin('bus_routes as br', 'br.bus_route_id', '=', 'buses.bus_route_id')
            ->leftJoin('drivers as d', 'd.driver_id', '=', 'buses.driver_id')
            ->where('buses.bus_id', '=', $id)
            ->first();

        $route = BusRoute::all();
        $driver = Driver::query()
            ->select('driver_id', 'last_name', 'first_name')
            ->where('bus_id', '=', null)
            ->get();

        return view('edit_bus', compact('bus', 'route', 'driver'));
    }

    // Keith end

    // Maynard 
    public function delete_bus(string $id)
    {
        Bus::where('bus_id', '=', $id)
            ->delete();

        Driver::where('bus_id', '=', $id)
            ->update([
                'bus_id' => null
            ]);


        return redirect('/admin/buses')
            ->with('success', 'Successfully deleted bus.');
    }


    public function add_bus(Request $r)
    {
        $bus = new Bus;
        $bus->plate_number = $r->input('plate_number');
        $bus->driver_id = $r->input('driver_id');
        $bus->bus_route_id = $r->input('bus_route_id');
        $bus->service_status = $r->input('service_status');
        $bus->bus_service_start = $r->input('bus_service_start');
        if ($bus->service_status == 'in_service' && $r->input('bus_service_start') === null) {
            $bus->bus_service_start = date('Y-m-d'); // Assuming date format is needed
        }
        $bus->save();

        $b = Bus::query()
            ->select('*')
            ->orderBy('bus_id', 'DESC')
            ->get()
            ->first();


        $driver = Driver::where('driver_id', '=', $r->input('driver_id'))
            ->update([
                'bus_id' => $b->bus_id
            ]);


        return redirect('/admin/buses')->with('success', 'new bus added');
    }



    public function add_bus_form()
    {
        $bus_route = BusRoute::query()
            ->select('bus_route_id', 'destination')
            ->get();

        $driver = Driver::query()
            ->select('driver_id', 'last_name', 'first_name')
            ->where('bus_id', '=', null)
            ->get();

        return view('add_buses', compact('driver', 'bus_route'));
    }

    public function show_buses(Request $r)
    {
        $route = BusRoute::all();

        $busQuery = Bus::query()
            ->select(
                'buses.bus_id',
                'buses.bus_route_id',
                'buses.plate_number',
                'buses.driver_id',
                'br.destination',
                'buses.service_status',
                'd.last_name',
                'd.first_name'
            )
            ->leftJoin('drivers AS d', 'd.driver_id', '=', 'buses.driver_id')
            ->leftJoin('bus_routes AS br', 'br.bus_route_id', '=', 'buses.bus_route_id');

        // Apply any additional conditions based on the request
        if ($r->filled("search")) {
            $busQuery->where('plate_number', 'LIKE', '%' . $r->input('search') . '%');
        }
        if ($r->filled("bus_route_id")) {
            $busQuery->where('br.bus_route_id', '=', $r->input('bus_route_id'));
        }
        if ($r->filled("service_status")) {
            $busQuery->where('service_status', '=', $r->input('service_status'));
        }

        // Apply sorting using the sortable() method on the model
        $bus = $busQuery->sortable()->paginate(10);
        $bus->appends($r->except('page'));


        $total_buses = Bus::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();


        return view('buses', compact('bus', 'route', 'total_buses'));
    }
    // -end Maynard

    public function total_dashboard()
    {
        $total_buses = Bus::query()
            ->select(DB::raw('COUNT(plate_number) AS total'))
            ->get()
            ->first();

        $total_routes = BusRoute::query()
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

    public function getOrderGraphData()
    {
        $data = DB::select("SELECT COUNT(ticket_id) AS ticket_sales, br.destination 
                        FROM tickets AS t 
                        JOIN bus_schedules AS bs ON bs.bus_schedule_id = t.bus_schedule_id 
                        JOIN buses AS b ON b.bus_id = bs.bus_id 
                        JOIN bus_routes AS br ON br.bus_route_id = b.bus_route_id 
                        GROUP BY destination");

        return response()->json($data);
    }
}
