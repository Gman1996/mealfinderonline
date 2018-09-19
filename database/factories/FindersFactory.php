<?php

use Faker\Generator as Faker;


$factory->define(App\Finder::class, function (Faker $faker) {
    return [
        'uuid' => $faker->text(10),
        'orderId' => $faker->text(10),
        'recentlySearched' => $faker->text(20),
        'orders' => $faker->text(40),
        'bookmarks' => $faker->text(20),
        'remember_token' => str_random(10),
    ];
});
