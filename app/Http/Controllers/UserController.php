<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Bus;
use Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register_admin()
    {
        $user = new User;
        $user->first_name = 'John';
        $user->last_name = 'Doe';
        $user->email = 'johndoe@admin.com';
        $password = '12345';
        $hashedPassword = Hash::make($password);
        $user->password = $hashedPassword;
        $user->role = 'admin';
        $user->save();

        return 'Admin User created successfully!';
    }

    public function show_register()
    {
        return view('register_admin');
    }
}
