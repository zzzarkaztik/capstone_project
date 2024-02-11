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
        <h1>Schedules</h1>
        <h6 class="text-black-50">Total Schedules: {{ $total_schedules->total }} <a href="/admin/schedules/create">+ ADD
                SCHEDULE</a>
        </h6>
        <div class="mb-3">
            <form action="/admin/schedules" method="GET" class="row">
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
                <th>@sortablelink('bus_schedule_id', 'Schedule ID')</th>
                <th>Bus ID</th>
                <th>Destination</th>
                <th>@sortablelink('arrival_time', 'Boarding Time')</th>
                <th>Departure Time</th>
                <th>@sortablelink('status', 'Status')</th>
                <th>@sortablelink('available_seats', 'Available Seats')</th>
                <th>Action</th>
            </tr>
            @foreach ($schedule as $s)
                <tr>
                    <td>{{ $s->bus_schedule_id }}</td>
                    <td>{{ $s->bus_id }}</td>
                    <td>{{ $s->destination }}</td>
                    <td>{{ date('h:i A', strtotime($s->arrival_time)) }}</td>
                    <td>{{ date('h:i A', strtotime($s->departure_time)) }}</td>
                    <td>
                        <span
                            class="
                            @if ($s->status == 'pending') tbg rounded-pill tbg-dark
                            @elseif($s->status == 'arriving')
                                tbg rounded-pill tbg-yellow
                            @elseif($s->status == 'boarding')
                                tbg rounded-pill tbg-green
                            @elseif($s->status == 'in_transit')
                                tbg rounded-pill tbg-red @endif
                        ">
                            {{ strtoupper(str_replace('_', ' ', $s->status)) }}
                        </span>
                    </td>
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
        {{ $schedule->links('pagination::bootstrap-5') }}

    </div>

</body>

</html>
