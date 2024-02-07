<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Home</title>
</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')
    @include('layouts/messages')

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
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a data-bs-toggle="modal" data-bs-target="#delete_{{$br -> bus_route_id}}" class="btn btn-danger">Delete</a>
                </td>

                <div class="modal fade" id="delete_{{$br -> bus_route_id}}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete route ({{$br -> bus_route_id}}) {{$br -> origin}} to {{$br -> destination}}?</h5>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">Once this action is taken, it cannot be undone.
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                                        Cancel
                                    </button>
                                    <form action="/admin/routes/{{$br -> bus_route_id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="Delete" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>