<?php

$basket = [
    "Apple" => 3,
    "Banana" => 4,
    "Orange" => 5
];

$total = 0;

foreach($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $total +=$quantity;
}