<!-- resources/views/ukms/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detail UKM')

@section('content')
    <div class="bg-green-300 p-12 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-white text-center mb-4">Detail UKM</h1>
    </div>

    <div class="mt-12 bg-green-100 p-12 rounded-lg shadow-lg max-w-lg mx-auto">
        <h2 class="text-2xl font-bold mb-4">{{ $ukm->name }}</h2>
        <p>{{ $ukm->description }}</p>
        <img src="{{ asset($ukm->image) }}" alt="{{ $ukm->name }}" class="mt-4 w-full rounded-lg">
    </div>
@endsection
