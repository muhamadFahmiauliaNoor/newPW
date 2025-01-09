<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Web Kampus</a>
            <div>
                <ul class="flex space-x-4">
                    <li><a href="/mahasiswa" class="hover:text-blue-300">Mahasiswa</a></li>
                    <li><a href="/dosen" class="hover:text-blue-300">Dosen</a></li>
                    <li><a href="/mata-kuliah" class="hover:text-blue-300">Mata Kuliah</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-6">
        <div class="bg-white p-6 rounded shadow">
            @yield('content')
        </div>
    </div>
</body>
</html>
