<?php

$x = 10;
if($x > 5) {
    echo "x is greater than 5\n";
}

$score = 75;
if($score > 80) {
    echo "B\n";
} elseif ($score >= 70) {
    echo "C\n";
} elseif ($score >= 60) {
    echo "D\n";
} else {
    echo "F\n";
}

$num = 15;

// Nested If Statement
if($num > 0) {
    if($num % 2 == 0) {
        echo "Positive even number\n";
    } else {
        echo "Positive odd number\n";
    }
} else {
    echo "Non-positive number\n";
}

$username = "admin";
$password = "password123";

if($username == "admin" && $password == "password123") {
    echo "Success";
} else {
    echo "Failure";
}