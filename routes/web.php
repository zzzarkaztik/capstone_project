<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/terms_and_conditions', function () {
    return view('tnc');
});
Route::get('/terms_and_conditions', function () {
    return view('tnc');
});
Route::get('/book', function () {
    return view('user_booking');
});
Route::get('/passenger_info', function () {
    return view('passenger_info');
});
Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Route::get('/register/admin', [UserController::class, 'show_register']);
Route::post('/register/admin', [UserController::class, 'register_admin']);
