<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Profile | TRIDENT BUSLINES</title>
</head>

<body class="mt-5 pt-3">
    @include('layouts/navbar')
    <div>
        <h2>Name: {{$user -> first_name}} {{$user -> last_name}}</h2>
        <h2>Email: {{$user -> email}}</h2>
        <a href="/edit_profile" class="btn btn-primary">Edit Profle</a>
    </div>
    @include('layouts/footer')
</body>

</html>