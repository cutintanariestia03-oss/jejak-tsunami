<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $categories = [
            'Sejarah',
            'Kisah & Kenangan',
            'Edukasi & Kesiapsiagaan',
        ];

        foreach ($categories as $name) {
            Category::create([
                'user_id' => $user->id,
                'name' => $name,
                'slug' => Str::slug($name) . '-' . uniqid(),
                'description' => 'Kategori seputar ' . strtolower($name) . ' tsunami Aceh.',
            ]);
        }
    }
}