<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FBOUsersTableSeeder extends Seeder
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
            DB::table('users')->insert([
                'role_id' => 2,
                'fbo_number' => Str::random(10),
                'password' => bcrypt('secret'),
                'passcode' => Str::random(6),
                'last_name' => $faker->lastName,
                'first_name' => $faker->firstName,
                'tel' => $faker->phoneNumber,
                'email' => $faker->email,
                'postal_code' => $faker->postcode,
                'city' => $faker->city,
            ]);
        }
    }
}
