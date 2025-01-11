@extends('layouts.app')

@section('title', 'Form Pendaftaran')

@section('content')
    <div class="bg-green-500 p-12 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-white text-center mb-4">Form Pendaftaran</h1>
    </div>

    <div class="mt-12 bg-green-100 p-12 rounded-lg shadow-lg max-w-lg mx-auto">
        <form action="{{ url('/registrations') }}" method="POST" class="space-y-6">
            @csrf
            <div class="mb-3">
                <label for="name" class="block text-gray-700 font-bold">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-3">
                <label for="email" class="block text-gray-700 font-bold">Email</label>
                <input type="email" name="email" id="email" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="block text-gray-700 font-bold">Nomor Telepon</label>
                <input type="text" name="phone" id="phone" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-3">
                <label for="course" class="block text-gray-700 font-bold">Jurusan</label>
                <input type="text" name="course" id="course" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Daftar</button>
            </div>
        </form>
    </div>
@endsection
