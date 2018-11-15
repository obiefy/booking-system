<?php

use Faker\Generator as Faker;

$factory->define(App\Meal::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'content' => $faker->text,
        'type' => "cocktail",
        'price' => 100,
        'agent_id' => 1,
    ];
});
