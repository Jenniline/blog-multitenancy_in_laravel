<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tenant;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        //
<<<<<<< Updated upstream
        'name' => $faker->name,
        'url' => $faker->url
=======
>>>>>>> Stashed changes
    ];
});
