<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\SanityController;

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
Route::get('/form', function () {
    return view('form');
});

// Show Reigster/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


//Show API key generation form
Route::get('/tokens/create', [ApiTokenController::class, 'create'])->middleware('auth');

Route::get('/tokens', [ApiTokenController::class, 'index'])->middleware('auth');

Route::post('/tokens', [ApiTokenController::class, 'store'])->middleware('auth');

Route::get('/sanity', [SanityController::class, 'index']);
