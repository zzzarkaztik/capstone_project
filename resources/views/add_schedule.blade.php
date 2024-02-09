<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Route | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

    <div id=content>

        <div class="vh-100 d-flex justify-content-center text-center">

            <div class="m-5 p-5 w-50">

                <h1>ADD NEW SCHEDULE</h1>
                <form action="/admin/schedules" method="POST">
                    @csrf

                    <div class="form-outline my-4">
                        <input type="text" class="form-control" name="origin" value="PITX" disabled />
                        <label class="form-label">Origin</label>
                    </div>

                    <div class="form-outline mb-4">
                        <select class="form-select" name="bus_id">
                            @foreach ($bus as $b)
                                <option value="{{ $b->bus_id }}">{{ $b->destination }} - BUS ID#{{ $b->bus_id }}
                                </option>
                            @endforeach
                        </select>
                        <label class="form-label">Destination - Bus ID</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="time" class="form-control" name="arrival_time" />
                        <label class="form-label">Arrival Time</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="time" class="form-control" name="departure_time" />
                        <label class="form-label">Departure Time</label>
                    </div>

                    <div class="form-outline mb-4">
                        <select class="form-select" name="status">
                            <option value="pending">PENDING</option>
                            <option value="arriving">ARRIVING</option>
                            <option value="boarding">BOARDING</option>
                            <option value="in_transit">IN TRANSIT</option>
                        </select>
                        <label class="form-label">Status</label>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

                </form>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
