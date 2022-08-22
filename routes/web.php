<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TracerController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\Alumni;

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

// Landing Page and Homepage Routes
Route::get('/', [NavController::class, 'landing'])->middleware('loggedInSession')->name('landing-page');
Route::get('/home', [NavController::class, 'index'])->name('homepage')->middleware('sessionChecker');


// Login Routes
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


// Career Routes
Route::get('/career', [CareerController::class, 'index'])->name('career.index');
Route::post('/career-add', [CareerController::class, 'addJob'])->name('career.addJob');
Route::patch('/update/{careerID}', ['as' => 'career.update', 'uses' => 'App\Http\Controllers\CareerController@update']);
Route::delete('/delete/{careerID}', ['as' => 'career.delete', 'uses' => 'App\Http\Controllers\CareerController@delete']);

Route::get('/admin-career', [AdminController::class, 'adminCareer'])->name('admin.careerIndex');
Route::delete('/alumni-delete/{studNumber}', ['as' => 'alumniList.delete', 'uses' => 'App\Http\Controllers\AdminController@deleteAlumniList']);
Route::get('/admin-career-request', [AdminController::class, 'careerRequest'])->name('admin.careerRequest');
Route::delete('/approve/{careerID}', ['as' => 'career.approve', 'uses' => 'App\Http\Controllers\CareerController@approveCareer']);

// Career Application
Route::post('/career/apply', [CareerController::class, 'applyCareer'])->name('user.applyCareer');

// Alumni Tracer Routes
Route::get('/tracer', [TracerController::class, 'index'])->name('user.tracerIndex');
Route::get('/tracer-answer-form', [TracerController::class, 'answerForm'])->name('user.tracerForm');
Route::post('/tracer-answers',[TracerController::class, 'tracerAnswer'])->name('user.tracerAnswer');
Route::get('/tracer/update', [TracerController::class, 'updateTracer'])->name('user.updateTracer');
Route::patch('/update-tracer/{tracerID}', ['as' => 'user.updateTracerForm', 'uses' => 'App\Http\Controllers\TracerController@update']);

// Alumni Profile Routes
Route::get('/profile', [ProfileController::class, 'index'])->name('user.profileIndex');
Route::patch('/update-profile/{userID}', ['as' => 'user.updateProfile', 'uses' => 'App\Http\Controllers\ProfileController@updateProfile']);

// Alumni Exit Interview Forms Routes
Route::get('/forms', [FormsController::class, 'index'])->name('user.formsIndex');
Route::get('/forms/exit-form', [FormsController::class, 'exitInteview'])->name('user.exitInterview');
Route::post('/forms/exit-answer', [FormsController::class, 'exitAnswers'])->name('user.exitAnswers');

// SAS Form Routes
Route::get('/forms/sas-form', [FormsController::class, 'sasForm'])->name('user.sasForm');
Route::post('/forms/sas-answer', [FormsController::class, 'sasAnswer'])->name('user.sasAnswer');

// Personal Data Sheet Routes
Route::get('/forms/pds-form', [FormsController::class, 'pdsForm'])->name('user.pdsForm');
Route::post('/forms/pds-answer', [FormsController::class, 'pdsAnswer'])->name('user.pdsAnswer');

// Data Privacy Notice
Route::post('/data-privacy-notice', [FormsController::class, 'dataPrivacy'])->name('user.dataPrivacy');

// Admin Forms
Route::get('/admin/monitor-forms', [FormsController::class, 'monitorForms'])->name('admin.monitorForms');

// Admin Career
Route::get('/admin/career-applicants', [CareerController::class, 'viewApplicants'])->name('admin.viewApplicants');



