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
                        <a href="#" class="btn btn-success">View</a>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @include('layouts/sidenav_script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
