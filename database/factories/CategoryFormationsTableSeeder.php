<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\CategoryFormation::class, function (Faker $faker) {
    return [
        'title' => 'Title',
        'description' => 'Description'
    ];
});
