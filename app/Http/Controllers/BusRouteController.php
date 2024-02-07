<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BusRoute;

class BusRouteController extends Controller
{
    public function delete_route(string $id)
    {
        $route = BusRoute::where('bus_route_id', '=', $id)
            ->delete();

        return redirect('/admin/routes')
            ->with('success', 'Successfully deleted route.');
    }

    public function edit_route(Request $r, string $id)
    {
        $route = BusRoute::where('bus_route_id', '=', $id)
            ->update(
                [
                    'origin' => $r->input('origin'),
                    'destination' => $r->input('destination'),
                    'kilometers' => $r->input('kilometers'),
                    'price' => $r->input('price'),
                ]
            );

        return redirect('/admin/routes')->with('success', 'Successfully edited route.');
    }

    public function edit_route_form(string $id)
    {
        $route = BusRoute::query()
            ->select('*')
            ->where('bus_route_id', '=', $id)
            ->get()
            ->first();
        return view('edit_bus_routes', compact('route'));
    }

    public function add_route(Request $r)
    {
        $route = new BusRoute;
        $route->origin = $r->input('origin');
        $route->destination = $r->input('destination');
        $route->kilometers = $r->input('kilometers');
        $route->price = $r->input('price');
        $route->save();

        return redirect("/admin/routes")
            ->with('success', 'Successfully added route!');
    }

    public function show_route()
    {
        $bus_routes = BusRoute::query()
            ->select('*')
            ->get();

        return view('bus_routes', compact('bus_routes'));
    }

    public function add_route_form()
    {
        return view('add_bus_routes');
    }
}
