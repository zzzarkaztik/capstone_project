<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Profile | TRIDENT BUSLINES</title>
</head>

<body class="mt-5 pt-3">
    @include('layouts/navbar')

    <div class="container my-5 py-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">My Profile</h1>
                        <p class="card-text"><b>Name:</b> {{ $user->first_name }} {{ $user->last_name }}</p>
                        <p class="card-text"><b>Email:</b> {{ $user->email }}</p>
                        @if (Session::get('role') == 'user')
                        <p class="card-text"><b>Passenger Type:</b> {{ $user->type }}</p>
                        @else
                        <p class="card-text"><b>Account Type:</b> Admin</p>
                        @endif
                        <a href="/profile/edit" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>