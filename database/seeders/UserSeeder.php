<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 20; $i++) {
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->freeEmail();
            $newUser->password = $faker->password;
            $newUser->save();
        }
    }
}
