<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Route | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

    <div class="vh-100 d-flex justify-content-center text-center">
        @include('layouts/messages')

        <div class="m-5 p-5 w-50">

            <h1>ADD NEW ROUTE</h1>
            <form action="/admin/routes" method="POST">
                @csrf

                <div class="form-outline my-4">
                    <input type="text" class="form-control" name="origin" />
                    <label class="form-label">Origin</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="destination" />
                    <label class="form-label">Destination</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="kilometers" />
                    <label class="form-label">Kilometers</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="price" />
                    <label class="form-label">Price</label>
                </div>
                <br>

                <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

            </form>
        </div>

    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>