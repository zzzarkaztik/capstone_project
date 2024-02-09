<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Route | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

    <div id=content>
        <div class="vh-100 d-flex justify-content-center text-center">

            <div class="m-5 p-5 w-50">

                <h1>ADD NEW ROUTE</h1>
                <form action="/admin/routes" method="POST">
                    @csrf

                    <div class="form-outline my-4">
                        <select class="form-control" name="origin">
                            <option value="PITX" selected>PITX</option>
                        </select>
                        <label class="form-label">Origin</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="destination" />
                        <label class="form-label">Destination</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="number" class="form-control" name="kilometers" id="kilometers"
                            oninput="calculatePrice()" />
                        <label class="form-label">Distance (km)</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="float" class="form-control" name="price" id="price" />
                        <label class="form-label">Price</label>
                    </div>
                    <br>

                    <script>
                        function calculatePrice() {
                            // Get the value of kilometers input
                            var kilometers = document.getElementById("kilometers").value;

                            // Define the rates
                            var firstFiveRate = 15.00;
                            var additionalRate = 2.65;

                            // Calculate the price
                            var price;
                            if (kilometers <= 5) {
                                price = firstFiveRate;
                            } else {
                                price = firstFiveRate + (kilometers - 5) * additionalRate;
                            }

                            // Update the price input field with the calculated price
                            document.getElementById("price").value = price.toFixed(2); // To display price with 2 decimal places
                        }
                    </script>

                    <button type="submit" class="btn btn-primary btn-block w-100">Save</button>

                </form>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
