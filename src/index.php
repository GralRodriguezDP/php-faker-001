<?php

require('./vendor/autoload.php');

$faker = Faker\Factory::create('en_US');

echo $faker->name() . "\n";
echo $faker->email() . "\n";
echo $faker->text() . "\n";