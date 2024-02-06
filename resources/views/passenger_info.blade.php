<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Passenger Information Form | TRIDENT BUSLINES</title>
</head>

<body>
    @include('layouts/navbar')
    <form action="" method="post">

        <div class="container mt-4 pt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Passenger Information:</h2>

                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="mobileNumber">Mobile Number:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+63</span>
                            </div>
                            <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" pattern="[0-9]{10}" placeholder="Enter 10-digit number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

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