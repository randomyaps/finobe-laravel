<?php
// routes, very important
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// register thingy
Route::get('/app/register', function () {
    return view('auth.register', ['showForm' => false]);
})->name('register.welcome');
Route::get('/app/register/form', function () {
    return view('auth.register', ['showForm' => true]);
})->name('register.form');
Route::post('/app/register', [AuthController::class, 'register'])->name('register');

// login thingy
Route::get('/app/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// legal stuff so roblox doesnt fuck me up
Route::view('/legal/rules', 'legal.rules')->name('legal.rules');
Route::view('/legal/terms', 'legal.terms')->name('legal.terms');
Route::view('/legal/privacy', 'legal.privacy')->name('legal.privacy');
Route::view('/legal/about-us', 'legal.about')->name('legal.about');