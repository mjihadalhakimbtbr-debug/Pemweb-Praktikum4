@extends('layouts.app')

@section('content')
<div class="bg-custom-hero text-white py-12 px-6 md:px-12">
    <div class="text-sm text-yellow-500 mb-2">
        <a href="#" class="hover:underline">Beranda</a> <span class="text-gray-400 mx-1">/</span> <span class="text-white">Berita</span>
    </div>
    <h1 class="text-4xl md:text-5xl font-extrabold mb-3">Berita & Informasi</h1>
    <p class="text-gray-300 text-lg">Informasi terkini dari Desa Jalatrang</p>
</div>

<div class="max-w-7xl mx-auto px-4 md:px-8 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        
        <!-- Sidebar Filter & Tombol Tambah Berita -->
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                <div class="bg-custom-navy text-white px-5 py-4 flex items-center space-x-2">
                    <i class="fa-solid fa-filter text-base"></i>
                    <h2 class="font-bold text-base">Filter Berita</h2>
                </div>
                <form action="{{ route('berita.index') }}" method="GET" class="p-5 space-y-5">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Kata Kunci</label>
                        <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari berita..." class="w-full text-sm px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Kategori</label>
                        <select name="kategori" class="w-full text-sm px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Semua Kategori</option>
                            @foreach($kategoriList as $kat)
                                <option value="{{ $kat }}" {{ request('kategori') == $kat ? 'selected' : '' }}>{{ ucfirst($kat) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="space-y-3 pt-2">
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 text-sm rounded-lg transition">Cari</button>
                        <a href="{{ route('berita.index') }}" class="block w-full text-center border border-gray-300 text-gray-700 hover:bg-gray-50 py-2.5 text-sm rounded-lg transition">Reset</a>
                    </div>
                </form>
            </div>

            <!-- Tombol Buat Berita Baru (Tepat di Bawah Filter Berita) -->
            <div class="bg-white p-5 rounded-xl shadow-md border border-gray-200">
                <h3 class="font-bold text-sm text-gray-800 mb-2">Kelola Berita</h3>
                <p class="text-xs text-gray-500 mb-4">Tambahkan artikel atau berita acara terbaru desa.</p>
                <a href="{{ route('berita.create') }}" class="w-full inline-flex items-center justify-center space-x-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 text-sm rounded-lg transition shadow-sm">
                    <i class="fa-solid fa-plus"></i>
                    <span>Buat Berita Baru</span>
                </a>
            </div>
        </div>

        <!-- Grid Kartu Berita -->
        <div class="lg:col-span-3">
            @if(session('success'))
                <div class="bg-emerald-100 border border-emerald-400 text-emerald-800 px-4 py-3 rounded-lg mb-6 text-sm flex justify-between items-center">
                    <span>{{ session('success') }}</span>
                    <button onclick="this.parentElement.remove()" class="font-bold">&times;</button>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($beritas as $item)
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col justify-between transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <div>
                            <div class="h-56 bg-gray-200 overflow-hidden relative">
                                <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-3 text-xs text-gray-500 mb-3">
                                    <span class="bg-custom-navy text-white text-xs px-3 py-1 rounded-md font-semibold">{{ $item->kategori }}</span>
                                    <span><i class="fa-regular fa-calendar mr-1"></i> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900 mb-3 leading-snug">
                                    <a href="{{ route('berita.show', $item->slug) }}" class="hover:text-blue-600 transition">{{ $item->judul }}</a>
                                </h3>
                                <p class="text-sm text-gray-600 line-clamp-3 mb-4 leading-relaxed">
                                    {{ $item->ringkasan }}
                                </p>
                                @if($item->tags)
                                    <div class="flex flex-wrap gap-1.5 mb-2">
                                        @foreach($item->tags as $tag)
                                            <span class="text-xs bg-gray-100 text-gray-600 px-2.5 py-1 rounded">#{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Bagian Bawah Kartu: Tombol Edit, Hapus, dan Baca -->
                        <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between text-sm text-gray-500 bg-gray-50/50">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('berita.edit', $item->id) }}" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1.5 rounded text-xs font-semibold shadow-sm transition flex items-center gap-1">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                    
                                    @method('DELETE')
                                    <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white px-3 py-1.5 rounded text-xs font-semibold shadow-sm transition flex items-center gap-1">
                                        <i class="fa-solid fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                            <a href="{{ route('berita.show', $item->slug) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-xs font-semibold shadow-sm transition">Baca &rarr;</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-2 text-center py-12 text-gray-500 text-base bg-white rounded-xl border border-gray-200">
                        Tidak ada berita ditemukan.
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $beritas->links() }}
            </div>
        </div>

    </div>
</div>
@endsection