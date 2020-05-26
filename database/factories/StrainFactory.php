<?php

use App\Models\Strain;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Strain::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'code_tag' => $faker->word,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        'hidden' => $faker->numberBetween(0, 1),
        'active' => $faker->numberBetween(0, 1),
        'sync_status' => $faker->numberBetween(0, 2),
    ];
});
