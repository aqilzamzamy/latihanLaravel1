<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subject = Subject::all();
        $title = 'pelajaran';
        return view('subject', ['title' => $title, 'subject' => $subject]);
    }
}
