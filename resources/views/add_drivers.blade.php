<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Add Driver | ADMIN | TRIDENT BUSLINES</title>

</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')
    @include('layouts/sidenav')

    <div class="vh-100 d-flex justify-content-center text-center">
        @include('layouts/messages')

        <div class="m-5 p-5 w-50">

            <h1>ADD NEW DRIVER</h1>
            <form action="/admin/drivers/add" method="POST">
                @csrf

                <div class="form-outline my-4">
                    <input type="text" class="form-control" name="first_name" />
                    <label class="form-label">First Name</label>
                </div>

                <div class="form-outline my-4">
                    <input type="text" class="form-control" name="last_name" />
                    <label class="form-label">Last Name</label>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select" name="bus_id">
                        <option value="">No Assigned Bus</option>
                        @foreach ($bus as $b)
                            <option value="{{ $b->bus_id }}">{{ $b->bus_id }} ({{ $b->plate_number }})
                            </option>
                        @endforeach
                    </select>
                    <label class="form-label">Assigned Bus</label>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select" name="gender">
                        <option disabled selected>Select One</option>
                        <option disabled>----------</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <label class="form-label">Gender</label>
                </div>

                <div class="form-outline rounded">
                    <input type="date" name="birthdate" class="form-control">
                </div>
                <label class="mb-5 form-label">Birthdate</label>

                <br>

                <button type="submit" class="btn btn-primary btn-block w-100">Submit</button>

            </form>
        </div>

    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
