<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>My Tickets | TRIDENT BUSLINES</title>
</head>

<body class="mt-5 pt-3">
    @include('layouts/navbar')
    <h1>My Tickets</h1>
    @if (count($tickets) == 0)
    <p>No tickets yet</p>
    <h5><a href="/book">BOOK A TRIP NOW!</a></h5>
    @else
    <table class="table">
        <tr>
            <th>Ticket #</th>
            <th>Bus #</th>
            <th>Destination</th>
            <th>Schedule</th>
            <th>Date Booked</th>
            <th>Price</th>
            <th>Type</th>
            <th>Status</th>
        </tr>
        @foreach ($tickets as $t)
        <tr>
            <td>{{$t -> ticket_id}}</td>
            <td>{{$t -> bus_id}}</td>
            <td>{{$t -> destination}}</td>
            <td>{{$t -> arrival_time}} - {{$t -> departure_time}}</td>
            <td>{{$t -> order_date}}</td>
            <td>₱{{$t -> total_price}}</td>
            <td>{{$t -> type}}</td>
            <td>{{$t -> order_status}}</td>
        </tr>
        @endforeach
    </table>
    @endif

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    @include('layouts/footer')
</body>

</html>