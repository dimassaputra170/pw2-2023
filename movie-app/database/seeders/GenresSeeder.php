<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'Action-packed movies',
        ]);

        Genre::create([
            'nama' => 'Comedy',
            'deskripsi' => 'Lucu',
        ]);

        Genre::create([
            'nama' => 'Romance',
            'deskripsi' => 'Romantis',
        ]);
        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'Seram',
        ]);
        Genre::create([
            'nama' => 'Thriller',
            'deskripsi' => 'Seru',
        ]);
    }
}
