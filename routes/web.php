<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/tables', function () {
    return view('tables');
})->name('tables')->middleware('auth');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet')->middleware('auth');

Route::get('/RTL', function () {
    return view('RTL');
})->name('RTL')->middleware('auth');

Route::get('/profile', function () {
    return view('account-pages.profile');
})->name('profile')->middleware('auth');

Route::get('/signin', function () {
    return view('account-pages.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('account-pages.signup');
})->name('signup')->middleware('guest');

Route::get('/sign-up', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('sign-up');

Route::post('/sign-up', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/sign-in', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('sign-in');

Route::post('/sign-in', [LoginController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');

Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management')->middleware('auth');

Route::resource('customer', CustomerController::class);
Route::get('/customer', [CustomerController::class, 'index'])->name('customer')->middleware('auth');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create')->middleware('auth');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit')->middleware('auth');
Route::patch('/customer/{id}/edit/update', [CustomerController::class, 'update'])->name('customer.update')->middleware('auth');
Route::post('/customer/create/store', [CustomerController::class, 'store'])->name('customer.store')->middleware('auth');
Route::post('/customer/{id}/delete', [CustomerController::class, 'destroy'])->name('customer.delete')->middleware('auth');

Route::resource('car', CarController::class);
Route::get('/car', [CarController::class, 'index'])->name('car')->middleware('auth');
Route::get('/car/create', [CarController::class, 'create'])->name('car.create')->middleware('auth');
Route::patch('/car/{id}/edit', [CarController::class, 'edit'])->name('car.edit')->middleware('auth');
Route::post('/car/{id}/edit/update', [CarController::class, 'update'])->name('car.update')->middleware('auth');
Route::post('/car/create/store', [CarController::class, 'store'])->name('car.store')->middleware('auth');
Route::post('/car/{id}/delete', [CarController::class, 'destroy'])->name('car.delete')->middleware('auth');

Route::resource('mechanic', MechanicController::class);
Route::get('/mechanic', [MechanicController::class, 'index'])->name('mechanic')->middleware('auth');
Route::get('/mechanic/create', [MechanicController::class, 'create'])->name('mechanic.create')->middleware('auth');
Route::get('/mechanic/{id}/edit', [MechanicController::class, 'edit'])->name('mechanic.edit')->middleware('auth');
Route::patch('/mechanic/{id}/edit/update', [MechanicController::class, 'update'])->name('mechanic.update')->middleware('auth');
Route::post('/mechanic/create/store', [MechanicController::class, 'store'])->name('mechanic.store')->middleware('auth');
Route::post('/mechanic/{id}/delete', [MechanicController::class, 'destroy'])->name('mechanic.delete')->middleware('auth');