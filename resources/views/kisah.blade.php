<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kisah & Kenangan - Jejak Tsunami</title>
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
            <a href="{{ route('kisah') }}" class="text-slate-900 font-medium border-b-2 border-sky-600 pb-1">Kisah & Kenangan</a>
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

    <div class="relative text-white px-8 py-24 bg-cover bg-center" style="background-image: linear-gradient(to right, rgba(15,23,42,0.85), rgba(15,23,42,0.4)), url('{{ asset('images/kisah.jpg') }}');">
        <div class="max-w-3xl">
            <h1 class="text-3xl font-semibold mb-2">Kisah & Kenangan</h1>
            <p class="text-slate-200">Dua puluh tahun setelah tsunami, suara para penyintas menjadi pengingat tentang ketangguhan dan harapan.</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-8 py-16">

        <h1 class="text-2xl font-semibold mb-4">20 Tahun Tsunami Aceh: Memori, Hikmah, dan Ketangguhan</h1>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Tsunami 26 Desember 2004 meninggalkan luka mendalam bagi masyarakat Aceh. Namun di balik duka itu,
            tersimpan pula hikmah besar: berakhirnya konflik panjang yang sebelumnya mencekam Tanah Rencong,
            serta terbukanya mata dunia akan pentingnya solidaritas kemanusiaan lintas batas.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Pantai Lampuuk di Aceh Besar adalah salah satu saksi bisu kedahsyatan bencana itu. Separuh
            penduduknya tak selamat, dan hunian di sekitarnya rata dengan tanah. Butuh waktu lama sebelum warga
            berani kembali, hingga akhirnya proses pemulihan membuahkan hasil — kini pantai itu ramai
            dikunjungi wisatawan dan menjadi simbol kebangkitan masyarakat Aceh.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Di Desa Lampulo, sebuah kapal nelayan yang terdampar di atas rumah warga akibat terjangan gelombang
            sengaja dibiarkan berdiri hingga kini. Kapal ini pernah menjadi tempat berlindung puluhan orang di
            tengah kekacauan, dan kini dijadikan objek wisata edukasi sekaligus pengingat akan kekuatan bertahan
            hidup warga setempat.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Nilawati, salah satu penyintas yang kini menjadi pemandu di lokasi kapal tersebut, kehilangan
            anaknya yang saat itu berusia 13 tahun. Baginya, meski dua dekade telah berlalu, ingatan tentang
            hari itu terasa begitu dekat — seolah baru terjadi kemarin. Ia memilih untuk terus melangkah maju,
            meyakini bahwa di balik kehilangan besar itu, ada banyak pelajaran hidup yang ia syukuri.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Salah satu hikmah terbesar yang dirasakannya adalah datangnya kedamaian di Aceh, setelah puluhan
            tahun wilayah ini diliputi konflik bersenjata yang membuat warga hidup dalam kecemasan sehari-hari.
            Pascabencana, suasana itu perlahan mereda hingga akhirnya tercapai kesepakatan damai.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Pandangan senada disampaikan oleh Penjabat Gubernur Aceh, Safrizal, yang menyebut bencana ini
            sebagai titik balik yang membuka jalan menuju Perjanjian Damai Helsinki pada Agustus 2005 — sebuah
            capaian yang mengakhiri konflik berkepanjangan di tanah Aceh.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Dua dekade berselang, luka itu mungkin belum sepenuhnya pulih di hati sebagian warga. Namun rasa
            syukur tetap tumbuh berdampingan dengan duka — atas kehidupan yang masih diberikan, dan atas
            uluran tangan dari puluhan negara serta ratusan lembaga kemanusiaan yang datang membantu Aceh
            bangkit kembali.
        </p>

        <p class="text-xs text-gray-400 mt-8 italic">
            Kisah ini disadur dan ditulis ulang dari liputan publik mengenai peringatan 20 tahun tsunami Aceh.
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