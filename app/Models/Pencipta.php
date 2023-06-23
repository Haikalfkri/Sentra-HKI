<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencipta extends Model
{
    protected $table = 'pencipta';
    protected $primaryKey = 'id_pencipta';
    protected $fillable = [
        'email',
        'nik',
        'nama',
        'no_hp',
        'id_pengajuanhki',
    ];

    public function pengajuanHKI()
    {
        return $this->belongsTo(PengajuanHKI::class, 'id_pengajuanhki');
    }
}
