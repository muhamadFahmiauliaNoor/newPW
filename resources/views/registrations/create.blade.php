@extends('layouts.app')

@section('title', 'Form Pendaftaran')

@section('content')
    <!-- Header Section -->
    <div class="bg-green-500 p-12 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-white text-center mb-4">Form Pendaftaran</h1>
        <p class="text-white text-center text-lg">Silakan isi form di bawah ini untuk mendaftar.</p>
    </div>

    <!-- Form Section -->
    <div class="mt-12 bg-green-50 p-8 md:p-12 rounded-lg shadow-lg max-w-lg mx-auto">
        <form action="{{ url('/registrations') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Nama Lengkap -->
            <div class="mb-5">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" 
                    placeholder="Masukkan nama lengkap Anda" 
                    required>
            </div>

            <!-- Email -->
            <div class="mb-5">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" 
                    placeholder="Masukkan email Anda" 
                    required>
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-5">
                <label for="phone" class="block text-gray-700 font-semibold mb-2">Nomor Telepon</label>
                <input 
                    type="text" 
                    name="phone" 
                    id="phone" 
                    class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" 
                    placeholder="Masukkan nomor telepon Anda" 
                    required>
            </div>

            <!-- Jurusan -->
            <div class="mb-5">
                <label for="course" class="block text-gray-700 font-semibold mb-2">Jurusan</label>
                <input 
                    type="text" 
                    name="course" 
                    id="course" 
                    class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" 
                    placeholder="Masukkan jurusan Anda" 
                    required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="w-full bg-green-500 text-white font-semibold text-lg px-6 py-3 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-300">
                    Daftar
                </button>
            </div>
        </form>
    </div>
@endsection
