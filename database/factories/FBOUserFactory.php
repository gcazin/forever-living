<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'role_id' => 2,
        'fbo_number' => Str::random(10),
        'password' => bcrypt('secret'),
        'passcode' => Str::random(6),
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
    ];
});
