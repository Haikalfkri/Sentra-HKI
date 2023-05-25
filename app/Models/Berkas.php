<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $table = 'berkas';
    protected $primaryKey = 'id_berkas';
    protected $fillable = [
        'id_pengajuanhki',
        'nama_berkas',
        'file_path',
    ];

    public function pengajuanHKI()
    {
        return $this->belongsTo(PengajuanHKI::class, 'id_pengajuanhki', 'id_pengajuanhki');
    }
}
