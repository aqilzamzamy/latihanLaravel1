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

    public function adminIndex()
    {
        $guardian = Guardian::all();

        return view('admin.guardian', [ 
            'title' => 'Data Wali murid (Admin)',
            'guardians' => $guardians
        ]);
    }
}