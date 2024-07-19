<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $education = Education::orderBy('created_at', 'DESC')->get();
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun_mulai' => 'required|integer',
            'tahun_selesai' => 'nullable|integer',
            'sekolah' => 'required|string',
            'lokasi' => 'required|string',
            'status_kelulusan' => 'required|string',
            'jurusan' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        Education::create($request->all());

        return redirect()->route('education.index')
            ->with('success', 'Education created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $education = Education::findOrFail($id);
        return view('education.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $education = Education::findOrFail($id);
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'tahun_mulai' => 'required|integer',
            'tahun_selesai' => 'nullable|integer',
            'sekolah' => 'required|string',
            'lokasi' => 'required|string',
            'status_kelulusan' => 'required|string',
            'jurusan' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        $education = Education::findOrFail($id);
        $education->update($request->all());

        return redirect()->route('education.index')
            ->with('success', 'Education updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('education.index')
            ->with('success', 'Education deleted successfully.');
    }
}
