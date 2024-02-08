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
        <a href="/admin/buses/add" class="btn btn-success mb-2">+ ADD BUS</a>
        <table class="table table-hover">
            <tr>
                <th>Bus ID</th>
                <th>Plate Number</th>
                <th>Destination</th>
                <th>Driver</th>
                <th>Service Status</th>
                <th>Action</th>
            </tr>
            @foreach ($bus as $b)
                <tr>
                    <td>{{ $b->bus_id }}</td>
                    <td>{{ $b->plate_number }}</td>
                    <td>{{ $b->destination }}</td>
                    <td>{{ $b->full_name }}</td>
                    <td>{{ $b->service_status == 'not_in_service' ? 'Not in Service' : 'In Service' }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">View</a>
                        <a href="/admin/buses/edit/{{ $b->bus_id }}" class="btn btn-warning">Edit</a>
                        <a data-bs-toggle="modal" data-bs-target="#delete_{{ $b->bus_id }}"
                            class="btn btn-danger">Delete</a>
                    </td>
                    @include('layouts/delete_bus')
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
