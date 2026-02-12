<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianAdminController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        $guardians = Guardian::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('job', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%");
        })->paginate(5);

        return view('admin.guardian.index', compact('guardians', 'search'));
    }

    public function create()
    {
        return view('admin.guardian.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'job'   => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email',
        ]);

        Guardian::create($validated);

        return redirect()->route('admin.guardians.index')
            ->with('success', 'Data wali berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $guardian = Guardian::findOrFail($id);
        return view('admin.guardian.edit', compact('guardian'));
    }

    public function update(Request $request, $id)
    {
        $guardian = Guardian::findOrFail($id);

        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'job'   => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email,' . $guardian->id,
        ]);

        $guardian->update($validated);

        return redirect()->route('admin.guardians.index')
            ->with('success', 'Data wali berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $guardian = Guardian::findOrFail($id);
        $guardian->delete();

        return redirect()->route('admin.guardians.index')
            ->with('success', 'Data wali berhasil dihapus!');
    }
}
