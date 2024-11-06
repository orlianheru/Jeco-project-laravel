<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Holiday</title>
    @vite('resources/css/app.css')
    </head>
<body class="bg-white text-center">
    <!-- Navbar -->
    <header class="bg-black text-white py-4">
        <nav class="flex justify-center space-x-6">
            <a href="#" class="text-lg hover:text-gray-400">Home</a>
            <a href="{{ route('skill') }}" class="text-lg hover:text-gray-400">Skill</a>
            <a href="{{ route('about') }}" class="text-lg hover:text-gray-400">About</a>
            <a href="{{ route('login') }}" class="text-lg hover:text-gray-400">Login</a>
        </nav>
    </header>

    <!-- Bagian Utama dengan Gambar -->
    <main class="flex flex-col md:flex-row justify-between items-center mx-auto max-w-6xl mt-12 space-y-6 md:space-y-0 md:space-x-12">
        <!-- Teks Utama -->
        <div class="text-left md:w-1/2">
            <h1 class="text-4xl font-bold mb-4">Portofolio</h1>
            <p class="text-lg mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, illo nihil earum est atque consequatur perspiciatis unde ipsam veritatis amet aperiam dolor consequuntur, minus suscipit eveniet quos distinctio repellat. Veritatis!</p>
        </div>

        <!-- Gambar -->
        <div class="md:w-1/2">
            <img src="assets/image/kevin.jpg" alt="Kota di Malam Hari" class="rounded-lg shadow-lg">
        </div>
    </main>
</body>
</html>
