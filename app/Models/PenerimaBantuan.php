<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaBantuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_masyarakat',
        'id_bantuansosial',
        'tanggal_penerimaan',
        'status_verifikasi',

    ];
    // PenerimaBantuan.php
public function masyarakat()
{
    return $this->belongsTo(Masyarakat::class, 'id_masyarakat');
}

public function bantuansosial()
{
    return $this->belongsTo(BantuanSosial::class, 'id_bantuansosial');
}

}
