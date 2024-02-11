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
        <h1>Bookings</h1>
        <h6 class="text-black-50">
            Total Bookings: {{$total_bookings->total}}
        </h6>

        <table class="table table-hover table-striped table-bordered align-middle">
            <thead>
                <tr>
                    <th>@sortablelink('user_id', 'User ID')</th>
                    <th>@sortablelink('first_name', 'First Name')</th>
                    <th>@sortablelink('last_name', 'Last Name')</th>
                    <th>@sortablelink('order_date', 'Date Booked')</th>
                    <th>@sortablelink('order_status', 'Status')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $b)
                <tr>
                    <td>{{ $b->user_id }}</td>
                    <td>{{ $b->first_name }}</td>
                    <td>{{ $b->last_name }}</td>
                    <td>{{ $b->order_date }}</td>
                    <td>
                        <span class="badge rounded-pill 
                            @if ($b->order_status == 'pending') bg-dark
                            @elseif($b->order_status == 'reserved') bg-success @endif">
                            {{ strtoupper(str_replace('_', ' ', $b->order_status)) }}
                        </span>
                    </td>
                    <td><a href="/admin/ticket/{{$b -> ticket_id}}" class="btn btn-primary"><i class="fas fa-eye"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>