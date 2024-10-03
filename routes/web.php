<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);
// Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/profile', [ProfileController::class, 'profile'])->name('user.profile');
// Rute untuk menampilkan form
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Rute untuk menyimpan data
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Rute untuk menampilkan profil
Route::get('/user/profile', [ProfileController::class, 'profile'])->name('user.profile');

