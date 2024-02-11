<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Edit Bus | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="pt-5">
    @include('layouts/navbar')
    @include('layouts/sidenav')
    <div id=content>

        <div class="vh-100 d-flex justify-content-center text-center">

            <div class="m-5 p-5 w-50">

                <h1>EDIT BUS ID: {{ $bus->bus_id }}</h1>
                <form action="/admin/buses/{{ $bus->bus_id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-outline my-4">
                        <input type="text" class="form-control" name="plate_number" value="{{ $bus->plate_number }}" />
                        <label class="form-label">Plate Number</label>
                    </div>

                    <div class="form-outline mb-4">
                        <select class="form-select" name="bus_route_id">
                            <option value="{{ $bus->bus_route_id }}">{{ $bus->bus_route_id }}
                                ({{ $bus->destination }})</option>
                            @foreach ($route as $r)
                                <option value="{{ $r->bus_route_id }}">{{ $r->bus_route_id }}
                                    ({{ $r->destination }})
                                </option>
                            @endforeach
                        </select>
                        <label class="form-label">Destination</label>

                    </div>

                    <div class="form-outline mb-4">
                        <select class="form-select" name="driver_id">
                            <option value="{{ $bus->driver_id }}">
                                @if ($bus->driver_id)
                                    ({{ $bus->driver_id }}) {{ $bus->last_name }}, {{ $bus->first_name }}
                                @else
                                    No Assigned Driver
                                @endif
                            </option>
                            @foreach ($driver as $d)
                                <option value="{{ $d->driver_id }}">#{{ $d->driver_id }} - {{ $d->last_name }},
                                    {{ $d->first_name }}
                                </option>
                            @endforeach
                        </select>
                        <label class="form-label">Driver</label>
                    </div>


                    <div class="form-outline mb-4">
                        <select class="form-select" name="service_status">
                            <option value="{{ $bus->service_status }}" selected>
                                {{ $bus->service_status == 'not_in_service' ? 'Not in Service' : 'In Service' }}

                            </option>
                            <option disabled>--------------------</option>
                            <option value="in_service">In Service</option>
                            <option value="not_in_service">Not In Service</option>
                        </select>
                        <label class="form-label">Service Status</label>
                    </div>

                    <div class="form-outline border rounded">
                        <input type="date" name="bus_service_start" class="form-control"
                            value="{{ $bus->bus_service_start }}">
                    </div>
                    <label class="mb-5 form-label">Service Start Date</label>


                    <br>

                    <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
