<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    protected $table = 'arsips';

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
        'jenis_bantuan',
        'tanggal_penyaluran',
        'jumlah_bantuan',
        'sumber_dana',
        'syarat_penerima',
        'tanggal_penerimaan',
        'status_verifikasi',
        'id_masyarakat',
        'id_bantuansosial',
    ];
}
