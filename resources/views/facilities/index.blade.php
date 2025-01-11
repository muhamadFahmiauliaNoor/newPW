@extends('layouts.app')

@section('title', 'Fasilitas Kampus')

@section('content')
<div class="bg-green-300 p-12 rounded-lg shadow-lg">
    <h1 class="text-4xl font-extrabold text-white text-center">Fasilitas Kampus</h1>
</div>

<div class="mt-12 bg-green-100 p-12 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Fasilitas yang Tersedia</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($facilities as $facility)
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl">
            <img src="{{ asset('storage') }}" alt="{{ $facility->name }}" class="w-full h-40 object-cover rounded mb-4">
            <h3 class="text-xl font-semibold text-green-700">{{ $facility->name }}</h3>
            <p class="mt-2 text-green-600">{{ Str::limit($facility->description, 100) }}</p>
            <a href="{{ route('facilities.show', $facility->id) }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Lihat Lebih</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
