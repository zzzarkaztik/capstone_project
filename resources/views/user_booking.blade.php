<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Book a Ticket | TRIDENT BUSLINES</title>
    <script>
        $(document).ready(function() {
            $(".deduct_button").click(function() {
                $schedule_id = $(this).prop('id').replace("deduct_", "");
                $new_val = Number($("#book_" + $schedule_id).val()) - 1;
                if ($new_val >= 0) {
                    $("#book_" + $schedule_id).val($new_val);
                }
            });

            $(".add_button").click(function() {
                $schedule_id = $(this).prop('id').replace("add_", "");
                $new_val = Number($("#book_" + $schedule_id).val()) + 1;
                if ($new_val <= 1) {
                    $("#book_" + $schedule_id).val($new_val);
                }
            });
        });
    </script>
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #d8f9ff;
            /* Light gray */
            margin-top: 20px;
            /* Add margin between cards */
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 10px;
            background-color: transparent !important;
        }

        .card-body {
            padding: 1rem;
        }

        /* Target only buttons inside cards */
        .card .btn {
            border-radius: 15px;
            /* Rounded corners */
            padding: 3px 8px;
            /* Adjust padding as needed */
            font-size: 0.7rem;
            /* Adjust font size */
        }
    </style>

</head>

<body>
    @include('layouts/navbar')
    <div class="container mt-4 pt-5">
        <form action="/book" method="POST">
            <div class="row">
                <h1>Available trips:</h1>
                @csrf
                @foreach ($sched as $s)
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Trip #{{$s->bus_schedule_id}}</h5>
                            <p>Bus #{{$s->bus_id}} - {{$s->destination}}</p>
                            <p>Bus Arrival: {{ date('h:i A', strtotime($s->arrival_time)) }}</p>
                            <p>Departure Time: {{ date('h:i A', strtotime($s->departure_time)) }}</p>
                            <p>Price: ₱{{$s->price}}</p>
                            <p>Seats available: {{$s->available_seats}}</p>
                            <a class="btn btn-danger deduct_button" id="deduct_{{$s->bus_schedule_id}}">-</a>
                            <input type="number" style="width: 50px; height: 25px" min="0" max="1" value="0" id="book_{{$s->bus_schedule_id}}" name="book_{{$s->bus_schedule_id}}">
                            <a class="btn btn-primary add_button" id="add_{{$s->bus_schedule_id}}">+</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mb-4 pt-4 text-center"><input type="submit" class="btn btn-primary
             mt-3" value="Book Ticket" /></div>

        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @include('layouts/footer')
</body>

</html>