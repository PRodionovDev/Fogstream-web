<?php

/*
|--------------------------------------------------------------------------
| User Factories
|--------------------------------------------------------------------------
*/

$factory->defineAs(App\User::class, 'user', function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->firstname,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\Profile::class, 'user', function (Faker\Generator $faker) {
    return [
        'surname' => $faker->lastName,
        'name' => $faker->firstName,
        'middlename' => $faker->lastName,
        'birthday' => $faker->date,
        'photo' => 'user.png'
    ];
});
