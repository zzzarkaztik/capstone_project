<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Bus | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

    <div class="vh-100 d-flex justify-content-center text-center">
        @include('layouts/messages')

        <div class="m-5 p-5 w-50">

            <h1>ADD NEW BUS</h1>
            <form action="/admin/buses/add" method="POST">
                @csrf

                <div class="form-outline my-4">
                    <input type="text" class="form-control" name="plate_number" />
                    <label class="form-label">Plate Number</label>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select" name="bus_route_id">
                        <option value="">No Assigned Route</option>
                        @foreach ($bus_route as $br)
                            <option value="{{ $br->bus_route_id }}">{{ $br->bus_route_id }} ({{ $br->destination }})
                            </option>
                        @endforeach
                    </select>
                    <label class="form-label">Bus Route ID</label>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select" name="driver_id">
                        <option value="">No Assigned Driver</option>
                        @foreach ($driver as $d)
                            <option value="{{ $d->driver_id }}">{{ $d->last_name }}, {{ $d->first_name }}</option>
                        @endforeach
                    </select>
                    <label class="form-label">Assigned Driver</label>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select" name="service_status">
                        <option value="in_service">In Service</option>
                        <option value="not_in_service">Not In Service</option>
                    </select>
                    <label class="form-label">Service Status</label>
                </div>

                <div class="form-outline border rounded">
                    <input type="date" name="bus_service_start" class="form-control">
                </div>
                <label class="mb-5 form-label">Service Start Date</label>

                <br>

                <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

            </form>
        </div>

    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
