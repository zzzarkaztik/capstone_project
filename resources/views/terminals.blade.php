<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trident Buslines | Terminal</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for equal-sized card images and cards */
        .card-img-top {
            height: 200px;
            /* Adjust this value as needed */
            object-fit: cover;
        }

        .card {
            height: 100%;
        }

        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            flex-grow: 1;
            background-color: transparent !important;
            /* Set background color to transparent with !important */
        }
    </style>
</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/messages')
    <div class="container mt-4 pt-5">
        <div class="text-center"><img src="img/trident-logo.png" alt="trident logo" class="mx-auto mb-4" style="max-width: 300px;"></div>

        <div class="container">
            <h1 class="text-center mb-4">Terminals</h1>

            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <img src="https://i0.wp.com/busterminal.ph/wp-content/uploads/2023/03/image-9.png?fit=950%2C633&ssl=1" class="card-img-top" alt="PITX">
                        <div class="card-body">
                            <h5 class="card-title">Parañaque Integrated Terminal Exchange</h5>
                            <p class="card-text">Location: Tambo, Parañaque, Metro Manila</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <img src="https://iorbitnews.com/wp-content/uploads/2020/02/FB_IMG_1582093040150-1024x768.jpg" class="card-img-top" alt="Bataan Terminal Complex">
                        <div class="card-body">
                            <h5 class="card-title">Bataan Terminal Complex</h5>
                            <p class="card-text">Location: Lerma St, Balanga, Bataan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <img src="https://files.structurae.net/files/photos/5256/2022-09-10/dsc01912.jpeg" class="card-img-top" alt="Metropolis Terminal Exchange">
                        <div class="card-body">
                            <h5 class="card-title">Metropolis Terminal Exchange</h5>
                            <p class="card-text">Location: Metropolis, DCU</p>
                        </div>
                    </div>
                </div>

                <!-- Add more terminals as needed -->

            </div>

        </div>
    </div>
    @include('layouts/footer')
</body>

</html>