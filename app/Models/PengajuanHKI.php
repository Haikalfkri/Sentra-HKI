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
        'iduser_profile','id_users','tgl_pengajuan','judul_hki','deskripsi','jenis_hki',
    ];

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class, 'iduser_profile');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}