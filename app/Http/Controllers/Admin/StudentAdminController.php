<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        $students =  Student::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('classroom_id', 'like', "%{$search}%")
                ->orWhere('alamat', 'like', "%{$search}%")
                ->orWhere('birthday', 'like', "%{$search}%")
                ->orWhere('gender', 'like', "%{$search}%");
        })->paginate(10);

        return view('students.index', compact('students', 'search'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('students.create', compact('classrooms'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'classroom_id' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit(Student $student)
    {
        $classrooms = Classroom::all();
        return view('students.edit', compact('student', 'classrooms'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id, //berfungsi untuk mengabaikan (exclude) email milik siswa yang sedang diedit
            'classroom_id' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
