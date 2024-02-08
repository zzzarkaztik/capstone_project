<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Edit Bus | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

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
                        <option value="{{ $bus->driver_id }}">({{ $bus->driver_id }}) {{ $bus->last_name }},
                            {{ $bus->first_name }}
                        </option>
                        @foreach ($driver as $d)
                            <option value="{{ $d->driver_id }}">({{ $d->driver_id }}){{ $d->last_name }}
                                , {{ $d->first_name }}
                            </option>
                        @endforeach
                    </select>
                    <label class="form-label">Driver</label>

                </div>
                <br>

                <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

            </form>
        </div>

    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
