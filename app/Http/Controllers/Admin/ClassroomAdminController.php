<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomAdminController extends Controller
{
    public function index(Request $request){
   
        $search = $request->search;

        $classroom = Classroom::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%");
        })->paginate(5);

        return view('classroom.index', compact('classroom', 'search'));
    }   
    

    public function create()
    {
        return view('classroom.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Classroom::create([
            'name' => $request->name
        ]);

        return redirect()->route('classroom.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('classroom.edit', compact('classroom'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $classroom = Classroom::findOrFail($id);

        $classroom->update([
            'name' => $request->name
        ]);

        return redirect()->route('classroom.index')->with('success', 'Data berhasil diupdate');
    }
}
