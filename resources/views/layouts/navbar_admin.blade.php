<!-- Navbar -->
<div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-danger ">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <div>
                <a class="navbar-brand" href="#">
                    <img src="/img/trident-logo.svg" width="130px" alt="trident logo" loading="lazy" />
                </a>

            </div>
            <!-- Left links -->
            <div class="d-flex me-auto ms-2 mb-lg-0">
                <a class="nav-link me-2" href="/admin/dashboard"><i class="ri-dashboard-fill"></i>
                    DASHBOARD</a>
                <a class="nav-link " href="/admin/transactions"><i class="ri-coupon-3-fill"></i> TRANSACTIONS</a>
            </div>
            <!-- Left links -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="border border-solid rounded-circle" height="40" alt="Black and White Portrait of a Man" loading="lazy" />
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
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    @include('layouts/messages')
</div>
<!-- Navbar -->