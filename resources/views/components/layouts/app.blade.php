<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Jasa Pembuatan Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased font-sans bg-gray-50 text-charcoal flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <nav class="bg-pine text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold tracking-wider text-sage">Jasa<span class="text-white">Web</span></a>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="/" class="hover:text-sage transition duration-200 {{ request()->is('/') ? 'text-sage font-semibold' : 'text-gray-200' }}">Beranda</a>
                    <a href="/about" class="hover:text-sage transition duration-200 {{ request()->is('about') ? 'text-sage font-semibold' : 'text-gray-200' }}">Tentang Kami</a>
                    <a href="/order" class="bg-emerald hover:bg-[#2d6a4f] px-5 py-2 rounded-full font-medium transition duration-300 shadow">Pesan Sekarang</a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button class="text-gray-200 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-charcoal text-gray-300 py-10 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold text-white mb-4">JasaWeb</h3>
                <p class="text-sm">Membantu bisnis Anda tumbuh di era digital dengan solusi website profesional, cepat, dan handal.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-white mb-4">Tautan</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-sage transition">Beranda</a></li>
                    <li><a href="/about" class="hover:text-sage transition">Tentang Kami</a></li>
                    <li><a href="/order" class="hover:text-sage transition">Pemesanan</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold text-white mb-4">Hubungi Kami</h3>
                <p class="text-sm">Email: halo@jasaweb.com<br>Telp: 0812-3456-7890<br>Jakarta, Indonesia</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pt-8 border-t border-gray-700 text-sm text-center">
            &copy; {{ date('Y') }} JasaWeb Professional. All rights reserved.
        </div>
    </footer>

    @livewireScripts
</body>
</html>
