<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Sejarah - Jejak Tsunami</title>
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
            <a href="{{ route('sejarah') }}" class="text-slate-900 font-medium border-b-2 border-sky-600 pb-1">Sejarah</a>
            <a href="{{ route('kisah') }}" class="hover:text-slate-900">Kisah & Kenangan</a>
            <a href="{{ route('edukasi') }}" class="hover:text-slate-900">Edukasi</a>
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

    <div class="relative text-white px-8 py-24 bg-cover bg-center" style="background-image: linear-gradient(to right, rgba(15,23,42,0.85), rgba(15,23,42,0.4)), url('{{ asset('images/kronologi-tsunami.jpg') }}');">
        <div class="max-w-3xl">
            <h1 class="text-3xl font-semibold mb-2">Sejarah Tsunami Aceh</h1>
            <p class="text-slate-200">Mengenang kembali peristiwa 26 Desember 2004 dan dampaknya bagi Aceh.</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-8 py-16">

        <h1 class="text-2xl font-semibold mb-4">Sejarah Museum Tsunami Aceh</h1>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Indonesia pernah mengalami sebuah bencana dahsyat berupa gempa tsunami yang mengguncang Aceh pada
            tanggal 26 Desember 2004. Sebagai bentuk mengenang para korban dari musibah gempa dan tsunami
            tersebut, maka dibuat Museum Tsunami Aceh.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Pada tanggal 26 Desember 2004 silam, sekira pukul 07.58 WIB, terjadi sebuah gempa dahsyat yang
            melanda Aceh. Gempa berkekuatan 9,1–9,3 skala richter (SR) ini berpusat di Samudra Hindia, sekitar
            250 km dari pantai barat Aceh, dan menyebabkan serangkaian tsunami dahsyat setinggi 30 meter di
            sepanjang daratan yang berbatasan langsung dengan Samudra Hindia. Aceh merupakan daerah yang terkena
            dampak paling parah, selain Sri Lanka, Thailand, dan India.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Tsunami tersebut adalah bagian dari rangkaian bencana alam yang disebut sebagai megathrust, yang
            terjadi ketika lempeng tektonik Indo-Australia bertabrakan dengan lempeng Eurasia. Fenomena
            megathrust di wilayah ini sudah lama diprediksi oleh para ahli, namun intensitas dan skala bencana
            ini tetap mengejutkan banyak pihak.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Banyak korban jiwa dalam bencana ini, bahkan sampai menyentuh pada angka 170.000 jiwa. Selain dari
            kerusakan fisik yang masif, dampak psikologis dari tsunami ini juga dirasakan oleh penduduk Aceh.
            Banyak yang kehilangan anggota keluarga dan harta benda, sementara trauma dari bencana tersebut
            bertahan lama. Pemahaman tentang bencana seperti ini kemudian memicu perbaikan dalam sistem mitigasi
            bencana, baik di Indonesia maupun di tingkat global.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Penanganan darurat terhadap tsunami Aceh tidak hanya melibatkan pemerintah Indonesia, tetapi juga
            komunitas internasional. Bantuan kemanusiaan mengalir dari berbagai negara dan lembaga internasional,
            yang berusaha memulihkan Aceh dari kehancuran. Hal ini menjadi momentum penting untuk memulai proses
            rekonstruksi dan rehabilitasi Aceh, baik secara fisik maupun sosial.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Oleh karena itu, Museum Tsunami Aceh dibuat untuk mengenang korban dari tsunami Aceh tersebut,
            sekaligus tempat edukasi dan pusat evakuasi ketika bencana. Museum ini berdiri pada tanggal 23
            Februari 2009. Perancang Museum ini adalah Ridwan Kamil yang saat ini menjabat sebagai Gubernur
            Jawa Barat. Beliau membuat desain yang memenangkan sayembara tingkat internasional pada tahun 2007
            dalam rangka memperingati peristiwa tsunami tahun 2004.
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