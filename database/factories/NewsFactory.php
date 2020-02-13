<?php

/*
|--------------------------------------------------------------------------
| News Factories
|--------------------------------------------------------------------------
*/

$factory->defineAs(App\News::class, 'news', function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'text' => $faker->text,
        'img' => 'news.jpg'
    ];
});
