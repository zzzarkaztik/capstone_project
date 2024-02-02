<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Home</title>
</head>

<body>
    @include('layouts/navbar')

    <div class="text-center bg-image"
        style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
      margin-top: 58px;
    ">
        <div class="mask" style="background-color: rgba(255, 255, 255, 0.5);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Heading</h1>
                    <h4 class="mb-3">Subheading</h4>
                    <a data-mdb-ripple-init class="btn btn-outline-light rounded-pill btn-lg" href="#!"
                        role="button">Call to
                        action</a>
                </div>
            </div>
        </div>
    </div>


    @include('layouts/footer')
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
