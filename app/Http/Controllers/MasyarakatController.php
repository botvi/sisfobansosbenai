<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\BantuanSosial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakats = Masyarakat::all();
        return view('pageadmin.masyarakat.index', compact('masyarakats'));
    }

    public function create()
    {
        $bantuanSosials = BantuanSosial::all();
        return view('pageadmin.masyarakat.create', compact('bantuanSosials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255|unique:masyarakats',
            'no_kk' => 'required|string|max:255|unique:masyarakats',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:255',
            'status_ekonomi' => 'required|string|max:255',
            'foto_ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_kk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('foto_ktp')) {
            $ktpPath = 'images/foto_ktp';
            if (!file_exists(public_path($ktpPath))) {
                mkdir(public_path($ktpPath), 0777, true);
            }
            $ktpName = time() . '_ktp.' . $request->foto_ktp->extension();
            $request->foto_ktp->move(public_path($ktpPath), $ktpName);
            $input['foto_ktp'] = $ktpPath . '/' . $ktpName;
        }

        if ($request->hasFile('foto_kk')) {
            $kkPath = 'images/foto_kk';
            if (!file_exists(public_path($kkPath))) {
                mkdir(public_path($kkPath), 0777, true);
            }
            $kkName = time() . '_kk.' . $request->foto_kk->extension();
            $request->foto_kk->move(public_path($kkPath), $kkName);
            $input['foto_kk'] = $kkPath . '/' . $kkName;
        }

        Masyarakat::create($input);

        Alert::success('Berhasil', 'Data masyarakat berhasil ditambahkan');

        return redirect()->route('masyarakat.index');
    }

    public function edit($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        $bantuanSosials = BantuanSosial::all();
        return view('pageadmin.masyarakat.edit', compact('masyarakat', 'bantuanSosials'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255|unique:masyarakats,nik,' . $id,
            'no_kk' => 'required|string|max:255|unique:masyarakats,no_kk,' . $id,
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:255',
            'status_ekonomi' => 'required|string|max:255',
            'foto_ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_kk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $masyarakat = Masyarakat::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('foto_ktp')) {
            $ktpPath = 'images/foto_ktp';
            if (!file_exists(public_path($ktpPath))) {
                mkdir(public_path($ktpPath), 0777, true);
            }
            $ktpName = time() . '_ktp.' . $request->foto_ktp->extension();
            $request->foto_ktp->move(public_path($ktpPath), $ktpName);
            $input['foto_ktp'] = $ktpPath . '/' . $ktpName;
        } else {
            $input['foto_ktp'] = $masyarakat->foto_ktp;
        }

        if ($request->hasFile('foto_kk')) {
            $kkPath = 'images/foto_kk';
            if (!file_exists(public_path($kkPath))) {
                mkdir(public_path($kkPath), 0777, true);
            }
            $kkName = time() . '_kk.' . $request->foto_kk->extension();
            $request->foto_kk->move(public_path($kkPath), $kkName);
            $input['foto_kk'] = $kkPath . '/' . $kkName;
        } else {
            $input['foto_kk'] = $masyarakat->foto_kk;
        }

        $masyarakat->update($input);

        Alert::success('Berhasil', 'Data masyarakat berhasil diubah');
        return redirect()->route('masyarakat.index');
    }
    

    public function destroy($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        $masyarakat->delete();

        Alert::success('Berhasil', 'Data masyarakat berhasil dihapus');

        return redirect()->route('masyarakat.index');
    }
}
