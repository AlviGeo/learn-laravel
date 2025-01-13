<?php 

$isStudent = 1;
var_dump($isStudent, true, $isStudent===true);

// The value is coerced to a string
// $scores = [85, "90", 95.5];

// The values is converted to float, php is trying to guess what is the best type that it should be using to calculate
// $scores = [85, "95.5"];

// Typecasting
$scores = [85, (int)"95.5"];
$total = $scores[0] + $scores[1];


var_dump($scores, $scores[0] + $scores[1]);

echo "Total score is: " . $total . "\n";