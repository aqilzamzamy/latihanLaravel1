<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomAdminController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuardianAdminController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectAdminController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherAdminController;
use App\Http\Controllers\TeacherController;
use App\View\Components\admin\admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [ProfilController::class, 'profil']);

Route::get('/kontak', [ContactController::class, 'contact',]);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/student', [StudentController::class, 'index',]);

Route::get('/wali', [GuardianController::class, 'index',]);

Route::get('/classrooms', [ClassroomController::class, 'index',]);
Route::get('/teacher', [TeacherController::class, 'index',]);
Route::get('/subjects', [SubjectController::class, 'index',]);
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');
// Route::resource('students', StudentAdminController::class); //diambil dari nama folder
// Route::resource('guardians', GuardianAdminController::class);
// Route::resource('teachers', TeacherAdminController::class);
// Route::resource('classroom', ClassroomAdminController::class);
// Route::resource('subject', SubjectAdminController::class);

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('students', StudentAdminController::class);
        Route::resource('guardians', GuardianAdminController::class);
        Route::resource('teachers', TeacherAdminController::class);
        Route::resource('classrooms', ClassroomAdminController::class);
        Route::resource('subjects', SubjectAdminController::class);
    });


Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
});
