<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel as Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:10|unique:mahasiswas',
            'email' => 'required|email|unique:mahasiswas',
            'jurusan' => 'required|string|max:100',
        ]);

        Mahasiswa::create($validatedData);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = (int) $id;
        $mahasiswa = MahasiswaModel::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = (int) $id;
        $mahasiswa = \App\Models\MahasiswaModel::findOrFail($id);  // Menggunakan findOrFail untuk mendapatkan satu data berdasarkan ID
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|numeric|unique:mahasiswa_models,nim,' . $id,
            'email' => 'required|email|unique:mahasiswa_models,email,' . $id,
            'jurusan' => 'required|string|max:255',
        ]);

        $mahasiswa = \App\Models\MahasiswaModel::findOrFail($id);
        $mahasiswa->update($request->only(['nama', 'nim', 'email', 'jurusan']));


         return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diupdate.');
     }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = (int) $id;
        $mahasiswa = \App\Models\MahasiswaModel::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
