<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBantuan;
use App\Models\BantuanSosial;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $statusVerifikasi = $request->input('status_verifikasi');
        $jenisBantuan = $request->input('jenis_bantuan');

        $query = PenerimaBantuan::query();

        if ($statusVerifikasi) {
            $query->where('status_verifikasi', $statusVerifikasi);
        }

        if ($jenisBantuan) {
            $query->whereHas('bantuansosial', function ($q) use ($jenisBantuan) {
                $q->where('jenis_bantuan', $jenisBantuan);
            });
        }

        $penerimaBantuans = $query->with('masyarakat', 'bantuansosial')->get();

        $jenisBantuans = BantuanSosial::pluck('jenis_bantuan', 'id');

        return view('pageadmin.laporan.index', compact('penerimaBantuans', 'jenisBantuans', 'statusVerifikasi', 'jenisBantuan'));
    }
}
