<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BusScheduleController;
use App\Http\Controllers\TransactionController;

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
Route::get('/admin/buses/add', [BusController::class, 'add_bus_form']);
// Maynard end

//Keith
Route::get('/admin/buses/edit/{id}', [BusController::class, 'edit_bus_form']);
//Keith end

//Maynard
Route::post('/admin/buses/add', [BusController::class, 'add_bus']);
Route::get('/admin/buses', [BusController::class, 'show_buses']);
Route::get('/admin/buses/{id}', [BusController::class, 'profile_bus']);
//Maynard end

//Keith
Route::put('/admin/buses/{id}', [BusController::class, 'edit_bus']);
//Keith end

//Maynard
Route::delete('/admin/buses/{id}', [BusController::class, 'delete_bus']);

Route::get('/admin/drivers', [DriverController::class, 'show_drivers']);
Route::get('/admin/drivers/add', [DriverController::class, 'add_driver_form']);
Route::post('/admin/drivers/add', [DriverController::class, 'add_driver']);
Route::get('/admin/drivers/edit/{id}', [DriverController::class, 'edit_driver_form']);
Route::put('/admin/drivers/{id}', [DriverController::class, 'edit_driver']);
Route::get('/admin/drivers/{id}', [DriverController::class, 'driver_profile']);
Route::delete('/admin/drivers/{id}', [DriverController::class, 'delete_driver']);

Route::resource('/admin/schedules', BusScheduleController::class);
// Maynard end

// Keith
Route::get('/admin/routes/add', [BusRouteController::class, 'add_route_form']);
Route::get('/admin/routes/edit/{id}', [BusRouteController::class, 'edit_route_form']);
Route::get('/admin/routes', [BusRouteController::class, 'show_route']);
Route::post('/admin/routes', [BusRouteController::class, 'add_route']);
Route::put('/admin/routes/{id}', [BusRouteController::class, 'edit_route']);
Route::delete('/admin/routes/{id}', [BusRouteController::class, 'delete_route']);

Route::resource('/admin/transactions', TransactionController::class,);
// Keith end

Route::get('/notifications', [TicketController::class, 'view_notifications']);

Route::get('/register/admin', [UserController::class, 'show_register']);
Route::post('/register/admin', [UserController::class, 'register_admin']);
// Rafael
Route::get('/profile', [UserController::class, 'show_profile']);
Route::get('/profile/edit', [UserController::class, 'edit_profile_form']);
Route::post('/profile/edit', [UserController::class, 'edit_profile']);

// 