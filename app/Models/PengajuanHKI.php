<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanHKI extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_hki';
    protected $primaryKey = 'id_pengajuanhki';
    protected $fillable = [
        'iduser_profile','id_users','tgl_pengajuan','judul_hki','deskripsi','jenis_hki','jenis_ciptaan','subjenis_ciptaan'
    ];

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class, 'iduser_profile');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    
    public function berkas()
    {
        return $this->hasOne(Berkas::class, 'id_pengajuanhki', 'id_pengajuanhki');
    }
    
    public function rekapPengajuan()
    {
        return $this->hasOne(RekapPengajuan::class, 'id_pengajuanhki', 'id_pengajuanhki');
    }
}
