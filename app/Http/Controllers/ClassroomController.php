<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classroom = Classroom::all();
        $title = "classroom";
        return view('classroom',['title' => $title,'classrooms' => $classroom]);
    }

    // PERBAIKAN UTAMA: Tambahkan Eager Loading 'students'
    public function adminIndex()
    {
        // Mengambil semua data kelas dan memuat data siswa yang berelasi
        $classrooms = Classroom::with('students')->get(); 

        // Mengarah ke resources/views/admin/classroom.blade.php
        return view('admin.classroom.index', [ 
            'title' => 'Data Classroom (Admin)',
            'classrooms' => $classrooms
        ]);
    }

    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
