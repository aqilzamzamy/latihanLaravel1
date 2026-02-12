<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;

use App\Http\Controllers\Admin\StudentAdminController;
use App\Http\Controllers\Admin\GuardianAdminController;
use App\Http\Controllers\Admin\TeacherAdminController;
use App\Http\Controllers\Admin\ClassroomAdminController;
use App\Http\Controllers\Admin\SubjectAdminController;

// auth 
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// public
Route::get('/', fn () => redirect()->route('login'));
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfilController::class, 'profil']);
Route::get('/kontak', [ContactController::class, 'contact']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/wali', [GuardianController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/classrooms', [ClassroomController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);

// admin
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', fn () => view('admin.dashboard'))
            ->name('dashboard');

        Route::resource('students', StudentAdminController::class);
        Route::resource('guardians', GuardianAdminController::class);
        Route::resource('teachers', TeacherAdminController::class);
        Route::resource('classrooms', ClassroomAdminController::class);
        Route::resource('subjects', SubjectAdminController::class);
    });
