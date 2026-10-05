<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::query();

        if ($request->filled('q')) {
            $query->where('judul', 'like', '%' . $request->q . '%')
                  ->orWhere('ringkasan', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $beritas = $query->latest('tanggal')->paginate(4)->withQueryString();
        $kategoriList = ['Olahraga', 'Pendidikan', 'Kesehatan', 'potensi'];

        return view('berita.index', compact('beritas', 'kategoriList'));
    }

    public function create()
    {
        $kategoriList = ['Olahraga', 'Pendidikan', 'Kesehatan', 'potensi'];
        return view('berita.create', compact('kategoriList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'ringkasan' => 'required',
            'konten' => 'required',
        ]);

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'ringkasan' => $request->ringkasan,
            'konten' => $request->konten,
            'gambar' => 'berita1.png',
            'tags' => ['desa', 'jalatrang'],
            'views' => 0,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $berita->increment('views');

        return view('berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategoriList = ['Olahraga', 'Pendidikan', 'Kesehatan', 'potensi'];

        return view('berita.edit', compact('berita', 'kategoriList'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'ringkasan' => 'required',
            'konten' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'ringkasan' => $request->ringkasan,
            'konten' => $request->konten,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}