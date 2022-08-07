<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NavController::class, 'landing'])->middleware('loggedInSession')->name('landing-page');
Route::get('/home', [NavController::class, 'index'])->name('homepage')->middleware('sessionChecker');

Route::get('/registration', [NavController::class, 'register'])->name('registration')->middleware('loggedInSession');
Route::get('/register', [AccountController::class, 'registerUser'])->name('user.register')->middleware('loggedInSession');
Route::post('/register-user', [AccountController::class, 'regUser'])->name('user.regUser');

Route::get('/login', [NavController::class, 'login'])->name('login')->middleware('loggedInSession');
Route::get('/loginUser', [AccountController::class, 'login'])->name('user.login')->middleware('loggedInSession');
Route::post('login-user', [AccountController::class, 'loginUser'])->name('user.loginUser');

Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

Route::get('/career', [NavController::class, 'career'])->name('career.index');
