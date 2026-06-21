<div>
    <!-- Hero Section -->
    <div class="bg-pine text-white py-24 px-6 sm:px-12 lg:px-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-sage via-transparent to-transparent"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                Bangun <span class="text-sage">Website Impian</span> Anda Bersama JasaWeb
            </h1>
            <p class="text-xl text-gray-200 mb-10 max-w-2xl mx-auto">
                Solusi profesional, responsif, dan elegan untuk bisnis modern. Percayakan identitas digital Anda pada ahlinya.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#packages" class="bg-emerald hover:bg-[#2d6a4f] text-white font-bold py-4 px-8 rounded-full transition duration-300 shadow-xl shadow-emerald/30">
                    Lihat Paket
                </a>
                <a href="/about" class="bg-white/10 hover:bg-white/20 text-white font-bold py-4 px-8 rounded-full transition duration-300 backdrop-blur-sm border border-white/20">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-12">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-pine mb-4">Mengapa Memilih JasaWeb?</h2>
                <div class="w-24 h-1 bg-emerald mx-auto rounded"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-xl transition duration-300 text-center group">
                    <div class="w-16 h-16 bg-sage/30 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                        <span class="text-3xl">🚀</span>
                    </div>
                    <h3 class="text-xl font-bold text-charcoal mb-3">Cepat & Responsif</h3>
                    <p class="text-gray-600">Website dioptimalkan untuk performa maksimal di semua perangkat, dari desktop hingga smartphone.</p>
                </div>
                <!-- Feature 2 -->
                <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-xl transition duration-300 text-center group">
                    <div class="w-16 h-16 bg-sage/30 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                        <span class="text-3xl">🎨</span>
                    </div>
                    <h3 class="text-xl font-bold text-charcoal mb-3">Desain Elegan</h3>
                    <p class="text-gray-600">Pendekatan desain UI/UX yang estetik, modern, dan disesuaikan dengan identitas brand Anda.</p>
                </div>
                <!-- Feature 3 -->
                <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-xl transition duration-300 text-center group">
                    <div class="w-16 h-16 bg-sage/30 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                        <span class="text-3xl">🔒</span>
                    </div>
                    <h3 class="text-xl font-bold text-charcoal mb-3">Aman & Terpercaya</h3>
                    <p class="text-gray-600">Infrastruktur aman dengan perlindungan data terbaik, siap mendukung transaksi bisnis Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="packages" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 sm:px-12">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-pine mb-4">Pilihan Paket Kami</h2>
                <div class="w-24 h-1 bg-emerald mx-auto rounded mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan berbagai pilihan paket yang dirancang khusus untuk memenuhi skala dan kebutuhan bisnis Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($paketJasa as $paket)
                    <div class="bg-white rounded-3xl p-8 border border-gray-200 hover:border-emerald hover:shadow-2xl transition-all duration-300 flex flex-col h-full transform hover:-translate-y-2">
                        <h3 class="text-2xl font-bold text-pine mb-2">{{ $paket->nama_paket }}</h3>
                        <div class="text-emerald text-3xl font-extrabold mb-6">Rp {{ number_format($paket->harga, 0, ',', '.') }}</div>
                        <p class="text-gray-600 mb-8 flex-grow">{{ $paket->deskripsi_paket }}</p>
                        
                        <div class="flex items-center text-sm font-medium text-gray-500 mb-8 bg-gray-50 p-3 rounded-lg">
                            <svg class="w-5 h-5 mr-2 text-emerald" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Estimasi Pengerjaan: {{ $paket->estimasi_hari }} Hari
                        </div>
                        
                        <button wire:click="orderPaket({{ $paket->id_paket_jasa }})" class="w-full bg-pine hover:bg-emerald text-white py-3 rounded-xl font-bold transition duration-300 shadow-md">
                            Pilih Paket Ini
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
