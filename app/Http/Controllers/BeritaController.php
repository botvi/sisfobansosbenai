<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('pageadmin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('pageadmin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('thumbnail'), $imageName);
            $data['image'] = 'thumbnail/' . $imageName;
        }

        Berita::create($data);

        Alert::success('Success', 'Berita berhasil ditambahkan.');

        return redirect()->route('beritas.index');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('pageadmin.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('pageadmin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($berita->image && file_exists(public_path($berita->image))) {
                unlink(public_path($berita->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('thumbnail'), $imageName);
            $data['image'] = 'thumbnail/' . $imageName;
        }

        $berita->update($data);

        Alert::success('Success', 'Berita berhasil diperbarui.');

        return redirect()->route('beritas.index');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->image && file_exists(public_path($berita->image))) {
            unlink(public_path($berita->image));
        }
        $berita->delete();

        Alert::success('Success', 'Berita berhasil dihapus.');

        return redirect()->route('beritas.index');
    }
}
