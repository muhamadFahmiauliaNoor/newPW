<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Method untuk menampilkan daftar Dosen
    public function index()
    {
        $dosen = Dosen::all();
        return response()->json($dosen, 200);
    }

    // Method untuk menampilkan detail Dosen berdasarkan ID
    public function show($id)
    {
        $dosen = Dosen::find($id);
        if ($dosen) {
            return response()->json($dosen, 200);
        } else {
            return response()->json(['message' => 'Dosen tidak ditemukan'], 404);
        }
    }

    // Method untuk menyimpan Dosen baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nidn' => 'required|string|max:20',
            'email' => 'required|email|unique:dosens',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $dosen = new Dosen();
        $dosen->nama = $request->nama;
        $dosen->nidn = $request->nidn;
        $dosen->email = $request->email;
        $dosen->save();

        return response()->json(['message' => 'Dosen berhasil ditambahkan', 'data' => $dosen], 201);
    }

    // Method untuk mengupdate Dosen berdasarkan ID
    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        if ($dosen) {
            $request->validate([
                'nama' => 'required|string|max:255',
                'nip' => 'required|string|max:20',
                // Tambahkan validasi lainnya jika perlu
            ]);

            $dosen->nama = $request->nama;
            $dosen->nidn = $request->nidn;
            $dosen->email = $request->email;
            $dosen->save();

            return response()->json(['message' => 'Dosen berhasil diperbarui', 'data' => $dosen], 200);
        } else {
            return response()->json(['message' => 'Dosen tidak ditemukan'], 404);
        }
    }

    // Method untuk menghapus Dosen berdasarkan ID
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        if ($dosen) {
            $dosen->delete();
            return response()->json(['message' => 'Dosen berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'Dosen tidak ditemukan'], 404);
        }
    }
}
