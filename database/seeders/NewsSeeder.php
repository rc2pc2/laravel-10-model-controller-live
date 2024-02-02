<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\News;
use Faker\Generator as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker ): void
    {
        for ($i=0; $i < 400; $i++) {
            $actualNews = new News();
            $actualNews->title = $faker->unique()->realText(50);
            $actualNews->publication_date = $faker->date();
            $actualNews->category = $faker->word();
            $actualNews->author = $faker->name();
            $actualNews->picture = $faker->imageUrl(400,300);
            $actualNews->save();
        }

    }
}
