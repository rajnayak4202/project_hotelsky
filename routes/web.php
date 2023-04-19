<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\AddRoomController;
use App\Http\Controllers\RoomBookingController;
use App\Http\Controllers\RoomHistoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/customer_page', [CustomerController::class, 'Customer'])->name('customer.page');

    Route::get('/room_category_page', [RoomCategoryController::class, 'RoomCategory'])->name('room_category.page');
    
    Route::get('/add_room_page', [AddRoomController::class, 'AddRoom'])->name('add_room.page');
    
    Route::get('/room_booking_page', [RoomBookingController::class, 'RoomBooking'])->name('room_booking.page');
    
    Route::get('/room_history_page', [RoomHistoryController::class, 'RoomHistory'])->name('room_history.page');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
