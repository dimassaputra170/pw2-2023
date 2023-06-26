<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Shawshank Redemption',
            'user' => 'John Doe',
            'rating' => '9.5',
            'review' => 'This movie is a masterpiece. The acting, the storyline, and the ending are all fantastic',
            'tanggal' => '2022-03-12',
        ]); 
        Review::create([
            'film' => 'Parasite',
            'user' => 'Mark Johnson',
            'rating' => '9.0',
            'review' => 'This movie is a gripping social commentary that is both humorous and thought provoking. Highly recommended',
            'tanggal' => '2022-05-01',
        ]); 
        Review::create([
            'film' => 'Inception',
            'user' => 'Jane Smith',
            'rating' => '8.5',
            'review' => 'The concept of this movie is mind bending and the special effects are incredible. However are felt the plot was a bit convoluted at times',
            'tanggal' => '2022-04-23',
        ]); 
        Review::create([
            'film' => 'Insaide Out',
            'user' => 'Jonas Rivera',
            'rating' => '8.8',
            'review' => 'Film ini menceritakan tentang kehidupan seorang anak perempuan bernama Riley dan emosi dalam dirinya yang diwujudkan sebagai karakter-karakter seperti Joy (Kegembiraan), Sadness (Kesedihan), Anger (Kemarahan), Fear (Rasa Takut), dan Disgust (Rasa Jijik).',
            'tanggal' => '2015-02-02',
        ]);  
        Review::create([
            'film' => 'UP',
            'user' => 'Jonas River',
            'rating' => '8.5',
            'review' => 'Film ini menceritakan petualangan seorang pria tua bernama Carl Fredricksen yang pergi ke Amerika Selatan dengan menggunakan balon udara, bersama dengan seorang paduan suara muda bernama Russell.',
            'tanggal' => '2009-12-19',
        ]); 
    }
}
