<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 1 akun demo (kalau belum ada user sama sekali)
        if (User::count() === 0) {
            User::factory()->create([
                'name' => 'Cut Intan Ariestia',
                'email' => 'demo@jejaktsunami.test',
                'password' => bcrypt('password123'),
            ]);
        }

        $this->call([
            CategorySeeder::class,
            ArticleSeeder::class,
        ]);
    }
}