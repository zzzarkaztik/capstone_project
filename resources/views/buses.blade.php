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
        <h6 class="text-black-50">
            Total Buses: {{ $total_buses->total }}
            <a href="/admin/buses/add" class="badge bg-success text-light text-decoration-none">+ ADD BUS</a>

        </h6>

        <div class="mb-3">
            <form action="/admin/buses" method="GET" class="row g-3">
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control"
                            placeholder="Search plate number (e.g. ABC 1234)">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="bus_route_id" class="form-select">
                        <option value="" selected>Any Route ID - Destination</option>
                        @foreach ($route as $r)
                            <option value="{{ $r->bus_route_id }}">
                                {{ $r->bus_route_id }} - {{ $r->destination }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="service_status" class="form-select">
                        <option value="" selected>Any Service Status</option>
                        <option value="in_service">In Service</option>
                        <option value="not_in_service">Not In Service</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-success" value="Search" />
                </div>
            </form>
        </div>

        <table class="table table-hover table-striped table-bordered align-middle">
            <thead>
                <tr>
                    <th>@sortablelink('bus_id', 'Bus ID')</th>
                    <th>@sortablelink('plate_number', 'Plate Number')</th>
                    <th>@sortablelink('bus_route_id', 'Route ID - Destination')</th>
                    <th>@sortablelink('driver_id', 'Driver ID - Name')</th>
                    <th>Service Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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
                            <td>#{{ $b->driver_id }} - {{ $b->last_name }}, {{ $b->first_name }}</td>
                            <td>
                                <span
                                    class="badge bg-{{ $b->service_status == 'in_service' ? 'success' : 'warning' }}">
                                    {{ $b->service_status == 'not_in_service' ? 'Not in Service' : 'In Service' }}
                                </span>
                            </td>
                            <td>
                                <a href="/admin/buses/{{ $b->bus_id }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/admin/buses/edit/{{ $b->bus_id }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#delete_{{ $b->bus_id }}"
                                    class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $bus->links('pagination::bootstrap-5') }}
    </div>

</body>

</html>
