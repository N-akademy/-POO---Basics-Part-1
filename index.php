<?php

require 'Bicycle.php';
$bike = new Bicycle();
var_dump($bike).PHP_EOL;

$bike->setColor('blue');
$bike->currentSpeed = 0;
var_dump($bike).PHP_EOL; // then, another dump.

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider

$rockrider = new Bicycle();
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor('black');
$tornado->forward();

var_dump($bike);
$bike->dump();

//Objet voiture

$mini = new Car('blue',2,'gazoil');
$familyCar = new Car('marron glacé', 8,'électrique');

$mini ->forward();
$familyCar->brake();

echo '<br> Vitesse du vélo : ' . $mini->currentSpeed() . ' km/h' . '<br>';
echo '<br> Vitesse du vélo : ' . $familyCar->currentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


