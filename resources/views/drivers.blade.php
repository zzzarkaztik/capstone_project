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
        <h1>Drivers</h1>
        <h6 class="text-black-50">Total Drivers: {{ $total_drivers->total }} <a href="/admin/drivers/add">+
                ADD Driver</a></h6>

        <div class="mb-3">
            <form action="/admin/drivers" method="GET" class="row">
                <div class="col-lg-3">
                    <input type="text" name="search" class="form-control" value=""
                        placeholder="Search name (e.g. Aladeen, Haffaz)" />
                </div>
                <div class="col-lg-3">
                    <select name="gender" class="form-control">
                        <option value="" selected>Any Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-lg-3 d-flex align-items-end">
                    <input type="submit" class="btn btn-success align-self-end" value="Search" />
                </div>
            </form>
        </div>


        <table class="table table-hover align-middle">
            <tr>
                <th>@sortablelink('driver_id', 'Driver ID')</th>
                <th>@sortablelink('last_name', 'Name (Last Name, First Name)')</th>
                <th>@sortablelink('gender', 'Gender')</th>
                <th>@sortablelink('birthdate', 'Birthdate')</th>
                <th>Assigned Bus ID</th>
                <th>Actions</th>
            </tr>
            @if ($driver->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">No drivers found.</td>
                </tr>
            @else
                @foreach ($driver as $d)
                    <tr>
                        <td>{{ $d->driver_id }}</td>
                        <td>{{ $d->last_name }}, {{ $d->first_name }}</td>
                        <td>{{ ucwords($d->gender) }}</td>
                        <td>{{ $d->birthdate }}</td>
                        <td>{{ $d->bus_id }}</td>

                        <td>
                            <a href="/admin/drivers/{{ $d->driver_id }}" class="btn btn-primary">View</a>
                            <a href="/admin/drivers/edit/{{ $d->driver_id }}" class="btn btn-warning">Edit</a>
                            <a data-bs-toggle="modal" data-bs-target="#delete_{{ $d->driver_id }}"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @include('layouts/delete_driver')
                @endforeach
            @endif
        </table>
        {{ $driver->links('pagination::bootstrap-5') }}

    </div>

</body>

</html>
