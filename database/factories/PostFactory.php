<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id'   =>  $faker->numberBetween(1, 4),
        'tag_id'        =>  $faker->numberBetween(1, 4),
        'user_id'       =>  $faker->numberBetween(1, 4),           
        'title'         =>  $post_title = $faker->sentence,
        'slug'          =>  Str::slug($post_title, '-'),
        // 'body'          =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'body'          =>  $faker->paragraph,
        'image'         =>  $faker->imageUrl(),
        'status'        =>  $faker->boolean,
    ];

});

