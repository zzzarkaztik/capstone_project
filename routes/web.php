<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BusController;

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
Route::get('/admin/dashboard', [BusController::class, 'total_dashboard']);


// Maynard 

Route::get('/admin/buses', [BusController::class, 'show_buses']);

// Maynard end
Route::get('/notifications', [TicketController::class, 'view_notifications']);

Route::get('/register/admin', [UserController::class, 'show_register']);
Route::post('/register/admin', [UserController::class, 'register_admin']);
