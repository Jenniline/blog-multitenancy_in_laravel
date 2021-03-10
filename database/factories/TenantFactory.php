<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tenant;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        //
        'site_name' => $faker->site_name,
        'subdomain' => $faker->subdomain,
    ];
});
