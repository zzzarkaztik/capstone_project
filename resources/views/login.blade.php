<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Login | TRIDENT BUSLINES</title>
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center text-center">
        <div class="card-large m-5 p-5">
            <img src="img/trident-logo.png" alt="trident logo" width="250px" class="mx-auto">
            <form>
                <!-- Email input -->
                <div class="form-outline my-4" data-mdb-input-init>
                    <input type="email" class="form-control" />
                    <label class="form-label">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="password" class="form-control" />
                    <label class="form-label">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked />
                            <label class="form-check-label">Remember me</label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="/register">Register</a></p>
                </div>
            </form>

        </div>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
