<?php

require("header.php");
require("outils.php");

// VARIABLES
$r0 = rand(0,3);
$population = 67000000;
$jour = 1;
$nombreDeContamines = 1;

?>


<?php

while ($nombreDeContamines <= $population) {
   echo $nombreDeContamines;
   echo "<br>";
   $nombreDeContamines = ($nombreDeContamines * $r0) + $nombreDeContamines;
   $jour++;
   $r0 = rand(0,3);
}


echo "<h1 class='content is-large'>" . $jour . " jours</h1>";


?>