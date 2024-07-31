<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('pageadmin.informasi.index', compact('informasi'));
    }

    public function create()
    {
        return view('pageadmin.informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_informasi' => 'required|string|max:255',
            'isi_informasi' => 'required|string',
        ]);

        Informasi::create($request->all());

        Alert::success('Berhasil', 'Informasi telah berhasil ditambahkan.');

        return redirect()->route('informasi.index');
    }

    public function edit(Informasi $informasi)
    {
        return view('pageadmin.informasi.edit', compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul_informasi' => 'required|string|max:255',
            'isi_informasi' => 'required|string',
        ]);

        $informasi->update($request->all());

        Alert::success('Berhasil', 'Informasi telah berhasil diperbarui.');

        return redirect()->route('informasi.index');
    }

    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        Alert::success('Berhasil', 'Informasi telah berhasil dihapus.');

        return redirect()->route('informasi.index');
    }
}
