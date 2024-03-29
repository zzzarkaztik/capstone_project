<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Edit Route | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')
    <div id=content>

        <div class="vh-100 d-flex justify-content-center text-center">

            <div class="m-5 p-5 w-50">

                <h1>EDIT ROUTE</h1>
                <form action="/admin/routes/{{ $route->bus_route_id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-outline my-4">
                        <input type="text" class="form-control" name="origin" value="{{ $route->origin }}" />
                        <label class="form-label">Origin</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="destination"
                            value="{{ $route->destination }}" />
                        <label class="form-label">Destination</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="kilometers" value="{{ $route->kilometers }}" />
                        <label class="form-label">Kilometers</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="price" value="{{ $route->price }}" />
                        <label class="form-label">Price</label>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

                </form>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
