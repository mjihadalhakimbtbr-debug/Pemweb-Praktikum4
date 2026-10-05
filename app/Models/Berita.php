<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'tanggal',
        'ringkasan',
        'konten',
        'gambar',
        'tags',
        'views',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'tags' => 'array',
    ];
}