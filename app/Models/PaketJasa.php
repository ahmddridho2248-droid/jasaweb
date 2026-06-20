<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketJasa extends Model
{
    use HasFactory;
    
    protected $table = 'paket_jasa';
    protected $primaryKey = 'id_paket_jasa';
    protected $fillable = ['nama_paket', 'deskripsi_paket', 'harga', 'estimasi_hari'];

    public function fitur()
    {
        return $this->belongsToMany(Fitur::class, 'paket_fitur', 'id_paket_jasa', 'id_fitur');
    }

    public function pesanan()
    {
        // Parameter: Related Model, Foreign Key in pesanan table, Local Key in paket_jasa table
        return $this->hasMany(Pesanan::class, 'id_paket', 'id_paket_jasa');
    }
}
