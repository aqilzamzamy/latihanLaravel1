<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guardian;


class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();

        return view('guardians',['title' => 'Daftar Wali', 'guardians' => $guardians]);
    }
}