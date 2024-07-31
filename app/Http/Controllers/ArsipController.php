<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\PenerimaBantuan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArsipController extends Controller
{
    

public function arsipIndex()
{
    $arsipPenerimaBantuans = Arsip::all();
    return view('pageadmin.arsip.index', compact('arsipPenerimaBantuans'));
}

public function arsipkan($id)
{
    $penerima = PenerimaBantuan::with(['masyarakat', 'bantuansosial'])->findOrFail($id);

    Arsip::create([
        'id_masyarakat' => $penerima->id_masyarakat,
        'id_bantuansosial' => $penerima->id_bantuansosial,
        'nama' => $penerima->masyarakat->nama,
        'nik' => $penerima->masyarakat->nik,
        'no_kk' => $penerima->masyarakat->no_kk,
        'alamat' => $penerima->masyarakat->alamat,
        'nomor_telepon' => $penerima->masyarakat->nomor_telepon,
        'tanggal_lahir' => $penerima->masyarakat->tanggal_lahir,
        'jenis_kelamin' => $penerima->masyarakat->jenis_kelamin,
        'status_ekonomi' => $penerima->masyarakat->status_ekonomi,
        'foto_ktp' => $penerima->masyarakat->foto_ktp,
        'foto_kk' => $penerima->masyarakat->foto_kk,
        'jenis_bantuan' => $penerima->bantuansosial->jenis_bantuan,
        'tanggal_penyaluran' => $penerima->bantuansosial->tanggal_penyaluran,
        'jumlah_bantuan' => $penerima->bantuansosial->jumlah_bantuan,
        'sumber_dana' => $penerima->bantuansosial->sumber_dana,
        'syarat_penerima' => $penerima->bantuansosial->syarat_penerima,
        'tanggal_penerimaan' => $penerima->tanggal_penerimaan,
        'status_verifikasi' => $penerima->status_verifikasi,
    ]);

    $penerima->delete();

    // return redirect()->route('penerima_bantuan.index')->with('success', 'Data berhasil diarsipkan');
    Alert::success('Success', 'Data berhasil diarsipkan');
    return redirect()->route('penerima_bantuan.index');
}


public function keluarkan($id)
{
    $arsip = Arsip::findOrFail($id);

    PenerimaBantuan::create([
        'id_masyarakat' => $arsip->id_masyarakat,
        'id_bantuansosial' => $arsip->id_bantuansosial,
        'tanggal_penerimaan' => $arsip->tanggal_penerimaan,
        'status_verifikasi' => $arsip->status_verifikasi,
    ]);

    $arsip->delete();

    // return redirect()->route('arsip_penerima_bantuan.index')->with('success', 'Data berhasil dikembalikan');
    Alert::success('Success', 'Data berhasil dikembalikan');
        return redirect()->route('arsip_penerima_bantuan.index');
}

public function detail($id)
{
    $arsip = Arsip::findOrFail($id);
    return view('pageadmin.arsip.detail', compact('arsip'));
}
public function print($id)
{
    $arsip = Arsip::findOrFail($id);
    return view('pageadmin.arsip.print', compact('arsip'));
}


}