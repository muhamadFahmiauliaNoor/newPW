@extends('layouts.app')

@section('title', 'Fasilitas Kampus')

@section('content')
<div class="bg-green-500 p-12 rounded-lg shadow-lg">
    <h1 class="text-5xl font-extrabold text-white text-center">Fasilitas</h1>
</div>

<div class="mt-12 bg-green-100 p-12 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Fasilitas yang Tersedia</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($facilities as $facility)
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl">
            <!-- Menampilkan gambar -->
            <img src="{{ asset($facility->image) }}" alt="{{ $facility->name }}" class="w-full h-40 object-cover rounded mb-4">
            <h3 class="text-xl font-semibold text-green-700">{{ $facility->name }}</h3>
            <p class="mt-2 text-green-600">{{ Str::limit($facility->description, 100) }}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection
