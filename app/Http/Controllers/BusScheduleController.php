<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusSchedule;
use App\Models\Bus;


class BusScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = BusSchedule::query()
            ->select('bus_schedules.*', 'br.destination')
            ->join('buses as b', 'b.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes as br', 'br.bus_route_id', '=', 'b.bus_route_id')
            ->orderBy('arrival_time')
            ->get();

        return view('bus_schedules', compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bus = Bus::query()
            ->select('buses.bus_id', 'br.destination')
            ->join('bus_routes as br', 'br.bus_route_id', '=', 'buses.bus_route_id')
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
        $s->arrival_time = $r->input("arrival_time");
        $s->departure_time = $r->input("departure_time");
        $s->status = $r->input("status");
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
}
