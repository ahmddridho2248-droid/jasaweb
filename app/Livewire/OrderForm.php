<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PaketJasa;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class OrderForm extends Component
{
    public $nama_klien = '';
    public $id_paket = null;
    public $permintaan_nama_domain = '';
    public $deskripsi_kebutuhan = '';
    
    public $successMessage = '';

    protected $queryString = [
        'id_paket' => ['except' => '', 'as' => 'package']
    ];

    public function mount()
    {
        // Parameter 'package' from URL is bound to 'id_paket' via queryString
    }

    protected $rules = [
        'nama_klien' => 'required|string|max:255',
        'id_paket' => 'required|exists:paket_jasa,id_paket_jasa',
        'permintaan_nama_domain' => 'nullable|string|max:255',
        'deskripsi_kebutuhan' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        $pesanan = Pesanan::create([
            'nama_klien' => $this->nama_klien,
            'id_paket' => $this->id_paket,
            'permintaan_nama_domain' => $this->permintaan_nama_domain,
            'deskripsi_kebutuhan' => $this->deskripsi_kebutuhan,
            'status_pesanan' => 'menunggu',
            'tanggal_pesanan' => now(),
        ]);

        return redirect()->route('order.success', ['id' => $pesanan->id_pesanan]);
    }

    public function render()
    {
        $paketJasa = PaketJasa::all();
        return view('livewire.order-form', compact('paketJasa'))->layout('components.layouts.app');
    }
}
