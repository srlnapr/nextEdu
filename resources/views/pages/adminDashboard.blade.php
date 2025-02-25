<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
 
    <link rel="icon" href="{{ asset(path: 'assets/logo.png') }}" sizes="128x128" type="image/png">    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-purple-700 text-white shadow-lg px-6 py-8 rounded-r-3xl flex flex-col items-center">
            <!-- Logo -->
            <div class="mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="nextEdu Logo" class="w-32 h-auto">
            </div>

            <h2 class="text-2xl font-bold flex items-center">
                <span class="text-white">next</span><span class="text-yellow-300">Edu</span>
            </h2>

            <nav class="mt-6 w-full">
                <a href="/adminDashboard" class="block px-4 py-3 rounded-md text-lg font-medium hover:bg-purple-600">Dashboard</a>
                <a href="/pertanyaans" class="block px-4 py-3 rounded-md text-lg font-medium hover:bg-purple-600">Settings Pertanyaan</a>
                <a href="/artikels" class="block px-4 py-3 rounded-md text-lg font-medium hover:bg-purple-600">Settings Artikel</a>
                <a href="/rules" class="block px-4 py-3 rounded-md text-lg font-medium hover:bg-purple-600">Settings Rules</a>
                <a href="/users" class="block px-4 py-3 rounded-md text-lg font-medium hover:bg-purple-600">Settings User</a>
            </nav>
        </aside>

        <!-- Konten Utama -->
        <main class="w-4/5 p-8">
            <!-- Kotak putih sebagai container utama -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Overview</h1>
                    <input type="text" placeholder="Search" class="px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                </div>

                <section class="grid grid-cols-4 gap-4">
                    <div class="bg-white p-6 rounded-md shadow-md text-center">
                        <h2 class="text-4xl font-bold text-purple-700">{{ count($pertanyaansInfo ?? []) }}</h2>
                        <p class="text-lg text-gray-600">Jumlah Pertanyaan</p>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-md text-center">
                        <h2 class="text-4xl font-bold text-purple-700">{{ count($jurusansInfo ?? []) - 1 }}</h2>
                        <p class="text-lg text-gray-600">Total List Jurusan</p>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-md text-center">
                        <h2 class="text-4xl font-bold text-purple-700">{{ count($artikelsInfo ?? []) }}</h2>
                        <p class="text-lg text-gray-600">Total Artikel Masuk</p>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-md text-center">
                        <h2 class="text-4xl font-bold text-purple-700">{{ count($usersInfo ?? []) }}</h2>
                        <p class="text-lg text-gray-600">New Customer</p>
                    </div>
                </section>

                <div class="mt-8">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
