<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Artwork;

class ArtworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artworks')->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
        Artwork::create([
            'artist_name' => $faker->name, // Sử dụng name thay cho artist_name nếu bạn muốn tạo tên ngẫu nhiên
            'description' => $faker->text,
            'art_type' => $faker->randomElement(['hội họa', 'âm nhạc', 'văn học']),
            'media_link' => $faker->url,
            'cover_image' => $faker->imageUrl(),
        ]);
        }
    }
}