<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Transactions | TRIDENT BUSLINES</title>
</head>

<body class="mt-5 pt-3">
    @include('layouts/navbar')
    <h1>My Transactions</h1>
    <table class="table">
        <tr>
            <th>Transaction ID</th>
            <th>Order Date</th>
            <th>Total Price</th>
            <th>Status</th>
        </tr>
        @foreach ($transaction as $t)
        <tr>
            <td>{{ $t->transaction_id }}</td>
            <td>{{ $t->order_date }}</td>
            <td>{{ $t->total_price }}</td>
            <td>{{ $t->order_status }}</td>
        </tr>
        @endforeach
    </table>

    @include('layouts/footer')
</body>

</html>