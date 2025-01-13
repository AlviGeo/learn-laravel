<?php

echo "Welcome to PHP\n";

$name = "Alvi";

echo "Hello, " . $name . "!\n";

$pizzas = 3;
$slicesPerPizza = 8;
$totalSlices = $pizzas * $slicesPerPizza;

echo "You have eaten " . $totalSlices . " slices of pizza.\n";

$isHungry = false;

echo "Hungry?";

echo $isHungry ? "Yes" : "No";
echo "\n";