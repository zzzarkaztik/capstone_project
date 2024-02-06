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
        <div class="row">
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded">Routes</h5>
                        <span class="card-text">
                            Total Routes:
                        </span>
                        <h4>$r->total_routes</h4>

                        <a href="/admin/routes" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded">Buses</h5>
                        <span class="card-text">
                            Total Routes:
                        </span>
                        <h4>$b->total_buses</h4>

                        <a href="/admin/routes" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded">Schedules</h5>
                        <span class="card-text">
                            Total Schedules:
                        </span>
                        <h4>$s->total_schedules</h4>

                        <a href="/admin/routes" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded">Bookings</h5>
                        <span class="card-text">
                            Total Bookings:
                        </span>
                        <h4>$b->total_bookings</h4>
                        <a href="/admin/routes" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-9">
                <img src="/img/graph.webp" class="card border" alt="place-holder">
            </div>
        </div>

    </div>

    @include('layouts/sidenav_script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
