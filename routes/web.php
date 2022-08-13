<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
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

Route::get('/login', [NavController::class, 'login'])->name('login')->middleware('loggedInSession')->middleware('adminLoggedIn');
Route::get('/loginUser', [AccountController::class, 'login'])->name('user.login')->middleware('loggedInSession');
Route::post('login-user', [AccountController::class, 'loginUser'])->name('user.loginUser');

Route::get('/loginAdmin', [AccountController::class, 'loginAdmin'])->name('admin.login')->middleware('adminLoggedIn');
Route::post('/login-admin', [AccountController::class, 'login_admin'])->name('admin.loginAdmin');

Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
Route::get('/logout-admin', [AccountController::class, 'logoutAdmin'])->name('logout.admin');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('adminSession');
Route::get('/add-list-alumni', [AdminController::class, 'addListAlumni'])->name('admin.addList')->middleware('adminSession');
Route::post('/add-alumni', [AdminController::class, 'addAlumni'])->name('admin.addAlumni')->middleware('adminSession');

Route::get('/career', [CareerController::class, 'index'])->name('career.index');
Route::get('/careerIndex', [CareerController::class, 'showIndex'])->name('career.showIndex');
Route::post('/career-add', [CareerController::class, 'addJob'])->name('career.addJob');
Route::patch('/update/{id}', ['as' => 'career.update', 'uses' => 'App\Http\Controllers\CareerController@update']);
Route::delete('/delete/{id}', ['as' => 'career.delete', 'uses' => 'App\Http\Controllers\CareerController@delete']);
