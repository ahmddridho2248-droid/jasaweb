<?php

use Illuminate\Support\Facades\Route;

use App\Models\Pesanan;

Route::get('/', \App\Livewire\Home::class);
Route::get('/order', \App\Livewire\OrderForm::class);
Route::get('/order/success/{id}', function ($id) {
    $pesanan = Pesanan::findOrFail($id);
    return view('pages.order-success', compact('pesanan'));
})->name('order.success');

Route::get('/about', function () {
    return view('pages.about');
});
