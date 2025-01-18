@extends('layouts.app')

@section('title', 'Unit Kegiatan Mahasiswa')

@section('content')
<div class="bg-green-500 p-12 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-white text-center mb-4">Unit Kegiatan Mahasiswa</h1>
    </div>

<div class="mt-12">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Unit Kegiatan Mahasiswa</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Looping data dari database -->
        @foreach($ukms as $ukm)
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition duration-300">
            <!-- Menampilkan logo dari database -->
            <img src="{{ asset($ukm->image) }}" alt="{{ $ukm->name }}" class="w-full h-100 object-cover rounded mb-4 shadow-lg">
            <h3 class="text-xl font-semibold text-green-700">{{ $ukm->name }}</h3>
            <p class="mt-2 text-green-600">{{ Str::limit($ukm->description, 100) }}</p>
            <a href="{{ $ukm->instagram_url }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">Lihat Lebih</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
