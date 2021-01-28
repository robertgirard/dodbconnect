<?php

use App\MaterialLocation;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$units = [
    'lbs',
    'KG',
    'Each'
];


$factory->define(App\MaterialLocation::class, function (Faker $faker) use($units) {
    return [
        
        'material_id' => $faker->numberBetween(1,100),
        'location_id' => $faker->numberBetween(1,2),         
        'GPItemNumber' => $faker->firstName,
        'units' => Arr::random($units),
        'unitCost' => abs( 1 - mt_rand() / mt_rand() ),
        'freightCost' => abs( 1 - mt_rand() / mt_rand() ),
        'totalCost' => abs( 1 - mt_rand() / mt_rand() )

    ];
});

