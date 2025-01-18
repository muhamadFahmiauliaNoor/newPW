@extends('layouts.app')

@section('title', 'Sejarah STTC')

@section('content')
<div class="bg-green-500 p-12 rounded-lg shadow-lg">
    <h1 class="text-5xl font-extrabold text-white text-center">Sejarah Sekolah Tinggi Teknologi Cipasung (STTC)</h1>
</div>

<div class="mt-12 bg-green-100 p-12 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">{{ $about->title }}</h2>
    <!-- Menampilkan gambar dari database -->
    <img src="{{ asset($about->image) }}" alt="{{ $about->title }}" class="w-full h-96 object-cover rounded-lg mb-6 shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
    <div class="text-green-700 leading-relaxed text-lg bg-green-50 p-6 rounded-lg shadow-md">
        <p>{{ $about->content }}</p>
    </div>
</div>
@endsection
