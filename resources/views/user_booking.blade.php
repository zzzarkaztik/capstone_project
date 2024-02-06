<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Book a Ticket | TRIDENT BUSLINES</title>
</head>

<body>
    @include('layouts/navbar')
    <form action="">

        <div class="container mt-4 pt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Destination:</h2>

                    <!-- Origin and Destination -->
                    <div class="form-group">
                        <label for="origin">Origin:</label>
                        <select class="form-control" id="origin" name="origin">
                            <option value="">blank</option>
                        </select>

                        <label for="destination" class="mt-2">Destination:</label>
                        <select class="form-control" id="destination" name="destination">
                            <option value="">blank</option>
                        </select>
                    </div>

                    <!-- Travel Type -->
                    <div class="form-group mt-3">
                        <h3>Travel Type:</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="travel-type" id="round_trip">
                            <label class="form-check-label" for="round_trip">Round-trip</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="travel-type" id="one_way">
                            <label class="form-check-label" for="one_way">One-way</label>
                        </div>
                    </div>

                    <!-- Departure and Return Date -->
                    <div class="form-group mt-3">
                        <h3>Select Departure Date:</h3>
                        <div class="form-group">
                            <label for="departDate">Depart:</label>
                            <input type="date" class="form-control" id="departDate" name="departDate">
                        </div>

                        <h3 class="mt-3">Select Return Date:</h3>
                        <div class="form-group">
                            <label for="returnDate">Return:</label>
                            <input type="date" class="form-control" id="returnDate" name="returnDate">
                        </div>
                    </div>

                    <!-- Passengers -->
                    <div class="form-group mt-3">
                        <h3>Passengers:</h3>
                        <div class="form-group">
                            <label for="passengers">No. of Passengers:</label>
                            <input type="number" class="form-control" id="passengers" name="passengers" min="1" max="10">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-3">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @include('layouts/footer')
</body>

</html>