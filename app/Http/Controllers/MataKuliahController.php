<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Method untuk menampilkan daftar Mata Kuliah
    public function index()
    {
        $mataKuliah = MataKuliah::all();
        return response()->json($mataKuliah, 200);
    }

    // Method untuk menampilkan detail Mata Kuliah berdasarkan ID
    public function show($id)
    {
        $mataKuliah = MataKuliah::find($id);
        if ($mataKuliah) {
            return response()->json($mataKuliah, 200);
        } else {
            return response()->json(['message' => 'Mata Kuliah tidak ditemukan'], 404);
        }
    }

    // Method untuk menyimpan Mata Kuliah baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:10',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $mataKuliah = new MataKuliah();
        $mataKuliah->nama = $request->nama;
        $mataKuliah->kode = $request->kode;
        $mataKuliah->sks = $request->sks;
        $mataKuliah->save();

        return response()->json(['message' => 'Mata Kuliah berhasil ditambahkan', 'data' => $mataKuliah], 201);
    }

    // Method untuk mengupdate Mata Kuliah berdasarkan ID
    public function update(Request $request, $id)
    {
        $mataKuliah = MataKuliah::find($id);
        if ($mataKuliah) {
            $request->validate([
                'nama' => 'required|string|max:255',
                'kode' => 'required|string|max:10',
                'sks' => 'required|integer',
                // Tambahkan validasi lainnya jika perlu
            ]);

            $mataKuliah->nama = $request->nama;
            $mataKuliah->kode = $request->kode;
            $mataKuliah->sks = $request->sks;
            $mataKuliah->save();

            return response()->json(['message' => 'Mata Kuliah berhasil diperbarui', 'data' => $mataKuliah], 200);
        } else {
            return response()->json(['message' => 'Mata Kuliah tidak ditemukan'], 404);
        }
    }

    // Method untuk menghapus Mata Kuliah berdasarkan ID
    public function destroy($id)
    {
        $mataKuliah = MataKuliah::find($id);
        if ($mataKuliah) {
            $mataKuliah->delete();
            return response()->json(['message' => 'Mata Kuliah berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'Mata Kuliah tidak ditemukan'], 404);
        }
    }
}
