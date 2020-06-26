<?php

require("header.php");

// VARIABLES
$nombres = 5;
$tableau = [];

// $compteur = 1;

// while ($compteur <= 10) {
//    $tableau = $compteur * $nombres;
//    $compteur++;
// }

// print_r($tableau);

// for ($element=0; $element < 10; $element++) { 
//    echo $tableau[$element];
//    echo $tableau[3];
//    echo "<br>";
// }

$element = 1;

echo "<pre>";
for ($element=0; $element < 100; $element++) {
   $tableau[] = rand(1, 999);
   print_r($tableau);
}

echo "</pre>";
