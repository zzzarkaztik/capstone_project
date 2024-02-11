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
        <h1>Routes</h1>
        <h6 class="text-black-50">Total Routes: {{ $total_routes->total }}
            <a href="/admin/routes/add" class="badge bg-success text-light text-decoration-none">+ ADD ROUTE</a>
        </h6>

        <div class="mb-3">
            <form action="/admin/routes" method="GET" class="row g-3">
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control"
                            placeholder="Search destination (e.g. Mariveles)">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-success" value="Search" />
                </div>
            </form>
        </div>

        <table class="table table-hover table-striped table-bordered align-middle">
            <thead>
                <tr>
                    <th>@sortablelink('bus_route_id', 'Route #') </th>
                    <th>Origin</th>
                    <th>@sortablelink('destination', 'Destination')</th>
                    <th>@sortablelink('kilometers', 'Distance (km)')</th>
                    <th>@sortablelink('price', 'Price')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($bus_routes->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">No bus routes found.</td>
                    </tr>
                @else
                    @foreach ($bus_routes as $br)
                        <tr>
                            <td>{{ $br->bus_route_id }}</td>
                            <td>{{ $br->origin }}</td>
                            <td>{{ $br->destination }}</td>
                            <td>{{ $br->kilometers }}</td>
                            <td>{{ number_format($br->price, 2, '.', ',') }}</td>
                            <td>
                                <a href="/admin/routes/edit/{{ $br->bus_route_id }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#delete_{{ $br->bus_route_id }}"
                                    class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $bus_routes->links('pagination::bootstrap-5') }}


    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
