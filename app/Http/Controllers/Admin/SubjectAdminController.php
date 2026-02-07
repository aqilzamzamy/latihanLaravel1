<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectAdminController extends Controller
{
   public function index(Request $request){
        $search = $request->search;

        $subjects = Subject::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        })->paginate(10);

        return view('admin.subject.index', compact('subjects', 'search'));
   }

    public function create()
    {
        return view('admin.subject.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Subject::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('admin.subject.index')
            ->with('success', 'Subject berhasil ditambahkan');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('admin.subject.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $subject = Subject::findOrFail($id);

        $subject->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('admin.subject.index')
            ->with('success', 'Subject berhasil diperbarui');
    }
}