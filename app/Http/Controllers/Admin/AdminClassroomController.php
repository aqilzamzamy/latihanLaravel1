<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    // Menggantikan adminIndex()
    public function index()
    {
        $classrooms = Classroom::orderBy('name')->paginate(10); 

        return view('admin.classroom.index', [ 
            'title' => 'Data Classroom',
            'classrooms' => $classrooms
        ]);
    }
    
    public function store(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classrooms,name',
        ]);
        
        Classroom::create($validated);

        return redirect()->route('admin.classroom.index')->with('success', 'Data Classroom berhasil ditambahkan!');
    }
    
    public function destroy(Classroom $classroom) // Gunakan Route Model Binding
    {
       try {
            $classroom->delete();
            return redirect()->route('admin.classroom.index')->with('success', 'Data Classroom berhasil dihapus!');
        } catch (\Exception $e) {
            // Jika ada error (misalnya, foreign key constraint), kembalikan pesan error
            return redirect()->route('admin.classroom.index')->with('error', 'Gagal menghapus! Kelas masih memiliki siswa terdaftar.');
        }
    }
    
}