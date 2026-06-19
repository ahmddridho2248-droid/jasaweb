<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;
    
    protected $table = 'fitur';
    protected $primaryKey = 'id_fitur';
    public $timestamps = false;
    protected $fillable = ['nama_fitur', 'deskripsi_fitur'];

    public function paketJasa()
    {
        return $this->belongsToMany(PaketJasa::class, 'paket_fitur', 'id_fitur', 'id_paket_jasa');
    }
}
