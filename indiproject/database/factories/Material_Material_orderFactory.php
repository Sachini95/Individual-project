<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Material_Material_order;
use Faker\Generator as Faker;

$factory->define(Material_Material_order::class, function (Faker $faker) {

    return [
        'order_id' => $faker->word,
        'material_id' => $faker->word,
        'supply_date' => $faker->date('Y-m-d H:i:s'),
        'supply_notes' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
