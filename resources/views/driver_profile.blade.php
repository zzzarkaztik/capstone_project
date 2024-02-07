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
        <div class="nobs-card">
            <h1>Driver Profile</h1>
            <div class="card-content">
                <h2 class="card-subtitle">Full Name: <span class="text-large">{{ $driver->last_name }},
                        {{ $driver->first_name }}</span></h2>
                <h2 class="card-subtitle">Gender: <span class="text-large">{{ $driver->gender }}</span></h2>
                <h2 class="card-subtitle">Birthdate: <span class="text-large">{{ $driver->birthdate }}</span></h2>
                <h2 class="card-subtitle">Assigned Bus ID: <span class="text-large">{{ $driver->bus_id }}</span></h2>
            </div>
        </div>

    </div>

</body>

</html>