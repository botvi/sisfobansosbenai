<?php

namespace App\Http\Controllers;

use App\Models\BantuanSosial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BantuanSosialController extends Controller
{
    public function index()
    {
        $bantuanSosials = BantuanSosial::all();
        return view('pageadmin.bantuansosial.index', compact('bantuanSosials'));
    }

    public function create()
    {
        return view('pageadmin.bantuansosial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_bantuan' => 'required|string|max:255',
            'tanggal_penyaluran' => 'required|date',
            'jumlah_bantuan' => 'required|integer',
            'sumber_dana' => 'required|string|max:255',
            'syarat_penerima' => 'required|string|max:255',
        ]);

        BantuanSosial::create($request->all());
        Alert::success('Berhasil', 'Data Bantuan Sosial berhasil ditambahkan.');
        return redirect()->route('bantuan_sosial.index');
    }

    public function edit($id)
    {
        $bantuanSosial = BantuanSosial::findOrFail($id);
        return view('pageadmin.bantuansosial.edit', compact('bantuanSosial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_bantuan' => 'required|string|max:255',
            'tanggal_penyaluran' => 'required|date',
            'jumlah_bantuan' => 'required|integer',
            'sumber_dana' => 'required|string|max:255',
            'syarat_penerima' => 'required|string|max:255',
        ]);

        $bantuanSosial = BantuanSosial::findOrFail($id);
        $bantuanSosial->update($request->all());
        Alert::success('Berhasil', 'Data Bantuan Sosial berhasil diperbarui.');
        return redirect()->route('bantuan_sosial.index');
    }

    // DETAIL YANG DI PENERIMA BANSOS
    public function show($id)
    {
        $bansos = BantuanSosial::findOrFail($id);
        return view('pageadmin.penerimabantuan.showbansos', compact('bansos'));
    }
    // DETAIL YANG DI PENERIMA BANSOS

    public function destroy($id)
    {
        $bantuanSosial = BantuanSosial::findOrFail($id);
        $bantuanSosial->delete();
        Alert::success('Berhasil', 'Data Bantuan Sosial berhasil dihapus.');
        return redirect()->route('bantuan_sosial.index');
    }
}
