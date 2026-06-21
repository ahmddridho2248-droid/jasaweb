<div class="py-16 px-6 sm:px-12 bg-gray-50 min-h-screen">
    <div class="max-w-3xl mx-auto">
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-pine mb-4">Formulir Pemesanan</h1>
            <p class="text-gray-600">Lengkapi data berikut, dan mari kita mulai proyek luar biasa Anda.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <div class="bg-pine py-6 px-8 border-b-4 border-emerald">
                <h2 class="text-2xl font-bold text-sage">Detail Pemesanan</h2>
            </div>
            
            <div class="p-8">
                @if($successMessage)
                    <div class="bg-sage/20 border-l-4 border-emerald text-pine px-6 py-4 rounded mb-8 flex items-center shadow-sm">
                        <svg class="w-8 h-8 mr-4 text-emerald" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <p class="font-bold text-lg">Sukses!</p>
                            <p class="text-sm">{{ $successMessage }}</p>
                        </div>
                    </div>
                @endif

                <form wire:submit.prevent="submit" class="space-y-6">
                    <!-- Paket Selection -->
                    <div>
                        <label class="block text-sm font-semibold text-charcoal mb-2">Pilih Paket Layanan</label>
                        <select wire:model="id_paket" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald focus:border-emerald outline-none transition bg-white text-gray-700">
                            <option value="">-- Pilih Paket --</option>
                            @foreach($paketJasa as $paket)
                                <option value="{{ $paket->id_paket_jasa }}">{{ $paket->nama_paket }} - Rp {{ number_format($paket->harga, 0, ',', '.') }}</option>
                            @endforeach
                        </select>
                        @error('id_paket') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Nama Klien -->
                    <div>
                        <label class="block text-sm font-semibold text-charcoal mb-2">Nama Klien / Perusahaan</label>
                        <input type="text" wire:model.defer="nama_klien" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald focus:border-emerald outline-none transition" placeholder="Masukkan nama Anda atau perusahaan">
                        @error('nama_klien') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Domain -->
                    <div>
                        <label class="block text-sm font-semibold text-charcoal mb-2">Permintaan Nama Domain (Opsional)</label>
                        <input type="text" wire:model.defer="permintaan_nama_domain" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald focus:border-emerald outline-none transition" placeholder="contoh: www.bisnissaya.com">
                        @error('permintaan_nama_domain') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div>
                        <label class="block text-sm font-semibold text-charcoal mb-2">Deskripsi Kebutuhan</label>
                        <textarea wire:model.defer="deskripsi_kebutuhan" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald focus:border-emerald outline-none transition" placeholder="Ceritakan fitur atau kebutuhan spesifik website Anda secara detail..."></textarea>
                        @error('deskripsi_kebutuhan') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <button type="submit" class="w-full flex items-center justify-center bg-pine hover:bg-[#112d1b] text-white font-bold py-4 px-6 rounded-xl transition duration-300 shadow-lg disabled:opacity-70 disabled:cursor-not-allowed">
                            <span wire:loading.remove>Kirim Pesanan Anda</span>
                            <span wire:loading class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sedang Memproses...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <a href="/" class="text-emerald hover:text-pine font-medium transition flex items-center justify-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
