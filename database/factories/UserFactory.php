<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\electronics::class,function(Faker\Generator $faker){
        $machine_type = array(
          'Projector',
            'Laptop',
            'Phone',
            'Desktop',
            'Television'
        );
        $model = array(
          'HP',
            'Lenovo',
            'Yamaha',
            'Dell',
            'Samsung',
            'Nokia',
        );
        $voltage = $faker->randomElement($array = array('125','136','145','175','475','252')).$faker->randomElement($array = array(
            'KW','W','V' ,'KJ',
            ));

        $fault = array(
          'Battery',
          'HardDrive',
          'Lenses',
          'RAM'
        );
        $serial = str_random(12);
        $status =$faker ->randomElement($array = array('Approved','Pending'));

        return [
            'machine_type' => $faker->randomElement($machine_type),
            'model' => $faker->randomElement($model),
            'serial' => $serial,
            'voltage' => $voltage,
            'fault' =>$faker->randomElement($fault),
            'status' => ucfirst($faker->randomElement($status))
        ];
});


