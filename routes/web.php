<?php

use App\Http\Controllers\Admin\ClassroomAdminController;
use App\Http\Controllers\Admin\GuardianAdminController;
use App\Http\Controllers\Admin\StudentAdminController;
use App\Http\Controllers\Admin\SubjectAdminController;
use App\Http\Controllers\Admin\TeacherAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// ========================================
// Public Routes (Guest Only)
// ========================================

Route::middleware('guest')->group(function () {
    Route::get('/', fn() => redirect()->route('login'));
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
});

// ========================================
// Authenticated Routes
// ========================================

Route::middleware('auth')->group(function () {
    
    // Logout (accessible by all authenticated users)
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // ========================================
    // User/Public Pages (Non-Admin)
    // ========================================

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfilController::class, 'profil'])->name('profile');
    Route::get('/kontak', [ContactController::class, 'contact'])->name('contact');
    Route::get('/student', [StudentController::class, 'index'])->name('students.public');
    Route::get('/wali', [GuardianController::class, 'index'])->name('guardians.public');
    Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.public');
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teachers.public');
    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.public');
    
    // ========================================
    // Admin Routes (Admin Only)
    // ========================================

    Route::middleware('admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            
            // Dashboard
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('dashboard');
            
            // Resource Controllers
            Route::resource('students', StudentAdminController::class);
            Route::resource('guardians', GuardianAdminController::class);
            Route::resource('teachers', TeacherAdminController::class);
            Route::resource('classrooms', ClassroomAdminController::class);
            Route::resource('subjects', SubjectAdminController::class);
        });
});