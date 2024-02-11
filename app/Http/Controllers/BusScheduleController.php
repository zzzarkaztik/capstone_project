<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\BusSchedule;
use App\Models\Bus;
use App\Models\BusRoute;


class BusScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $r)
    {
        $schedule = BusSchedule::query()
            ->select('bus_schedules.*', 'br.destination')
            ->join('buses as b', 'b.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes as br', 'br.bus_route_id', '=', 'b.bus_route_id');
        if ($r->filled("search")) {
            $searchField = $r->input('search_field'); // Get the selected search field
            $searchTerm = $r->input('search');

            // Conditional WHERE clauses based on search field
            if ($searchField == 'destination') {
                $schedule->where('br.destination', 'LIKE', '%' . $searchTerm . '%');
            } elseif ($searchField == 'bus_schedule_id') {
                $schedule->where('bus_schedules.bus_schedule_id', 'LIKE', '%' . $searchTerm . '%');
            } elseif ($searchField == 'bus_id') {
                $schedule->where('b.bus_id', 'LIKE', '%' . $searchTerm . '%');
            }
        }
        if (request()->has('sort')) {
            // If sorting criteria is provided by the user, use the sortable method
            $schedule = $schedule->sortable();
        } else {
            // Otherwise, default sorting by arrival_time
            $schedule = $schedule->orderBy('arrival_time');
        }

        // Paginate the results
        $schedule = $schedule->paginate(10);

        $total_schedules = BusSchedule::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();

        return view('bus_schedules', compact('schedule', 'total_schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bus = Bus::query()
            ->select('buses.bus_id', 'br.destination')
            ->join('bus_routes as br', 'br.bus_route_id', '=', 'buses.bus_route_id')
            ->where('service_status', '=', 'in_service')
            ->get();

        return view('add_schedule', compact('bus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $s = new BusSchedule;
        $s->bus_id = $r->input("bus_id");
        $s->bus_route_id = Bus::where('bus_id', $s->bus_id)->first()->bus_route_id;
        $s->arrival_time = $r->input("arrival_time");
        if (is_null($r->input("departure_time"))) {
            $arrival = Carbon::parse($r->input("arrival_time"));
            $s->departure_time = $arrival->addMinutes(30);
        } else {
            $s->departure_time = $r->input("departure_time");
        }
        $s->status = $r->input("status");
        $s->date_posted = now();
        $s->save();

        return redirect('/admin/schedules')->with('success', 'New schedule added.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sched = BusSchedule::query()
            ->select('bus_schedules.*', 'br.destination')
            ->join('buses as b', 'b.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes as br', 'br.bus_route_id', '=', 'b.bus_route_id')
            ->where('bus_schedule_id', '=', $id)
            ->get()
            ->first();

        $bus = Bus::query()
            ->select('bus_id', 'destination')
            ->join('bus_routes as br', 'br.bus_route_id', '=', 'buses.bus_route_id')
            ->where('service_status', '=', 'in_service')
            ->get();

        return view('edit_schedule', compact('sched', 'bus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $sched = BusSchedule::where('bus_schedule_id', '=', $id)
            ->update(
                [
                    'bus_id' => $r->input('bus_id'),
                    'arrival_time' => $r->input('arrival_time'),
                    'departure_time' => $r->input('departure_time'),
                    'status' => $r->input('status'),
                ]
            );

        return redirect('/admin/schedules')->with('success', 'Successfully edited schedule!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BusSchedule::where('bus_schedule_id', '=', $id)
            ->delete();
        return redirect('/admin/schedules')->with('success', 'Schedule removed successfully.');
    }

    public function generateSchedule(Request $request, $routeId)
    {
        $route = BusRoute::findOrFail($routeId);
        $startTime = Carbon::parse($request->get('start_time', '06:00:00'));
        $numBuses = $request->get('num_buses', 3);

        $buses = DB::table('buses')
            ->join('bus_routes', 'buses.bus_route_id', '=', 'bus_routes.bus_route_id') // Corrected Join
            ->where('buses.service_status', 'in_service')
            ->where('buses.bus_route_id', $route->id)
            ->select('buses.*')
            ->take($numBuses)
            ->get();

        return $buses;

        $schedules = [];
        foreach ($buses as $bus) {
            $currentTime = $startTime->copy();
            while ($currentTime->isSameDay($startTime)) {
                $scheduleItem = [
                    'bus_id' => $bus->id,
                    'arrival_time' => $currentTime->format('H:i:s'),
                    'departure_time' => $currentTime->addMinutes(30)->format('H:i:s'),
                    'status' => 'pending', // Use 'Scheduled' if not storing in the database
                    'date_posted' => now(),
                ];

                // Option to store:
                // BusSchedule::create($scheduleItem); 

                $schedules[] = $scheduleItem;
                $currentTime->addMinutes(30);
            }
        }
    }
}
