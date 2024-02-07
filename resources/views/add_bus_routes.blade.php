<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Routes</title>
</head>

<body>
    <h1>Add Route</h1>
    <form action="/admin/routes" method="POST">
        @csrf
        <label>Origin</label>
        <input type="text" name="origin"><br>
        <label>Destination</label>
        <input type="text" name="destination"><br>
        <label>Kilometers</label>
        <input type="text" name="kilometers"><br>
        <label>Price</label>
        <input type="text" name="price"><br>
        <input type="submit">
    </form>
</body>

</html>
