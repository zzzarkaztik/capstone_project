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
        <h1>SCHEDULES</h1>
        <a href="/admin/schedules/create" class="btn btn-success mb-2">+ ADD SCHEDULE</a>
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
                    <td>{{ date('h:i A', strtotime($s->arrival_time)) }}</td>
                    <td>{{ date('h:i A', strtotime($s->departure_time)) }}</td>
                    <td>{{ strtoupper(str_replace('_', ' ', $s->status)) }}</td>
                    <td>{{ $s->available_seats }}</td>
                    <td>
                        <a href="/admin/schedules/{{ $s->bus_schedule_id }}/edit" class="btn btn-warning">Edit</a>
                        <a data-bs-toggle="modal" data-bs-target="#delete_{{ $s->bus_schedule_id }}"
                            class="btn btn-danger">Delete</a>
                    </td>
                    @include('layouts/delete_schedule')
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
