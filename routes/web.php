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
    return view('welcomeChanged');
});
Auth::routes();

Route::get('/ubicacion', function() {
    return view('ubicacion');
});
Route::middleware('auth')->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('home');
});

Route::prefix('admin')->middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
    Route::post('/', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::get('/{id}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
});


Route::prefix('users')->middleware(['auth', 'admin', 'superadmin'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::prefix('passengers')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\PassengerController::class, 'index'])->name('passenger.index');
    Route::get('/create', [App\Http\Controllers\PassengerController::class, 'create'])->name('passenger.create');
    Route::post('/', [App\Http\Controllers\PassengerController::class, 'store'])->name('passenger.store');
    Route::get('/{passenger}/edit', [App\Http\Controllers\PassengerController::class, 'edit'])->name('passenger.edit');
    Route::put('/{passenger}', [App\Http\Controllers\PassengerController::class, 'update'])->name('passenger.update');
    Route::delete('/{passenger}', [App\Http\Controllers\PassengerController::class, 'destroy'])->name('passenger.destroy');
});

Route::prefix('dt')->middleware('auth')->group(function () {
    Route::get('/users', [App\Http\Controllers\DataTablesController::class, 'users'])->name('dt.users');
    Route::get('/passengers', [App\Http\Controllers\DataTablesController::class, 'passengers'])->name('dt.passengers');
});