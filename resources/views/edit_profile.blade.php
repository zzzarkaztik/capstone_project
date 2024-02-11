<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Edit Profile | TRIDENT BUSLINES</title>
</head>

<body class="pt-5">
    @include('layouts/navbar')

    <div class="container my-5 py-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <img src="/img/trident-logo.png" alt="trident logo" class="mx-auto d-block mb-4"
                            style="width: 250px;">
                        <form action="/profile/edit" method="POST">
                            @csrf
                            <!-- First Name input -->
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    value="{{ $user->first_name }}">
                            </div>

                            <!-- Last Name input -->
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    value="{{ $user->last_name }}">
                            </div>

                            <!-- Email input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email }}">
                            </div>

                            <!-- Passenger Type dropdown -->
                            <div class="mb-3">
                                <label for="type" class="form-label">Passenger Type:</label>
                                <select class="form-select" id="type" name="type">
                                    <option value="regular" {{ $user->type == 'regular' ? 'selected' : '' }}>Regular
                                    </option>
                                    <option value="senior_citizen"
                                        {{ $user->type == 'senior_citizen' ? 'selected' : '' }}>Senior Citizen</option>
                                    <option value="pwd" {{ $user->type == 'pwd' ? 'selected' : '' }}>PWD</option>
                                    <option value="student" {{ $user->type == 'student' ? 'selected' : '' }}>Student
                                    </option>
                                </select>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Confirm Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>
