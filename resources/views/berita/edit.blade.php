@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Edit Berita</h2>

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Judul Berita</label>
                <input type="text" name="judul" value="{{ $berita->judul }}" required class="w-full text-sm px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Kategori</label>
                    <select name="kategori" required class="w-full text-sm px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        @foreach($kategoriList as $kat)
                            <option value="{{ $kat }}" {{ $berita->kategori == $kat ? 'selected' : '' }}>{{ ucfirst($kat) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ \Carbon\Carbon::parse($berita->tanggal)->format('Y-m-d') }}" required class="w-full text-sm px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Ringkasan Berita</label>
                <textarea name="ringkasan" rows="3" required class="w-full text-sm px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">{{ $berita->ringkasan }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Isi Konten Lengkap</label>
                <textarea name="konten" rows="6" required class="w-full text-sm px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">{{ $berita->konten }}</textarea>
            </div>

            <div class="flex justify-between items-center pt-4 border-t">
                <a href="{{ route('berita.index') }}" class="text-sm text-gray-600 hover:underline">Batal</a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold px-6 py-2 rounded-lg text-sm transition">Perbarui Berita</button>
            </div>
        </form>
    </div>
</div>
@endsection