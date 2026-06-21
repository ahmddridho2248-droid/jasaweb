<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PaketJasa;
use App\Models\Pesanan;

class LandingPage extends Component
{
    public $nama_klien = '';
    public $id_paket = null;
    public $permintaan_nama_domain = '';
    public $deskripsi_kebutuhan = '';
    
    public $successMessage = '';

    protected $rules = [
        'nama_klien' => 'required|string|max:255',
        'id_paket' => 'required|exists:paket_jasa,id_paket_jasa',
        'permintaan_nama_domain' => 'nullable|string|max:255',
        'deskripsi_kebutuhan' => 'required|string',
    ];

    public function selectPaket($id)
    {
        $this->id_paket = $id;
    }

    public function submit()
    {
        $this->validate();

        Pesanan::create([
            'nama_klien' => $this->nama_klien,
            'id_paket' => $this->id_paket,
            'permintaan_nama_domain' => $this->permintaan_nama_domain,
            'deskripsi_kebutuhan' => $this->deskripsi_kebutuhan,
            'status_pesanan' => 'menunggu',
            'tanggal_pesanan' => now(),
        ]);

        $this->reset(['nama_klien', 'id_paket', 'permintaan_nama_domain', 'deskripsi_kebutuhan']);
        $this->successMessage = 'Pesanan Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.';
    }

    public function render()
    {
        $paketJasa = PaketJasa::all();
        return view('livewire.landing-page', compact('paketJasa'))->layout('components.layouts.app');
    }
}
