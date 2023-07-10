<?php

use App\Http\Controllers\Admin\{AuthController, ProfileController, UsersController, BusController, BookingController};
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get('/', function (){
    return view('index');
});

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::group(['middleware'=>['admin_auth']], function () {

    Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/admin/logout', [ProfileController::class, 'logout'])->name('logout');

    // Bus routes
    Route::get('/admin/bus-list', [BusController::class, 'bus_list'])->name('bus-list');
    Route::get('/admin/create-bus', [BusController::class, 'create'])->name('create-bus');
    Route::post('/admin/create_validation', [BusController::class, 'create_validation'])->name('create_validation');
    Route::get('/admin/edit-bus/{id}', [BusController::class, 'edit'])->name('edit-bus');
    Route::post('/admin/edit_validation/{id}', [BusController::class, 'edit_validation'])->name('edit_validation');
    Route::get('/admin/delete/{id}', [BusController::class, 'delete'])->name('delete-bus');

    // Booking routes
    Route::get('/admin/booking', [BookingController::class, 'index'])->name('booking-list');
    Route::get('/admin/create-booking', [BookingController::class, 'create'])->name('create-booking');
    Route::post('/admin/create_booking_validation', [BookingController::class, 'create_validation'])->name('create_booking_validation');
    Route::get('/admin/edit-booking/{id}', [BookingController::class, 'edit'])->name('edit-booking');
    Route::post('/admin/edit_booking_validation/{id}', [BookingController::class, 'edit_validation'])->name('edit_booking_validation');
    Route::get('/admin/delete-booking/{id}', [BookingController::class, 'delete'])->name('delete-booking');
});

