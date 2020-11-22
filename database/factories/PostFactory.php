<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

// protected $model = Post::class

$factory->define(Post::class, function (Faker $faker) {
    return [
         'body'=> $this->faker->sentence(20),
    ];
});

 