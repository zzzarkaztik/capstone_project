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
        <h6 class="text-black-50">Total Routes: {{ $total_routes->total }} <a href="/admin/routes/add">+ ADD ROUTES</a>
        </h6>
        <div class="mb-3">
            <form action="/admin/routes" method="GET" class="row">
                <div class="col-lg-3">
                    <input type="text" name="search" class="form-control" value=""
                        placeholder="Search destination (e.g. Mariveles)" />
                </div>
                <div class="col-lg-1 d-flex align-items-end">
                    <input type="submit" class="btn btn-success align-self-end" value="Search" />
                </div>
            </form>
        </div>
        <table class="table table-hover align-middle">
            <tr>
                <th>@sortablelink('bus_route_id', 'Route #') </th>
                <th>Origin</th>
                <th>@sortablelink('destination', 'Destination')</th>
                <th>@sortablelink('kilometers', 'Distance (km)')</th>
                <th>@sortablelink('price', 'Price')</th>
                <th>Action</th>
            </tr>
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
                            <a href="/admin/routes/edit/{{ $br->bus_route_id }}" class="btn btn-warning">Edit</a>
                            <a data-bs-toggle="modal" data-bs-target="#delete_{{ $br->bus_route_id }}"
                                class="btn btn-danger">Delete</a>
                        </td>
                        @include('layouts/delete_route')
                    </tr>
                @endforeach
            @endif
        </table>
        {{ $bus_routes->links('pagination::bootstrap-5') }}

    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
