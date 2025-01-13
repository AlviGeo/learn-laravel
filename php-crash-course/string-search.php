<?php

$haystack = "The quick brown fox";
$pos = strpos($haystack, "quick");
var_dump($pos);

var_dump(str_replace("quick", "lazy", $haystack));

// The $matches itself is not a reserved or fixed name—it’s just a variable name.
// So we can define it any name we want.
preg_match_all('/\w{5}/', $haystack, $matches);
var_dump($matches);