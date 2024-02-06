<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;

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

Route::get('/login', [UserController::class, 'show_login']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'show_register_user']);
Route::post('/register', [UserController::class, 'register_user']);

Route::get('/terms_and_conditions', function () {
    return view('tnc');
});
Route::get('/about', function () {
    return view('about');
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
Route::get('/admin/buses', function () {
    return view('buses');
});
Route::get('/admin/routes', function () {
    return view('routes');
});
Route::get('/admin/schedules', function () {
    return view('schedules');
});
Route::get('/admin/drivers', function () {
    return view('drivers');
});
Route::get('/admin/transactions', function () {
    return view('transactions');
});
Route::get('/admin/book', function () {
    return view('book');
});

Route::get('/notifications', [TicketController::class, 'view_notifications']);

Route::get('/register/admin', [UserController::class, 'show_register']);
Route::post('/register/admin', [UserController::class, 'register_admin']);
