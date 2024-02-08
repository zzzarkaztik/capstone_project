<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Profile | TRIDENT BUSLINES</title>
</head>

<body class="mt-5 pt-3">
    @include('layouts/navbar')

    <div class="my-5 py-3">
        <h1>My Profile</h1>
        <p>Name: {{$user -> first_name}} {{$user -> last_name}}</p>
        <p>Email: {{$user -> email}}</p>
        <p>Passenger Type: {{$user -> type}}</p>
        <a href="/profile/edit" class="btn btn-primary">Edit Profile</a>
    </div>
    @include('layouts/footer')
</body>

</html>