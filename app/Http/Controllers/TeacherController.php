<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::all();
        $title = 'guru';
        return view('teacher', ['title' => $title, 'teacher' => $teacher]);
    }
}
