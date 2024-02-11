<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Home</title>
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
                            Ticket Information
                        </div>
                        <div class="card-body">
                            @foreach ($tickets as $t)
                            <div class="form-group">
                                <label>Ticket ID:</label>
                                <input type="text" class="form-control" name="ticket_id" readonly value="{{ $t->ticket_id }}">
                            </div>
                            <div class="form-group">
                                <label>Bus ID:</label>
                                <input type="text" class="form-control" name="bus_id" readonly value="{{ $t->bus_id }}">
                            </div>
                            <div class="form-group">
                                <label>Destination:</label>
                                <input type="text" class="form-control" name="destination" readonly value="{{ $t->destination }}">
                            </div>
                            <div class="form-group">
                                <label>Schedule:</label>
                                <input type="text" class="form-control" name="schedule" readonly value="{{ date('h:i A', strtotime($t->arrival_time)) }} - {{ date('h:i A', strtotime($t->departure_time)) }}">
                            </div>
                            <div class="form-group">
                                <label>Date Booked:</label>
                                <input type="text" class="form-control" name="order_date" readonly value="{{ $t->order_date }}">
                            </div>
                            <div class="form-group">
                                <label>Price:</label>
                                <input type="text" class="form-control" name="total_price" readonly value="₱{{ $t->total_price }}">
                            </div>
                            <div class="form-group">
                                <label>Type:</label>
                                <input type="text" class="form-control" name="type" readonly value="{{ $t->type }}">
                            </div>
                            <div class="form-group">
                                <label>Status:</label>
                                <input type="text" class="form-control" name="order_status" readonly value="{{ $t->order_status }}">
                            </div>
                            @if ($t -> order_status == "pending")
                            <div class="form-group mt-3">
                                <form action="/admin/ticket/accept/{{$tickets[0] -> ticket_id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="submit" class="btn btn-success" value="Accept Ticket">
                                </form>
                            </div>
                            @else
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>