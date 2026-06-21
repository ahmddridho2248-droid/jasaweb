<x-layouts.app>
    @php
        $whatsappNumber = '6281234567890'; // Ganti dengan nomor WhatsApp admin yang asli
        $text = "Halo JasaWeb, saya ingin konfirmasi pesanan saya.\n\n";
        $text .= "*ID Pesanan:* " . $pesanan->id_pesanan . "\n";
        $text .= "*Nama Klien:* " . $pesanan->nama_klien . "\n";
        $text .= "*Paket:* " . ($pesanan->paketJasa ? $pesanan->paketJasa->nama_paket : 'Custom') . "\n";
        if ($pesanan->permintaan_nama_domain) {
            $text .= "*Domain:* " . $pesanan->permintaan_nama_domain . "\n";
        }
        $text .= "\nMohon info selanjutnya untuk proses pembayaran. Terima kasih!";
        
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($text);
    @endphp

    <div class="py-20 px-6 sm:px-12 bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="max-w-2xl w-full bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100 text-center">
            
            <div class="bg-pine py-10 px-8 text-white relative">
                <div class="w-20 h-20 bg-emerald rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg shadow-emerald/40">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h1 class="text-3xl font-bold mb-2">Pesanan Diterima!</h1>
                <p class="text-sage text-lg">Terima kasih, {{ $pesanan->nama_klien }}. Kami telah mencatat pesanan Anda.</p>
            </div>
            
            <div class="p-10">
                <p class="text-gray-600 mb-8 text-lg">
                    Satu langkah lagi! Agar tim kami dapat segera memproses dan berdiskusi lebih lanjut mengenai proyek Anda, silakan lakukan konfirmasi pemesanan melalui WhatsApp.
                </p>

                <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 mb-8 text-left inline-block w-full max-w-md">
                    <div class="flex justify-between border-b border-gray-200 pb-3 mb-3">
                        <span class="text-gray-500 font-medium">ID Pesanan</span>
                        <span class="font-bold text-pine">#{{ $pesanan->id_pesanan }}</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-3 mb-3">
                        <span class="text-gray-500 font-medium">Paket Dipilih</span>
                        <span class="font-bold text-pine">{{ $pesanan->paketJasa ? $pesanan->paketJasa->nama_paket : '-' }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 font-medium">Status</span>
                        <span class="font-bold text-yellow-600">Menunggu Konfirmasi</span>
                    </div>
                </div>

                <a href="{{ $whatsappUrl }}" target="_blank" class="w-full flex items-center justify-center text-white font-bold py-4 px-8 rounded-xl transition duration-300 shadow-lg text-lg mb-4 hover:opacity-90" style="background-color: #25D366; box-shadow: 0 10px 15px -3px rgba(37, 211, 102, 0.3);">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 0C5.385 0 0 5.384 0 12.032c0 2.65.69 5.23 2.008 7.502L.002 24l4.636-1.218A11.97 11.97 0 0012.031 24c6.643 0 12.03-5.385 12.03-12.032C24.062 5.384 18.674 0 12.031 0zm0 22.012c-2.25 0-4.456-.605-6.395-1.75l-.46-.273-3.447.904.922-3.361-.3-.478C1.22 15.11 1.95 12.01 1.95 12.01c0-5.558 4.52-10.078 10.081-10.078 5.56 0 10.08 4.52 10.08 10.078 0 5.558-4.52 10.08-10.08 10.08zm5.526-7.551c-.303-.151-1.794-.886-2.072-.988-.278-.101-.482-.151-.685.151-.202.303-.784.988-.962 1.19-.178.201-.357.227-.66.075-2.083-1.045-3.344-2.28-4.665-4.528-.19-.323.218-.3.8-.9.088-.088.139-.201.076-.328-.063-.127-.66-1.591-.903-2.181-.237-.577-.478-.499-.66-.508-.178-.008-.383-.01-.586-.01-.202 0-.532.076-.811.379-.278.303-1.063 1.037-1.063 2.529s1.088 2.933 1.24 3.136c.151.202 2.138 3.262 5.178 4.573 1.83.791 2.541.854 3.473.716.716-.105 2.062-.843 2.352-1.656.29-.812.29-1.508.203-1.656-.088-.148-.291-.25-.594-.401z"/>
                    </svg>
                    Konfirmasi via WhatsApp
                </a>
                
                <a href="/" class="text-gray-500 hover:text-pine transition text-sm font-medium">Nanti saja, kembali ke Beranda</a>
            </div>
        </div>
    </div>
</x-layouts.app>
