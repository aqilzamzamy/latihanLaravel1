<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class ApiStudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return response()->json([
            'status' => true,
            'message' => 'Data siswa',
            'data' => $students
        ]);
    }
}
