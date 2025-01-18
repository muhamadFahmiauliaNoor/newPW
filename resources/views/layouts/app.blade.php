<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sekolah Tinggi Teknologi Cipasung')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">
    <!-- Navigation Bar -->
    <nav class="bg-white fixed top-0 left-0 w-full shadow z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo and Title -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('storage/logo.png') }}" alt="Web Kampus Logo" class="h-8 w-8">
                <a href="#" class="text-gray-800 text-xl font-semibold">Sekolah Tinggi Teknologi Cipasung</a>
            </div>
            <!-- Navigation Links -->
            <ul class="flex space-x-6">
                <li><a href="{{ url('/ukms') }}" class="text-gray-800 hover:text-green-600">UKM</a></li>
                <li><a href="{{ url('/facilities') }}" class="text-gray-800 hover:text-green-600">Fasilitas</a></li>
                <li><a href="{{ url('/about') }}" class="text-gray-800 hover:text-green-600">Tentang</a></li>
                <li><a href="{{ url('/registrations/create') }}" class="text-gray-800 hover:text-green-600">Daftar</a></li>
                <li><a href="{{ route('home') }}" class="text-gray-800 hover:text-green-600">Beranda</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <!-- Tambahkan padding atas agar konten tidak tertutup oleh navbar -->
    <div class="container mx-auto pt-20">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-6 mt-12">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <p class="text-sm">© {{ date('Y') }} Sekolah Tinggi Teknologi Cipasung. All rights reserved.</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-white hover:text-green-300">Privacy Policy</a>
                <a href="#" class="text-white hover:text-green-300">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
