@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary hover:bg-blue-600 text-black px-4 py-2 rounded transition duration-300 ease-in-out mb-4">Tambah Mahasiswa</a>
    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-300 mt-3 bg-white rounded-lg shadow-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Nama</th>
                    <th class="border border-gray-300 px-4 py-2">NIM</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Jurusan</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $mahasiswa->nama }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $mahasiswa->nim }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $mahasiswa->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $mahasiswa->jurusan }}</td>
                        <td class="border border-gray-300 px-4 py-2 flex space-x-2 justify-center">
                            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning hover:bg-yellow-600 text-black px-4 py-2 rounded transition duration-300 ease-in-out">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger hover:bg-red-600 text-black px-4 py-2 rounded transition duration-300 ease-in-out">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
