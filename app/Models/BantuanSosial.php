<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BantuanSosial extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_bantuan',
        'tanggal_penyaluran',
        'jumlah_bantuan',
        'sumber_dana',
        'syarat_penerima',
        // '_token' is typically not a database field, so you might not need to include it here.
    ];

    // BantuanSosial.php
public function penerimaBantuan()
{
    return $this->hasMany(PenerimaBantuan::class, 'id_bantuansosial');
}
}
