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
        <div class="row gy-3 mb-3 mt-1">
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded bg-success"><i
                                class="ri-road-map-fill"></i> Routes</h5>
                        <span class="card-text">
                            Total Routes:
                        </span>
                        <h4 class="text-success">$r->total_routes</h4>

                        <a href="/admin/routes" class="btn btn-success"><i class="ri-eye-fill"></i> View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded"><i class="ri-bus-fill"></i> Buses
                        </h5>
                        <span class="card-text">
                            Total Routes:
                        </span>
                        <h4>$b->total_buses</h4>

                        <a href="/admin/routes" class="btn btn-primary"><i class="ri-eye-fill"></i> View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded bg-warning"><i
                                class="ri-calendar-schedule-fill"></i> Schedules</h5>
                        <span class="card-text">
                            Total Schedules:
                        </span>
                        <h4 class="text-warning">$s->total_schedules</h4>

                        <a href="/admin/routes" class="btn btn-warning"><i class="ri-eye-fill"></i> View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border">
                    <div class="card-body">
                        <h5 class="card-title p-2 text-white text-center rounded bg-danger"><i
                                class="ri-coupon-3-fill"></i> Bookings</h5>
                        <span class="card-text">
                            Total Bookings:
                        </span>
                        <h4 class="text-danger">$b->total_bookings</h4>
                        <a href="/admin/routes" class="btn btn-danger"><i class="ri-eye-fill"></i> View</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="nobs-card border">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="/img/graph.webp" class="img-fluid card-img" />
                    </div>
                    <p class="m-3">
                        Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                    </p>


                </div>
            </div>
        </div>
    </div>

    </div>

    @include('layouts/sidenav_script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
