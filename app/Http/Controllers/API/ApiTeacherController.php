<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ApiTeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();

        return response()->json([
            'status' => true,
            'message' => 'Data guru',
            'data' => $teacher
        ]);
    }
}
