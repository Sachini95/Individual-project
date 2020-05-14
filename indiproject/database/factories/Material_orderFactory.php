<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Material_order;
use Faker\Generator as Faker;

$factory->define(Material_order::class, function (Faker $faker) {

    return [
        'order_id' => $faker->word,
        'order_date' => $faker->date('Y-m-d H:i:s'),
        'project_id' => $faker->word,
        'project' => $faker->word,
        'project_supervisor' => $faker->word,
        'items' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
