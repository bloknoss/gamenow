<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginRegisterController;

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
    return view('auth.home');
});

// Define Custom User Registration & Login Routes
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

// Define Custom Verification Routes
Route::controller(VerificationController::class)->group(function () {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});

Route::controller(App\Http\Controllers\Juego::class)->group(function () {
    // Resource para generar las rutas del crud de los juegos
    Route::resource('juegos', \App\Http\Controllers\Juego::class)->middleware(['auth', 'verified']);

    // Ruta para crear los juegos que se accede a traves de post y ejecuta el store.
    Route::post('/juegos/create', 'store')->middleware(['auth', 'verified']);

});


Route::controller(App\Http\Controllers\Usuario::class)->group(function () {

    // Resource para que se generen las rutas del CRUD
    Route::resource('users', \App\Http\Controllers\Usuario::class)->middleware(['auth', 'verified']);
});
