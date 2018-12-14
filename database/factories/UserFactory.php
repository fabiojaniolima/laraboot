<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'dt_birth' => $faker->date('Y-m-d', '-5 years'),
        'gender' => $faker->randomElement(['F', 'M', 'Não declarado']),
        'locked' => $faker->randomElement([0, 1]),
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeBetween('-10 years', 'now'),
    ];
});
