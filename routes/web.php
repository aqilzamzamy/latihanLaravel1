<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/', [ProfilController::class, "index"]);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [ProfilController::class, 'kontak']);
Route::get('/home', [ProfilController::class, 'home']);
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);

// Admin 
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminSubjectController;
use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminProfilController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminDashboardController;


Route::prefix('admin')->name('admin.')->group(function () {

    // Route::get('/profil', [AdminProfilController::class, 'index'])->name('profil');
    // Route::get('/kontak', [AdminContactController::class, 'index'])->name('contact.index');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Classroom admin
    Route::get('/classroom', [AdminClassroomController::class, 'index'])->name('classroom.index');
    Route::post('/classroom', [AdminClassroomController::class, 'store'])->name('classroom.store');

    // Student admin
    Route::get('/students', [AdminStudentController::class, 'index'])->name('students.index');
    Route::post('/students', [AdminStudentController::class, 'store'])->name('students.store');
    Route::put('/student/{student}', [AdminStudentController::class, 'update'])->name('student.update');
    Route::delete('/students/{student}', [AdminStudentController::class, 'destroy'])->name('students.destroy');

    // Teacher admin
    Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
    Route::post('/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');
    Route::put('/teacher/{teacher}', [AdminTeacherController::class, 'update'])->name('teacher.update');
    Route::delete('/teacher/{teacher}', [AdminTeacherController::class, 'destroy'])->name('teacher.destroy');

    // Guardian admin
    Route::get('/guardian', [AdminGuardianController::class, 'index'])->name('guardian.index');
    Route::post('/guardian', [AdminGuardianController::class, 'store'])->name('guardian.store');
    Route::put('/guardian/{guardian}', [AdminGuardianController::class, 'update'])->name('guardian.update');
    Route::delete('/guardian/{guardian}', [AdminGuardianController::class, 'destroy'])->name('guardian.destroy');

    // Subject admin
    Route::get('/subject', [AdminSubjectController::class, 'index'])->name('subject.index');
    Route::post('/subject', [AdminSubjectController::class, 'store'])->name('subject.store');
});
