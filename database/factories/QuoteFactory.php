<?php

$factory->define(App\Models\Quote::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->sentence()        
    ];
});
