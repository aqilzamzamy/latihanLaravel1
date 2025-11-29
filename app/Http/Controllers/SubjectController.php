<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all(); 
        return view('subject', [
            'title' => 'Subject', 
            'subject' => $subject
        ]);
    }

    public function adminIndex()
    {
        $subject = Subject::all();

        // Mengarah ke resources/views/admin/subject.blade.php
        return view('admin.subject', [ 
            'title' => 'Data mata pelajaran (admin)',
            'subject' => $subject
        ]);
    }
}
