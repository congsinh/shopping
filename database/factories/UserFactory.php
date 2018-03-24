<?php


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
$faker = Faker\Factory::create('vi_VN');

$factory->define(App\User::class, function () use ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('abc12345'), // secret
        'level'=> 0,
        'remember_token' => str_random(10),
        'created_at'=>$faker->dateTimeBetween('-5 month'),
    ];
});

