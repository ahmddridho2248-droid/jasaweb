<div>
    <!-- Hero Section -->
    <div class="bg-pine text-white py-20 px-6 sm:px-12 lg:px-24">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-sage">Sistem Informasi Jasa Pembuatan Website</h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8">
                Solusi profesional dan andal untuk membangun kehadiran digital bisnis Anda. 
                Pilih paket yang sesuai, dan biarkan tim ahli kami mewujudkan website impian Anda.
            </p>
            <a href="#form-pemesanan" class="inline-block bg-emerald hover:bg-[#2d6a4f] text-white font-semibold py-3 px-8 rounded-lg transition duration-300 shadow-lg">
                Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto py-16 px-6 sm:px-12">
        
        <!-- Pricing Cards Section -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-pine mb-4">Pilihan Paket Kami</h2>
                <p class="text-gray-600">Pilih layanan yang paling sesuai dengan kebutuhan bisnis Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($paketJasa as $paket)
                    <div 
                        wire:click="selectPaket({{ $paket->id_paket_jasa }})"
                        class="cursor-pointer rounded-2xl p-8 border-2 transition-all duration-300 {{ $id_paket == $paket->id_paket_jasa ? 'border-emerald bg-sage/10 shadow-xl scale-105' : 'border-gray-200 hover:border-sage hover:shadow-lg bg-white' }}"
                    >
                        <h3 class="text-2xl font-bold text-pine mb-2">{{ $paket->nama_paket }}</h3>
                        <p class="text-emerald text-xl font-semibold mb-4">Rp {{ number_format($paket->harga, 0, ',', '.') }}</p>
                        <p class="text-charcoal mb-6 text-sm">{{ $paket->deskripsi_paket }}</p>
                        <div class="text-sm font-medium text-gray-500 mb-6">
                            ⏱ Estimasi: {{ $paket->estimasi_hari }} Hari
                        </div>
                        <button class="w-full py-2 rounded-lg font-medium transition {{ $id_paket == $paket->id_paket_jasa ? 'bg-emerald text-white' : 'bg-gray-100 text-charcoal hover:bg-sage hover:text-pine' }}">
                            {{ $id_paket == $paket->id_paket_jasa ? 'Terpilih' : 'Pilih Paket' }}
                        </button>
                    </div>
                @endforeach
            </div>
            @error('id_paket')
                <p class="text-red-500 text-center mt-4 font-medium">⚠️ Silakan pilih paket terlebih dahulu.</p>
            @enderror
        </div>

        <!-- Booking Form Section -->
        <div id="form-pemesanan" class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <div class="bg-pine py-6 px-8">
                <h2 class="text-2xl font-bold text-sage">Formulir Pemesanan</h2>
                <p class="text-gray-200 text-sm mt-1">Lengkapi data di bawah ini untuk memulai proyek Anda.</p>
            </div>
            
            <div class="p-8">
                @if($successMessage)
                    <div class="bg-sage/30 border border-emerald text-pine px-4 py-3 rounded-lg mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-emerald" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="font-medium">{{ $successMessage }}</span>
                    </div>
                @endif

                <form wire:submit.prevent="submit" class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-charcoal mb-2">Nama Klien / Perusahaan</label>
                        <input type="text" wire:model.defer="nama_klien" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald focus:border-emerald outline-none transition" placeholder="Masukkan nama Anda">
                        @error('nama_klien') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-charcoal mb-2">Permintaan Nama Domain (Opsional)</label>
                        <input type="text" wire:model.defer="permintaan_nama_domain" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald focus:border-emerald outline-none transition" placeholder="contoh: www.bisnissaya.com">
                        @error('permintaan_nama_domain') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-charcoal mb-2">Deskripsi Kebutuhan</label>
                        <textarea wire:model.defer="deskripsi_kebutuhan" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald focus:border-emerald outline-none transition" placeholder="Ceritakan fitur atau kebutuhan spesifik website Anda..."></textarea>
                        @error('deskripsi_kebutuhan') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full flex items-center justify-center bg-pine hover:bg-[#112d1b] text-white font-bold py-3 px-4 rounded-lg transition duration-300 shadow-md disabled:opacity-70 disabled:cursor-not-allowed">
                            <span wire:loading.remove>Kirim Pemesanan</span>
                            <span wire:loading class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Memproses...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-charcoal text-white py-8 text-center mt-12">
        <p class="text-gray-400 text-sm">© {{ date('Y') }} JasaWeb Professional. All rights reserved.</p>
    </footer>
</div>
