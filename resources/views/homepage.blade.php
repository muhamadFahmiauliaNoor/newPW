@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="bg-blue-500 text-white py-20 text-center">
    <h1 class="text-5xl font-bold">Selamat Datang di Web Kampus</h1>
    <p class="mt-4 text-lg">Tempat terbaik untuk mengelola data mahasiswa, dosen, dan mata kuliah.</p>
    <a href="{{ route('mahasiswa.index') }}" class="bg-white text-blue-500 px-6 py-3 mt-6 inline-block rounded shadow hover:bg-gray-100 transition duration-300">
        Lihat Data Mahasiswa
    </a>
</div>

<div class="container mx-auto mt-10">
    <h2 class="text-3xl font-bold text-center">Fitur Utama</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="text-xl font-bold">Data Mahasiswa</h3>
            <p class="mt-2">Kelola data mahasiswa dengan mudah.</p>
        </div>
        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="text-xl font-bold">Data Dosen</h3>
            <p class="mt-2">Atur data dosen dengan efisien.</p>
        </div>
        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="text-xl font-bold">Data Mata Kuliah</h3>
            <p class="mt-2">Kelola mata kuliah secara praktis.</p>
        </div>
    </div>
</div>
@endsection
