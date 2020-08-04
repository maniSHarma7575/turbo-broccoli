<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversations;
use Faker\Generator as Faker;

$factory->define(Conversations::class, function (Faker $faker) {
    $user = App\User::orderByRaw('RAND()')->first();
    
    return [
        'user_id' => $user->id,
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});
