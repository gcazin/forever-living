<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for($i = 0; $i < 10; $i++) {
            DB::table('formations')->insert([
               'title' => $faker->sentence(3),
               'description' => $faker->paragraph,
               'link' => $faker->word.'.pdf',
               'user_id' => 1,
               'category_id' => 1,
               'created_at' => $faker->dateTime,
            ]);
        }
    }
}
