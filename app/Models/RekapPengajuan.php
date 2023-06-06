<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapPengajuan extends Model
{
    use HasFactory;

    protected $table = 'rekap_pengajuan';
    protected $primaryKey = 'id_rekappengajuan';
    protected $fillable = [
        'id_pengajuanhki',
        'id_users',
        'id_berkas',
        'status',
        'keterangan'
    ];

    public static function booted()
    {
        static::saving(function ($model) {
            $validStatus = ['Belum Lengkap', 'Lengkap', 'Diproses'];
            if (!in_array($model->status, $validStatus)) {
                throw new \Exception('Status is not valid.');
            }
        });
    }
    
    public function pengajuanHki()
    {
        return $this->belongsTo(PengajuanHki::class, 'id_pengajuanhki');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    
    public function berkas()
    {
        return $this->belongsTo(Berkas::class, 'id_berkas');
    }

}
