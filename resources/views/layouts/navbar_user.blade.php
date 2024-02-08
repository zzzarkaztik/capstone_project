<!-- Navbar -->
<div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-danger fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="/img/trident-logo.svg" width="130px" alt="MDB Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <div class="d-flex ms-2 me-auto mb-lg-0">
                    <a class="nav-link me-2" href="/">HOME</a>
                    <a class="nav-link me-2" href="#">TERMINALS</a>
                    <a class="nav-link " href="/book">BOOK A TICKET</a>
                </div>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                @if (Session::get('user_id'))
                    <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex align-items-center" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                    class="border border-solid rounded-circle" height="40"
                                    alt="Black and White Portrait of a Man" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="/profile">My profile</a>
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
                    </div>
                @else
                    <a class="me-3 nav-link" href="/login">LOGIN</a>
                @endif
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->

    </nav>
    @include('layouts/messages')
</div>
<!-- Navbar -->
