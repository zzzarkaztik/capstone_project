<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Home</title>
</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')


    <div id="content">
        <h1>Buses</h1>
        <h6 class="text-black-50">Total Buses: {{ $total_buses->total }} <a href="/admin/buses/add">+
                ADD BUS</a></h6>

        <div class="mb-3">
            <form action="/admin/buses" method="GET" class="row">
                <div class="col-lg-3">
                    <input type="text" name="search" class="form-control" value=""
                        placeholder="Search plate number (e.g. ABC 1234)" />
                </div>
                <div class="col-lg-3">
                    <select name="bus_route_id" class="form-control">
                        <option value="" selected>Any Route ID - Destination</option>
                        @foreach ($route as $r)
                            <option value="{{ $r->bus_route_id }}">{{ $r->bus_route_id }} - {{ $r->destination }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3">
                    <select name="service_status" class="form-control">
                        <option value="" selected>Any Service Status</option>
                        <option value="in_service">In Service</option>
                        <option value="not_in_service">Not In Service</option>
                    </select>
                </div>
                <div class="col-lg-3 d-flex align-items-end">
                    <input type="submit" class="btn btn-success align-self-end" value="Search" />
                </div>
            </form>
        </div>


        <table class="table table-hover align-middle">
            <tr>
                <th>@sortablelink('bus_id', 'Bus ID')</th>
                <th>@sortablelink('plate_number', 'Plate Number')</th>
                <th>@sortablelink('bus_route_id', 'Route ID - Destination')</th>
                <th>@sortablelink('driver_id', 'Driver ID - Name')</th>
                <th>Service Status</th>
                <th>Action</th>
            </tr>
            @if ($bus->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">No buses found.</td>
                </tr>
            @else
                @foreach ($bus as $b)
                    <tr>
                        <td>{{ $b->bus_id }}</td>
                        <td>{{ $b->plate_number }}</td>
                        <td>#{{ $b->bus_route_id }} - {{ $b->destination }}</td>
                        <td>#{{ $b->driver_id }} - {{ $b->full_name }}</td>
                        <td>{{ $b->service_status == 'not_in_service' ? 'Not in Service' : 'In Service' }}</td>
                        <td>
                            <a href="/admin/buses/{{ $b->bus_id }}" class="btn btn-primary">View</a>
                            <a href="/admin/buses/edit/{{ $b->bus_id }}" class="btn btn-warning">Edit</a>
                            <a data-bs-toggle="modal" data-bs-target="#delete_{{ $b->bus_id }}"
                                class="btn btn-danger">Delete</a>
                        </td>
                        @include('layouts/delete_bus')
                    </tr>
                @endforeach
            @endif
        </table>
        {{ $bus->links('pagination::bootstrap-5') }}

    </div>

</body>

</html>
