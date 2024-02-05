<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Register | TRIDENT BUSLINES</title>
</head>

<body>
    <div class="card m-5 p-5">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1" />
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
            <span class="input-group-text">.00</span>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" />
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" placeholder="Server" aria-label="Server" />
        </div>

        <div class="input-group">
            <span class="input-group-text">With textarea</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
