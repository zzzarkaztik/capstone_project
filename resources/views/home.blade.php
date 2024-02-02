<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Home</title>
</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')

    {{-- Carousel --}}
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="img/assets/1.jpg" class="d-block w-100" alt="bus in the speed force" />
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-white">Your Journey Begins Here, with Trident</h2>
                    <p>Embark on a voyage of possibilities with Trident Buslines. We don't just connect destinations; we
                        create the starting point for unforgettable journeys. Let every mile be a memory etched in the
                        story of your travels.</p>
                    <a href="" class="btn rounded-pill btn-primary mb-2">BOOK NOW</a>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="img/assets/2.jpg" class="d-block w-100" alt="best seats in bus" />
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-white">Effortless Trips, Every Trident Ride</h2>
                    <p>Experience travel like never before at Trident Buslines. Our cutting-edge facilities and
                        customer-focused approach ensure that your journey is not just a commute but a smooth and
                        satisfying experience. Discover a new level of convenience with Trident.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="img/assets/3.jpg" class="d-block w-100" alt="trident bus garage" />
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-white">Connecting Beyond Routes - Explore, Experience, Enjoy</h2>
                    <p>Trident Buslines transcends being a mere transit point. Immerse yourself in a realm of
                        exploration where each trip becomes an opportunity to discover, experience, and relish the
                        journey as much as the destination. Uncover adventures with Trident Buslines!</p>

                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->


    @include('layouts/footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
