@extends('layouts.app')

@section('title', 'Beranda - Sekolah Tinggi Teknologi Cipasung')

@section('content')
<div class="text-center mt-12">
    <h1 class="text-4xl font-bold text-green-600 mb-6">Selamat Datang di STT Cipasung</h1>
    <p class="text-gray-700 text-lg mb-4">
        Selamat datang di situs resmi Sekolah Tinggi Teknologi Cipasung. Kami hadir untuk mendukung pendidikan terbaik.
    </p>
    
    <!-- Video Section -->
    <div class="bg-green-100 p-8 rounded-lg shadow-lg mt-6">
    <div class="bg-white p-6 rounded-lg shadow-lg overflow-hidden">
        <video controls class="w-full h-100 object-cover rounded-lg hover:scale-105 transition-transform duration-300">
            <source src="{{ asset('storage/intro-sttc.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="mt-4">
            <p class="text-green-600">Tonton video ini untuk mengetahui lebih banyak tentang STT Cipasung.</p>
            </div>
        </div>
    </div>


    
    <a href="{{ url('/about') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 mt-6">
        Pelajari Tentang Kami
    </a>
</div>



    <!-- Section UKM -->
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

<div class="mt-12 p-12 rounded-lg shadow-lg">
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
