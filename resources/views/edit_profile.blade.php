<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Edit Profile | TRIDENT BUSLINES</title>
</head>

<body class="mt-4 pt-5">
    @include('layouts/navbar')
    @include('layouts/messages')

    <div id=content>

        <div class="vh-100 d-flex justify-content-center align-items-center text-center">

            <div class="m-5 p-5 w-50">
                <img src="/img/trident-logo.png" alt="trident logo" width="250px">
                <form action="/profile/edit" method="POST">
                    @csrf
                    <!-- First Name input -->
                    <div class="form-outline my-4" data-mdb-input-init>
                        <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" />
                        <label class="form-label">First Name</label>
                    </div>

                    <!-- Last Name input -->
                    <div class="form-outline my-4" data-mdb-input-init>
                        <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" />
                        <label class="form-label">Last Name</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline my-4" data-mdb-input-init>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                        <label class="form-label">Email address</label>
                    </div>

                    <!-- Passenger Type dropdown -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <select class="form-select" name="type">
                            <option value="regular" {{ $user->type == 'regular' ? 'selected' : '' }}>Regular</option>
                            <option value="senior_citizen" {{ $user->type == 'senior_citizen' ? 'selected' : '' }}>
                                Senior
                                Citizen</option>
                            <option value="pwd" {{ $user->type == 'pwd' ? 'selected' : '' }}>PWD</option>
                            <option value="student" {{ $user->type == 'student' ? 'selected' : '' }}>Student</option>
                        </select>
                        <label class="form-label">Passenger Type</label>
                    </div>
                    <br>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Confirm Changes</button>


                </form>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
