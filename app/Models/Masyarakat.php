<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'no_kk',
        'alamat',
        'nomor_telepon',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_ekonomi',
        'foto_ktp',
        'foto_kk',
    ];

    // Masyarakat.php
public function penerimaBantuan()
{
    return $this->hasMany(PenerimaBantuan::class, 'id_masyarakat');
}



}
