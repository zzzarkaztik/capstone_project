@if (Session::get('role') == 'admin')
@include('layouts/navbar_admin')
@include('layouts/messages')
@else
@include('layouts/navbar_user')
@include('layouts/messages')
@endif