# Pembuatan Landing Page JasaWeb

Tujuan: Membuat struktur UI dan kodingan halaman Landing Page (Sistem Informasi Jasa Pembuatan Website) dengan Tailwind CSS dan Laravel, lengkap dengan integrasi form pesanan.

## User Review Required

- **Routing**: Saat ini route `/` (halaman utama) biasanya menampilkan halaman welcome default Laravel. Rencananya saya akan me-replace route `/` ini untuk merender halaman Landing Page yang baru. Apakah ini sesuai?
- **Penggunaan Livewire**: Karena project ini sudah menggunakan Filament (yang berbasis Livewire), saya akan menggunakan **Livewire** untuk form handler dan interaksi Pricing Cards. Ini sangat efisien untuk "bind state" tanpa harus reload halaman.

## Proposed Changes

### Configuration & Styling
#### [MODIFY] [tailwind.config.js](file:///c:/xampp/htdocs/uaspemweb/jasaweb/tailwind.config.js) / [app.css](file:///c:/xampp/htdocs/uaspemweb/jasaweb/resources/css/app.css)
- Menambahkan konfigurasi warna (Organic Green Theme):
  - `pine`: `#1A4329`
  - `emerald`: `#40916C`
  - `sage`: `#B7E4C7`
  - `charcoal`: `#212529`

### Logic & Routing
#### [NEW] [LandingPage.php](file:///c:/xampp/htdocs/uaspemweb/jasaweb/app/Livewire/LandingPage.php)
- Membuat komponen Livewire untuk meng-handle state form:
  - `$nama_klien`
  - `$id_paket` (di-bind langsung dari Pricing Cards)
  - `$permintaan_nama_domain`
  - `$deskripsi_kebutuhan`
- Menyediakan logic submit() untuk menampung ke tabel `pesanan` dan memberi status sukses.

#### [MODIFY] [web.php](file:///c:/xampp/htdocs/uaspemweb/jasaweb/routes/web.php)
- Mengubah route `/` agar merender komponen `LandingPage`.

### Views / UI
#### [NEW] [landing-page.blade.php](file:///c:/xampp/htdocs/uaspemweb/jasaweb/resources/views/livewire/landing-page.blade.php)
- **Hero Section**: Headline profesional dengan warna dominan Pine Green.
- **Paket & Harga (Pricing Cards)**: Menampilkan list data `PaketJasa` dari database. Klik pada card akan mengubah state `$id_paket` dan memberikan *highlight* visual (border / shadow).
- **Form Pemesanan**:
  - Terkoneksi dengan state model Livewire.
  - Terdapat validasi input.
  - State Loading (`wire:loading`) pada tombol submit untuk UX yang mulus.
  - Alert Success/Error setelah form dikirim.

## Verification Plan

### Manual Verification
- Menjalankan `npm run dev` dan mengecek desain di browser (localhost).
- Mencoba mengisi form dan mengklik tombol paket.
- Memastikan pesanan baru masuk ke database/tabel `pesanan` setelah klik submit.
