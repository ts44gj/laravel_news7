<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => '投稿のタイトル',
        'article' => "本文です。テストテキストテキストテキストテキ",
        'created_at' =>NULL,
        'updated_at' =>NULL,
    ];
});
