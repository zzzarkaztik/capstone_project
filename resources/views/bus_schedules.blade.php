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
        <h6 class="text-black-50">Total Schedules: {{ $total_schedules->total }}
            <a href="/admin/schedules/create" class="badge bg-success text-light text-decoration-none">+ ADD SCHEDULE</a>
        </h6>

        <div class="mb-3">
            <form action="/admin/schedules" method="GET" class="row g-3">

                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search...">
                    </div>
                </div>
                <div class="col-md-2">
                    <select name="search_field" class="form-select">
                        <option value="destination" selected>Destination</option>
                        <option value="bus_schedule_id">Schedule ID</option>
                        <option value="bus_id">Bus ID</option>
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
                    <th>@sortablelink('bus_schedule_id', 'Schedule ID')</th>
                    <th>@sortablelink('bus_id', 'Bus ID')</th>
                    <th>@sortablelink('destination', 'Destination')</th>
                    <th>@sortablelink('arrival_time', 'Boarding Time')</th>
                    <th>@sortablelink('departure_time', 'Departure Time')</th>
                    <th>@sortablelink('status', 'Status')</th>
                    <th>@sortablelink('available_seats', 'Available Seats')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($schedule->isEmpty())
                    <tr>
                        <td colspan="8" class="text-center">No schedules found.</td>
                    </tr>
                @else
                    @foreach ($schedule as $s)
                        <tr>
                            <td>{{ $s->bus_schedule_id }}</td>
                            <td>{{ $s->bus_id }}</td>
                            <td>{{ $s->destination }}</td>
                            <td>{{ date('h:i A', strtotime($s->arrival_time)) }}</td>
                            <td>{{ date('h:i A', strtotime($s->departure_time)) }}</td>
                            <td>
                                <span
                                    class="badge rounded-pill 
                            @if ($s->status == 'pending') bg-dark 
                            @elseif($s->status == 'arriving') bg-warning 
                            @elseif($s->status == 'boarding') bg-success 
                            @elseif($s->status == 'in_transit') bg-danger @endif">
                                    {{ strtoupper(str_replace('_', ' ', $s->status)) }}
                                </span>
                            </td>
                            <td>{{ $s->available_seats }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="/admin/schedules/{{ $s->bus_schedule_id }}/edit"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <form action="/admin/schedules/{{ $s->bus_schedule_id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $schedule->links('pagination::bootstrap-5') }}


    </div>

</body>

</html>
