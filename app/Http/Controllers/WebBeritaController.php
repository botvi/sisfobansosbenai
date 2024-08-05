<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class WebBeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('pageweb.berita', compact('beritas'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('pageweb.detailberita', compact('berita'));
    }
}
