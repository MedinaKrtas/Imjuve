<?php

use App\Models\Permiso;
use Illuminate\Database\Eloquent\Model;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(),
        'slug' => $faker->word()
    ];
});
