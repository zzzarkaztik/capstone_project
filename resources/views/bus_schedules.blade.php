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
                <th>Schedule ID</th>
                <th>Bus ID</th>
                <th>Destination</th>
                <th>Arrival Time</th>
                <th>Departure Time</th>
                <th>Status</th>
                <th>Available Seats</th>
                <th>Action</th>
            </tr>
            @foreach ($schedule as $s)
                <tr>
                    <td>{{ $s->bus_schedule_id }}</td>
                    <td>{{ $s->bus_id }}</td>
                    <td>{{ $s->destination }}</td>
                    <td>{{ $s->arrival_time }}</td>
                    <td>{{ $s->departure_time }}</td>
                    <td>{{ $s->status }}</td>
                    <td>{{ $s->available_seats }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">View</a>
                        <a href="/admin/buses/edit/{{ $s->bus_id }}" class="btn btn-warning">Edit</a>
                        <a data-bs-toggle="modal" data-bs-target="#delete_{{ $s->bus_id }}"
                            class="btn btn-danger">Delete</a>
                    </td>
                    @include('layouts/delete_bus')
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
