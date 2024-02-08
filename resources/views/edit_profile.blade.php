<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Edit Profile | TRIDENT BUSLINES</title>
</head>

<body class="mt-4 pt-5">
    @include('layouts/navbar')
    @include('layouts/messages')
    <div class="vh-100 d-flex justify-content-center align-items-center text-center">

        <div class="m-5 p-5 w-50">
            <img src="img/trident-logo.png" alt="trident logo" width="250px">
            <form action="/profile/edit" method="POST">
                @csrf
                <!-- First Name input -->
                <div class="form-outline my-4" data-mdb-input-init>
                    <input type="text" class="form-control" name="first_name" />
                    <label class="form-label">First Name</label>
                </div>

                <!-- Last Name input -->
                <div class="form-outline my-4" data-mdb-input-init>
                    <input type="text" class="form-control" name="last_name" />
                    <label class="form-label">Last Name</label>
                </div>

                <!-- Email input -->
                <div class="form-outline my-4" data-mdb-input-init>
                    <input type="email" class="form-control" name="email" />
                    <label class="form-label">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="password" class="form-control" name="pw" />
                    <label class="form-label">Password</label>
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="password" class="form-control" name="con_pw" />
                    <label class="form-label">Confirm Password</label>
                </div>

                <!-- Passenger Type dropdown -->
                <div class="form-outline mb-4" data-mdb-input-init>
                    <select class="form-select" name="type">
                        <option value="regular">Regular</option>
                        <option value="senior_citizen">Senior Citizen</option>
                        <option value="pwd">PWD</option>
                        <option value="student">Student</option>
                    </select>
                    <label class="form-label">Passenger Type</label>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Confirm Changes</button>

                    <!-- Login link -->
                    <div class="text-center">
                        <p>Already a member? <a href="/login">Login</a></p>
                    </div>
            </form>
        </div>

    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>