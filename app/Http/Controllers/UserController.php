<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Bus;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit_profile_form()
    {
        $user = User::find(Session::get('user_id'));
        return view('edit_profile', compact('user'));
    }

    public function edit_profile(Request $request)
    {
        $user = User::find(Session::get('user_id'));
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->type = $request->input('type');
        $user->save();

        return redirect("/profile")->with('success', 'Profile Updated Successfully!');
    }



    public function show_profile(Request $request)
    {
        $user = User::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        if ($user->type == 'pwd') {
            $user->type = 'PWD';
        } elseif ($user->type == 'regular') {
            $user->type = 'Regular';
        } elseif ($user->type == 'senior_citizen') {
            $user->type = 'Senior Citizen';
        } elseif ($user->type == 'student') {
            $user->type = 'Student';
        }
        return view('profile', compact('user'));
    }

    public function register_user(Request $r)
    {
        $this->validate($r, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|unique:users,email',
            'pw' => 'required|min:5',
            'con_pw' => 'required|same:pw',
            'type' => 'required|string'

        ], [], [
            'pw' => 'password',
            'con_pw' => 'password confirmation',
        ]);

        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->role = 'user';
        $user->type = $r->input('type');
        $user->save();

        return redirect("/login")->with('success', 'New user added!');
    }

    public function show_register_user()
    {
        return view('register');
    }

    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('login');
    }

    public function login(Request $r)
    {
        $user = User::where("email", "=", $r->email)->first();

        if ($user) {
            if (Hash::check($r->pw, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email);
                Session::put('role', $user->role);
                if (Session::get('role') == 'admin') {
                    return redirect('/admin/dashboard');
                } elseif (Session::get('role') == 'user') {
                    return redirect('/book');
                }
            } else {
                return redirect('/login')->with('fail', 'Incorrect password.');
            }
        } else {
            return redirect('/login')->with('fail', 'An account with that email does not exist.');
        }
    }


    public function show_login()
    {
        return view('login');
    }

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
