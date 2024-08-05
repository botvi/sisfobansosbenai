<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\PenerimaBantuan;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('pageweb.index', compact('informasi'));
    }
    
    public function show($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('pageweb.show', compact('informasi'));
    }
    public function caridata()
    {
        return view('pageweb.caridata');
    }



    public function search(Request $request)
    {
        $name = $request->input('name');
        $nik = $request->input('nik');

        $query = PenerimaBantuan::query();

        if ($name) {
            $query->whereHas('masyarakat', function ($q) use ($name) {
                $q->where('nama', 'like', '%' . $name . '%');
            });
        }

        if ($nik) {
            $query->whereHas('masyarakat', function ($q) use ($nik) {
                $q->where('nik', $nik);
            });
        }

        $penerimaBantuan = $query->get();

        return view('pageweb.pencarian', compact('penerimaBantuan'));
    }

    public function tentang(){
        return view('pageweb.tentang');
    }
}
