<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ApiTeacherAdminController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->search;

        $teachers = Teacher::with('subject')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%")
                    ->orWhereHas('subject', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    });
            })
            ->paginate(4);

        return response()->json([
            'success' => true,
            'message' => 'Data guru berhasil diambil',
            'data' => $teachers
        ], 200);
    }

    public function create()
    {
        $subjects = Subject::all();

        return response()->json([
            'success' => true,
            'message' => 'Data mata pelajaran',
            'data' => $subjects
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $teacher = Teacher::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Guru berhasil ditambahkan',
            'data' => $teacher
        ], 201);
    }

    public function edit($id)
    {
        $teacher = Teacher::with('subject')->findOrFail($id);
        $subjects = Subject::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail guru',
            'teacher' => $teacher,
            'subjects' => $subjects
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data guru berhasil diperbarui',
            'data' => $teacher
        ], 200);
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return response()->json([
            'success' => true,
            'message' => 'Guru berhasil dihapus'
        ], 200);
    }
}
