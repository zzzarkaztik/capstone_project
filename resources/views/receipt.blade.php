<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Ticket Receipts | TRIDENT BUSLINES</title>

</head>

<body>
    @include('layouts/navbar')
    <div class="container mt-4 pt-5">
        <h1>Successfully Booked Tickets</h1>
        <table class="table">
            <tr>
                <th>Ticket #</th>
                <th>Bus #</th>
                <th>Destination</th>
                <th>Schedule</th>
                <th>Price</th>
            </tr>
            @foreach ($receipts as $r)
            <tr>
                <td>{{$r -> ticket_id}}</td>
                <td>{{$r -> bus_id}}</td>
                <td>{{$r -> destination}}</td>
                <td>{{$r -> arrival_time}} - {{$r -> departure_time}}</td>
                <td>₱{{$r -> total_price}}</td>
            </tr>
            @endforeach
        </table>
        <p><a href="/ticket">Go to My Tickets</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @include('layouts/footer')
</body>

</html>