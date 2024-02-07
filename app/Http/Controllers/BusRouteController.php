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

        return view('routes', compact('bus_routes'));
    }

    public function add_route_form()
    {
        return view('add_bus_routes');
    }
}
