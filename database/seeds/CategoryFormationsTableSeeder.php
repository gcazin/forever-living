<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFormationsTableSeeder extends Seeder
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
            DB::table('category_formations')->insert([
                'title' => 'Produits',
                'description' => $faker->paragraph,
                'created_at' => $faker->dateTime,
            ]);
        }
    }
}
