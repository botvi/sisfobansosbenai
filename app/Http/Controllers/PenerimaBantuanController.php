<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\PenerimaBantuan;
use App\Models\Masyarakat;
use App\Models\BantuanSosial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenerimaBantuanController extends Controller
{
    public function index()
    {
        $penerimaBantuans = PenerimaBantuan::with(['masyarakat', 'bantuansosial'])->get();
        return view('pageadmin.penerimabantuan.index', compact('penerimaBantuans'));
    }


    public function create()
    {
        $masyarakats = Masyarakat::all();
        $bantuansosials = BantuanSosial::all();
        return view('pageadmin.penerimabantuan.create', compact('masyarakats', 'bantuansosials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_masyarakat' => 'required',
            'id_bantuansosial' => 'required',
            'tanggal_penerimaan' => 'required|date',
            'status_verifikasi' => 'required',
        ]);

        PenerimaBantuan::create($request->all());

        Alert::success('Success', 'Data Penerima Bantuan berhasil ditambahkan');
        return redirect()->route('penerima_bantuan.index');
    }

    public function edit($id)
    {
        $penerimaBantuan = PenerimaBantuan::findOrFail($id);
        $masyarakats = Masyarakat::all();
        $bantuansosials = BantuanSosial::all();
        return view('pageadmin.penerimabantuan.edit', compact('penerimaBantuan', 'masyarakats', 'bantuansosials'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_masyarakat' => 'required',
            'id_bantuansosial' => 'required',
            'tanggal_penerimaan' => 'required|date',
            'status_verifikasi' => 'required',
        ]);

        $penerimaBantuan = PenerimaBantuan::findOrFail($id);
        $penerimaBantuan->update($request->all());

        Alert::success('Success', 'Data Penerima Bantuan berhasil diupdate');
        return redirect()->route('penerima_bantuan.index');
    }

    public function show($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        return view('pageadmin.penerimabantuan.show', compact('masyarakat'));
    }

    public function print($id)
    {
        $penerima = PenerimaBantuan::with(['masyarakat', 'bantuansosial'])->findOrFail($id);

        return view('pageadmin.penerimabantuan.print', compact('penerima'));
    }
    

    public function destroy($id)
    {
        $penerimaBantuan = PenerimaBantuan::findOrFail($id);
        $penerimaBantuan->delete();

        Alert::success('Success', 'Data Penerima Bantuan berhasil dihapus');
        return redirect()->route('penerima_bantuan.index');
    }


}
