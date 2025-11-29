<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;

class AdminStudentController extends Controller
{
    // Menampilkan daftar student + modal tambah
    public function index()
    {
        $students = Student::with('classroom')->orderBy('name')->paginate(10); // Gunakan paginate() dengan jumlah item per halaman, misalnya 10
        $classrooms = Classroom::all();

        return view('admin.student.index', [
            'title' => 'Data Students',
            'students' => $students,
            'classrooms' => $classrooms
        ]);
    }

    // Simpan data student baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string',
            'classroom_id' => 'required|exists:classrooms,id', // Harus ada di tabel classrooms
        ]);
        
        // 2. Simpan Data ke Database
        Student::create($validated);

        // 3. Redirect kembali ke halaman sebelumnya (index) dengan pesan sukses
        return redirect()->route('admin.students.index')->with('success', 'Data Siswa berhasil ditambahkan!');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.students.index')->with('success', 'Data berhasil dihapus !');
    } 
}