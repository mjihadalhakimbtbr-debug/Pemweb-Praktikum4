<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $berita1_judul = 'Malam Penuh Gengsi Dimulai! 16 Tim Berebut Mahkota Juara di Ajang CVC Cup 2026 Desa Jalatrang';

        $berita1_konten = 'JalatrangNews; Himpunan Pemuda-Pemudi Dusun Cikandung yang tergabung dalam Cikandung Voli Ball Club (CVC) resmi menyelenggarakan ajang olahraga bertajuk CVC Cup 2026. Turnamen bola voli putra antar-dusun se-Kecamatan Cipaku ini resmi dibuka pada Sabtu, 26 September 2026, dan dijadwalkan berlangsung hingga 10 Oktober 2026.

Pembukaan turnamen yang dipusatkan di Lapangan Bola Voli CVC, Dusun Cikandung, Desa Jalatrang, ini dibuka secara langsung oleh Kepala Desa Jalatrang, Dadi Haryadi.

Dalam sambutannya, Dadi Haryadi mengapresiasi tinggi inisiatif para pemuda Dusun Cikandung yang sukses menggerakkan kegiatan positif berskala kecamatan ini. "Ajang ini bukan hanya sekadar mencari siapa yang menang atau kalah, tetapi menjadi momentum penting untuk mempererat silaturahmi, sportivitas, dan menggali bibit-bibit atlet bola voli potensial di wilayah Kecamatan Cipaku," ujar Dadi.

Panggung Pembuktian 16 Tim Terbaik

Sebanyak 16 tim terbaik dari berbagai dusun di Kecamatan Cipaku dipastikan siap saling sikut demi merebutkan mahkota juara. Atmosfer kompetisi dijamin bakal membara setiap malam mulai pukul 19.30 WIB hingga partai puncak pada 10 Oktober 2026.

Tak tanggung-tanggung, jalannya pertandingan tiap malam dijamin makin hidup dan bergemuruh berkat kehadiran reporter andalan Desa Jalatrang, Ali Jawa, yang memandu jalannya laga dengan gaya komentarnya yang khas dan memompa adrenalin penonton.

Dihadiri Tokoh Penting hingga Pengusaha Lokal

Malam pembukaan CVC Cup 2026 kian terasa istimewa dengan hadirnya jajaran penting pemangku wilayah. Tampak memadati arena: Bhabinkamtibmas Desa Jalatrang, tokoh masyarakat, tokoh agama, tokoh pemuda, Kepala Dusun Cikandung, para pengusaha lokal Dusun Cikandung yang turut mendukung penuh acara, Ketua BPD Desa Jalatrang, hingga jajaran ketua RT dan RW se-Dusun Cikandung yang bahu-membahu menyukseskan acara.';

        $berita2_judul = 'Pemerintah Desa Jalatrang Kukuhkan Desa Siaga TB, Perkuat Kolaborasi Lintas Sektor Basmi Tuberkulosis';

        $berita2_konten = 'JalatrangNews; Pemerintah Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis, menunjukkan komitmen nyata dalam meningkatkan kesehatan masyarakat dengan menggelar Sosialisasi Pencegahan Penyakit Menular (TBC) sekaligus Pembentukan Desa Siaga Tuberkulosis (TB). Kegiatan strategis ini diselenggarakan pada Senin, 28 September 2026, di aula desa Jalatrang.

Acara yang dihadiri oleh puluhan pemangku kepentingan tingkat desa ini bertujuan untuk membangun kesadaran kolektif serta memperkuat jejaring deteksi dini penularan TBC langsung dari tingkat akar rumput.

Kepala Desa Jalatrang dalam sambutannya menekankan pentingnya peran aktif seluruh elemen masyarakat dalam memutus mata rantai penyebaran TBC. Pembentukan "Desa Siaga TB" diharapkan mampu menjadi garda terdepan dalam penemuan kasus baru secara cepat dan tepat sehingga penanganan medis dapat segera dilakukan.

Sinergi Lintas Sektor dan Kehadiran Narasumber Ahli

Untuk memberikan pemahaman mendalam secara komprehensif, Pemerintah Desa Jalatrang menghadirkan narasumber ahli dari tingkat kecamatan (Sekmat Cipaku) serta tenaga kesehatan profesional Tingkat Kabupaten Ciamis dari Puskesmas Cipaku. Materi yang disampaikan meliputi:

- Pengenalan gejala klinis dan metode penularan TBC.
- Langkah-langkah pencegahan serta pentingnya kepatuhan minum obat bagi pasien.
- Mekanisme kerja dan fungsi strategis pembentukan Desa Siaga TB.

Dihadiri Unsur Pimpinan dan Kelembagaan Desa

Kegiatan ini mendapat sambutan antusias dan dihadiri oleh jajaran lengkap Forum Koordinasi Pimpinan Desa serta lembaga kemasyarakatan, di antaranya: Bhabinkamtibmas, Babinsa, Ketua Badan Permusyawaratan Desa (BPD), Ketua KDMP, Pendamping Desa beserta PLD, Direktur Bank Sampah Jalatrang Berseka, Ketua TP PKK Desa Jalatrang, Bidan Desa, TPK Desa dan Seluruh pengurus Posyandu se-Desa Jalatrang.';

        
        Berita::updateOrCreate(
            [
                'slug' => Str::slug($berita1_judul)
            ],
            [
                'judul' => $berita1_judul,
                'kategori' => 'Olahraga',
                'tanggal' => '2026-09-26',
                'ringkasan' => 'JalatrangNews; Himpunan Pemuda-Pemudi Dusun Cikandung yang tergabung dalam Cikandung Voli Ball Club (CVC) resmi menyelenggarakan ajang olahraga bertajuk CVC Cup 2026...',
                'konten' => $berita1_konten,
                'gambar' => 'berita1.png',
                'tags' => ['cikandung', 'dusun', '2026', 'volleyball'],
                'views' => 315
            ]
        );

        Berita::updateOrCreate(
            [
                'slug' => Str::slug($berita2_judul)
            ],
            [
                'judul' => $berita2_judul,
                'kategori' => 'Pendidikan',
                'tanggal' => '2026-09-28',
                'ringkasan' => 'JalatrangNews; Pemerintah Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis, menunjukkan komitmen nyata dalam meningkatkan kesehatan masyarakat dengan menggelar Sosialisasi...',
                'konten' => $berita2_konten,
                'gambar' => 'berita2.png',
                'tags' => ['desa', 'jalatrang', 'siaga', 'tbc'],
                'views' => 140
            ]
        );
    }
}