<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Passenger Information Form | TRIDENT BUSLINES</title>
</head>

<body>
    @include('layouts/navbar')
    <table>
        <tr>
            <th>Transaction ID</th>
            <th>User ID</th>
            <th>Bus Schedule</th>
            <th>Total Price</th>
        </tr>
        <tr>
            @foreach ($notifications as $n)
            <td>{{$n -> transaction_id}}</td>
            <td>{{$n -> user_id}}</td>
            <td>{{$n -> bus_schedule_id}}</td>
            <td>{{$n -> total_price}}</td>
            @endforeach
        </tr>
    </table>

    @include('layouts/footer')
</body>

</html>