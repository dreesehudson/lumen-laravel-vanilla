<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $this->faker->words($nb = 3, $asText = false),
        'isbn' => $this->faker->isbn13,        
        'pages' => $this->faker->numberBetween($min = 50, $max = 405), // 8567
        'released' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'value' => $this->faker->numberBetween($min = 1, $max = 25), // 8567
        'cost' => $this->faker->numberBetween($min = 1, $max = 25), // 8567
        'edition' => $this->faker->numberBetween($min = 1, $max = 10) // 8567
        //author -> gets called from other table
        //genre -> gets called from other table
    ];
});
