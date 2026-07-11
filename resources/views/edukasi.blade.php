<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Edukasi - Jejak Tsunami</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50">

    <nav class="bg-white border-b px-8 py-4 flex items-center">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-9 h-9 object-contain">
            <div>
                <p class="font-bold text-xl tracking-wide text-sky-700">Jejak Tsunami</p>
                <p class="text-xs text-slate-500">Museum Tsunami Aceh</p>
            </div>
        </div>

        <div class="hidden md:flex flex-1 justify-end items-center gap-8 text-sm text-slate-600 mr-12">
            <a href="{{ route('home') }}" class="hover:text-slate-900">Beranda</a>
            <a href="{{ route('sejarah') }}" class="hover:text-slate-900">Sejarah</a>
            <a href="{{ route('kisah') }}" class="hover:text-slate-900">Kisah & Kenangan</a>
            <a href="{{ route('edukasi') }}" class="text-slate-900 font-medium border-b-2 border-sky-600 pb-1">Edukasi</a>
            <a href="{{ route('galeri') }}" class="hover:text-slate-900">Galeri</a>
            <a href="{{ route('tentang') }}" class="hover:text-slate-900">Tentang Kami</a>
        </div>

        <div class="flex items-center gap-4 ml-auto">
            @auth
                <a href="{{ route('articles.index') }}" class="text-sm font-medium">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-medium mr-6">Masuk</a>
                <a href="{{ route('register') }}" class="text-sm bg-slate-900 text-white px-4 py-2 rounded-md">Daftar</a>
            @endauth
        </div>
    </nav>

    <div class="relative text-white px-8 py-24 bg-cover bg-center" style="background-image: linear-gradient(to right, rgba(15,23,42,0.85), rgba(15,23,42,0.4)), url('{{ asset('images/belajar-untuk-masa-depan.jpg') }}');">
        <div class="max-w-3xl">
            <h1 class="text-3xl font-semibold mb-2">Edukasi & Kesiapsiagaan</h1>
            <p class="text-slate-200">Belajar mitigasi bencana lewat pengalaman Museum Tsunami Aceh.</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-8 py-16">

        <h1 class="text-2xl font-semibold mb-4">Edukasi Tsunami Melalui Museum Tsunami Aceh</h1>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Bencana 26 Desember 2004 menjadi salah satu peristiwa terbesar dalam sejarah Indonesia, dengan
            gelombang setinggi lebih dari 30 meter yang merenggut lebih dari 200.000 jiwa. Untuk mengenang
            peristiwa itu sekaligus menanamkan kesadaran akan pentingnya kesiapsiagaan, Museum Tsunami Aceh
            didirikan di Banda Aceh atas inisiatif sejumlah lembaga, termasuk Pemerintah Provinsi Aceh dan
            Badan Rehabilitasi dan Rekonstruksi Aceh-Nias.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Bangunan museum dirancang oleh M. Ridwan Kamil, yang kini menjabat sebagai Gubernur Jawa Barat.
            Konsep desainnya terinspirasi dari Rumoh Aceh, rumah panggung tradisional masyarakat setempat, dan
            berhasil memenangkan sayembara desain museum pada tahun 2007. Lantai dasar museum sengaja dibuat
            terbuka sebagai ruang evakuasi darurat apabila bencana serupa terjadi kembali di masa depan, sementara
            pola fasad bangunannya terinspirasi dari gerakan Tari Saman.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Pengalaman mengunjungi museum ini dirancang begitu mendalam secara emosional. Pengunjung diajak
            melewati lorong sempit dan gelap, diiringi suara gemuruh air yang bercampur lantunan zikir —
            menghadirkan kembali suasana mencekam saat tsunami melanda. Selepas lorong itu, pengunjung akan
            tiba di sebuah ruang berbentuk sumur, dengan dinding yang dipenuhi nama para korban dan cahaya yang
            menyorot ke tulisan "Allah" di puncaknya, sebagai ruang perenungan atas musibah besar tersebut.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Museum ini menyimpan ribuan koleksi, mulai dari benda etnografi, arkeologi, hingga dokumentasi
            visual — total lebih dari 6.000 item yang dirotasi setiap enam bulan sekali agar pengunjung selalu
            menemukan hal baru. Selain koleksi benda, museum juga menyajikan video edukasi tentang langkah
            mitigasi yang tepat saat menghadapi tsunami, serta ruang pameran yang menjelaskan bagaimana
            perilaku hewan tertentu dapat menjadi tanda alami datangnya bencana.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Museum ini terbuka untuk umum setiap hari kecuali Jumat, mulai pukul 09.00 hingga 16.00 WIB, dengan
            harga tiket yang terjangkau bagi seluruh kalangan pengunjung.
        </p>

        <p class="text-xs text-gray-400 mt-8 italic">
            Konten ini disadur dan ditulis ulang dari artikel publik tentang Museum Tsunami Aceh (2023).
        </p>

        <a href="{{ route('home') }}" class="inline-block text-sm text-sky-600 hover:underline mt-4">&larr; Kembali ke beranda</a>
    </div>

    <footer class="border-t px-8 py-8">
        <p class="text-xs text-gray-600 text-center max-w-6xl mx-auto">
            &copy; {{ date('Y') }} Museum Tsunami Aceh. Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>