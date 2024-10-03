<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk profil dengan parameter nama, kelas, dan npm
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);

// Rute untuk menampilkan form pembuatan pengguna
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Rute untuk menyimpan data pengguna
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Rute untuk menampilkan profil pengguna
Route::get('/user/profile', [ProfileController::class, 'profile'])->name('user.profile');

// Rute untuk menampilkan daftar pengguna
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/users', [UserController::class, 'index'])->name('user.index');

// Rute untuk menampilkan form edit
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

// Rute untuk mengupdate data pengguna
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

// Rute untuk menghapus pengguna
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');


