<?php

use Faker\Generator as Faker;

use \Carbon\Carbon;
$factory->define(App\Booking::class, function (Faker $faker) {
    return [
        
        // general data
        'agent_id' => 1,
        'first_name' => $faker->name,
        'second_name' => $faker->name,
        'third_name' => $faker->name,
        'fourth_name' => $faker->name,
        'ssn' => $faker->name,
        'phone' => $faker->name,
        'email' => $faker->name,
        
        // booking data
        // "", '', '', "",
        'date' => Carbon::now(),
        'from' => Carbon::createFromTimeString('17:00:00'),
        'to' => Carbon::createFromTimeString('17:00:00'),
        'period' => "morning",
        

        // payment data
        // 'payment_type' => $faker->name,
        // 'bank_id' => $faker->name,
        // 'total' => $faker->name,
    ];
});
