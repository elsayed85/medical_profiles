<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Links\Link;
use Faker\Generator as Faker;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'url' =>  $faker->url,
        'is_public' => $faker->boolean(),
        'user_id' => 1,
    ];
});
