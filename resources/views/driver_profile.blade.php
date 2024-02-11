<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Home</title>
</head>

<body class="pt-5">
    @include('layouts/navbar')
    @include('layouts/sidenav')


    <div id="content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Driver Profile
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Driver ID:</label>
                                <input type="text" class="form-control" name="driver_id" readonly
                                    value="{{ $driver->driver_id }}">
                            </div>
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" name="full_name" readonly
                                    value="{{ $driver->last_name }}, {{ $driver->first_name }}">
                            </div>
                            <div class="form-group">
                                <label>Gender:</label>
                                <input type="text" class="form-control" name="gender" readonly
                                    value="{{ $driver->gender }}">
                            </div>
                            <div class="form-group">
                                <label>Birthdate:</label>
                                <input type="text" class="form-control" name="birthdate" readonly
                                    value="{{ $driver->birthdate }}">
                            </div>
                            <div class="form-group">
                                <label>Assigned Bus ID:</label>
                                <input type="text" class="form-control" name="assigned_bus_id" readonly
                                    value="{{ $driver->bus_id }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
