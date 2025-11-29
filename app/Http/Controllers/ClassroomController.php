<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $classrooms = Classroom::all();
        return view('classroom', [
            'title' => 'Data Classroom',
            'classrooms' => $classrooms
        ]);
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
=======
        $classroom = Classroom::all();
        return view('classroom',['title' => 'Daftar Kelas', 'classrooms' => $classroom]);
    }

    public function store(Request $request)
    {

    }

    public function show(Classroom $classroom)
    {

    }

    public function update(Request $request, Classroom $classroom)
    {

    }

    public function destroy(Classroom $classroom)
    {

    }
}
>>>>>>> 391d12ebfdc4015d2cbd7c1633a9434ce6f05612
