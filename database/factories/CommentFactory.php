<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'title'=> $faker-> jobTitle,
        'isi'=> $faker -> sentence,
        'angka' => $faker -> randomNumber
    ];
});
