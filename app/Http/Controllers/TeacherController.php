<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        return view('teacher', [
            'title' => 'Teacher',
            'teachers' => $teachers
        ]);
    }

    public function adminIndex()
    {
        $teacher = Teacher::all();

        return view('admin.teacher', [ 
            'title' => 'Data teacher (Admin)',
            'teachers' => $teachers
        ]);
    }
}
