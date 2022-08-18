<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniTracerController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TracerController;
use App\Http\Controllers\UserTracerController;
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
Route::post('/career-add', [CareerController::class, 'addJob'])->name('career.addJob');
Route::patch('/update/{careerID}', ['as' => 'career.update', 'uses' => 'App\Http\Controllers\CareerController@update']);
Route::delete('/delete/{careerID}', ['as' => 'career.delete', 'uses' => 'App\Http\Controllers\CareerController@delete']);

Route::get('/admin-career', [AdminController::class, 'adminCareer'])->name('admin.careerIndex');
Route::delete('/alumni-delete/{studNumber}', ['as' => 'alumniList.delete', 'uses' => 'App\Http\Controllers\AdminController@deleteAlumniList']);
Route::get('/admin-career-request', [AdminController::class, 'careerRequest'])->name('admin.careerRequest');
Route::delete('/approve/{careerID}', ['as' => 'career.approve', 'uses' => 'App\Http\Controllers\CareerController@approveCareer']);

// Alumni Tracer Routes
Route::get('/tracer', [UserTracerController::class, 'index'])->name('user.tracerIndex');
Route::get('/tracer-answer-form', [UserTracerController::class, 'answerForm'])->name('user.tracerForm');

// Alumni Profile Routes
Route::get('/profile', [ProfileController::class, 'index'])->name('user.profileIndex');

// Alumni Forms Routes
Route::get('/forms', [FormsController::class, 'index'])->name('user.formsIndex');
Route::get('/exit-interview-page-1', [FormsController::class, 'exitP1'])->name('user.exitInterviewP1');
Route::get('/exit-interview-page-2', [FormsController::class, 'exitP2'])->name('user.exitInterviewP2');
Route::get('/exit-interview-page-3', [FormsController::class, 'exitP3'])->name('user.exitInterviewP3');
Route::get('/exit-interview-page-4', [FormsController::class, 'exitP4'])->name('user.exitInterviewP4');
Route::get('/exit-interview-page-5', [FormsController::class, 'exitP5'])->name('user.exitInterviewP5');

// Alumni Personal Data Sheet Routes
Route::get('/pds-page-1', [FormsController::class, 'pdsP1'])->name('user.pdsP1');
Route::get('/pds-page-2', [FormsController::class, 'pdsP2'])->name('user.pdsP2');

// SAS Form Routes
Route::get('/sas-page-1', [FormsController::class, 'sasP1'])->name('user.sasP1');
Route::get('/sas-page-2', [FormsController::class, 'sasP2'])->name('user.sasP2');
Route::get('/sas-page-3', [FormsController::class, 'sasP3'])->name('user.sasP3');
Route::get('/sas-page-4', [FormsController::class, 'sasP4'])->name('user.sasP4');
Route::get('/sas-page-5', [FormsController::class, 'sasP5'])->name('user.sasP5');


