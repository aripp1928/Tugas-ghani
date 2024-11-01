<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
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
    return Auth::check() ? redirect()->route('events.index') : redirect()->route('auth.login');
});


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('auth.showFormRegister');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// Rute untuk Event dan Registrasi
Route::middleware(['auth'])->group(function () {
    Route::resource('events', EventController::class);
    
    
    Route::post('events/{event}/register', [RegistrationController::class, 'store'])->name('registrations.store');
    
});
