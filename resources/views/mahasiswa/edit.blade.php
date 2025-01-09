@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Data Mahasiswa</h1>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="max-w-3xl bg-white p-8 rounded-lg shadow-lg">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                    required>
                @error('nama')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM:</label>
                <input type="text" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                    required>
                @error('nim')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $mahasiswa->email) }}"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                    required>
                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                    required>
                @error('jurusan')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary hover:bg-blue-600 text-black px-4 py-2 rounded transition duration-300 ease-in-out">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
