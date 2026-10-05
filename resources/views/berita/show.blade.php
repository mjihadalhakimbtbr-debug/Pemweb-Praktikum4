@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden p-6 md:p-8">
        
        <!-- Header Info (Kategori, Tanggal Lengkap, Penulis, Jumlah Dibaca) -->
        <div class="flex flex-wrap items-center space-x-3 text-sm text-gray-600 mb-4">
            <span class="bg-custom-navy text-white text-xs px-2.5 py-1 rounded font-semibold">{{ $berita->kategori }}</span>
            <span><i class="fa-regular fa-calendar mr-1"></i> {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('l, d F Y') }}</span>
            <span><i class="fa-regular fa-user mr-1"></i> Dadi Haryadi</span>
            <span><i class="fa-regular fa-eye mr-1"></i> {{ $berita->views }} dibaca</span>
        </div>

        <!-- Judul Berita Utama -->
        <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 leading-tight">
            {{ $berita->judul }}
        </h1>

        <!-- Gambar Berita Utama -->
        <div class="w-full bg-gray-200 rounded-lg overflow-hidden mb-6">
            <img src="{{ asset($berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-auto object-cover">
        </div>

        <!-- Isi Konten Berita -->
        <div class="text-base md:text-lg leading-relaxed text-gray-800 space-y-4 mb-8 whitespace-pre-line">
            {{ $berita->konten }}
        </div>

        <!-- Tag Hashtag -->
        @if($berita->tags)
            <div class="flex flex-wrap gap-2 pt-4 border-t border-gray-100 mb-6">
                @foreach($berita->tags as $tag)
                    <span class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full">#{{ $tag }}</span>
                @endforeach
            </div>
        @endif

        <!-- Tombol Kembali -->
        <div class="pt-4 border-t border-gray-100">
            <a href="{{ route('berita.index') }}" class="inline-flex items-center space-x-2 text-sm text-blue-600 hover:text-blue-800 font-semibold">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Kembali ke Daftar Berita</span>
            </a>
        </div>

    </div>
</div>
@endsection