<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $fillable = ['user_id', 'id_paket', 'permintaan_nama_domain', 'deskripsi_kebutuhan', 'status_pesanan', 'tanggal_pesanan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paketJasa()
    {
        return $this->belongsTo(PaketJasa::class, 'id_paket', 'id_paket_jasa');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pesanan', 'id_pesanan');
    }

    public function proyek()
    {
        return $this->hasOne(Proyek::class, 'id_pesanan', 'id_pesanan');
    }
}
