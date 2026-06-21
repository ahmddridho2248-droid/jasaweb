<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PaketJasa;

class Home extends Component
{
    public function orderPaket($id)
    {
        return redirect()->to('/order?package=' . $id);
    }

    public function render()
    {
        $paketJasa = PaketJasa::all();
        return view('livewire.home', compact('paketJasa'))->layout('components.layouts.app');
    }
}
