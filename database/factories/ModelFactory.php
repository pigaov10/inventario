<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Categories::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->words(3)
    ];
});

$factory->define(App\Products::class, function (Faker\Generator $faker) {
  //  $categories = new App\Categories();
  //  $a_categories = $categories->pluck('id')->toArray();
  //  dd(max($a_categories));
    return [
        'name' => $faker->words(10,true),
        'sku' => '8KUH283',
        'value' => $faker->randomFloat(),
        'depreciation' => $faker->randomFloat(),
        'maintenance' => $faker->randomFloat(),
        'categories_id' => rand(1007,1011)
    ];
});
