<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Terminal</title>
</head>

<body class="pt-5">
    @include('layouts/navbar')

    <div class="container">
        <div class="text-center">
            <img src="img/trident-logo.png" alt="Trident Logo" class="mx-auto mb-4" style="max-width: 300px;">
            <h1 class="mb-4">TERMINALS</h1>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card h-100"> <img src="/img/terminals/pitx.jpg" class="card-img-top"
                        alt="Parañaque Integrated Terminal Exchange">
                    <div class="card-body">
                        <h5 class="card-title">Parañaque Integrated Terminal Exchange</h5>
                        <p class="card-text">Location: Tambo, Parañaque, Metro Manila</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="/img/terminals/btc.jpg" class="card-img-top" alt="Bataan Terminal Complex">
                    <div class="card-body">
                        <h5 class="card-title">Bataan Terminal Complex</h5>
                        <p class="card-text">Location: Lerma St, Balanga, Bataan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="/img/terminals/mtx.jpg" class="card-img-top" alt="Metropolis Terminal Exchange">
                    <div class="card-body">
                        <h5 class="card-title">Metropolis Terminal Exchange</h5>
                        <p class="card-text">Location: Metropolis, DCU</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>
