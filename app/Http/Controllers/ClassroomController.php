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
}
