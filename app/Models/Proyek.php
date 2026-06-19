<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    
    protected $table = 'proyek';
    protected $primaryKey = 'id_proyek';
    protected $fillable = ['id_pesanan', 'id_pekerja', 'tautan_repositori', 'deskripsi_progres', 'persentase_progres'];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'id_pesanan', 'id_pesanan');
    }

    public function pekerja()
    {
        return $this->belongsTo(User::class, 'id_pekerja', 'id');
    }
}
