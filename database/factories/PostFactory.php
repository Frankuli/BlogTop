<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {//crear datos falsos
    return [//nombres de los campos en la base de datos
        'title' => $faker->sentence(random_int(1,5)),
        'message' => $faker->realText(random_int(50,150)),
        'created_at' => $faker->dateTimeThisYear(),
        'updated_at' => $faker->dateTimeThisYear()
    ];
});
