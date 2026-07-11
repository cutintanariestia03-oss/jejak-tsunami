<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();
        $sejarah = Category::where('name', 'Sejarah')->first();
        $kisah = Category::where('name', 'Kisah & Kenangan')->first();
        $edukasi = Category::where('name', 'Edukasi & Kesiapsiagaan')->first();

        $articles = [
            [
                'title' => '26 Desember 2004: Pagi yang Mengubah Segalanya',
                'category_id' => $sejarah->id,
                'content' => 'Pada pagi hari tanggal 26 Desember 2004, gempa berkekuatan 9,1 skala Richter mengguncang dasar Samudra Hindia dan memicu gelombang tsunami yang menerjang pesisir Aceh. Peristiwa ini menjadi salah satu bencana alam terbesar dalam sejarah modern.',
            ],
            [
                'title' => 'Kronologi Lengkap Tsunami Aceh 2004',
                'category_id' => $sejarah->id,
                'content' => 'Rangkaian kejadian dimulai dari gempa bumi besar, diikuti gelombang tsunami setinggi puluhan meter yang menghantam kawasan pesisir dalam hitungan menit, hingga proses evakuasi dan pemulihan yang berlangsung bertahun-tahun setelahnya.',
            ],
            [
                'title' => 'Suara dari Penyintas: Kisah Nilawati',
                'category_id' => $kisah->id,
                'content' => 'Nilawati adalah salah satu penyintas tsunami yang kehilangan anaknya dalam bencana tersebut. Kini ia menjadi pemandu wisata edukasi, berbagi kisah dan hikmah kepada pengunjung yang datang.',
            ],
            [
                'title' => 'Museum Tsunami Aceh, Ruang Kenangan yang Tak Boleh Dilupakan',
                'category_id' => $kisah->id,
                'content' => 'Museum ini dirancang oleh Ridwan Kamil dengan konsep Rumoh Aceh, menjadi ruang refleksi sekaligus pengingat bagi generasi mendatang tentang kedahsyatan tsunami 2004.',
            ],
            [
                'title' => 'Panduan Mitigasi Bencana Tsunami untuk Keluarga',
                'category_id' => $edukasi->id,
                'content' => 'Memahami tanda-tanda alam sebelum tsunami, menyiapkan jalur evakuasi, dan mengenali titik kumpul darurat adalah langkah penting yang bisa menyelamatkan nyawa saat bencana terjadi.',
            ],
        ];

        foreach ($articles as $item) {
            Article::create([
                'user_id' => $user->id,
                'category_id' => $item['category_id'],
                'title' => $item['title'],
                'slug' => Str::slug($item['title']) . '-' . uniqid(),
                'content' => $item['content'],
                'thumbnail' => null,
                'status' => 'published',
            ]);
        }
    }
}