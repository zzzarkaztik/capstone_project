<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Bus Profile | TRIDENT BUSLINES</title>
</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

    <div id=content>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Profile Information
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Bus ID:</label>
                                <input type="text" class="form-control" name="bus_id" readonly
                                    value="{{ $bus->bus_id }}">
                            </div>
                            <div class="form-group">
                                <label>Plate Number:</label>
                                <input type="text" class="form-control" name="plate_number" readonly
                                    value="{{ $bus->plate_number }}">
                            </div>
                            <div class="form-group">
                                <label>Bus Route:</label>
                                <input type="text" class="form-control" name="bus_route_id" readonly
                                    value="{{ $bus->bus_route_id }}">
                            </div>
                            <div class="form-group">
                                <label>Driver ID:</label>
                                <input type="text" class="form-control" name="driver_id" readonly
                                    value="{{ $bus->driver_id }}">
                            </div>
                            <div class="form-group">
                                <label>Driver Name:</label>
                                <input type="text" class="form-control" name="full_name" readonly
                                    value="{{ $bus->full_name }}">
                            </div>
                            <div class="form-group">
                                <label>Service Status:</label>
                                <input type="text" class="form-control" name="service_status" readonly
                                    value="{{ $bus->service_status }}">
                            </div>
                            <div class="form-group">
                                <label>Service Start:</label>
                                <input type="text" class="form-control" name="bus_service_start" readonly
                                    value="{{ $bus->bus_service_start }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
