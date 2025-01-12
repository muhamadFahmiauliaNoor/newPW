@extends('layouts.app')

@section('title', 'Tentang Kampus')

@section('content')
<div class="bg-green-300 p-12 rounded-lg shadow-lg">
    <h1 class="text-4xl font-extrabold text-white text-center">Tentang Kampus</h1>
</div>

<div class="mt-12 bg-green-100 p-12 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">{{ $about->title }}</h2>
    <!-- Menampilkan gambar dari database -->
    <img src="{{ asset($about->image) }}" alt="{{ $about->title }}" class="w-full h-80 object-cover rounded-lg mb-6 shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
    <p class="text-green-600 leading-relaxed text-base bg-green-50 p-4 rounded-lg shadow-md">
    {{ $about->content }}
</p>

</div>
@endsection
