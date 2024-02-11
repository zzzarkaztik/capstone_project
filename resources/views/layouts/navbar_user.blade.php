<!-- Navbar -->
<div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-danger">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <div class="me-4 py-1">
                <a class="navbar-brand me-auto ms-auto" href="#">
                    <img src="/img/trident-logo.svg" width="130px" alt="MDB Logo" loading="lazy" />
                </a>
            </div>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>


            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-2 mr-lg-2" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="/terminals">TERMINALS</a>
                    </li>
                    <li class="nav-item">
                        @if (Session::get('user_id'))
                        <a class="nav-link" href="/book">BOOK A TICKET</a>
                        @else
                        <a class="nav-link" href="/login">BOOK A TICKET</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">ABOUT US</a>
                    </li>
                </ul>
                <!-- Left links -->

                <!-- Avatar -->
                <div class="d-flex align-items-center ms-auto">
                    @if (Session::get('user_id'))
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center text-white btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Session::get('first_name') }} {{ Session::get('last_name') }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/profile">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ticket">My Tickets</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <a class="me-3 nav-link" href="/login">LOGIN</a>
                    @endif
                </div>
                <!-- Avatar -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    @include('layouts/messages')
</div>
<!-- Navbar -->

<!-- Bootstrap Bundle with Popper -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>