<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('login', [\App\Http\Controllers\UserController::class, 'LoginFrom'])->name('login');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::post('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');

// Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
// Route::get('/registration', [\App\Http\Controllers\UserController::class,'registration'])->name('registration');
// Route::post('/requestRegister', [\App\Http\Controllers\UserController::class,'register']);

// Route::post('/requestLogin', [App\Http\Controllers\UserController::class, 'authenticate']);
// Route::post('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout')->middleware('auth');








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

// Login and Registration Routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/requestRegister', [UserController::class, 'register']);
Route::post('/requestLogin', [UserController::class, 'authenticate']);

// Logout Route with Authentication Middleware
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Dashboard Resource Routes
Route::resource('dashboard', DashboardController::class)->middleware('auth');
