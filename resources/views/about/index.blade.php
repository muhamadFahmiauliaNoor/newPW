@extends('layouts.app')

@section('title', 'Tentang Kampus')

@section('content')
<div class="bg-green-300 p-12 rounded-lg shadow-lg">
    <h1 class="text-4xl font-extrabold text-white text-center">Tentang Kampus</h1>
</div>

<div class="mt-12 bg-green-100 p-12 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">{{ $about->title }}</h2>
    <p class="text-green-600">{{ $about->content }}</p>
</div>
@endsection
