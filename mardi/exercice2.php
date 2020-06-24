<?php

// MES VARIABLES
$a = 6;
$b = 6;

if ($a > $b) {
   echo "a est supérieur à b";
} elseif ($a < $b) {
   echo "a est inférieur à b";
} else {
   echo "a est égal à b";
}

echo "<br>";

if ($a >= $b) {
   echo "a est supérieur ou égal à b";
}
else {
   echo "a est inférieur à b";
}

?>