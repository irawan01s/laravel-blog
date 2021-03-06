<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'     => $faker->sentence(),
        'slug'      => Str::slug($faker->sentence()),
        'content'   => $faker->paragraph(5),
        'status'    => 'draft',
        'author'    => 'admin',
        'thumbnail' => 'https://source.unsplash.com/collection/1390381',
    ];
});
