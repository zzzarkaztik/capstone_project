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
        <h6 class="text-black-50">Total Drivers: {{ $total_drivers->total }}
            <a href="/admin/drivers/add" class="badge bg-success text-light text-decoration-none">+ ADD DRIVER</a>
        </h6>

        <div class="mb-3">
            <form action="/admin/drivers" method="GET" class="row g-3">
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control"
                            placeholder="Search name (e.g. Aladeen, Haffaz)">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="gender" class="form-select">
                        <option value="" selected>Any Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-success" value="Search" />
                </div>
            </form>
        </div>


        <table class="table table-hover table-striped table-bordered align-middle">
            <thead>
                <tr>
                    <th>@sortablelink('driver_id', 'Driver ID')</th>
                    <th>@sortablelink('full_name', 'Name (Last, First)')</th>
                    <th>@sortablelink('gender', 'Gender')</th>
                    <th>@sortablelink('birthdate', 'Birthdate')</th>
                    <th>@sortablelink('bus_id', 'Assigned Bus ID')</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
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
                                <a href="/admin/drivers/{{ $d->driver_id }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/admin/drivers/edit/{{ $d->driver_id }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#delete_{{ $d->driver_id }}"
                                    class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $driver->links('pagination::bootstrap-5') }}

    </div>

</body>

</html>
