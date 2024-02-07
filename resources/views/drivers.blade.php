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
        <h1>Drivers</h1>
        <a href="/admin/drivers/add" class="btn btn-success mb-2">+ ADD DRIVER</a>
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Assigned Bus ID</th>
                <th>Actions</th>
            </tr>
            @foreach ($driver as $key => $d)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $d->last_name }}, {{ $d->first_name }}</td>
                    <td>{{ $d->gender }}</td>
                    <td>{{ $d->birthdate }}</td>
                    <td>{{ $d->bus_id }}</td>

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
