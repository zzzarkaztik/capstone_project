<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Bus | ADMIN | TRIDENT BUSLINES</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/sidenav')
    @include('layouts/messages')

    <div class="vh-100 d-flex justify-content-center align-items-center text-center">

        <div class="m-5 p-5 w-50">
            <h1>ADD NEW BUS</h1>
            <form action="/register" method="POST">
                @csrf

                <div class="form-outline my-4" data-mdb-input-init>
                    <input type="text" class="form-control" name="plate_number" />
                    <label class="form-label">Plate Number</label>
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                    <select class="form-select" name="bus_route_id">
                        <option value="">No Assigned Route</option>
                        @foreach ($bus_route as $br)
                            <option value="{{ $br->bus_route_id }}">{{ $br->bus_route_id }} ({{ $br->destination }})
                            </option>
                        @endforeach
                    </select>
                    <label class="form-label">Bus Route ID</label>
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                    <select class="form-select" name="driver">
                        <option value="">No Assigned Driver</option>
                        @foreach ($driver as $d)
                            <option value="{{ $d->driver_id }}">{{ $d->last_name }}, {{ $d->first_name }}</option>
                        @endforeach
                    </select>
                    <label class="form-label">Assigned Driver</label>
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                    <select class="form-select" name="driver">
                        <option value="in_service">In Service</option>
                        <option value="not_in_service">Not In Service</option>
                    </select>
                    <label class="form-label">Service Status</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>

            </form>
        </div>

    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
