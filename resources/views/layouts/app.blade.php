<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sekolah Tinggi Teknologi Cipasung')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">
    <nav class="bg-green-400 p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo and Title -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('storage/logo.png') }}" alt="Web Kampus Logo" class="h-8 w-8">
                <a href="#" class="text-white text-xl font-semibold">Sekolah Tinggi Teknologi Cipasung</a>
            </div>
            <!-- Navigation Links -->
            <ul class="flex space-x-6">
                <li><a href="{{ url('/ukms') }}" class="text-white hover:text-green-700">UKM</a></li>
                <li><a href="{{ url('/facilities') }}" class="text-white hover:text-green-700">Fasilitas</a></li>
                <li><a href="{{ url('/about') }}" class="text-white hover:text-green-700">Tentang</a></li>
                <li><a href="{{ url('/registrations/create') }}" class="text-white hover:text-green-700">Daftar</a></li>
                <li><a href="{{ route('home') }}" class="text-white hover:text-green-700">Beranda</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>
