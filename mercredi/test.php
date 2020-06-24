<?php 


function maFonction() {

   echo "<br>";
   echo "<h1>Bienvenue</h1>";
   $a=5;
   $b=6;
   if ($a > $b) {
      echo "<br>A est plus grand que B";
   }
   if ($a < $b) {
      echo "<br>A est plus petit que B";
   }
}

function somme($a, $b) {
   echo "<br>la somme est : " . ($a + $b);
}


maFonction();

somme(4,5);
?>


