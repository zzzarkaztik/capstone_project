<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Edit Route | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

    <div class="vh-100 d-flex justify-content-center text-center">

        <div class="m-5 p-5 w-50">

            <h1>EDIT ROUTE</h1>
            <form action="/admin/buses/{{$bus -> bus_id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-outline my-4">
                    <input type="text" class="form-control" name="plate_number" value="{{ $bus->plate_number }}" />
                    <label class="form-label">Plate Number</label>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select" name="bus_route_id">
                        <option value="{{$bus -> bus_route_id}}">{{$bus -> bus_route_id}} ({{$bus -> destination}})</option>
                        @foreach
                        <option value="{{$route -> bus_route_id}}">{{$route -> bus_route_id}} ({{$route -> destination}})</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select" name="driver_id">
                        <option value="{{$bus -> driver_id}}">{{$bus -> last_name}} ({{$bus -> first_name}})</option>
                        @foreach
                        <option value="{{$driver -> driver_id}}">{{$driver -> last_name}} ({{$driver -> first_name}})</option>
                        @endforeach
                    </select>
                </div>
                <br>

                <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

            </form>
        </div>

    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>