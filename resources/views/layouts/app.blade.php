<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Desa — Jalatrang</title>
    
    <link rel="icon" type="image/png" href="{{ asset('jalatrang.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'PT Serif', serif; }
        .bg-custom-navy { background-color: #0b132b; }
        .bg-custom-hero { background: linear-gradient(180deg, #0b132b 0%, #152238 100%); }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Topbar dengan Running Text -->
    <!-- Topbar dengan Running Text Cepat & Pause Saat Hover -->
<div class="bg-custom-navy text-sm text-gray-300 py-2.5 px-4 md:px-8 flex items-center border-b border-gray-800 overflow-hidden">
    <div class="flex items-center z-10 bg-custom-navy pr-3">
        <span class="bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold px-3 py-1 rounded-full text-xs shadow flex items-center gap-1.5 whitespace-nowrap">
            <i class="fa-solid fa-bullhorn text-xs"></i> INFO TERKINI
        </span>
    </div>
    <div class="flex-grow overflow-hidden">
        <marquee direction="left" scrollamount=20" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" class="text-xs md:text-sm pt-1 cursor-pointer">
            <span class="mr-12"><i class="fa-regular fa-clock text-yellow-500 mr-2"></i>Sekarang Anda dapat belanja langsung di Warung Desa yang merupakan Warung Online Masyarakat Desa Jalatrang.</span>
            <span class="mr-12"><i class="fa-regular fa-clock text-yellow-500 mr-2"></i>Kini Hadir Perpustakaan Desa Selaras dengan wajah baru dan manajemen yang lebih terorganisir.</span>
        </marquee>
    </div>
    <div class="hidden md:flex items-center text-xs text-gray-300 whitespace-nowrap pl-4 bg-custom-navy z-10">
        <i class="fa-regular fa-calendar mr-1.5 text-yellow-500"></i> Sabtu, 3 Oktober 2026
    </div>
</div>

    <!-- Header Navbar -->
    <header class="bg-custom-navy text-white px-4 md:px-8 py-4 flex flex-wrap justify-between items-center border-b border-gray-800">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('jalatrang.png') }}" alt="Logo Jalatrang" class="w-10 h-12 object-contain">
            <div>
                <h1 class="font-bold text-base md:text-lg leading-tight tracking-wide">PEMERINTAH DESA JALATRANG</h1>
                <p class="text-xs text-gray-400">KECAMATAN CIPAKU KABUPATEN CIAMIS</p>
            </div>
        </div>

        <nav class="flex items-center space-x-2 md:space-x-3 text-sm font-semibold mt-3 md:mt-0 flex-wrap">
            <a href="#" class="p-2 text-gray-300 hover:text-white"><i class="fa-solid fa-house"></i></a>
            <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-white">Profil</a>
            <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-white">Kependudukan</a>
            <a href="{{ route('berita.index') }}" class="px-3.5 py-1.5 bg-amber-600 text-white rounded">Berita</a>
            <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-white">Potensi Wisata</a>
            <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-white">IDM & SDGs</a>
            <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-white">Ketahanan Pangan</a>
            <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-white">Keuangan</a>
            <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-white">Download</a>
            <button class="px-2.5 py-1 bg-amber-500 text-black rounded"><i class="fa-solid fa-grip-vertical"></i></button>
        </nav>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-custom-navy text-white text-sm pt-12 pb-8 px-6 md:px-12 border-t border-gray-800 mt-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <img src="{{ asset('jalatrang.png') }}" alt="Logo Jalatrang" class="w-9 h-11 object-contain">
                    <div>
                        <h2 class="font-bold text-base">PEMERINTAH DESA</h2>
                        <h3 class="font-bold text-yellow-500 text-base">JALATRANG</h3>
                    </div>
                </div>
                <p class="text-gray-300 mb-1 leading-relaxed">Jalan Raya Cipaku Nomor 181</p>
                <p class="text-gray-300 mb-1 leading-relaxed">Desa Jalatrang, Kecamatan Cipaku</p>
                <p class="text-gray-300 mb-3 leading-relaxed">Kabupaten Ciamis</p>
                <p class="text-gray-300 mb-1"><i class="fa-solid fa-phone mr-2"></i> 08</p>
                <p class="text-gray-300 mb-4"><i class="fa-solid fa-envelope mr-2"></i> pemerintahdesajalatrang@gmail.com</p>
                <a href="#" class="inline-block border border-gray-600 text-gray-200 px-4 py-2 rounded hover:bg-gray-800 text-xs font-semibold"><i class="fa-solid fa-location-dot mr-1.5"></i> Lihat Peta</a>
            </div>

            <div>
                <h4 class="font-bold text-yellow-500 mb-4 tracking-wider text-base">MENU</h4>
                <ul class="space-y-2.5 text-gray-300">
                    <li><a href="#" class="hover:underline">&rsaquo; Beranda</a></li>
                    <li><a href="#" class="hover:underline">&rsaquo; Berita</a></li>
                    <li><a href="#" class="hover:underline">&rsaquo; Struktural</a></li>
                    <li><a href="#" class="hover:underline">&rsaquo; APBDes</a></li>
                    <li><a href="#" class="hover:underline">&rsaquo; Prestasi</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-yellow-500 mb-4 tracking-wider text-base">LINK TERKAIT</h4>
                <ul class="space-y-2.5 text-gray-300">
                    <li><a href="#" class="hover:underline"><i class="fa-solid fa-arrow-up-right-from-square text-xs mr-1.5"></i> Kemendesa</a></li>
                    <li><a href="#" class="hover:underline"><i class="fa-solid fa-arrow-up-right-from-square text-xs mr-1.5"></i> Kab. Ciamis</a></li>
                    <li><a href="#" class="hover:underline"><i class="fa-solid fa-arrow-up-right-from-square text-xs mr-1.5"></i> Pemprov Jabar</a></li>
                    <li><a href="#" class="hover:underline"><i class="fa-solid fa-shield-halved text-xs mr-1.5"></i> Panel Admin</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-yellow-500 mb-4 tracking-wider text-base">MEDIA SOSIAL</h4>
                <ul class="space-y-2.5 text-gray-300">
                    <li><a href="#" class="flex items-center space-x-2"><i class="fa-brands fa-x-twitter"></i> <span>twitter/x</span></a></li>
                    <li><a href="#" class="flex items-center space-x-2"><i class="fa-brands fa-facebook text-blue-500"></i> <span>facebook</span></a></li>
                    <li><a href="#" class="flex items-center space-x-2"><i class="fa-brands fa-youtube text-red-500"></i> <span>youtube</span></a></li>
                    <li><a href="#" class="flex items-center space-x-2"><i class="fa-brands fa-instagram text-pink-500"></i> <span>instagram</span></a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-5 text-center text-gray-400 text-sm">
            <span>&copy; 2026 Pemerintah Desa Jalatrang — Semua hak dilindungi</span>
        </div>
    </footer>

</body>
</html>