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
        <h1>Routes</h1>
        <a href="/admin/routes/add" class="btn btn-success mb-2">+ ADD ROUTES</a>
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Kilometeres</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            @foreach ($bus_routes as $br)
            <tr>
                <td>{{$br -> bus_route_id}}</td>
                <td>{{$br -> origin}}</td>
                <td>{{$br -> destination}}</td>
                <td>{{$br -> kilometers}}</td>
                <td>{{$br -> price}}</td>
                <td>
                    <a href="#" class="btn btn-primary">View</a>
                    <a href="/admin/routes/edit/{{$br -> bus_route_id}}" class="btn btn-warning">Edit</a>
                    <a data-bs-toggle="modal" data-bs-target="#delete_{{$br -> bus_route_id}}" class="btn btn-danger">Delete</a>
                </td>
                @include('layouts/delete_route')
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>