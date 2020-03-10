<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(FBOUsersTableSeeder::class);
        //$this->call(CategoryFormationsTableSeeder::class);
        $this->call(FormationsTableSeeder::class);
        //$this->call(HomeContentTableSeeder::class);
    }
}
