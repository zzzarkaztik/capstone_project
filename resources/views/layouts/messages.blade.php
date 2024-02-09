@if (Session::has('success'))
    <p class="notif bg bg-success text-light ps-2 mb-0">{{ Session::get('success') }}</p>
@elseif (Session::has('fail'))
    <p class=" notif bg bg-danger text-light ps-2 mb-0">{{ Session::get('fail') }}</p>
@endif
@foreach ($errors->all() as $error)
    <p class=" notif bg bg-danger text-light ps-2 mb-0">{{ $error }}</p>
@endforeach
