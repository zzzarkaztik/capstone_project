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
        .btn {
            border-radius: 50px;
            size: 20px;
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
                @foreach ($schedules as $s)
                <div class="col-lg-3">
                    <div class="card mt-4 pt-5">
                        <div class="card-body">
                            <h5 class="card-title">{{$s -> destination}}</span></h5>
                            <a class="btn btn-danger deduct_button" id="deduct_{{$s -> bus_schedule_id}}">-</a>
                            <input type="number" style="width: 50px" min="0" max="1" value="0" id="book_{{$s -> bus_schedule_id}}" name="book_{{$s -> bus_schedule_id}}">
                            <a class="btn btn-primary add_button" id="add_{{$s -> bus_schedule_id}}">+</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <input type="submit" class="btn btn-success mt-3" value="Book Ticket" />
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @include('layouts/footer')
</body>

</html>