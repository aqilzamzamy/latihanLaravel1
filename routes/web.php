<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\GuardianController;

Route::get('/',[ProfilController::class, "index"]);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [ProfilController::class, 'kontak']);
Route::get('/home', [ProfilController::class, 'home']);
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);