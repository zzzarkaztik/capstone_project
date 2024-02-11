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
        <div class="container-fluid">
            <div class="row gy-3 mb-3">
                <div class="col-lg-3">
                    <div class="card h-100">
                        <div class="card-header bg-success text-white">
                            <i class="ri-road-map-fill"></i> Routes
                        </div>
                        <div class="card-body">
                            <span class="card-text">Total Routes:</span>
                            <h4 class="text-success">{{ $total_routes->total }}</h4>
                            <a href="/admin/routes" class="btn btn-success"><i class="ri-eye-fill"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card h-100">
                        <div class="card-header bg-primary text-white">
                            <i class="ri-bus-fill"></i> Buses
                        </div>
                        <div class="card-body">
                            <span class="card-text">Total Buses:</span>
                            <h4 class="text-primary">{{ $total_buses->total }}</h4>
                            <a href="/admin/buses" class="btn btn-primary"><i class="ri-eye-fill"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card h-100">
                        <div class="card-header bg-warning text-white">
                            <i class="ri-calendar-schedule-fill"></i> Schedules
                        </div>
                        <div class="card-body">
                            <span class="card-text">Total Schedules:</span>
                            <h4 class="text-warning">{{ $total_schedules->total }}</h4>
                            <a href="/admin/schedules" class="btn btn-warning"><i class="ri-eye-fill"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card h-100">
                        <div class="card-header bg-danger text-white">
                            <i class="ri-coupon-3-fill"></i> Bookings
                        </div>
                        <div class="card-body">
                            <span class="card-text">Total Bookings:</span>
                            <h4 class="text-danger">{{ $total_bookings->total }}</h4>
                            <a href="/admin/bookings" class="btn btn-danger"><i class="ri-eye-fill"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="card border">
                        <div class="card-body">
                            <canvas id="myBarChart"></canvas>
                            <p class="m-3 text-center">Ticket Sales Graph</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>

    <script>
        fetch('/getOrderGraphData') // Adjust the route accordingly
            .then(response => response.json())
            .then(data => {
                const labels = data.map(item => item.destination);
                const ticketSales = data.map(item => item.ticket_sales);

                const ctx = document.getElementById('myBarChart').getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Ticket Sales',
                            data: ticketSales,
                            // ... (add colors and other styling options here)
                        }]
                    },
                    // ... (add chart customization options)
                });
            });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
