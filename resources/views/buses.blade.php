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
        <h1>Buses</h1>
        <a href="/admin/buses/add" class="btn btn-success mb-2">+ ADD BUS</a>
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Plate Number</th>
                <th>Destination</th>
                <th>Driver</th>
                <th>Action</th>
            </tr>
            @foreach ($bus as $key => $b)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $b->plate_number }}</td>
                    <td>{{ $b->destination }}</td>
                    <td>{{ $b->last_name }}, {{ $b->first_name }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">View</a>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
