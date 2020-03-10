<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for($i = 0; $i < 2; $i++) {
            DB::table('home_content')->insert([
                'title' => $faker->sentence(5),
                'description' => $faker->paragraph,
                'link' => $faker->imageUrl(),
                'user_id' => 1,
                'created_at' => $faker->dateTime,
            ]);
        }
    }
}
