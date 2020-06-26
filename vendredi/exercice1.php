<?php

require("header.php");

// VARIABLES
$tableau1 = [];
$tableau2 = [];
$tableau3 = [];


// TABLEAU 1
$compteur = 0;
while ($compteur < 300) {
   $rand = rand(1, 10);
   $tableau1[] = $rand;
   $compteur++;
}
foreach ($tableau1 as $caset1) {
   echo $caset1;
   echo "<br>";
}

//TABLEAU 2
$compteur = 0;
while ($compteur < 300) {
   $rand = rand(11, 20);
   $tableau2[] = $rand;
   $compteur++;
}
foreach ($tableau2 as $caset2) {
   echo $caset2;
   echo "<br>";
}

//TABLEAU 3 
$compteur = 0;
$element = 0;
while ($compteur < 300) {
   $tableau3[$element] = ($tableau1[$element] + $tableau2[$element]);
   $compteur++;
   $element++;
}
foreach ($tableau3 as $caset3) {
   echo $caset3;
   echo "<br>";
}