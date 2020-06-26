<?php

require("outils.php");
require("header.php");

// VARIABLES
$tableau = ["orange", "poire", "banane", "pomme"];

echo $tableau[0];
echo "<br>";

$tableau[99] = "kiwi";
$tableau[] = "ananas";

echo $tableau[99];
echo "<br>";
echo var_dump($tableau);
echo "<br>";
print_r($tableau);